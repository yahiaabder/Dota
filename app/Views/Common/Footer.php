<?php
    $siteModel = model("App\Model\SiteModel");
    $settings = $siteModel->get_settings()[0];
?>

<footer class="w-100" <?php echo content_from_right() ?>>
        <div class="footer-content py-3 row col-12 justify-content-center m-0">
            <div class="col-12 col-md-7 p-0 ws-footer-menu row justify-content-center m-0 text-center">
                <div class="col-12 col-md-auto p-3">
                    <a href="<?php echo base_url() ?>"><?php echo lg_get_text("lg_01") ?></a>
                </div>
                <div class="col-12 col-md-auto p-3">
                    <a href="<?php echo base_url() ?>/dota-form"><?php echo lg_get_text("lg_02") ?></a>
                </div>
                <div class="col-12 col-md-auto p-3">
                    <a href="<?php echo base_url() ?>/rules"><?php echo lg_get_text("lg_03") ?></a>
                </div>
                <div class="col-12 col-md-auto p-3">
                    <a href="<?php echo base_url() ?>/gallery"><?php echo lg_get_text("lg_04") ?></a>
                </div>
                <div class="col-12 col-md-auto p-3">
                    <a href="<?php echo base_url() ?>/contact-us"><?php echo lg_get_text("lg_05") ?></a>
                </div>
            </div> 
            
            <div class="col-12 col-md-12 py-3 ws-footer-menu row m-0 text-center justify-content-center">
                <div class="col-12 col-md-4">
                    <p class="m-0">
                        <?php echo $settings->email ?> 
                        <br>
                        <?php if(trim($settings->email_2 !== "")): 
                            echo $settings->email_2;
                        endif; ?> 
                        <br> 
                        <a href="tel: <?php echo str_replace(" " , "" , $settings->phone) ?>" style="font-size: inherit" dir="ltr"><?php echo $settings->phone ?></a> 
                        <br> 
                        <?php echo lg_put_text($settings->address , $settings->address_arabic) ?>
                    </p>
                </div>
            </div>  

            <?php 
                preg_match("/\Ahttps:\/\//" , $settings->map , $matchs);
                $frame = (isset($matchs[0])) ? true : false;
                if($frame):
            ?>
            <div class="col-12 px-0 pt-3">
                <iframe src="<?php echo $settings->map ?>" frameborder="0" width="100%" height="450px"></iframe>
            </div>
            <?php endif; ?>

            <!-- <div class="col-sm-12 col-md-4 p-0">

            </div>
            <div class="col-sm-12 col-md-4 p-0">

            </div> -->
        </div>
        <div class="copyright row m-0">
            <p class="my-3">
                <span>BYA</span> &#9400; 2023
            </p>
        </div>
    </footer>


    <!-- Scripts -->
    <script>
        var base_url = "<?php echo base_url() ?>"
    </script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/index.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/gallery/lightgallery-all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/gallery/picturefill.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/gallery/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.justifiedGallery.min.js"></script>




    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script src="owlcarousel/owl.carousel.min.js"></script> -->

    <script>
        $('.catpage_bts_slider_2').owlCarousel({
        
            loop:false,
            margin:100,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1,
                },
                1000:{
                    items:2
                },

                1950:{
                    items: 3
                }
            }
        });
    </script>

    <!-- Scripts -->
</body>

</html>