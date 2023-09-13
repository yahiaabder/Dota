
<?php 

    // $uri = ();
    // var_dump($uri);die();

?>



<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dota Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">

    <!-- Canonical SEO  -->
    <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard">

    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard, bootstrap 4 admin, bootstrap 4 template, bootstrap 4 dashboard, bootstrap 4, free bootstrap 4">
    <meta name="description" content="A bootstrap 4 admin dashboard template designed to be simple and beautiful.">

    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet"> -->
    <link href="<?php echo base_url() ?>/assets/css/admin/index.css" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/css/demo.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/grocery-crud/css/bootstrap/v4/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/grocery-crud/css/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/grocery-crud/css/grocery-crud-v2.8.8.10b14e1.css" rel="stylesheet">
    
    <!-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/7/intl/es_ALL/common.js"></script> -->
    <!-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/7/intl/es_ALL/util.js"></script> -->
    <!-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/7/intl/es_ALL/stats.js"></script> -->
    <!-- <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttps%3A%2F%2Fdemos.creative-tim.com%2Flight-bootstrap-dashboard%2Fexamples%2Fdashboard.html%3F_ga%3D2.22224315.1471826603.1531747550-1340017084.1530656181&amp;4sAIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU&amp;callback=_xdc_._4ykeoi&amp;key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU&amp;token=53352"></script> -->
</head>

<body>
    <div class="wrapper">
        
        <!-- Side Bar -->
        <div class="sidebar" data-image="">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
            Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a target="blank" href="<?php echo base_url() ?>" class="simple-text">
                        Dota
                    </a>
                </div>

                <ul class="nav">
                    <!-- <li>
                        <a class="nav-link <?php if(url_is('admin/dashboard')) echo 'selected'; ?>" href="<?php echo base_url() ?>/admin/dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link <?php if(url_is('admin/account')) echo 'selected'; ?>" href="<?php echo base_url() ?>/admin/account">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Account</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link <?php if(url_is('admin/dashboard')) echo 'selected'; ?>" href="<?php echo base_url() ?>/admin/dashboard">
                            <i class="nc-icon nc-notes"></i>
                            <p>List of registrations</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="nav-link <?php if(url_is('admin/blogs')) echo 'selected'; ?>" href="<?php echo base_url() ?>/admin/blogs">
                            <i class="nc-icon nc-notes"></i>
                            <p>Blogs</p>
                        </a>
                    </li> -->
                    
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <!-- <i class="nc-icon nc-alien-33"></i> -->
                            <p class="d-block text-center">BYA ©</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Side Bar -->

        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid f-flex justify-content-end">
                    <!-- <a class="navbar-brand" href="#pablo"> Notifications </a> -->
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto row col-12 m-0 justify-content-end">
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url() ?>/admin/logout">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Notifications</h4>
                            <p class="card-category">Handcrafted by our friend
                                <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
                                <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
                            </p>
                        </div>

                        <!-- Main Content -->
                        <div class="card-body">
                            <?php if(false): ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>
                                        <small>Notifications Style</small>
                                    </h5>
                                    <div class="alert alert-info">
                                        <span>This is a plain notification</span>
                                    </div>
                                    <div class="alert alert-info">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>This is a notification with close button.</span>
                                    </div>
                                    <div class="alert alert-info alert-with-icon" data-notify="container">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                                        <span data-notify="message">This is a notification with close button and icon.</span>
                                    </div>
                                    <div class="alert alert-info alert-with-icon" data-notify="container">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                                        <span data-notify="message">This is a notification with close button and icon
                                            and have many lines. You can see that the icon and the close button are
                                            always vertically aligned. This is a beautiful notification. So you don't
                                            have to worry about the style.</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>
                                        <small>Notification States</small>
                                    </h5>
                                    <div class="alert alert-primary">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
                                    </div>
                                    <div class="alert alert-info">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Info - </b> This is a regular notification made with ".alert-info"</span>
                                    </div>
                                    <div class="alert alert-success">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Success - </b> This is a regular notification made with ".alert-success"</span>
                                    </div>
                                    <div class="alert alert-warning">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
                                    </div>
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="places-buttons">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3 text-center">
                                        <h4 class="card-title">Notifications Places
                                            <p class="card-category">
                                                <small>Click to view notifications</small>
                                            </p>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-3 col-lg-3">
                                        <button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <button class="btn btn-default btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <button class="btn btn-default btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-3 col-lg-3">
                                        <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h4 class="title">Modal</h4>
                                    <a class="btn btn-info btn-fill btn-wd" data-toggle="modal" data-target="#myModal1" href="#pablo">
                                        Launch Modal Mini
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php
                                echo $output;
                            ?>
                        </div>
                        <!-- Main Content -->


                    </div>
                    <!-- Mini Modal -->
                    <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <div class="modal-profile">
                                        <i class="nc-icon nc-bulb-63"></i>
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                    <p>Always have an access to your profile</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link btn-simple">Back</button>
                                    <button type="button" class="btn btn-link btn-simple"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  End Modal -->
                </div>
            </div>
            <!-- Content -->


            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
            <!-- Footer -->

        </div>
    </div>
    

    <!--   Core JS Files   -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!--  Chartist Plugin  -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/chartist.min.js"></script>
    <!--  Share Plugin -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/jquery.sharrre.js"></script>
    <!--  Notifications Plugin    -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="https://demos.creative-tim.com/light-bootstrap-dashboard/assets/js/demo.js"></script>  

    <!-- Grocery Crud Scripts -->
    <script src="<?php echo base_url() ?>/grocery-crud/js/jquery/jquery.js"></script>  
    <script src="<?php echo base_url() ?>/grocery-crud/js/libraries/jquery-ui.js"></script>  
    <script src="<?php echo base_url() ?>/grocery-crud/js/build/grocery-crud-v2.8.8.10b14e1.js"></script>  
    <script src="<?php echo base_url() ?>/grocery-crud/js/build/load-grocery-crud.js"></script>  
    <!-- Grocery Crud Scripts -->

    <script type="text/javascript">
        // $(document).ready(function () {
        //     // Javascript method's body can be found in assets/js/demos.js
        //     demo.initDashboardPageCharts();

        //     demo.showNotification();

        // });
    </script>


</body>

</html>