<?php

class Comment extends CI_Model {

  // GET ALL COMMENTS FOR A SPECIFIC POST
  public function get_all_comments($post_id) {
    $query = 'SELECT comments.id, content, CONCAT(first_name, " ", last_name) AS "name", users.id AS "user_id", email
              FROM comments
              JOIN users
              ON comments.user_id = users.id
              WHERE post_id = ?
              ORDER BY comments.created_at ASC';
    return $this->db->query($query, array($post_id))->result_array();
  }

  public function delete_comment($id) {
    $query = 'DELETE FROM comments WHERE id = ?';
    $this->db->query($query, array($id));
  }

  public function update_comment($values) {
    $query = 'UPDATE comments SET content = ? WHERE id = ?';
    $this->db->query($query, $values);
  }

  public function add($values) {
    $query = "INSERT INTO comments (content, user_id, post_id) VALUES (?, ?, ?)";
    $this->db->query($query, $values);
  }

}




?>
