<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Depp logistic</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/css/font-face.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/css/style.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/font-awesome-4.7/css/font-awesome.min.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/font-awesome-5/css/fontawesome-all.min.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/mdi-font/css/material-design-iconic-font.min.css")?>" rel="stylesheet" media="all">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS-->
    <link href="<?=base_url("Assests/vendor/bootstrap-4.1/bootstrap.min.css")?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
  

    <!-- Vendor CSS-->
    <link href="<?=base_url("Assests/vendor/animsition/animsition.min.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/wow/animate.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/css-hamburgers/hamburgers.min.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/slick/slick.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/select2/select2.min.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/perfect-scrollbar/perfect-scrollbar.css")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/vector-map/jqvmap.min.css")?>" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?=base_url("Assests/css/theme.css")?>" rel="stylesheet" media="all">
     <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script scr="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <!-- <link href="<//?=base_url("Assests/vendor/jquery-3.2.1.min.js")?>" rel="stylesheet" media="all">-->
</head>
<body class="animsition">
<div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <h3> Deep Logistics</h3>
                  <!--  <img src="//base_url("Assests/images/icon/logo-white.png")" alt="Cool Admin" />-->
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
               
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                    <li class="active">
                            <a href="<?=base_url('Dashboard/index');?>">
                                <i class="fas fa-shopping-basket"></i>DASHBOARD</a>
                        </li>
                    <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>BRANCH
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url('Branch/index');?>">
                                        <i class="fas fa-tachometer-alt"></i>CREATE BRANCH</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Branch/viewbranch');?>">
                                        <i class="fas fa-tachometer-alt"></i>VIEW BRANCH</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>USER
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url('Users/index');?>">
                                        <i class="fas fa-tachometer-alt"></i>CREATE USER</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Users/viewuser');?>">
                                        <i class="fas fa-tachometer-alt"></i>VIEW USER</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>NATURE OF GOODS
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                            <a href="<?=base_url('NatureOfgoods/index');?>">
                                <i class="fas fa-chart-bar"></i>CREATE </a>
                            
                            </li>
                            <li>
                              <a href="<?=base_url('NatureOfgoods/viewgoods');?>">
                                    <i class="fas fa-chart-bar"></i>VIEW</a>
                              </li>
                            </ul>
                        </li>
                
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>BOOKING
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                            <a href="<?=base_url('BookAload/index');?>">
                                <i class="fas fa-chart-bar"></i>BOOK A LOAD</a>
                            
                            </li>
                            <li>
                              <a href="<?=base_url('BookAload/view_book');?>">
                                    <i class="fas fa-chart-bar"></i>VIEW BOOK</a>
                              </li>
                              <li>
                              <a href="<?=base_url('BookAload/invoice');?>">
                                    <i class="fas fa-chart-bar"></i>INVOICE</a>
                              </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url('FullLoad/index');?>">
                                <i class="fas fa-shopping-basket"></i>FULL LOAD</a>
                        </li>
                        <!--manifesto-->
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>MANIFESTO
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url('MainFesto/index');?>">
                                        <i class="fas fa-tachometer-alt"></i>CREATE MANIFESTO</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('MainFesto/viewmanifesto');?>">
                                        <i class="fas fa-tachometer-alt"></i>VIEW MANIFESTO</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('MainFesto/recivingmanifesto');?>">
                                        <i class="fas fa-tachometer-alt"></i>RECIVING MANIFESTO</a>
                                </li>
                            </ul>
                        </li>
                        <!--end manifesto-->
                        <li>
                            <a href="<?=base_url('Report/index');?>">
                                <i class="fas fa-shopping-basket"></i>REPORT</a>
                        </li>
                          <li>
                            <?php
                            if ($this->session->userdata('id')) { ?>
                                <a href="<?= base_url('users/logout'); ?>">
                                    <i class="fas fa-shopping-basket"></i>Sign Out</a>
                            <?php } ?>
                        </li>
                      
                      
                        
                    </ul>
                </nav>
            </div>
            </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?=base_url("Assests/images/icon/logo-white.png")?>" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                               
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="<?=base_url("Assests/images/icon/logo-white.png")?>" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="<?=base_url("Assests/images/icon/avatar-big-01.jpg")?>" alt="John Doe" />
                        </div>
                            <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                     <ul class="list-unstyled navbar__list">
                     <li>
                            <a href="<?=base_url('Dashboard/index');?>">
                                <i class="fas fa-shopping-basket"></i>DASHBOARD</a>
                    </li>
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>BRANCH
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url('Branch/index');?>">
                                        <i class="fas fa-tachometer-alt"></i>CREATE BRANCH</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Branch/viewbranch');?>">
                                        <i class="fas fa-tachometer-alt"></i>VIEW BRANCH</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>USER
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url('Users/index');?>">
                                        <i class="fas fa-tachometer-alt"></i>CREATE USER</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('Users/viewuser');?>">
                                        <i class="fas fa-tachometer-alt"></i>VIEW USER</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>BOOKING
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                            <a href="<?=base_url('BookAload/index');?>">
                                <i class="fas fa-chart-bar"></i>BOOK A LOAD</a>
                            
                            </li>
                            <li>
                              <a href="<?=base_url('BookAload/view_book');?>">
                                    <i class="fas fa-chart-bar"></i>VIEW BOOK</a>
                              </li>
                              <li>
                              <a href="<?=base_url('BookAload/invoice');?>">
                                    <i class="fas fa-chart-bar"></i>INVOICE</a>
                              </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url('FullLoad/index');?>">
                                <i class="fas fa-shopping-basket"></i>FULL LOAD</a>
                        </li>
                        <!--manifesto-->
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>MAINFESTO
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?=base_url('MainFesto/index');?>">
                                        <i class="fas fa-tachometer-alt"></i>CREATE MAINFESTO</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('MainFesto/viewmanifesto');?>">
                                        <i class="fas fa-tachometer-alt"></i>VIEW MAINFESTO</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('MainFesto/recivingmanifesto');?>">
                                        <i class="fas fa-tachometer-alt"></i>RECIVING MAINFESTO</a>
                                </li>
                            </ul>
                        </li>
                        <!--end manifesto-->
                        <li>
                            <a href="<?=base_url('Report/index');?>">
                                <i class="fas fa-shopping-basket"></i>REPORT</a>
                        </li>
                          <li>
                            <?php
                            if ($this->session->userdata('id')) { ?>
                                <a href="<?= base_url('users/logout'); ?>">
                                    <i class="fas fa-shopping-basket"></i>Sign Out</a>
                            <?php } ?>
                        </li>
                           
                           
                           
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
       <!--     <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                      <!--  <span class="au-breadcrumb-span">You are here</span>-->
                                       <!-- <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                               <!-- <a href="#">Home</a>-->
                                          <!--  </li>
                                            <li class="list-inline-item seprate">
                                                <span></span>
                                            </li>
                                          <!--  <li class="list-inline-item">Dashboard</li>-->
                                      <!--  </ul>
                                    </div>
                                    <?php
                                       if($this->session->userdata('id'))
                                    {
                                    ?><li><a href="<?=  base_url('users/logout'); ?>" class="au-btn au-btn-icon au-btn--green" ><i class="zmdi zmdi-plus"></i>Logout</a></li>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- END BREADCRUMB-->

 <?= $contents ?>
   <!-- Jquery JS-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- <link href="<//?=base_url("Assests/vendor/jquery-3.2.1.min.js")?>" rel="stylesheet" media="all">-->
    <!-- Bootstrap JS-->
    <link href="<?=base_url("Assests/vendor/bootstrap-4.1/popper.min.js")?>" rel="stylesheet" media="all">
    <link href="<?=base_url("Assests/vendor/bootstrap-4.1/bootstrap.min.js")?>" rel="stylesheet" media="all">
    <!-- Vendor JS       -->
    <script src="<?=base_url("Assests/vendor/slick/slick.min.js")?>">
    </script>
    <link href="<?=base_url("Assests/vendor/slick/slick.min.js")?>" rel="stylesheet" media="all">
    <script src="<?=base_url("Assests/vendor/wow/wow.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/animsition/animsition.min.js")?>"></script> 
    <script src="<?=base_url("Assests/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js")?>"></script> 
    <script src="<?=base_url("Assests/vendor/counter-up/jquery.waypoints.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/counter-up/jquery.counterup.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/circle-progress/circle-progress.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/perfect-scrollbar/perfect-scrollbar.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/chartjs/Chart.bundle.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/select2/select2.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/vector-map/jquery.vmap.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/vector-map/jquery.vmap.min.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/vector-map/jquery.vmap.sampledata.js")?>"></script>
    <script src="<?=base_url("Assests/vendor/vector-map/jquery.vmap.world.js")?>"></script>
   <!-- Main JS-->
    <script src="<?=base_url("Assests/js/main.js")?>"></script>

</body>

</html>
<!-- end document-->