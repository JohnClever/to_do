<?php
    session_start();
    if(empty($_SESSION['users'])){
        echo "<script>window.location='index.php'</script>";
    }
?>
<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PurpleSoftware</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstraps.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
     <!-- icon -->
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index1.php">
                        <img src="images/brand/logo3.png" alt="logo" width="170px" height="30px">
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title"><?php echo $_SESSION['users']['f_name']." ".$_SESSION['users']['l_name']?></h5>
                                <span>Student</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title"><?php echo $_SESSION['users']['f_name']." ".$_SESSION['users']['l_name']?></h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="index3.php"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="account-settings.php"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>  
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" style="background:linear gradient rgb(to top, 139, 231);">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index1.php"><img src="images/brand/logo3.png" width="170px" height="30px" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content" >
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="index3.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>My Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Tutorials</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="video.php" class="nav-link"><i class="fas fa-angle-right"></i>Video
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Assignment</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>New
                                        books to be added</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="account-settings.php" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index1.php">Home</a>
                        </li>
                        <li>Student</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green " style="background-image: url(images/im.png); background-size: cover;">
                                       
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Active Courses</div>
                                        <div class="item-number"><span><a href="all-class.php" style="font-size: 12px;">view Courses</a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-blue" style="background-image: url(images/com.png); background-size: cover;">
                                       
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title"><a>Completed Courses</a></div>
                                        <div class="item-number"><span><a href="#" style="font-size: 12px;">view Courses</a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-yellow" style="background-image: url(images/da.png); background-size: cover;" >
                                        
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Favourite Courses</div>
                                        <div class="item-number"><span><a href="#" style="font-size: 12px;">view Courses</a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-red" style="background-image: url(images/cert.png); background-size: cover;">
                                       
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">My Certificates</div>
                                        <div class="item-number"><span><a href="#" style="font-size: 12px;">view cert</a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Dashboard Content End Here -->
                <!-- Social Media Start Here -->
                <div class="row gutters-20">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-fb hover-fb">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                    <a href="https://www.facebook.com/Purple-Softwares-509581176232542/?modal=admin_todo_tour" target="blank"><h6 class="item-title" style="cursor: pointer;">Like us on facebook</h6></a>
                                    </div>
                                </div>
                                <div class="social-like"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-twitter hover-twitter">
                                <div class="media media-none--lg">
                                        <div class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                        <a href="https://twitter.com/PurpleSoftwares" target="blank"><h6 class="item-title" style="cursor: pointer;">Follow us on twitter</h6></a>
                                        </div>
                                </div>
                                <div class="social-like"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-gplus hover-gplus">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                        <i class="fab fa-google-plus-g"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                       <a href="https://purplesoftwares@gmail.com" target="blank"><h6 class="item-title" style="cursor: pointer;">Send us a mail</h6></a>
                                    </div>
                                </div>
                                <div class="social-like"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card dashboard-card-seven">
                            <div class="social-media bg-gplus hover-gplus">
                                <div class="media media-none--lg">
                                    <div class="social-icon">
                                    <i class="fab fa-youtube"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                     <a href="https://www.youtube.com/channel/UCldm7jSjN8I1AtFqkH6_Fdg" target="blank"><h6 class="item-title" style="cursor: pointer;">Watch our videos</h6></a> 
                                    </div>
                                </div>
                                <div class="social-like"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="index1.php">Purple</a> 2019. All rights reserved. Designed by <a
                            href="www.purplesofts.com">PurpleSoftware</a></div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstraps.min.js"></script>
    <!-- Counterup Js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Moment Js -->
    <script src="js/moment.min.js"></script>
    <!-- Waypoints Js -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Full Calender Js -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- Chart Js -->
    <script src="js/Chart.min.js"></script>
    <!-- Custom Js -->
    <script src="js/mains.js"></script>

</body>

</html>