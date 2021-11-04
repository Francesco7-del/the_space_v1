<?php include "../config/dbconn.php";
session_start() ?>

<?php
if (isset($_POST['submit'])){
   //Get Post variables
   $question_number = $_POST['question_number'];
   $question_text = $_POST['question_text'];
   $correct_choice = $_POST['correct_choice'];
   $choices = array();
   $choices[1] = $_POST['choice1'];
   $choices[2] = $_POST['choice2'];
   $choices[3] = $_POST['choice3'];
   $choices[4] = $_POST['choice4'];
   $choices[5] = $_POST['choice5'];

   //Question query
   $query="insert into questions (question_number, question)
   	 values('$question_number','$question_text')";
     $dbconn = mysqli_connect("localhost","root","","electricks");
     //$result = mysqli_query($dbconn,$query);

   $insert_row=mysqli_query($dbconn,$query);

   //VALIDATE INSERT
   if($insert_row){
      foreach($choices as $choice => $value){
        if($value != ''){
	       if($correct_choice == $choice){
	          $is_correct = 1;
	       }
              $query="insert into choices (question_number,is_correct,choice)
   	          values('$question_number','$is_correct','$value')";
              $dbconn = mysqli_connect("localhost","root","","electricks");

              $insert_row=mysqli_query($dbconn,$query);
	          if($insert_row){
	            continue;
	          }if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
        }
    }
   $msg="Question has been added";
}
}
//get total questions
$query = "select * from questions";
$dbconn = mysqli_connect("localhost","root","","electricks");
//  $result = mysqli_query($dbconn,$query);
$questions =  mysqli_query($dbconn,$query);;
$total=$questions->num_rows;
$next=$total+1;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>  quiz</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />

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
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1 style=" color:orange ">SYSTEM SOLAR QUIZZER!!!</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     <h2>Add A question</h2>
	     <?php
	     	   if(isset($msg)) {
	     	      echo "<p>".$msg."</p>";
	     }
	     ?>
	     <form method="post" action="add.php">
	     	   <p>
			<label>Question Number</label>
			<input type="number" value="<?php echo $next; ?>" name="question_number" />
		   </p>
	     	   <p>
			<label>Question</label>
			<input type="text" name="question_text" />
		   </p>
	     	   <p>
			<label>Choice #1: </label>
			<input type="text" name="choice1" />
		   </p>
	     	   <p>
			<label>Choice #2: </label>
			<input type="text" name="choice2" />
		   </p>
	     	   <p>
			<label>Choice #3: </label>
			<input type="text" name="choice3" />
		   </p>
	     	   <p>
			<label>Choice #4: </label>
			<input type="text" name="choice4" />
		   </p>
	     	   <p>
			<label>Choice #5: </label>
			<input type="text" name="choice5" />
		   </p>
	     	   <p>
			<label>Correct choice number </label>
			<input type="number" name="correct_choice" />
		   </p>
		   <p>
			<input type="submit" name="submit" value="Submit" />
		   </p>
	     </form>
	</div>
    <div >
      <a class="btn btn-success btn-round" href="../pages/admin_index.php"><i class="now-ui-icons ui-1_simple-add"></i>HOME </a>
      <a class="btn btn-success btn-round" href="../pages/del_.php" class="start"><i class="now-ui-icons ui-1_simple-add"></i>DELETE </a>

    </div>
      </main>


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <br><br>
      <br><br>


              <footer class="footer" data-background-color="black">
                  <div class="container">
                      <nav>
                          <ul>
                              <li>
                                  <a href="" target="_blank">
                                      ing sw
                                  </a>
                              </li>
                              <li>
                                  Elective02
                              </li>
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
          <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
          <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

          <!-- Le javascript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
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
