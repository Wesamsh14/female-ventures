<?php

class User extends CI_Model {

  public function get_user_by_email($email) {
    return $this->db->query("SELECT users.id, first_name, last_name, email, city, password, user_type, phone, birthdate, bio, education, company, industry, role, recruitment, picture
          FROM users WHERE email = ?", $email)->row_array();
  }

  public function get_user_by_id($id) {
    return $this->db->query("SELECT users.id, first_name, last_name, email, city, password, user_type, phone, birthdate, bio, education, company, industry, role, recruitment, picture
          FROM users WHERE users.id = ?", $id)->row_array();
  }

  public function register($data) {

    $this->form_validation->set_data($data);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

    if ($this->form_validation->run()) {
      $query = 'INSERT INTO users (email, password) VALUES (?, ?)';
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      $values = array($data['email'], $data['password']);
      $this->db->query($query, $values);
      $this->session->set_flashdata('registration_status', 'You have registered successfully!');
    } else {
      $this->session->set_flashdata('registration_error', validation_errors());
    }
  }

  public function update_profile($values) {
    $query = "UPDATE users SET first_name = ?, last_name = ?, email = ?, phone = ?, birthdate = ?, bio = ?, education = ?, company = ?, industry = ?, role = ?, recruitment = ?, picture = ?, updated_at = NOW() WHERE id = ?";
    $this->db->query($query, $values);
  }

  public function search_friends($keyword) {

    $keywords = explode(' ', strtolower($keyword));

    $this->db->select('*');
    $this->db->from('users');
    if ($keyword != '' and ! in_array('and', $keywords)) {
      $this->db->where_in('first_name', $keywords);
      $this->db->or_where_in('last_name', $keywords);
      $this->db->or_where_in('city', $keywords);
      $this->db->or_where_in('education', $keywords);
      $this->db->or_where_in('company', $keywords);
      $this->db->or_where_in('industry', $keywords);
      $this->db->or_where_in('role', $keywords);
      $this->db->or_where_in('recruitment', $keywords);

    } else if (in_array("and", $keywords)) {
      $key_list = '';
      foreach($keywords as $keyword) {
        if ($keyword != 'and') {
          $key_list .= "+{$keyword} ";
        }
      }
      $query = "SELECT *
                FROM users
                WHERE MATCH (first_name, last_name, city, education, industry, company, role, recruitment)
                AGAINST ('{$key_list}' IN BOOLEAN MODE)";
      return $this->db->query($query)->result_array();
    }
    return $this->db->get()->result_array();
  }

  public function get_friends_by_user_id($id) {
    // $query = 'SELECT friends.id, u1.id as "id_from", u1.first_name as "first_name_from", u1.last_name as "last_name_from", status, u2.id as "id_to", u2.first_name as "first_name_to", u2.last_name as "last_name_to"
    //           FROM friends
    //           INNER JOIN users u1
    //           ON friends.from_id = u1.id
    //           INNER JOIN users u2
    //           ON friends.to_id = u2.id
    //           WHERE u1.id = ? OR u2.id = ?';
    $query = 'SELECT
                    CASE
                    WHEN friends.from_id = ? THEN friends.to_id
                    WHEN friends.to_id = ? THEN friends.from_id
                    END AS "friend_id",
                    CASE
                    WHEN friends.from_id = ? THEN CONCAT(u2.first_name, " ", u2.last_name)
                    WHEN friends.to_id = ? THEN CONCAT(u1.first_name, " ", u1.last_name)
                    END AS "friend_name",
                    status
                    FROM friends
                    INNER JOIN users u1
                    ON friends.from_id = u1.id
                    INNER JOIN users u2
                    ON friends.to_id = u2.id
                    WHERE (u1.id = ? OR u2.id = ?) AND status = 2';
    return $this->db->query($query, array($id, $id, $id, $id, $id, $id))->result_array();
  }

  public function get_friend_requests_by_user_id($id) {
    $query = 'SELECT
                    CASE
                    WHEN friends.from_id = ? THEN friends.to_id
                    WHEN friends.to_id = ? THEN friends.from_id
                    END AS "friend_id",
                    CASE
                    WHEN friends.from_id = ? THEN CONCAT(u2.first_name, " ", u2.last_name)
                    WHEN friends.to_id = ? THEN CONCAT(u1.first_name, " ", u1.last_name)
                    END AS "friend_name",
                    status
                    FROM friends
                    INNER JOIN users u1
                    ON friends.from_id = u1.id
                    INNER JOIN users u2
                    ON friends.to_id = u2.id
                    WHERE u2.id = ? AND status = 1';
    return $this->db->query($query, array($id, $id, $id, $id, $id))->result_array();

  }

  public function add_friend_request($id_from, $id_to) {
    $query = "INSERT INTO friends (from_id, to_id, status) VALUES (?, ?, 1)";
    $this->db->query($query, array($id_from, $id_to));
  }

  public function delete_friend($id_from, $id_to) {
    $query = "DELETE FROM friends WHERE from_id IN ('{$id_from}', '{$id_to}') AND to_id IN ('{$id_from}', '{$id_to}')";
    $this->db->query($query);
  }

  public function accept_friend($id_from, $id_to) {
    $query = "UPDATE friends SET status = 2 WHERE from_id = ? AND to_id = ?";
    $this->db->query($query, array($id_from, $id_to));
  }


}

?>
