<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/assets/favicon.png">
      <title>Friends!</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/female-friends.css">

  </head>
  <body>
    <!-- header start from here **********************************************-->
      <header>
        <?php $this->load->view('/header/header-3.php') ?>
      </header>
      <!-- header End here ***************************************************-->
    <div class='container'>
      <div class='row'>
        <div class='col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 text-center'>
          <p id="top-title">FEMALE FRIENDS</p>
          <input type='text' class="form-control fas fa-search" id='searchbar' name="search" placeholder=' search for friends'/>
        </div>
      </div>
      <div class='row' id='results'>

      </div>
    </div>
    <br>
    <hr>
    <!-- footer start from here **********************************-->
        <footer>
          <div class=" row content-info">
                <div class="col-md-3 widget text-4 widget_text fot-box">
                  <h4>Contact</h4>
                    <div class="textwidget">
                      <a  class="contact-email" href="mailto:team@femaleventures.nl" target="_blank" rel="noopener">team@femaleventures.nl</a>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
               </div>
               <div class="col-md-3 widget text-3 widget_text fot-box">
                 <h4>Follow us</h4>
                 <div class="textwidgets">
                         <a href="https://www.linkedin.com/organization/14974484/" target="_blank" rel="noopener">
                            <span class="fab fa-linkedin"></span>
                         </a>
                         <a href="https://www.facebook.com/femaleventures/" target="_blank" rel="noopener">
                            <span class="fab fa-facebook-f"></span>
                         </a>
                         <a href="https://twitter.com/FemVentures" target="_blank" rel="noopener">
                           <span class="fab fa-twitter"></span>
                         </a>
                  </div>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
               </div>
               <div class="col-md-3 widget nav_menu-2 widget_nav_menu fot-box">
                 <h4>Information</h4>
                 <div>
                   <ul  class="contact-email">
                     <li><a href="https://femaleventures.nl/wp-content/uploads/2018/09/AlgVW-FemVentures-juni2018.pdf">Terms and Conditions</a></li>
                     <li><a href="https://femaleventures.nl/privacy-main/">Privacy</a></li>
                   </ul>
                 </div>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
               </div>
        </div>
        </footer>
    <!-- End of footer -->
  </body>
</html>
    <script type="text/javascript">

          $(document).ready(function() {

            load_data();

            function load_data(query) {

              $.ajax({
                url:'<?= base_url()?>users/fetch_friends',
                method:'POST',
                data:{query:query},
                success:function(data) {
                  $('#results').html(data);
                }
              })
            }

            $('#searchbar').keyup(function() {
              var query = $(this).val();
              if (query != '') {
                load_data(query);
              } else {
                load_data();
              }
            })

          })

    </script>
