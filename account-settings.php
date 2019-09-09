
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
    <title>PurpleSoftware| All Book</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
                    <h3>Account Setting</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Setting</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Account Settings Area Start Here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Edit your account</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>
        
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="index1.php"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="account-settings.php"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="new-added-form">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>First Name :</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Last Name :</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Gender :</label>
                                            <select class="select2">
                                                <option value="">Please Select Gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Date Of Birth :</label>
                                            <input type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                                data-position='bottom right'>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>E-Mail</label>
                                            <input type="email" placeholder="" class="form-control">
                                        </div> 
                                        <div class="col-lg-6 col-12 form-group">
                                            <label>Programme :</label>
                                            <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                                rows="4"></textarea>
                                        </div>                                                      
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Phone :</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                  
                </div>
                <!-- Account Settings Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="index1.php">Purple</a> 2019. All rights reserved. Designed by <a
                            href="www.purplesofts.com">PurpleSoftware</a></div>
                </footer>
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/mains.js"></script>

</body>


</html>