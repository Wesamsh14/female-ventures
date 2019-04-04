<?php

class Users extends CI_Controller {


  public function index() {
    $this->load->view('welcome');
  }
  public function signup() {
    $this->load->view('main');
  }
  public function login() {
    $email = $this->input->post('login_email', TRUE);
    $password = $this->input->post('login_password', TRUE);
    $this->session->user = $this->user->get_user_by_email($email);

    if ($this->session->user && password_verify($password, $this->session->user['password'])) {
      redirect('/feed');
    } else {
      $this->session->set_flashdata('login_error', 'Incorrect email and/or password');
      redirect('/');
    }
  }

  public function log_out() {
    $this->session->sess_destroy();
    redirect('/');
  }

  public function register() {
    $data = $this->input->post(NULL, TRUE);
    $this->user->register($data);
    redirect('/');
  }

  public function feed() {
    $this->load->view('feed');
  }

  public function profile($id) {
    $posts = $this->post->get_posts_by_user($id);
    $user = $this->user->get_user_by_id($id);
    $friends = $this->user->get_friends_by_user_id($id);
    $requests = $this->user->get_friend_requests_by_user_id($id);
    $this->load->view('profile', array(
      'posts' => $posts,
      'user' => $user,
      'friends' => $friends,
      'requests' => $requests
    ));
  }

  public function edit_profile() {
    $this->output->enable_profiler(TRUE);
    if( ! $this->input->post('submit_profile_edit')) {
      $this->session->profile_edit_status = TRUE;
      redirect('/users/profile/'.$this->session->user['id']);
    } else {

      $config['upload_path'] = './assets/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 100;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;

      $this->load->library('upload', $config);
      $this->upload->do_upload('picture');
      $filename = '/assets/'.$this->upload->data('file_name');

      $values = array(
        'first_name' => $this->input->post('first_name', TRUE),
        'last_name' => $this->input->post('last_name', TRUE),
        'email' => $this->input->post('email', TRUE),
        'phone' => $this->input->post('phone', TRUE),
        'birthdate' => $this->input->post('birthdate', TRUE),
        'bio' => $this->input->post('bio', TRUE),
        'education' => $this->input->post('education', TRUE),
        'company' => $this->input->post('company', TRUE),
        'industry' => $this->input->post('industry', TRUE),
        'role' => $this->input->post('role', TRUE),
        'recruitment' => $this->input->post('recruitment', TRUE),
        'picture' => $filename,
        'id' => $this->session->user['id']
      );
      $this->user->update_profile($values);
      $this->session->unset_userdata('profile_edit_status');
      redirect('/users/profile/'.$this->session->user['id']);
    }
  }

  public function female_friends() {
    $this->load->view('female_friends');
  }

  public function fetch_friends() {
    $output = '';
    $keyword = '';
    if ($this->input->post('query')) {
      $keyword = $this->input->post('query', TRUE);
    }
    $friends = $this->user->search_friends($keyword);

    foreach ($friends as $friend) {
      $output .= "<div class='col-sm-12 col-md-4 col-lg-3 text-center' style='border:1px double Gainsboro;
       border-radius:2px; margin:20px 30px 20px 30px;'>
      <img src='/assets/email-foto.jpg' style='width:112%; margin-left:-15px;'/>
        <img src={$friend['picture']} width=100px; height=100px; style='border-radius:100px; border:3px solid white; margin:-20px; position: relative; top: -25px;'/><br />
        <a  href='/users/profile/{$friend['id']}'>{$friend['first_name']} {$friend['last_name']}</a><hr style='margin:8px;'/>

        {$friend['city']} <br>
        {$friend['education']}<br/> <br />
              </div>";

    }
    echo $output;
  }

  public function add_friend() {
    $id_from = $this->input->post('id_from', TRUE);
    $id_to = $this->input->post('id_to', TRUE);
    $user_friend_status = $this->input->post('user_friend_status', TRUE);

    if ($user_friend_status == 0 || $user_friend_status == NULL) {
      $this->user->add_friend_request($id_from, $id_to);
    }
  }

  public function delete_friend() {
    $id_from = $this->input->post('id_from', TRUE);
    $id_to = $this->input->post('id_to', TRUE);
    $this->user->delete_friend($id_from, $id_to);
  }

  public function accept_friend() {
    $id_from = $this->input->post('id_from', TRUE);
    $id_to = $this->input->post('id_to', TRUE);
    $this->user->accept_friend($id_from, $id_to);
  }
}
?>
