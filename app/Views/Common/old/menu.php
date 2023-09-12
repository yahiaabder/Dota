<?php 

$top_header = (isset($top_header)) ? $top_header : true;
$menu = (isset($menu)) ? $menu : true;
?>
<!-- Top header and menu bars -->
<header class="row"> 

    <!-- Top header -->
    <?php if($top_header): ?>
    <div class="top-bar col-12 d-flex justify-content-between align-items-center">
        <div class="col-3 contact py-2">
            <ul class="m-0 mx-3 p-0">
                <li class="mx-3">+971526918854</li>
                <li class="mx-3">contact@yabder.com</li>
            </ul>
        </div>
        <div class="col-3 f-flex align-content-center">
            <input class="p-2 px-3 col-12 form-control" type="text" name="search" id="search" placeholder="search">
        </div>
        <div class="col-3 social d-flex justify-content-end">
            <ul class="m-0 mx-3 p-0">
                <li class="mx-3"><span><i class="fa-brands fa-facebook-f"></i></span></li>
                <li class="mx-3"><span><i class="fa-brands fa-youtube"></i></span></li>
                <li class="mx-3"><span><i class="fa-brands fa-instagram"></i></span></li>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <!-- Top header -->


    <!-- Menu  -->
    <?php if($menu): ?>
    <nav>
        <div class="row align-items-center justify-content-between">
            <div class="col-4">
                <div class="logo m-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/ZDF_logo%21_Logo_2021.svg/1200px-ZDF_logo%21_Logo_2021.svg.png" alt="" >
                </div>
            </div>
            <div class="col-8 d-flex justify-content-end">
                <ul class="main-menu m-0 p-0">
                    <li class="mx-4">Home</li>
                    <li class="mx-4">Contact</li>
                    <li class="mx-4">About us</li>
                    <li class="mx-4">Creat account</li>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>

    <!-- Menu  -->

</header>

<!-- Top header and menu bars -->