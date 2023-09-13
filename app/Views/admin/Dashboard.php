<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/admin/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/css/style.min.css">
    <!-- Crud -->
    <link href="<?php echo base_url() ?>/grocery-crud/css/bootstrap/v4/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/grocery-crud/css/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/grocery-crud/css/grocery-crud-v2.8.8.10b14e1.css" rel="stylesheet">
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="<?php echo site_url() ?>" target="blank" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <span class="icon logo" aria-hidden="true"></span>
                        <div class="logo-text">
                            <span class="logo-title">DOTA</span>
                            <span class="logo-subtitle">Dashboard</span>
                        </div>

                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <!-- Registrations -->
                        <li>
                            <a class="show-cat-btn <?php if(url_is("admin/dashboard")) echo 'active' ?>" href="<?php echo site_url("admin/dashboard") ?>">
                                <span class="icon document" aria-hidden="true"></span>Registrations
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?php echo site_url("admin/academies") ?>">Academies</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("admin/players") ?>">Players</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Blog -->
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon folder" aria-hidden="true"></span>Blogs
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="categories.html">All categories</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Media -->
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon image" aria-hidden="true"></span>Media
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="media-01.html">Media-01</a>
                                </li>
                                <li>
                                    <a href="media-02.html">Media-02</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <span class="system-menu__title">system</span>
                    <ul class="sidebar-body-menu">
                       <!-- Settings -->
                        <li>
                            <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </aside>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                    </div>
                    <div class="main-nav-end">
                        
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="<?php echo base_url() ?>/assets/admin/img/avatar/avatar-illustrated-02.webp" type="image/webp"><img
                                            src="<?php echo base_url() ?>/assets/admin/img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <!-- <li>
                                    <a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Account settings</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a class="danger" href="<?php echo site_url("admin/logout") ?>">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Dashboard</h2>
                    
                    <div class="row">
                        <div class="col-12">
                            <?php if(isset($output)): echo $output; endif;?>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2023 © BYA - <a href="https://yabder.com" target="_blank" rel="noopener noreferrer">yabder.com</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Chart library -->
    <script src="<?php echo base_url() ?>/assets/admin/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="<?php echo base_url() ?>/assets/admin/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="<?php echo base_url() ?>/assets/admin/js/script.js"></script>
    <!-- Grocery Crud Scripts -->
    <script src="<?php echo base_url() ?>/grocery-crud/js/jquery/jquery.js"></script>  
    <script src="<?php echo base_url() ?>/grocery-crud/js/libraries/jquery-ui.js"></script>  
    <script src="<?php echo base_url() ?>/grocery-crud/js/build/grocery-crud-v2.8.8.10b14e1.js"></script>  
    <script src="<?php echo base_url() ?>/grocery-crud/js/build/load-grocery-crud.js"></script>  
</body>

</html>