
<?php
    // use CodeIgniter\Cookie\Cookie;

    // helper('cookie');
    
    // $cookie = new Cookie(
    //     'remember_token',
    //     'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6',
    //     [
    //         'max-age' => 3600 * 2, // Expires in 2 hours
    //     ]
    // );

    set_cookie("language" , "EN" , 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/dota_icon.png" type="image/png" sizes="16x16">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/dota-css/index.css">
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/gallery/lightgallery.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/dota-css/jquery.justifiedGallery.min.js">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/dota-css/justifiedGallery.min.css">

    <!-- CSS -->
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Scripts -->

    <title>DOTA</title>

    
</head>

<body>
    <!-- <div class="overlay"></div> -->
    <div class="ws-scroll-up p-3 d-flex justify-content-center rounded">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <header>
        <div class="header">
            <div class="navbar d-flex flex-row aling-items-center">
                <input type="checkbox" id="check">
                <div class="pl-md-4 logo">
                    <a href="<?php echo base_url() ?>">
                        <img class="m-0" src="<?php echo base_url() ?>/assets/img/dota_logo.png" alt="">
                    </a>
                </div>
                <div class="menu-btn d-flex p-0">
                    <label for="check" class="m-0">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>

                <div class="menu-item">
                    <a href="<?php echo base_url() ?>">Home</a>
                    <a href="<?php echo base_url() ?>/dota-form">DOTA Registration</a>
                    <a href="<?php echo base_url() ?>/rules">Rules & Regulations</a>
                    <a href="<?php echo base_url() ?>/gallery">Gallery</a>
                    <a href="<?php echo base_url() ?>/contact-us">Contact us</a>
                </div>
            </div>
        </div>
        <!-- <div class="content">
            <div id="countdowntimer">
                <span class="count"><span>
            </div>
            <div class="mail">
                <form action="javascript:void(0);">
                    <input name="mail" type="email" Placeholder="SubsCribe">
                    <input name="send" type="submit" value="Send">
                </form>
            </div>
        </div> -->
        
        
    </header>