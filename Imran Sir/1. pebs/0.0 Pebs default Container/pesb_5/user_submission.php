<?php

session_start();

	if($_SESSION['login_user'])
		
		{
			//echo $_SESSION['login_user'];
		}
		
	else
	{
		header('location:index.php');
	}
?>
<?php
	
	$name_id = $_GET['id'];
			
 ?>

<!DOCTYPE html>
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
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
     
	  
	   <!-- Mid bar-->
      <div class="mid-bar">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/pesb_main_header.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/pesb_mobile_header.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">PESB</span></a>
           </div>
      </div>
      <!-- Mid bar end-->
      
      
     <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Welcome <?php echo $_SESSION['login_user']?></h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.php">User Dashboard</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
	  
	  

     
    
      <div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <div id="customer-orders" class="col-md-9">
              <p class="text-muted lead">Submission Form</p>
             <form method="post" enctype="multipart/form-data"  action="insert-submission.php">
                 
                  <div class="content">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="firstname">Topic</label>
                          <input name="user-topic" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="lastname">Keywords</label>
                          <input name="user-keywords" type="text" class="form-control">
                        </div>
                      </div>
					  
					  <div class="col-sm-6">
                        <div class="form-group">
                          <label for="lastname">Name of Author</label>
                          <input name="user-author" type="text" class="form-control">
                        </div>
                      </div> 
					  
					  <div class="col-sm-6">
						<div class="form-group">
							<label for="lastname">Please Select your file in MS WORD FORMAT.  </label>
							<input type="file" name="myfile" multiple="multiple"/>
                      </div>
                      </div>
					  
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="company">Abstract</label>
                         
                        </div>
						 <textarea  rows="10" cols="100" name="user-abstract"> </textarea>
                      </div>
					  
                    </div>
					
					  
                  </div>
                  <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                    <br>
					<br>
					<br>
                    <div class="right-col">
						
						<input type="hidden" name="username" class="form-control" value=<?php echo $name_id ?>>
                      <button type="submit" name="submit_journal" class="btn btn-template-main">Submit<i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">User section</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    
                    
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
     
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
                <p>&copy; 2019. PESB </p>
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