
<footer class="w-100">
        <div class="footer-content py-3 row col-12 justify-content-center m-0">
            <div class="col-12 col-md-7 p-0 ws-footer-menu row justify-content-center m-0 text-center">
                <div class="col-12 col-md-2 p-3 p-md-0">
                    <a href="<?php echo base_url() ?>">Home</a>
                </div>
                <div class="col-12 col-md-2 p-3 p-md-0">
                    <a href="#">Calendar</a>
                </div>
                <div class="col-12 col-md-2 p-3 p-md-0">
                    <a href="<?php echo base_url() ?>/rules">Rules & Regulations</a>
                </div>
                <div class="col-12 col-md-2 p-3 p-md-0">
                    <a href="<?php echo base_url() ?>/gallery">Gallery</a>
                </div>
                <div class="col-12 col-md-2 p-3 p-md-0">
                    <a href="<?php echo base_url() ?>/contact-us">Contact us</a>
                </div>
            </div>  
            <div class="col-12 col-md-12 py-3 ws-footer-menu row m-0 text-center justify-content-center">
                <div class="col-12 col-md-4">
                    <p class="m-0">
                        info@dota.ae <br> <a href="tel: +971551336697" style="font-size: inherit">+971 55 133 6697</a> <br> Dubai sports council, Dubai-UAE
                    </p>
                </div>
            </div>  

            

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