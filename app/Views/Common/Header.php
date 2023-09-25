
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

    $siteModel = model("App\Model\SiteModel");
    $settings = $siteModel->get_settings()[0];

    if(is_null(get_cookie("language")))
    set_cookie("language" , "EN" , 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url()."/assets/uploads/".$settings->favicon ?>" type="image/png" sizes="16x16">

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
    <header <?php content_from_right() ?>>
        <div class="header">
            <div class="navbar h-100 d-flex flex-row aling-items-center justify-content-between">
                <input type="checkbox" id="check">
                <div class="col-auto col-md-2 d-flex justify-content-start logo">
                    <a href="<?php echo base_url() ?>">
                        <img class="m-0" src="<?php echo base_url()."/assets/uploads/".$settings->logo ?>" alt="">
                    </a>
                </div>
                
                <div class="menu-item col-auto">
                    <a href="<?php echo base_url() ?>"><?php echo lg_get_text("lg_01") ?></a>
                    <a href="<?php echo base_url() ?>/dota-form"><?php echo lg_get_text("lg_02") ?></a>
                    <a href="<?php echo base_url() ?>/rules"><?php echo lg_get_text("lg_03") ?></a>
                    <a href="<?php echo base_url() ?>/gallery"><?php echo lg_get_text("lg_04") ?></a>
                    <a href="<?php echo base_url() ?>/contact-us"><?php echo lg_get_text("lg_05") ?></a>
                </div>
                <div class="col-auto col-md-2 d-flex justify-content-end lang_select align-items-center">
                    <i class="fa-sharp fa-solid fa-globe mx-1"></i>
                    <span onClick="change_language('<?php if(get_cookie("language") == "EN") echo "AR"; else echo "EN"; ?>')"><?php echo lg_get_text("lg_64") ?></span>
                </div>
                <div class="menu-btn d-flex d-md-none p-0">
                    <label for="check" class="m-0">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
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