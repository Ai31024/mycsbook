<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PESB</title>
    <meta name="description" content="">
	<meta name="keywords" content="">
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
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
	  
	   <!-- Mid bar-->
      <div class="mid-bar">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/pesb_main_header.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="img/pesb_mobile_header.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">PESB</span></a>
           </div>
      </div>
      <!-- Mid bar end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item "><a href="index.php" >Home </a>
                  
                </li>
				<li class="nav-item "><a href="aim.php"  >Aim & Scope</a>
                  
                </li>
				 <li class="nav-item "><a href="editorial-board.php" >Advisory & Editorial Board</a>
                  
                </li>
				<li class="nav-item "><a href="instructions.php" >Instructions for Authors</a>
                  
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
               
               <li class="nav-item active "><a href="#" >Subscription</a>
                  
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
      
     <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Subscription</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.php">Home /</a></li>
                <li color="#0066ff" > Subscription</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
	  
	  <!--end  -->
     <div id="content">
        <div class="container">
          <section class="bar">
            	
			<div class="row">
              <div class="col-lg-12">
                <div class="heading">
                  <h2>ANNUAL SUBSCRIPTION </h2>
                </div>
                <li class="lead">Individual Rs.500(US $ 80.00).</li>
				<li class="lead">Institution Rs. 2000. 00 (US $ 200.00).</li>
				<p></p>
				<p class="lead" align="justify">Subscriptions may be sent to Managing Editor (Business), by demand draft drawn on any bank payable at Madhubani (Bihar) in favour of Physical and Environmental Science Bulletin.</p>
              </div>
            </div>
			
			
			
            <div class="row">
              <div class="col-lg-8">
                <div id="accordion" role="tablist">
                  <div class="card">
                    <div id="headingOne" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Payment by Demand Draft:</a></h4>
                    </div>
                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">″Physical & Environmental Science Bulletin″, Payable at Madhubani, Bihar.</p>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Bank Information of PESB: </a></h4>
                    </div>
                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p>Beneficiary Account Name: Physical & Environmental Science Bulletin.</p>
                            <p>Beneficiary Account Number: 4743002100000452..</p>
							<p>Beneficiary Bank Name: Punjab National Bank</p>
							<p>Beneficiary Bank Address: R. K. College, Madhubani Branch</p>
							<p>IFSC Code: PUNB04743</p>
							<p>MICR Code: 847024003.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				</div>
				</div>
				
				<div class="col-md-4">
                
                  <h3><a href="forms/subscription.pdf"> Download Subscription Form </a></h3>
                    
					 <!--iframe><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></iframe-->
                 
                
              </div>



			</div>
              
			
			
			
			  
			  
          </section>
		</div>

			
				<div class="container">
					<section class="bar">
		
				<div class="row">
              <div class="col-lg-12">
                <div class="heading">
                  <h2>Dear Author, </h2>
                </div>
                <p class="lead" align="justify">Your manuscript has been returned from the invited reviewers. Please implement the amendments attached (Reviewing form), and send your revised manuscript to us by e mail in MS Word Doc.</p>
				<p class="lead" align="justify">It would be extremely helpful if you use another colour in the text where changes have been made to your revised manuscript.</p>
				<p class="lead" align="justify">According to policy of the journal if you publish your paper, you need to furnish certain details regarding article to be published to meet our publication requirements.</p>
				<p class="lead" align="justify">Please fill in the form (Transfer of copyright agreement) which is enclosed then send back the scanned copy to us.</p>
				<p class="lead" align="justify">When your paper is accepted for publication, you need to pay a service charge on reviewing, editing and printing your paper.</p>
			    <p class="lead" align="justify">As you know, as an International academic journal, we must afford the reviewing and editing fee. We shall send you the hard copies of your paper. Since our journal does not carry any advertisement, so the journal charges some publication fee or submission fees to meet the minimum publication expenses.</p>
			    <p class="lead" align="justify">After we receive the publishing fee of your paper, we will send you the receipt. At the same time, we will typeset and print your paper and inform you.</p>
			    <p class="lead" align="justify">When your paper is published, you will get complimentary copy of the journal at your given postal address your paper will be send to you by express courier.</p>
			    <p class="lead" align="justify">Should you have any query, please do not hesitate to contact us!</p>
			    <p class="lead" align="justify">Best wishes!!!</p>
			    <p class="lead" align="justify">Sincerely yours:-</p>
			    <p class="lead" align="justify">Physical & Environmental Science Bulletin</p>
			  
			  </div>
            </div>
				 
				 
				 
                </div>
              </div>
             
            </div>
          </section>
          
       <div class="container">
					<section class="bar">
		
				<div class="row">
              <div class="col-lg-12">
                <div class="heading">
                  <h2>Note:- </h2>
                </div>
                <p class="lead" align="justify">1. Please inform us the remitter and date or send a copy of the bank counterfoil for reconciliation by mail after the payment, or else it may be very hard to audit.</p>
				<p class="lead" align="justify">2. It will be very helpful for us to check your payment if your paper no. is noted on the remarks (e.g., fee for paper PESB-PV201).</p>
				
			  
			  </div>
            </div>
				 
				 
				 
                </div>
              </div>
             
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