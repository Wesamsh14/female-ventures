<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feed</title>
    	<link rel="shortcut icon" href="/assets/favicon.png">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/sidebar.css"/>
    

    <?php
    if ( ! $this->session->user) {
      redirect('/users/index');
      die();
    }
    ?>
  </head>
  <body>

    <header>
          <?php $this->load->view('/header/header-3.php') ?>
    </header>
<div class="wrapper">

    <!-- Sidebar -->
      <nav id="sidebar">
        <div class="sidebar-header" style="text-align: center;">
            <h4>Intersting read</h4>
        </div>

        <ul class="list-unstyled components">
           
            <style type="text/css" media="screen">
  .gr_grid_container {
    /* customize grid container div here. eg: width: 500px; */
  }

  .gr_grid_book_container {
    /* customize book cover container div here */
    float: left;
    width: 98px;
    height: 160px;
    padding: 0px 0px;
    overflow: hidden;
  }
</style>
<div id="gr_grid_widget_1544100924">
  <!-- Show static html as a placeholder in case js is not enabled - javascript include will override this if things work -->
    <div class="gr_grid_container">
<div class="gr_grid_book_container"><a title="Moonwalking with Einstein: The Art and Science of Remembering Everything" rel="nofollow" href="https://www.goodreads.com/book/show/6346975-moonwalking-with-einstein"><img alt="Moonwalking with Einstein: The Art and Science of Remembering Everything" border="0" src="https://images.gr-assets.com/books/1347705105m/6346975.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="On Balance" rel="nofollow" href="https://www.goodreads.com/book/show/19938533-on-balance"><img alt="On Balance" border="0" src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" /></a></div>
<div class="gr_grid_book_container"><a title="Johnny Cash: The Life" rel="nofollow" href="https://www.goodreads.com/book/show/17333255-johnny-cash"><img alt="Johnny Cash: The Life" border="0" src="https://images.gr-assets.com/books/1376878090m/17333255.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="A Dance with Dragons (A Song of Ice and Fire, #5)" rel="nofollow" href="https://www.goodreads.com/book/show/10664113-a-dance-with-dragons"><img alt="A Dance with Dragons" border="0" src="https://images.gr-assets.com/books/1327885335m/10664113.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The Elements of Style" rel="nofollow" href="https://www.goodreads.com/book/show/33514.The_Elements_of_Style"><img alt="The Elements of Style" border="0" src="https://images.gr-assets.com/books/1393947922m/33514.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The Tempest" rel="nofollow" href="https://www.goodreads.com/book/show/12985.The_Tempest"><img alt="The Tempest" border="0" src="https://images.gr-assets.com/books/1327793692m/12985.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Spark: The Revolutionary New Science of Exercise and the Brain" rel="nofollow" href="https://www.goodreads.com/book/show/721609.Spark"><img alt="Spark: The Revolutionary New Science of Exercise and the Brain" border="0" src="https://images.gr-assets.com/books/1344269833m/721609.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Juggernaut: Why The System Crushes The Only People Who Can Save It" rel="nofollow" href="https://www.goodreads.com/book/show/10170949-juggernaut"><img alt="Juggernaut: Why The System Crushes The Only People Who Can Save It" border="0" src="https://images.gr-assets.com/books/1328371656m/10170949.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The Ideas Industry: How Pessimists, Partisans, and Plutocrats Are Transforming the Marketplace of Ideas" rel="nofollow" href="https://www.goodreads.com/book/show/32335738-the-ideas-industry"><img alt="The Ideas Industry: How Pessimists, Partisans, and Plutocrats Are Transforming the Marketplace of Ideas" border="0" src="https://images.gr-assets.com/books/1478684698m/32335738.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Min kamp 3 (Min kamp #3)" rel="nofollow" href="https://www.goodreads.com/book/show/7457379-min-kamp-3"><img alt="Min kamp 3" border="0" src="https://images.gr-assets.com/books/1262261857m/7457379.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="How Emotions Are Made: The Secret Life of the Brain" rel="nofollow" href="https://www.goodreads.com/book/show/23719305-how-emotions-are-made"><img alt="How Emotions Are Made: The Secret Life of the Brain" border="0" src="https://images.gr-assets.com/books/1474820529m/23719305.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Darwin's Unfinished Symphony: How Culture Made the Human Mind" rel="nofollow" href="https://www.goodreads.com/book/show/32025406-darwin-s-unfinished-symphony"><img alt="Darwin's Unfinished Symphony: How Culture Made the Human Mind" border="0" src="https://images.gr-assets.com/books/1479234249m/32025406.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Thinking, Fast and Slow" rel="nofollow" href="https://www.goodreads.com/book/show/11468377-thinking-fast-and-slow"><img alt="Thinking, Fast and Slow" border="0" src="https://images.gr-assets.com/books/1317793965m/11468377.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The World Beyond Your Head: On Becoming an Individual in an Age of Distraction" rel="nofollow" href="https://www.goodreads.com/book/show/22237171-the-world-beyond-your-head"><img alt="The World Beyond Your Head: On Becoming an Individual in an Age of Distraction" border="0" src="https://images.gr-assets.com/books/1416448116m/22237171.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Why We Sleep: Unlocking the Power of Sleep and Dreams" rel="nofollow" href="https://www.goodreads.com/book/show/34466963-why-we-sleep"><img alt="Why We Sleep: Unlocking the Power of Sleep and Dreams" border="0" src="https://images.gr-assets.com/books/1506854639m/34466963.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The Power of Habit: Why We Do What We Do in Life and Business" rel="nofollow" href="https://www.goodreads.com/book/show/12609433-the-power-of-habit"><img alt="The Power of Habit: Why We Do What We Do in Life and Business" border="0" src="https://images.gr-assets.com/books/1366758683m/12609433.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The Vegetarian" rel="nofollow" href="https://www.goodreads.com/book/show/25489025-the-vegetarian"><img alt="The Vegetarian" border="0" src="https://images.gr-assets.com/books/1478196580m/25489025.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="The New Geography of Jobs" rel="nofollow" href="https://www.goodreads.com/book/show/18831377-the-new-geography-of-jobs"><img alt="The New Geography of Jobs" border="0" src="https://images.gr-assets.com/books/1384814435m/18831377.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="Triumph of the City: How Our Greatest Invention Makes Us Richer, Smarter, Greener, Healthier, and Happier" rel="nofollow" href="https://www.goodreads.com/book/show/10586318-triumph-of-the-city"><img alt="Triumph of the City: How Our Greatest Invention Makes Us Richer, Smarter, Greener, Healthier, and Happier" border="0" src="https://images.gr-assets.com/books/1298585202m/10586318.jpg" /></a></div>
<div class="gr_grid_book_container"><a title="You Are Not So Smart: Why You Have Too Many Friends on Facebook, Why Your Memory Is Mostly Fiction, and 46 Other Ways You're Deluding Yourself" rel="nofollow" href="https://www.goodreads.com/book/show/11709037-you-are-not-so-smart"><img alt="You Are Not So Smart: Why You Have Too Many Friends on Facebook, Why Your Memory Is Mostly Fiction, and 46 Other Ways You're Deluding Yourself" border="0" src="https://images.gr-assets.com/books/1391879112m/11709037.jpg" /></a></div>
<noscript><br/>Share <a rel="nofollow" href="/">book reviews</a> and ratings with Robert, and even join a <a rel="nofollow" href="/group">book club</a> on Goodreads.</noscript>
</div>

</div>
<script src="https://www.goodreads.com/review/grid_widget/23954798.Robert's%20read%20book%20montage?cover_size=medium&hide_link=true&hide_title=true&num_books=20&order=a&shelf=read&sort=random&widget_id=1544100924" type="text/javascript" charset="utf-8"></script>


    </nav>


    <!-- Page Content -->
    <div id="content">
        <!-- We'll fill this with dummy content -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn-info" style="margin-left: 70px;">
               <i class="fas fa-align-left"></i>
                <span>Hide/Open Menu</span>
            </button>

        </div>
    </nav>

        <div class="container">
      <div class="row">
        <div class="col-sm-7 offset-sm-1 p-2">
          <form action="/posts/add" method="post">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">Enter title here/</span>
              <textarea type="text" name='title' placeholder='' rows="1" /></textarea> <br>
            </div>
             <textarea name="content" placeholder="Post text here" class="form-control " rows="3"></textarea>
            <input type="hidden" value=<?=$this->session->user['id']?> name='id'>
            <input type="submit" value="post" class="btn btn-primary" />
          </form>
        </div>
      </div>
</div>
      <div class="row">
        <?php
        /*Print each post. If the post was creaded by the logged-in user,
        add the option to eddit.
        If edit was toggled on for a given post, display a form with the
        post content as a default.
        */
        foreach($posts as $post) {
        ?>

          <div  class=" card col-sm-6 offset-sm-2 p-2 mb-1 bg-light text-dark border-dark">
            <?php
            if ($this->session->post_edit_id === NULL or $this->session->post_edit_id !== $post['id']) {
            ?>


            <h5 class="card-title p-2 text-white" style="background-color: #85B3B8">
                <?php if ($post['is_pinned']) { ?>
                <i class="fas fa-thumbtack"></i>
                <?php } ?><?= $post['title']?>
            </h5>
            <h6 clas="text-monospaced"><?= $post['content'] ?></h6>
            <a href="<?='/thread/'.$post['id']?>" class="btn btn-sm"><?=$post['comment_count']." " ?>comments</a>
            Uploader: <p class="card-text text-info"><?php if($post['name']) {
              echo "<a href='/profile/{$post['user_id']}'>".$post['name']."</a>";
            } else {
              echo "<a href='/profile/{$post['user_id']}'>".$post['email']."</a>";
            }?></p>

            <?php
              if ($this->session->user['id'] == $post['user_id'] || $this->session->user['user_type']) {
                ?>
        <div>
                <form action="/posts/toggle_edit_post" method="post" style="display: inline-block;">
                  <input type='hidden' name='post_id' value=<?=$post['id']?>>
                  <button><i class="fa fa-edit"> edit post</i></button>
                  <!-- <input type='submit' value='Edit' class="btn far fa-edit" /> -->
                </form>
                <form action="/posts/delete_post" method="post" style="display: inline-block;">
                  <input type='hidden' name='post_id' value=<?=$post['id']?>>
                  <button><i class="far fa-trash-alt"> delete post</i></button>
                  <!-- <input type='submit' value='Delete' class="btn-sm btn-dark" /> -->
                </form>
          </div>
                <?php
              }

              if ($this->session->user['user_type'] == 1) {
                ?>
                <form action='/posts/toggle_pin' method='post'>
                  <input type='hidden' name='post_id' value=<?=$post['id']?>>
                  <input type="hidden" name="is_pinned" value=<?=$post['is_pinned']?>>
                  <input type='submit' value='Pin' />
                </form>
                <?php
              }
            ?>
            <hr>
            <?php
            }
            else
            {
              ?>
              <form action="/posts/submit_edit_post" method='post'>
                <input type="text" name="edited_title_post" value='<?=$post['title']?>'/>
                <textarea name="edited_content_post" class="form-control " rows="3"><?=$post['content']?></textarea><br>
                <input type='submit' value='submit' class="btn-sm btn-dark" />
              </form><br>
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
        }
        ?>

      </div>
    </div><br><br>
    </div>

</div><br>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
    </script>
<br><br>
    <footer>
        <?php $this->load->view('footer/footer.php'); ?>
    </footer>
  </body>
</html>
