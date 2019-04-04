<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thread</title>
     <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
   <header>
      <?php $this->load->view('/header/header-3.php') ?>
   </header>
   <br>
     <div class="container">
       <div  class="card col-sm-7 offset-sm-2 p-3 mb-1 bg-light text-dark border-dark ">
         <?php
         // -----DISPLAY THE POST-----
         if ($this->session->post_edit_id === NULL or $this->session->post_edit_id !== $post['id']) {
         ?>
         <?= '<h5 class="card-title p-2 text-white" style="background-color: #85B3B8">'.$post['title'].'</h5>' ?>
         <h5 clas="text-monospaced"><?= $post['content'] ?></h5>
          Uploader: <p class="text-info"><?php if($post['name']) {
           echo $post['name'];
         } else {
           echo $post['email'];
         }?></p>
         <?php
         // -----ALLOW LOGGED IN USER TO EDIT/DELETE HIS POSTS-----
           if ($this->session->user['id'] == $post['user_id'] || $this->session->user['user_type']) {
             ?>
         <div>
             <form action="/posts/toggle_edit_post" method="post" style="display: inline-block;">
               <input type='hidden' name='post_id' value=<?=$post['id']?>>
               <button><i class="fa fa-edit"> edit post</i></button>
               <!-- <input type='submit' value='Edit' name='edit_in_thread' /> -->
             </form>
             <form action="/posts/delete_post" method="post" style="display: inline-block;">
               <input type='hidden' name='post_id' value=<?=$post['id']?>>
               <button><i class="far fa-trash-alt"> delete post</i></button>
               <!-- <input type='submit' value='Delete' /> -->
             </form>
         </div>
             <?php
           }
         ?>

         <?php
         }
         else
         {
           ?>
           <form action="/posts/submit_edit_post" method='post'>
             <input type="text" name="edited_title_post" value='<?=$post['title']?>'/>
             <textarea name="edited_content_post class="form-control " rows="3""><?=$post['content']?></textarea>
             <input type='submit' value='submit' name='submit_in_thread' />
           </form>
           Uploader: <p class="card-text text-info"><?php if($post['name']) {
             echo $post['name'];
           } else {
             echo $post['email'];
           }?></p>
           <hr>
         <?php
         }
         ?>
   </div>
             <?php
             // ----- DISPLAY ALL COMMENTS -----
             foreach ($comments as $comment) {
               ?>
               <div class="card col-sm-5 offset-sm-3 p-3 mb-1 bg-light text-dark border-dark ">
                 <?php
                 if ($this->session->comment_edit_id === NULL or $this->session->comment_edit_id !== $comment['id']) {?>
                   <h5 clas="text-monospaced"><?php echo $comment['content'];?></h5><br>
                   Uploader: <p class="text-info"><?php if($comment['name']) {
                     echo $comment['name'];
                   } else {
                     echo $comment['email'];
                   }?></p>

               <?php
               // -----ALLOW LOGGED IN USER TO EDIT/DELETE HIS COMMENTS-----
                 if ($this->session->user['id'] == $comment['user_id'] || $this->session->user['user_type']) {
                   ?>
               <div>
                   <form action="/comments/toggle_edit_comment" method="post" style="display: inline-block;">
                     <input type='hidden' name='comment_id' value=<?=$comment['id']?>>
                     <input type='hidden' name='post_id' value=<?=$post['id']?>>
                     <button><i class="fa fa-edit"> edit comment</i></button>
                     <!-- <input type='submit' value='Edit' /> -->
                   </form>
                   <form action="/comments/delete_comment" method="post" style="display: inline-block;">
                     <input type='hidden' name='comment_id' value=<?=$comment['id']?>>
                     <input type='hidden' name='post_id' value=<?=$post['id']?>>
                     <button><i class="far fa-trash-alt"> delete comment</i></button>
                     <!-- <input type='submit' value='Delete' /> -->
                   </form>
               </div>
                   <?php
                 }
                 ?>
           </div>
             <?php
           } //-----END OF TOGGLE EDIT-----
           else
           {
             //-----SUBMIT A COMMENT-----
             ?>

             <form action="/comments/submit_edit_comment" method='post'>
               <textarea name="edited_content_comment" class="col-sm-8 offset-sm-2"><?=$comment['content']?></textarea><br>
               <input type='hidden' name='post_id' value=<?=$post['id']?>>
               <input type='submit' value='submit' class="btn btn-primary" />
             </form>
             Uploader: <p class="card-text text-info"><?= $comment['name']?></p>
           </div>
             <?php
           }
           ?>

         <?php
       } //-----END OF PRINTING COMMENTS
         ?>

       <div class="col-sm-8 offset-sm-2">
         <form action="/comments/add_comment" method="post">
           <br><textarea name="content" class="form-control ">Your text here</textarea>
           <input type='hidden' name='post_id' value=<?=$post['id']?>><br>
           <input type='submit' value="add comment" class="btn btn-primary" />
         </form>
       </div>
        <hr>
       <br>
       <footer>
         <?php $this->load->view('/footer/footer.php') ?>
       </footer>

   </body>
 </html>
