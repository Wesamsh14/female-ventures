<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/profile.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
      margin-top:20px;
    </style>
    <?php
    // var_dump($user);
    if( ! $this->session->user) {
      redirect('/users');
      die();
    }
    ?>
  </head>
  <body>
  <header>
          <?php $this->load->view('/header/header-3.php') ?>
  </header>  
 <div class="image">
    <?php
    if ($this->session->user['id'] == $user['id']) {
      ?><br>
      
      <?php
    }
    ?>
    <img src=<?=$user['picture']?> width=100px height=100px><br>
    <a href="/users/edit_profile">Edit your profile</a>
    </div>

    <p>
    FRIENDS: <?=count($friends)?>
    </p>
    <p>
    REQUESTS: <?=count($requests)?>
    </p>
    <?php
    $user_friend_status = 0;

    // var_dump($requests);
    // DISPLAY RELEVANT BUTTONS FOR EACH OF YOUR INVITES
    // TWO ARE HIDDEN AT THE START
    if ($user['id'] == $this->session->user['id']) {
      foreach ($requests as $request) {
        ?>
        <button class="accept" id='accept<?=$request['friend_id']?>' value=<?=$request['friend_id']?>>Accept friend request!</button>
        <button class="cancel" id='cancel<?=$request['friend_id']?>' value=<?=$request['friend_id']?>>Reject friend request.</button>
        <button class="add" style="display:none" id='add<?=$request['friend_id']?>' value=<?=$request['friend_id']?>>Add friend!</button>
        <button class="delete" style="display:none" id='delete<?=$request['friend_id']?>' value=<?=$request['friend_id']?>>Friendship over. JS is my new best friend.</button>
        <?php
        // THIS ECHO IS JUST FOR TESTING
        echo "friend id is: ".$request['friend_id']. ", name is ".$request['friend_name']."<br>";
      }
    }

    // THIS CODE CHECKS FRIEND STATUS BETWEEN THE LOGGED IN USER AND THE PROFILE
    foreach ($requests as $request) {
      if ($request['friend_id'] == $this->session->user['id']) {
        $user_friend_status = 1;
      }
    }

    foreach ($friends as $friend) {
      if($friend['friend_id'] == $this->session->user['id']) {
        $user_friend_status = 2;
      }
    }

    // FOR TESTING
    echo "FRIEND STATUS: ".$user_friend_status;
    // var_dump($friends);

    ?><br><br><br>
  <div class="titles">  
    <h4>User's posts</h4>
    <?php
    foreach($posts as $post) {
      echo "<h6><a href=/thread/".$post['post_id'].">{$post['title']}</a></h6>";
    }
     ?>
     <hr />
  </div>
 
    <div class="edit">
    <?php
    if ($this->session->profile_edit_status == FALSE ) {
      ?>
    </div>
    <div class="info">
      <p>
        First name: <?=$user['first_name']?>
      </p>

      <p>
        Last name: <?=$user['last_name']?>
      </p>

      <p>
        Email: <?=$user['email']?>
      </p>

      <p>
        City: <?=$user['city']?>
      </p>

      <?php if($user['phone']) {
        echo "<p>Phone: {$user['phone']}</p>";
      }

      if($user['birthdate']) {
        echo "<p>Birthdate: {$user['birthdate']}</p>";
      }

      if($user['bio']) {
        echo "<p>Bio: {$user['bio']}</p>";
      }

      if($user['education']) {
        echo "Education: <p>{$user['education']}</p>";
      }

      if($user['company']) {
        echo "Company: <p>{$user['company']}</p>";
      }

      if($user['industry']) {
        echo "Industry: <p>{$user['industry']}</p>";
      }

      if($user['role']) {
        echo "Role: <p>{$user['role']}</p>";
      }

      if($user['recruitment']) {
        echo "Recruitment: <p>{$user['recruitment']}</p>";
      }
      ?>
  </div>  
      <?php
    } else
    {
      ?>
  <div class="bio">      
      <form action="/users/edit_profile" method="post" enctype='multipart/form-data'">
        <label>First Name</label><br>
        <input type='text' name='first_name' value=<?=$user['first_name']?>><br>
        <label>Last name</label><br>
        <input type='text' name='last_name' value=<?=$user['last_name']?>><br>
        <label>Phone</label><br>
        <input type='text' name='phone' value=<?=$user['phone']?>><br>
        <label>Birthdate</label><br>
        <input type='date' name='birthdate' value=<?=$user['birthdate']?>><br>
        <label>Bio</label><br>
        <textarea name='bio'><?=$user['bio']?></textarea><br>
        <label>Email</label><br>
        <input type='email' name='email' value=<?=$user['email']?>><br>
        <label>Education</label><br>
        <input type='text' name='education' value=<?=$user['education']?>><br>
        <label>Company</label><br>
        <input type='text' name='company' value=<?=$user['company']?>><br>
        <label>Industry</label><br>
        <input type='text' name='industry' value=<?=$user['industry']?>><br>
        <label>Role:</label><br>
        <input type='radio' name='role' value='mentor'>Mentor
        <input type='radio' name='role' value='mentee'>Mentee<br>
        <label>Recruitment:</label><br>
        <input type='radio' name='recruitment' value='Interested'>Interested
        <input type='radio' name='recruitment' value='Not interested'>Not interested
        <br>
        <label>Profile picture</label><br>
        <input type='file' name='picture'>
        <br>

        <input type='submit' value='Submit' name='submit_profile_edit'>
      </form>
  </div>    
      <?php
    }
    ?>
    <?php
    if ($this->session->user['id'] != $user['id'] && $user_friend_status == 0) {
    ?>
      <button id="add">Add friend!</button>
      <button id="cancel" style="display:none">Cancel request</button>
    <?php
    } else if ($this->session->user['id'] != $user['id'] && $user_friend_status == 1) {
      ?>
      <button id="add" style="display:none">Add friend!</button>
      <button id="cancel">Cancel request</button>
      <?php
    } else if ($user_friend_status == 1) {
      // echo "TODO";
      ?>
      /* <button id="accept">Accept friend request!</button>
      <button id="cancel">Reject friend request.</button>
      <button id="add" style="display:none">Add friend!</button>
      <button id="delete" style="display:none">Friendship over. JS is my new best friend.</button> */

      <?php
    } else if ($this->session->user['id'] != $user['id'] && $user_friend_status == 2) {
      ?>
      <button id="add" style="display:none">Add friend!</button>
      <button id="delete">Friendship over. JS is my new best friend.</button>
      <?php
    }
    ?> 
  <footer style="margin-top: 100px;">
    <?php $this->load->view('footer/footer.php'); ?>
  </footer>
  </body>

</html>

<script>
$(document).ready(function() {
  var id_to = <?=$user['id']?>;
  var id_from = <?=$this->session->user['id']?>;
  var user_friend_status = <?=$user_friend_status?>;
   console.log("User status starts at " + user_friend_status);
  function add_friend(id_from, id_to, user_friend_status) {
    $.ajax({
      url:'<?= base_url()?>users/add_friend',
      method:'POST',
      data: {id_to:id_to, id_from:id_from, user_friend_status:user_friend_status},
      success:function() {
        $("#add").hide();
        $("#cancel").show();
      }
    })
  }

  function cancel_friend_request(id_from, id_to) {
    $.ajax({
      url:'<?= base_url()?>users/delete_friend',
      method:'POST',
      data: {id_to:id_to, id_from:id_from},
      success:function() {
        $("#add").show();
        $("#cancel").hide();
      }
    })
  }

  function delete_friend(id_from, id_to) {
    $.ajax({
      url:'<?= base_url()?>users/delete_friend',
      method:'POST',
      data: {id_to:id_to, id_from:id_from},
      success:function() {
        $("#add").show();
        $("#delete").hide();
      }
    })
  }

  function accept_friend(id_from, id_to) {
    $.ajax({
      url:'<?= base_url()?>users/accept_friend',
      method:'POST',
      data: {id_to:id_to, id_from:id_from},
      success:function() {
        $("#accept").hide();
        $("#cancel").hide();
        $("#delete").show();
      }
    })
  }


  $('#add').click(function() {
    add_friend(id_from, id_to, user_friend_status);
    if (user_friend_status == 0) user_friend_status++;
  });

  $("#cancel").click(function() {
    cancel_friend_request(id_from, id_to);
    user_friend_status = 0;
  });

  $("#delete").click(function() {
    delete_friend(id_from, id_to);
    user_friend_status = 0;
  });

  $(".accept").click(function() {
    var from = $(this).val();
    accept_friend(from, id_to);
    $(this).hide();
    $("#cancel"+from).hide();
    $("#delete"+from).show();
  })

  $(".cancel").click(function() {
    var from = $(this).val();
    cancel_friend_request(from, id_to);
    $(this).hide();
    $("#accept"+from).hide();
    $("#add"+from).show();

  });

  $(".delete").click(function() {
    var from = $(this).val();
    delete_friend(from, id_to);
    $(this).hide();
    $("#add"+from).show();
  });

  $('.add').click(function() {
    var to = $(this).val();
    add_friend(id_from, to, 0);
    $(this).hide();
    $("#cancel"+from).show();

  });

});


</script>
