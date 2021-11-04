<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
				$dbconn = mysqli_connect("localhost","root","","electricks");

				$sql="SELECT * FROM `chat`";

		$query = mysqli_query($dbconn,$sql);

        exit();
    }
?>
  <html lang="en">

  <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="../assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>VR FOR ALL</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
      <!-- CSS Files -->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="../assets/css/demo.css" rel="stylesheet" />

      <!--     inserted     -->
      <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
      <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
      <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet"/>

      <link href="../assets/style.css" rel="stylesheet"/>
      <!--     inserted     -->
  </head>

  <body class="index-page sidebar-collapse">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
          <div class="container">
              <div class="navbar-translate">
                  <a href="user_index.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by Cerenzia." data-placement="bottom" target="">
                      VR FOR ALL
                  </a>
                  <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-bar bar1"></span>
                      <span class="navbar-toggler-bar bar2"></span>
                      <span class="navbar-toggler-bar bar3"></span>
                      <span class="navbar-toggler-bar bar4"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="" onclick="scrollToDownload()">
                              <i class="now-ui-icons users_circle-08"></i>
                              <p>
                                  <?php
                                   include('../config/dbconn.php');
                                   $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
                                   $row=mysqli_fetch_array($query);
                                   echo ''.$row['firstname'].'';
                                  ?>
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="user_products.php">
                              <i class="now-ui-icons files_paper"></i>
                              <p>Electronic Products</p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="../sistm_sol/tour.html">
                              <i class="now-ui-icons files_paper"></i>
                              <p>tour in VR</p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="../quiz/index.php">
                              <i class="now-ui-icons files_paper"></i>
                              <p>Quiz Planet</p>
                          </a>
                      </li>

                                          <li class="nav-item">
                                              <a class="nav-link" href="../pages/desc_planet.php">
                                                  <i class="now-ui-icons files_paper"></i>
                                                  <p>Description</p>
                                              </a>
                                          </li>

                      <li class="nav-item">
                          <a class="nav-link" href="user_cart.php" onclick="scrollToDownload()">
                              <i class="now-ui-icons shopping_cart-simple"></i>
                              <p>Shopping Cart</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                              <i class="now-ui-icons ui-1_lock-circle-open"></i>
                              <p>Logout</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                              <i class="fa fa-twitter"></i>
                              <p class="d-lg-none d-xl-none">Twitter</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                              <i class="fa fa-facebook-square"></i>
                              <p class="d-lg-none d-xl-none">Facebook</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                              <i class="fa fa-instagram"></i>
                              <p class="d-lg-none d-xl-none">Instagram</p>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- End Navbar -->
      <div class="wrapper">
          <div class="page-header clear-filter" filter-color="orange">
              <div class="page-header-image" data-parallax="true" style="background-image: url('../sistm_sol/img/logo_screen.png');">

                  <div class="container">
                      <div class="content-center brand">
                          <br><br>
                          <br><br>                        <br><br>
                          <br><br>

                          <br><br>
                          <br><br>
                          <br><br>

                        <h2 style="color:black">VR FOR ALL</h2>
                          <br><br>
                          <h3><h3 style="color:black">the space.</h3>
  .</h3>
                      </div>
                  </div>
              </div>
          </div>
          <br>
<br>
<br>
<br><br>
<br><br><br>
<br><br>
<br><br><br><br>
<br><br>
<br><br>
<br>



<div class="container">
  <center><h2>Welcome <span style="color:orange;"><?php echo $row['firstname']; ?> !</span></h2>
	<label>Join the chat</label>
  </center></br>
  <div class="display-chat">

<style media="screen">
.message{
  background-color: #e8dddc;
  color: black;
  border-radius: 55px;
  padding: 5px;
  margin-bottom: 3%;
}
display-chat{
  height:300px;
  background-color:#d69de0;
  margin-bottom:4%;
  overflow:auto;
  padding:15px;
}
.container {
    width: 90%;

  }

</style>






<?php
$dbconn = mysqli_connect("localhost","root","","electricks");

$sql="SELECT * FROM `chat`";
$query = mysqli_query($dbconn,$sql);

	if(mysqli_num_rows($query)>0){
		while($row= mysqli_fetch_assoc($query))
		{
?>
		<div class="message">
			<p>

        
				<span><?php echo $row['firstname']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}

?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>

  </div>
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">
        <textarea name="msg" class="form-control" placeholder="Type your message here..." style="color:"black" "></textarea>
      </div>

      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
</div>


        </div>
    </div>
</div>
        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>


						<h2 style="color:white">ing sw</h2>

                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by Cerenzia.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>



   <!---  inserted  -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/google-code-prettify/prettify.js"></script>
    <script src="../assets/js/application.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/bootstrap-affix.js"></script>
    <script src="../assets/js/jquery.lightbox-0.5.js"></script>
    <script src="../assets/js/bootsshoptgl.js"></script>
     <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>

    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../plugins/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../plugins/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
        });
      });
    </script>
     <!--  inserted  -->

</html>
