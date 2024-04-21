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
				<li class="nav-item active "><a href="#" >Instructions for Authors</a>
                  
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
               
               <li class="nav-item dropdown "><a href="subscription.php" >Subscription</a>
                  
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
              <h1 class="h2">Instructions for Authors</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.php">Home /</a></li>
                <li color="#0066ff" > Instructions for Authors</li>
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
              <div class="col-lg-8">
                <div id="accordion" role="tablist">
                  <div class="card">
                    <div id="headingOne" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">GENERAL</a></h4>
                    </div>
                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Physical and Environmental Science Bulletin covers all areas of basic and applied aspects of Physics, Chemistry, Mathematics, Life Sciences, Environmental Sciences, Medical Sciences, Behavioral Sciences, Engineering, Geology, Marine Science, Computer Science, Toxicology etc. It also welcomes the submission of manuscript that meet general criteria of significance and scientific excellence but a contribution must have one of these subjects as its focus and be of relevant interest to scientists for acceptability. Both original research papers and review articles on current topics are biannually published. Book reviews are usually solicited, but suggestions of book for review are welcome. All contributions undergo editorial scanning and a peer- reviewed.</p>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">SUBMISSION </a></h4>
                    </div>
                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Submitted manuscript must not have been published previously nor they should have been under considerations for publications. Further, submission to PESB will be deemed to imply that the manuscript will not be submitted elsewhere if accepted. All submission should be mailed either to the Editor or to the consulting Editor or both. Electronic submission of manuscript is strongly encouraged, provided that the text, tables, and figures, are included in a single Microsoft word file(preferably in Aerial,font size 12). All portions of the submission should be typed double- spaced on one side of white A4 paper with ample margins on all sides. The corresponding author should give the complete mailing address, telephone number, mobile number and e- mail address. Submit manuscript as E- mail address. Submit manuscript as E mail attachment to the PESB at pesb@gmail.com, k.dhirendra17@gmail.com, premkuprasad@gmail.com.  An acknowledgement mail will be mailed to the corresponding author within 3 days of receipt. Decision of the PESB is final in the matter of acceptability for publications. The corresponding author is responsible for ensuring that the article′ s publication has been approved by all the co-authors.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingThree" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">REVIEW PROCESS</a></h4>
                    </div>
                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Submitted manuscript must not have been published previously nor they should have been under considerations for publications. Further, submission to PESB will be deemed to imply that the manuscript will not be submitted elsewhere if accepted. All submission should be mailed either to the Editor or to the consulting Editor or both. Electronic submission of manuscript is strongly encouraged, provided that the text, tables, and figures, are included in a single Microsoft word file(preferably in Aerial,font size 12). All portions of the submission should be typed double- spaced on one side of white A4 paper with ample margins on all sides. The corresponding author should give the complete mailing address, telephone number, mobile number and e- mail address. Submit manuscript as E- mail address. Submit manuscript as E mail attachment to the PESB at pesb@gmail.com, k.dhirendra17@gmail.com, premkuprasad@gmail.com.  An acknowledgement mail will be mailed to the corresponding author within 3 days of receipt. Decision of the PESB is final in the matter of acceptability for publications. The corresponding author is responsible for ensuring that the article′ s publication has been approved by all the co-authors.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
				 <div class="card">
                    <div id="headingFour" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">Title</a></h4>
                    </div>
                    <div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">The Title should be brief but interesting and comprehensive to a non- specialist reader, and contain word useful for indexing. This page must also include full names of all the authors and affiliations (institutional addresses),the name of the corresponding authors should be asterisk (*) and the corresponding authors Phone, mobile, fax, and E-mail information should be provided. The journal encourages authors to have their e-mail addresses printed.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  <div class="card">
                    <div id="headingFive" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" class="collapsed">Abstract</a></h4>
                    </div>
                    <div id="collapseFive" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">The abstract, not exceeding 200 words should convey the essence of the contribution even to a non specialist reader. For an original research paper, the abstract should include a few sentences of background to the work, the rationale, and the main results and conclusions. Abbreviations are discouraged.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				 
				 <div class="card">
                    <div id="headingSix" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix" class="collapsed">Keywords</a></h4>
                    </div>
                    <div id="collapseSix" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">A minimum of five (5) keywords that will provide indexing to the references should be stated.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingSeven" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" class="collapsed">Main Text</a></h4>
                    </div>
                    <div id="collapseSeven" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">This should be divided into sections with first- level headings(centred to Column) such as Introduction, Materials and Methods, Results and Discussion. These may also be descriptive headings; such may be sub section with short, descriptive headings.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingEight" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight" class="collapsed">Conventions</a></h4>
                    </div>
                    <div id="collapseEight" role="tabpanel" aria-labelledby="headingEight" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Authors should follow internationally accepted conventions in regard to units, symbols, and aberrations.SI units of measurements and standard aberrations only should be used. Authors are urged to take great care in distinguishing between genotype and phenotype clearly in all sections of the manuscript, including tables and illustrations.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  
				  <div class="card">
                    <div id="headingNine" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine" class="collapsed">Tables & Illustrations</a></h4>
                    </div>
                    <div id="collapseNine" role="tabpanel" aria-labelledby="headingNine" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">All tables should be numbered, serially in Arabic numerals in order of appearance. All figures should be numbered in Arabic numbers in order of appearances. Authors should take responsibility for neat and correct arrangements of multi part figures. Photograph should be sharp, high contrast, glossy prints, any labeling (such as arrows or letter symbols) should be clear and applied with a fine pen. Colours photograph can be accepted only when absolutely necessary. DNA, RNA and protein sequence will be treated as figures, and the instructions for line drawings apply.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingTen" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen" class="collapsed">Refrences</a></h4>
                    </div>
                    <div id="collapseTen" role="tabpanel" aria-labelledby="headingTen" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Citations in the text by the name and year, not number, in chronological order and then alphabetically for the same year, and enclosed in parentheses. When there are two authors, the citation should include both names. When there are three or more authors, the citations should have only the first author and et. al′. Two or more citations are separated by a semicolon. References should be listed in alphabetical order of author. Unpublished observations and personal communication should not be included in the list of reference, but should be cited within parentheses in the appropriate place in the text with the full names of the sources. The list of references may include papers accepted, but yet not published, such references should include the journal name and ″in press″ in parentheses at the end. Abstracts should not be used as references. Authors are fully responsible for the accuracy of the references.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingEleven" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" class="collapsed">Examples</a></h4>
                    </div>
                    <div id="collapseEleven" role="tabpanel" aria-labelledby="headingEleven" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Hirschi AM. 1994. Helicobacter pylori: pathogens, pathomechanism and epidemiology. pp. 538-42 Wein Klin Wonchenschr. Via s. 1994. The evaluations of phenotype plasticity: what do we really know? In Ecological genetics (ed. L. A. Real), pp. 33-57. Princeton University Press, Princeton.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingTwelve" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve" class="collapsed">Acknowledgements</a></h4>
                    </div>
                    <div id="collapseTwelve" role="tabpanel" aria-labelledby="headingTwelve" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">These should follow immediately after the end of the main text. In references to granting agencies, the name should be written out fully.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingThirteen" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen" class="collapsed">Proofs</a></h4>
                    </div>
                    <div id="collapseThirteen" role="tabpanel" aria-labelledby="headingThirteen" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Authors are requested to prepare their manuscript carefully and in accordance with these instructions to avoid delays and to minimize corrections and alterations in copy editing. The corresponding author will receive proof( e- mail attachment). Page proof are considered to be the final version of the manuscript. Corrected proofs should be returned to the Office within a few days of receipts preferably by e- mails. Alterations of more than a minor nature can be cannot be accepted at this stage. No further proofs will be sent.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingFourteen" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen" class="collapsed">Reprints</a></h4>
                    </div>
                    <div id="collapseFourteen" role="tabpanel" aria-labelledby="headingFourteen" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Twenty reprints will be supplied to the corresponding author free of charge.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				  
				  <div class="card">
                    <div id="headingFifteen" role="tab" class="card-header">
                      <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen" class="collapsed">Copyrights</a></h4>
                    </div>
                    <div id="collapseFifteen" role="tabpanel" aria-labelledby="headingFifteen" data-parent="#accordion" class="collapse">
                      <div class="card-body">
                        <div class="row">
                         
                          <div class="lead">
                            <p align="justify">Physical and Environmental Science Bulletin, publishers of this journal, will acquire a copyright over all the published articles.In case of submission and the consequent acceptance of the manuscript for publication, the author would readily agree to automatic transfer of the copyright to the publisher.</p>
                           
							
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  
				 
				 
				 
                </div>
              </div>
             
            </div>
          </section>
          
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