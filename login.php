<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="#">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <title>PurpleSoftware</title>

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="css/plugin.css" />	        

        <!-- typography -->
        <link rel="stylesheet" type="text/css" href="css/typographies.css" />

        <!-- templete element -->
        <link rel="stylesheet" type="text/css" href="css/template-element.css" />        

        <!-- template CSS -->
        <link href="css/style.css" rel="stylesheet">
		
        <!-- responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">

         <!-- custom CSS -->
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body style="background-image: url(images/ghf.jpg); height: 90vh; background-size: cover;">
		
		<header>		
			<nav hidden class="nav-white full-width nav-transparent">
				<div class="nav-header">
					<a href="index.php" class="brand">
						<img src="images/brand/logo3.png" alt=""/>
					</a>
					<button class="toggle-bar">
						<span class="ti-menu"></span>
					</button>	
				</div>	
				
			</nav>
            <section class="section-ptb-150 bg-overlay-black-40" data-jarallax='{"speed": 0.4}' style="background:transparent;">
            <div class="container">
                <div class="row dark-bg">
                    <div class="col-12">
                        <div class="section-heading mt-50 text-center">
                            <h6 class="sub-heading">Purple Training Programme</h6>
                            <h1 class="heading">Student Portal</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<section id="contact" class="section-ptb-80 sm-pb-50 sm-pt-50" style="background: transparent;">
			<div class="container" style="background-color= #0009";>


				
                <div style="background-color= #0009"; class="row justify-content-center">
                    <div class="col-md-8 col-12">
                    <form action="login.php" method="post">
                    <div style="color: red; font_weight: 700; font-size: 20px;">
                            <?php
                            include "db.php";

                            if (isset($_POST['btnsub'])) {

                                $email= $_POST['email'];
                                $password=$_POST['password'];

                                $log=mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

                                $row=mysqli_fetch_array($log);
                                if ($row>=1) {
                                    session_start();
                                    $_SESSION['users'] = $row;
        
                                    echo '<script> window.location="index1.php"</script>';
                                }else{
                                    echo 'Incorrect details';
                                }
                                
                            
                            }

                            ?>
                        </div>
                        <div class="login-2-form clearfix pb-50 pt-50 pl-50 pr-50 sm-pb-15 sm-pt-15 sm-pl-15 sm-pr-15 bg-light-gray" style="background-color: #0009; border-radius: 20px;"; >
                            <div class="form-field mb-20">
                                <label class="mb-10" for="name">Email* </label>
                                <input class="web form-control bg-white" type="email" placeholder="Enter Email" name="email">
                            </div>
                            <div class="form-field mb-20">
                                <label class="mb-10" for="Password">Password* </label>
                                <input id="Password" class="Password form-control bg-white" type="password" placeholder=" Enter Password" name="password">
                            </div>
                            <div class="form-field">
                                <div class="demo-checkbox mb-30">
                                    <input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" checked />
                                    <label for="md_checkbox_33" style="color: blue;">Remember</label>	
                                    <a href="#" class="float-right">Forgot Password?</a>
                                </div>
                            </div>
                            
                            <input type="submit" name="btnsub" class="cs-button" value="login">
                           

                        </div>
 
                    </form>
                    </div>
                </div> 
                <div class="row text-center pt-50">
                   
                </div>
			</div>
		</section>
		</header>
	    <!--end nav bar-->
		
        

		
		<footer class="footer footer-2 bg-black">
            <div class="container">
                <div class="footer-copyright border-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <p class="mt-10"> ©Copyright <span id="copyright">2019</span> <a href="#"> PurpleSoftware </a> All Rights Reserved </p>
                        </div>
                        <div class="col-lg-6 col-md-6 text-right text-md-right">
							<div class="footer-terms">
							  <ul class="text-right">
								<li class="list-inline-item"><a href="term.php">Terms &amp; Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
								<li class="list-inline-item"><a href="term.php">usage Policy </a> &nbsp;&nbsp;&nbsp;|</li>
								<li class="list-inline-item"><a href="term.php">Privacy Policy </a> </li>
							  </ul>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
		<!-- jQuery -->
		<script src="vendor/jquery/jquery.min.js"></script>

		<!-- Popper -->
		<script src="vendor/js/popper.min.js"></script>

		<!-- bootstrap Core JavaScript -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Corenav Master JavaScript -->
		<script src="vendor/corenav-master/coreNavigation-1.1.3.js"></script>
		<script src="js/nav.js"></script>

		<!-- custom JavaScript -->
		<script src="js/custom.js"></script>

		<!-- template JavaScript -->
		<script src="js/template.js"></script>

		<!--jarallax javascript -->
		<script src="js/jarallax.js"></script>
		
    </body>


</html>