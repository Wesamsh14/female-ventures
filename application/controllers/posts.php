<?php

class Posts extends CI_Controller {

  public function index() {
    $posts = $this->post->get_all_posts();
    $this->load->view('feed', ['posts' => $posts]);
  }

  public function add() {
    // Todo: preserve line breaks when inserting content do DB
    $data = $this->input->post(null, TRUE);
    $this->post->add_post($data);
    redirect('/posts');
  }

  public function toggle_edit_post() {
    $this->session->post_edit_id = $this->input->post('post_id', TRUE);
    if ($this->input->post('edit_in_thread', NULL)) {
      redirect('/thread/'.$this->session->post_edit_id);
    } else {
      redirect('/posts');
    }
  }

  public function submit_edit_post() {
    $content = nl2br($this->input->post('edited_content_post', TRUE));
    $values = array(
      'title' => $this->input->post('edited_title_post', TRUE),
      'content' => $content,
      'id' => $this->session->post_edit_id
    );
    $this->post->update_post($values);
    $post_id = $this->session->post_edit_id;
    $this->session->post_edit_id = NULL;
    if ($this->input->post('submit_in_thread', NULL)) {
      redirect('/thread/'.$post_id);
    } else {
      redirect('/posts');
    }
  }

  public function delete_post() {
    $id = $this->input->post('post_id');
    $this->post->delete_post($id);
    redirect('/posts');
  }

  public function toggle_pin() {
    $post_id = $this->input->post('post_id', TRUE);
    $is_pinned = $this->input->post('is_pinned', TRUE);
    $this->post->toggle_pin($post_id, $is_pinned);
    redirect('/posts');
  }

}

?>
