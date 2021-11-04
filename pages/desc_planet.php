<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>

<!DOCTYPE html>
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




        <br><br>




                    <!----->
                    <div class="col-md-12">
                        <h2 class="title">Mercury</h2>
                        <div class="typography-line">
                            <p>
                            “The smallest planet in our solar system and nearest to the Sun, Mercury is only slightly larger than Earth's Moon. From the surface of Mercury, the Sun would appear more than three times as large as it does when viewed from Earth, and the sunlight would be as much as seven times brighter. Despite its proximity to the Sun, Mercury is not the hottest planet in our solar system – that title belongs to nearby Venus, thanks to its dense atmosphere.

Because of Mercury's elliptical – egg-shaped – orbit, and sluggish rotation, the Sun appears to rise briefly, set, and rise again from some parts of the planet's surface. The same thing happens in reverse at sunset"
                            </p>


                        </div>
                        <br>

                    </div>


                            <p>
                              <div class="col-md-12">
                                  <h2 class="title">Venus</h2>
                                  <div class="typography-line">
                                      <p>
                                        Venus is the second planet from the Sun and is Earth’s closest planetary neighbor. It’s one of the four inner, terrestrial (or rocky) planets, and it’s often called Earth’s twin because it’s similar in size and density. These are not identical twins, however – there are radical differences between the two worlds.

  The Latest
   Venus Resources
   Full Moon Guide: August - September 2021
  Venus has a thick, toxic atmosphere filled with carbon dioxide and it’s perpetually shrouded in thick, yellowish clouds of sulfuric acid that trap heat, causing a runaway greenhouse effect. It’s the hottest planet in our solar system, even though Mercury is closer to the Sun. Surface temperatures on Venus are about 900 degrees Fahrenheit (475 degrees Celsius) – hot enough to melt lead. The surface is a rusty color and it’s peppered with intensely crunched mountains and thousands of large volcanoes. Scientists think it’s possible some volcanoes are still active.

  Venus has crushing air pressure at its surface – more than 90 times that of Earth – similar to the pressure you'd encounter a mile below the ocean on Earth.</p>


                                  </div>
                                  <br>
                            </div>

                            <!----->
                            <div class="col-md-12">
                                <h2 class="title">Earth</h2>
                                <div class="typography-line">
                                    <p>
                                      Our home planet is the third planet from the Sun, and the only place we know of so far that’s inhabited by living things.

    The Latest
     Ocean Worlds Resources
     CuPID CubeSat Will Get New Perspective on Sun-Earth Boundary
    While Earth is only the fifth largest planet in the solar system, it is the only world in our solar system with liquid water on the surface. Just slightly larger than nearby Venus, Earth is the biggest of the four planets closest to the Sun, all of which are made of rock and metal.

    The name Earth is at least 1,000 years old. All of the planets, except for Earth, were named after Greek and Roman gods and goddesses. However, the name Earth is a Germanic word, which simply means “the ground.”
                                    </p>


                                </div>
                                <br>

                            </div>

                            <!----->
                            <div class="col-md-12">
                                <h2 class="title">Mars</h2>
                                <div class="typography-line">
                                    <p>
                                      Mars is the fourth planet from the Sun – a dusty, cold, desert world with a very thin atmosphere. Mars is also a dynamic planet with seasons, polar ice caps, canyons, extinct volcanoes, and evidence that it was even more active in the past.

The Latest from Mars
 NASA's Perseverance Rover Collects Puzzle Pieces of Mars' History
Mars is one of the most explored bodies in our solar system, and it's the only planet where we've sent rovers to roam the alien landscape.

NASA currently has two rovers (Curiosity and Perseverance), one lander (InSight), and one helicopter (Ingenuity) exploring the surface of Mars.

Perseverance rover – the largest, most advanced rover NASA has sent to another world – touched down on Mars on Feb. 18, 2021, after a 203-day journey traversing 293 million miles (472 million kilometers). The Ingenuity helicopter rode to Mars attached to the belly of Perseverance.

Perseverance is one of three spacecraft that arrived at Mars in 2021. The Hope orbiter from the United Arab Emirates arrived on Feb. 9, 2021. China’s Tianwen-1 mission arrived on Feb. 10, 2021, and includes an orbiter, a lander, and a rover. Europa and India also have spacecraft studying Mars from orbit.

In May 2021, China became the second nation to ever land successfully on Mars when its Zhurong Mars rover touched down.

An international fleet of eight orbiters is studying the Red Planet from above including three NASA orbiters: 2001 Mars Odyssey, Mars Reconnaissance Orbiter, and MAVEN.

These robotic explorers have found lots of evidence that Mars was much wetter and warmer, with a thicker atmosphere, billions of years ago.</p>


                                </div>
                                <br>

                            </div>

                                                        <!----->
                                                        <div class="col-md-12">
                                                            <h2 class="title">Jupiter</h2>
                                                            <div class="typography-line">
                                                                <p>
                                                                  Jupiter has a long history of surprising scientists – all the way back to 1610 when Galileo Galilei found the first moons beyond Earth. That discovery changed the way we see the universe.

  The Latest
   Jupiter Resources
   Full Moon Guide: August - September 2021
  Fifth in line from the Sun, Jupiter is, by far, the largest planet in the solar system – more than twice as massive as all the other planets combined.

  Jupiter's familiar stripes and swirls are actually cold, windy clouds of ammonia and water, floating in an atmosphere of hydrogen and helium. Jupiter’s iconic Great Red Spot is a giant storm bigger than Earth that has raged for hundreds of years.

                                                            </div>
                                                            <br>

                                                        </div>



                                                                                                                <!----->
            <div class="col-md-12">
            <h2 class="title">Saturn</h2>
            <div class="typography-line">
              <p>
Saturn is the sixth planet from the Sun and the second-largest planet in our solar system.

The Latest
 Saturn and Titan Resources
 40 Years On, Remembering Voyager's Legacy at Saturn
Adorned with thousands of beautiful ringlets, Saturn is unique among the planets. It is not the only planet to have rings – made of chunks of ice and rock – but none are as spectacular or as complicated as Saturn's.

Like fellow gas giant Jupiter, Saturn is a massive ball made mostly of hydrogen and helium.
            </div>
            <br>
          </div>

          <!----->
<div class="col-md-12">
<h2 class="title">Uranus</h2>
<div class="typography-line">
<p>
  Uranus is the seventh planet from the Sun, and has the third-largest diameter in our solar system. It was the first planet found with the aid of a telescope, Uranus was discovered in 1781 by astronomer William Herschel, although he originally thought it was either a comet or a star.

  The Latest
   First X-rays from Uranus Discovered
  It was two years later that the object was universally accepted as a new planet, in part because of observations by astronomer Johann Elert Bode. Herschel tried unsuccessfully to name his discovery Georgium Sidus after King George III. Instead, the scientific community accepted Bode's suggestion to name it Uranus, the Greek god of the sky, as suggested by Bode</div>
<br>
</div>

<!----->
<div class="col-md-12">
<h2 class="title">Neptune</h2>
<div class="typography-line">
<p>

  Dark, cold, and whipped by supersonic winds, ice giant Neptune is the eighth and most distant planet in our solar system.

  The Latest
   Tiny Neptune Moon May Have Broken from Larger Moon
  More than 30 times as far from the Sun as Earth, Neptune is the only planet in our solar system not visible to the naked eye and the first predicted by mathematics before its discovery. In 2011 Neptune completed its first 165-year orbit since its discovery in 1846.

  NASA's Voyager 2 is the only spacecraft to have visited Neptune up close. It flew past in 1989 on its way out of the solar system<br>
</div>


                    <!----->
                    <div class="col-md-12">
                        <h2 class="title">DESCRIPTION PLANET</h2>
                        <div class="typography-line">
                            <p>
                            “There are more planets than stars in our galaxy. The current count orbiting our star: eight.

The inner, rocky planets are Mercury, Venus, Earth, and Mars. NASA's newest rover — Perseverance — landed on Mars on Feb. 18, 2021. The outer planets are gas giants Jupiter and Saturn and ice giants Uranus and Neptune.

Beyond Neptune, a newer class of smaller worlds called dwarf planets reign, including longtime favorite Pluto. Thousands more planets have been discovered beyond our solar system. Scientists call them exoplanets (exo means "from outside").

Planets in Our Solar Syst"
                            </p>


                            <h3><a href="../quiz/index.php" class="button" style="color:red">Start Quiz</a></h3>
                        </div>
                        <br>

                    </div>
        </p>


                        </div>
                        <br>

                    </div>




                    <br><hr color="orange">


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
