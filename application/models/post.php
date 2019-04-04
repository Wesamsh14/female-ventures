<?php

class Post extends CI_Model {

  public function get_all_posts() {
    // $query = 'SELECT posts.id, title, content, CONCAT(first_name, " ", last_name) AS "name", user_id, email, is_pinned
    //           FROM posts
    //           JOIN users
    //           ON posts.user_id = users.id
    //           ORDER BY is_pinned DESC, posts.created_at DESC';
    $query = 'SELECT posts.id, title, posts.content AS "content", CONCAT(first_name, " ", last_name) AS "name", posts.user_id AS "user_id", email, is_pinned, COUNT(comments.id) AS "comment_count"
              FROM posts
              JOIN users
              ON posts.user_id = users.id
              LEFT JOIN comments
              ON posts.id = comments.post_id
              GROUP BY posts.id
              ORDER BY is_pinned DESC, posts.created_at DESC';

    return $this->db->query($query)->result_array();
  }

  public function get_post($post_id) {
    $query = 'SELECT posts.id, title, content, CONCAT(first_name, " ", last_name) AS "name", users.id AS "user_id", email, is_pinned
              FROM posts
              JOIN users
              ON posts.user_id = users.id
              WHERE posts.id = ?';
    return $this->db->query($query, array($post_id))->row_array();
  }

  public function get_posts_by_user($user_id) {
    $query = 'SELECT posts.id AS "post_id", title, users.id AS "user_id"
              FROM posts
              LEFT JOIN users
              ON posts.user_id = users.id
              WHERE users.id = ?';
    return $this->db->query($query, array($user_id))->result_array();
  }

  public function add_post($data) {
    $query = "INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)";
    $this->db->query($query, $data);
  }

  public function update_post($values) {
    $query = "UPDATE posts SET title = ?, content = ?, updated_at = NOW() WHERE id = ?";
    $this->db->query($query, $values);
  }

  public function delete_post($id) {
    $query = "DELETE FROM comments WHERE post_id = ?";
    $this->db->query($query, array($id));
    $query = "DELETE FROM posts WHERE id = ?";
    $this->db->query($query, array($id));
  }

  public function toggle_pin($post_id, $is_pinned) {
    if ($is_pinned == 1) {
      $query = "UPDATE posts SET is_pinned = 0 WHERE id = ?";
    }
    else {
      $query = "UPDATE posts SET is_pinned = 1 WHERE id = ?";
    }
    $this->db->query($query, array($post_id));
  }
}
?>
