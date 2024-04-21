
<!DOCTYPE html>
<?php 
	$visitor_ip =$_SERVER['REMOTE_ADDR'];
	
	include('db_conn.php');
	
	     
	$qry="INSERT INTO `visitor_table` (`id`, `ip_address`) VALUES (NULL, '$visitor_ip');";
	
	
	$run = mysqli_query($con,$qry);
	
	// count
	$qry2="SELECT * from visitor_table";
												
	$run2 = mysqli_query($con,$qry2);
	$row = mysqli_num_rows($run2);
?>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PESB</title>
    <meta name="description" content="Physical and Environmental Science Bulletin">
	<meta name="keywords" content="pesb, Physical and Environmental Science Bulletin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	


 </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +91 8130262747 or mailpesb@gmail.com</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login"><a href="login_page.php" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a><a href="user-register.php" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Register</span></a></div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
     
	  
	   <!-- Mid bar-->
      <div class="mid-bar">
        <div class="container"><a href="#" class="navbar-brand home"><img src="img/pesb_main_header.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/pesb_mobile_header.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">PESB</span></a>
           </div>
      </div>
      <!-- Mid bar end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active"><a href="javascript: void(0)" data-toggle="dropdown" >Home </a>
                  
                </li>
				<li class="nav-item dropdown "><a href="aim.php"  >Aim & Scope</a>
                  
                </li>
				 <li class="nav-item dropdown "><a href="editorial-board.php" >Advisory & Editorial Board</a>
                  
                </li>
				<li class="nav-item dropdown "><a href="instructions.php" >Instructions for Authors</a>
                  
                </li>
			<!-- PREVIOUS ISSUES -->
               <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Previous Issues <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				  
						<?php
							include('db_conn.php');
											
								$qry="SELECT id, year from year_names";
												
									$run = mysqli_query($con,$qry);
									$row = mysqli_num_rows($run);																										
										while ($data= mysqli_fetch_assoc($run))
														
											{
												echo "<li><a href=display.php?id=".$data['id'].">".$data['year']."</a></li>";
											}
											
						?>
                  
                    
                  </ul>
                </li>
             <!-- PREVIOUS ISSUES --> 
               <li class="nav-item dropdown"><a href="subscription.php" >Subscription</a>                  
                </li>
				
				
				
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item"><a href="feedback.php">Contact Us</a>
                  
                </li>
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
			</div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->
	  
	  <!-- Start service  -->
	  <?php            
        include('db_conn.php');
		$qry ="SELECT * FROM `marquee`";        
        $run = mysqli_query($con,$qry);
		
	  ?>
	  
 <div
   <h1><marquee  bgcolor="black"  behavior="scroll" height="40"  direction="left" onmouseover = "this.stop();" onmouseout = "this.start();"width="100%" ><font color="red" size="6">
      <?php            
           
    while($row= mysqli_fetch_array($run))
    {       	   
	    
		 echo "<a href=".$row['pdf_path'].">".$row['notice']."#</a>";
    }     
	?>  
	 </font></marquee></h1>
	 
</div>
<!-- End service  -->
      
      <section style="background: url('img/bk1.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
        <div class="container">
          <!-- Carousel Start-->
          <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
              <div class="homepage owl-carousel">
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      
                      <h1>PHYSICS</h1>
                      
                    </div>
                    <div class="col-md-7"><img src="img/physics-10.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <h1>CHEMISTRY </h1>
                      
                    </div>
                    <div class="col-md-7"><img src="img/chem-1.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
                <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <h1>MATHEMATICS </h1>
                      
                    </div>
                    <div class="col-md-7"><img src="img/maths-1.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
               <div class="item">
                  <div class="row">
                    <div class="col-md-5 text-right">
                      <h1>ENVIRONMENTAL SCIENCE</h1>
                      
                    </div>
                    <div class="col-md-7"><img src="img/env-1.png" alt="" class="img-fluid"></div>
                  </div>
                </div>
            </div>
          </div>
          <!-- Carousel End-->
        </div>
      </section>
     
      
      <section style="background: url(img/bk3.jpg) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
        <div class="dark-mask"></div>
        <div class="container">
          
          <h3 class="text-uppercase">WHO WE ARE ?</h3>
          <p class="lead">We are a multidisciplinary peer-reviewed journal with reputed academic experts as members of Advisory Board and Editorial Board.</p>
          <p class="lead">We would like to invite you to contribute your Research Paper for publication in PESB.</p>
		  <p class="lead">The journal covers all areas of Physics, Chemistry, Mathematics, Environmental Sciences, Life Science and many more.</p>
        </div>
      </section>
      
      
     
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">Office:</h4>
              <p>F - 23, Ground Floor, Sector 41, Noida (UP) Mob: +918130262747</p>
              <hr>
             
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
             
              
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Mailing Address:</h4>
              <p class="text-uppercase"><strong>Dr. Dhirendra Kumar, Editor</strong><br>R. K. College Road, <br> Bhagwati Asthan, <br>District: Madhubani- 847211 (Bihar).  <br>Mobile : +91- 9431286777.<br>E -Mail : mailpesb@gmail.com <br></p>
              <hr class="d-block d-lg-none">
            </div>
            
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2019. PESB </p><div class="login"></i><span class="d-none d-md-inline-block">Visitors:<?php echo $row; ?></span></a></i></div>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious </a>& <a href="https://fity.cz/ostrava">Fity, Powered by Care TRONICS</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>