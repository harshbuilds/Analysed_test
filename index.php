<?php
session_start();
include 'connection1.php';

if (isset($_POST['submit'])) {

    $username = $_SESSION['username']=$_POST['username'];
    $pwd = $_POST['password'];
    $sql = "select * from recruiter where email = '$username'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);

    $pwd_fetch = $row['password'];
    $pwd_decode  =password_verify($pwd,$pwd_fetch);

    if ($pwd_decode) {
        echo "loggedin successfully";
    }
    else{

        echo "<script>window.open('index.php?error=username or password incorrect','_self')</script>";
    }


}


?>



<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#"  lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Analysed</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="" />
        <link href="img/mobiapp_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
        <link href="img/mobiapp_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
        <link href="img/mobiapp_logo_32dp.png" rel="icon" sizes="32x32" type="image/png">
        <meta content="img/mobiapp_logo_96dp.png" name="msapplication-TileImage">

        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style-form.css">

        <script src="js/jquery.min.js"></script>
        <script> $(window).on('load', function(){ $(".loader").fadeOut(2000); }); </script>

        <style>.nav-form-s .forg-pass-md a{text-decoration: none; margin-top: -5px; text-transform: lowercase;} .btn {font-family: sans-serif;}</style>

    </head>

    <body>

        <div class="loader"></div>
        <!-- NAVIGATION
            ==============-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/main-logo.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Login
                  <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav text-uppercase pt-3 ml-auto nav-form-s">
                      <form action="signup/recruiter/Recruiter login.php" class="form-inline" method="post" >
                        <div class="form-group mb-2 pl-2">
                          <label for="staticEmail2" class="sr-only">Username / Email</label>
                          <input type="text" name="username" class="form-control" id="staticEmail2" placeholder="Username / Email">
                        </div>
                        <div class="form-group mx-sm-3 mb-2 pl-2">
                          <label for="inputPassword2" class="sr-only">Password</label>
                          <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 ml-2 mr-3">Login</button>
                        <div class="forg-pass-md"><a href="./forgot-password.php">Forgot Password ?</a></div>
                      </form>
                    </div>
                </div>
              </div>
            </nav>

        <!--APP HEADER
            ================-->
            <section class="masthead">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-lg-7 my-auto">
                    <div class="header-content mx-auto animated wow zoomIn" data-wow-duration="0.3s" data-wow-delay=".1s">
                      <h1 class="mx-auto">A Virtual Recruitment Platform</h1>
                      <p>Recruitment and hiring process has been a complex task for a long time and we plan to change that. Analysed helps recruiters in human analytics through AI and provides them with virtual testing tools to lighten the burden of the struggle for both recruiters and job aspirants. Let's eliminate together the troubles witnessed in the recruitment process and uncover a one stop solution to it.</p>
                      <a href="https://analysed.in/Pages/signup/signup.php"><button  class="btn btn-white mt-4 py-2 px-3 ">SIGN UP <i class="fas fa-arrow-alt-circle-up"></i></button></a>
                    </div>
                  </div>
                  <div class="col-lg-5 my-auto">
                    <div class="device-container animated wow zoomIn" data-wow-duration="0.3s" data-wow-delay=".1s">
                    <img src="img/1-resize.png" class="banner-img-mod" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="bg-banner-img">
              <!-- <img src="img/bg-curve.png" alt=""> -->
            </div>

        <!-- APP ABOUT
            ================-->
            <section class="about" id="about">
              <div class="title-sections">
                  <div class="container">
                    <div class="row title-bar align-center">
                      <div class="col-md-12">
                        <h1 class="wow fadeInUp">Our Core Values</h1>
                        <div class="heading-border"></div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="about-content-box wow  align-center fadeInUp" data-wow-delay="0.1s">
                        <img src="img/aspirant.png" class="img-liquid align-center" alt="">
                        <h5>Aspirant</h5>
                        <p class="desc align-center">Job aspirants need to upload their resume and other important details for the virtual recruitment drive.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="about-content-box wow fadeInUp" data-wow-delay="0.3s">
                        <img src="img/howitworks.png" class="img-liquid" alt="">
                        <h5>How it Works</h5>
                        <p class="desc">Analysed strides with an advanced technology to reduce the unemployment rate and bridge the gap between education and corporate requirements.</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="about-content-box wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/recruiters.png" class="img-liquid" alt="">
                        <h5>Recruiters</h5>
                        <p class="desc">A recruiter will be able to create their own virtual recruitment cell and set parameters according to their needs and requirements.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </section>

            <section id="app-about" class="app-about">
              <div class="container">
                <div class="row first">
                  <div class="col-md-4 wow flipInX" data-wow-delay="0.3s">
                    <img src="img/234.jpg" alt="" class="first img-fluid">
                    <img src="img/234.jpg" alt="" class="second img-fluid">
                  </div>
                  <div class="col-md-6 m-auto wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="app-about-cont">
                      <i class="fa fa-globe"></i>
                      <h3>How are we different?</h3>
                      <p class="text-justify">Analysed is different from every other job searching platforms as it offers exclusive technologically advanced tools to perform disparate functions or the recruitment process. We extensively provide tools and services to lighten the burden of the process.</p>
                    </div>
                  </div>
                </div>
                <div class="row second">
                  <div class="col-md-4 wow flipInX mobile-view" data-wow-delay="0.6s">
                    <img src="img/DF345.jpg" alt="" class="third img-fluid">
                    <img src="img/DF345.jpg" alt="" class="fourth img-fluid">
                  </div>
                  <div class="col-md-6 m-auto wow fadeInRight" data-wow-delay="0.3s">
                    <div class="app-about-cont right">
                      <i class="fa fa-gift"></i>
                      <h3>Our Advantages</h3>
                      <p class="text-justify">Our advantages are that we put our belief into this essential cause. Being an unbiased platform that extensively provides services to both recruiters and job seekers, we tend to make our platform a uniform and even one. We aim at using technology as a tool to fix the currently flawed recruitment process and job searching platforms.</p>
                    </div>
                  </div>
                  <div class="col-md-4 wow flipInX desk-view" data-wow-delay="0.6s">
                    <img src="img/DF345.jpg" alt="" class="third img-fluid">
                    <img src="img/DF345.jpg" alt="" class="fourth img-fluid">
                  </div>
                </div>
                <div class="row first first-three ">
                    <div class="col-md-4 wow flipInX" data-wow-delay="0.3s">
                      <img src="img/DF3453.jpg" alt="" class="first img-fluid">
                      <img src="img/DF3453.jpg" alt="" class="second img-fluid">
                    </div>
                    <div class="col-md-6 m-auto wow fadeInLeft" data-wow-delay="0.6s">
                      <div class="app-about-cont">
                        <i class="fa fa-cog"></i>
                        <h3>Our Services</h3>
                        <p class="text-justify">We do not augment that we transform your big dreams to reality, we just commence with little ones. Bridging the gap between a recruiter and an aspirant is our sole motive. We, at Analysed, believe that every person holds a potential to reach at zenith of their career.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </section>


        <!-- FOOTER
            ==============-->
            <footer>
              <div id="footer-s1" class="footer-s1">
                <div class="footer">
                  <div class="container">
                    <div class="row">

                      <!-- Recent News -->
                      <div class="col-md-3 col-sm-6 ">
                        <div class="heading-footer"><h2>Quick Links</h2></div>
                        <ul class="list-unstyled link-list">
                          <li>  <i class="fa fa-angle-right"></i>  <a href="./about.php">About us</a></li>
                          <li>  <i class="fa fa-angle-right"></i>  <a href="./terms.php">Terms & Conditions</a></li>
                          <li>  <i class="fa fa-angle-right"></i>  <a href="./privacy-policy.php">Privacy Policy</a></li>
                          <li>  <i class="fa fa-angle-right"></i>  <a href="./career.php">Careers with us</a></li>
                          <li>  <i class="fa fa-angle-right"></i>  <a href="./faq.php">Faq</a></li>
                        </ul>
                      </div>
                      <!-- End Recent list -->

                      <!-- Latest Tweets -->
                      <div class="col-md-3 col-sm-6">
                        <div class="heading-footer"><h2>Get In Touch</h2></div>
						<ul class="list-unstyled link-list">
                        <address class="address-details-f">
                          <li> Connect with us 24/7  <br> </li>
                          <li> <b>Phone</b>: +91 (630) 003 6660 <br> </li>
                          <li> <b>Phone</b>: +91 (789) 327 8570 <br> </li>
                          <li> <b>Email</b>: <a href="mailto:support@analysed.in" class="">support@analysed.in</a> </li>
                        </address>
                        </ul>
                      </div>
                      <!-- End Latest Tweets -->

                      <!-- Recent Blog Entries -->
                      <div class="col-md-3 col-sm-6 ">
                          <div class="heading-footer"><h2>Follow Us</h2></div>
                          <ul class="list-unstyled link-list">
                            <li> <i class="fa fa-angle-right"></i> <a href="https://www.facebook.com/team" target="_blank">Facebook</a></li>
                            <li>  <i class="fa fa-angle-right"></i>  <a href="https://twitter.com/TeamAnalysed" target="_blank">Twitter</a></li>
                            <li>  <i class="fa fa-angle-right"></i>  <a href="https://www.linkedin.com/company/analysed-in/" target="_blank">LinkedIn</a></li>
                            <li>  <i class="fa fa-angle-right"></i>  <a href="https://plus.google.com/u/1/109256659736789411787" target="_blank">Google Plus</a></li>
                          </ul>
                        </div>
                        <!-- End Recent Blog Entries -->

                        <!-- Send Message -->
                        <div class="col-md-3 col-sm-6 ">
                          <div class="heading-footer"><h2>Send a Message</h2></div>
                          <form name="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '#main-contact-form2')?>">

                              <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Name" required="required">
                              </div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email Id" required="required">
                              </div>
                              <input type="hidden" name="formtype" value="contact">
                              <div class="form-group">
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message" required="required"></textarea>
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                      <!-- Send Message -->
                    </div>
                  </div><!--/container -->
                </div>
              </div>

              <div id="footer-bottom">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div id="footer-copyrights">
                                  <p>Analysed Copyrights &copy; 2019. All Rights Reserved.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
                  <i class="fa fa-angle-up"></i>
              </a>
            </footer>

        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/app.js"></script>
		<!--<script src="https://lex-web-ui-codebuilddeploy-1n8z2jax4-webappbucket-14vb5g8743fh6.s3.amazonaws.com/lex-web-ui-loader.min.js"></script>
		<script>
		  var loaderOpts = {
			baseUrl: 'https://lex-web-ui-codebuilddeploy-1n8z2jax4-webappbucket-14vb5g8743fh6.s3.amazonaws.com/'
		  };
		  var loader = new ChatBotUiLoader.IframeLoader(loaderOpts);
		  loader.load()
			.catch(function (error) { console.error(error); });
		</script>-->
		<script src="https://lex-web-mx-codebuilddeploy-1k71slxns-webappbucket-rseursdbynux.s3.amazonaws.com/lex-web-ui-loader.min.js"></script>
		<script>
		  var loaderOpts = {
			baseUrl: 'https://lex-web-mx-codebuilddeploy-1k71slxns-webappbucket-rseursdbynux.s3.amazonaws.com/'
		  };
		  var loader = new ChatBotUiLoader.IframeLoader(loaderOpts);
		  loader.load()
			.catch(function (error) { console.error(error); });
		</script>
    </body>
</html>
