
<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Purple Software</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome1.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>


<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Student Portal</h1>
		<!---728x90--->

		<div class="header-main">
			<div class="main-icon">
				<span class=""><img src="images/logo1.png" style = "height: 30px; margin-bottom: 10px;"></span>
			</div>
			<div class="header-left-bottom">
			<?php
                            include "db.php";

                            if (isset($_POST['submit'])) {

                                $email= $_POST['email'];
								$password=$_POST['password'];
								if (empty($email)) {
									echo 'Enter email';
								}elseif (empty($password)) {
									echo 'Enter password';
								}elseif (strlen($password) < 6) {
									echo 'Password too short';									
								}else {
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
                            }

                            ?>
				<form action="#" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" name = "email" placeholder="Email Address" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" name = "password" placeholder="Password" required=""/>
					</div>
					
					<div class="bottom">
						<button name="submit" class="btn">Log In</button>
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<!-- <div class="social">
				<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div> -->
		</div>
		<!---728x90--->

		<!-- copyright -->
		<div class="copyright">
			<p>© 2019 Purple Software . All rights reserved | Design by <a href="http://Purplesofts.com/" target="_blank">Purple Software</a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>


</html>