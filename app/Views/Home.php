<?php 
    $session = session();
    if(!is_null($session->get("pop")))
    $session->set("pop" , false);
    else
    $session->set("pop" , true)
    
 ?>




    <div class="ws-home w-100" <?php content_from_right() ?>>
        <div class="overlay-bright"></div>
        
        <div class="ws-home-social p-3 d-flex flex-column aling-items-center justify-content-between">
            <div class="p-0 my-3 w-100">
                <a target="blank" href="http://www.facebook.com/dotauaeofficial">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
            <div class="p-0 my-3 w-100">
                <a target="blank" href="http://www.instagram.com/dotauaeofficial">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <!-- <div class="p-0 my-2 w-100">
                <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div> -->
        </div>

        <div class="home-welcome d-flex flex-column justify-content-center aling-items-center m-0 p-0">
            <img class="m-0" src="<?php echo base_url() ?>/assets/img/dota_logo.png" alt="">
        </div>

        <div class="fly-logo p-3 row m-0 justify-content-between">
            <div class="flying-logo-2 col-5 col-md-3 align-items-center p-0 m-0 d-flex justify-content-start">
                <img class="" src="<?php echo base_url() ?>/assets/uploads/TE-New Logo-01.png" alt="">
            </div>
            <div class="flying-logo-1 col-5 col-md-3 align-items-center p-0 m-0 d-flex justify-content-end">
                <img class="" src="<?php echo base_url() ?>/assets/uploads/dubai_sport_council.png" alt="">
            </div>
        </div>
    </div>

    <!-- What about us ? -->
    <div class="ws-wwa container-fluid pb-5" <?php content_from_right() ?>>
        <div class="row justify-content-center m-0 aling-items-center p-4">
            <div class="col-12 col-lg-4 p-3 text-center ws-card" style="position:relative; bottom:100px; height: 350px">
                <div class="ws-card-content p-2 d-flex flex-column justify-content-between">
                    <div class="ws-card-title mb-3">
                        <h2><?php echo lg_get_text("lg_06") ?></h2>
                    </div>
                    <div class="ws-card-description d-flex aling-items-center">
                        <div>
                            <p>
                                <?php echo lg_get_text("lg_48") ?>
                            </p>
                        </div>
                    </div>
                    <div class="ws-card-button d-flex flex-row justify-content-center">
                        <div class="p-2 col-6">
                            <a href="<?php echo base_url() ?>/about-us"><?php echo lg_get_text("lg_07") ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What about us ? -->

    <!-- What sets us apart ? -->
    <div class="container-fluid row justify-content-center pb-5 m-0">
        <div class="row col-12 justify-content-center mb-5">
            <h2 class="text-center <?php lg_put_text("section-title-l" , "section-title-r" , true) ?>"><?php echo lg_get_text("lg_08") ?></h2>
        </div>
        <div class="row m-0 col-12 col-md-8">
            <div class="owl-carousel owl-theme catpage_bts_slider_2">
                <div class="item col-12 p-3 text-center ws-card">
                    <div class="ws-card-content d-flex flex-column justify-content-around p-2">
                        <div class="ws-card-title mb-3">
                            <h2><?php echo lg_get_text("lg_52") ?></h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    <?php echo lg_get_text("lg_56") ?>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="ws-card-button d-flex flex-row justify-content-center">
                            <div class="p-2 col-6">
                                <a href="#">Read More</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="item col-12 p-3 text-center ws-card">
                    <div class="ws-card-content d-flex flex-column justify-content-around p-2">
                        <div class="ws-card-title mb-3">
                            <h2><?php echo lg_get_text("lg_53") ?></h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    <?php echo lg_get_text("lg_57") ?>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="ws-card-button d-flex flex-row justify-content-center">
                            <div class="p-2 col-6">
                                <a href="#">Read More</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="item col-12 p-3 text-center ws-card">
                    <div class="ws-card-content d-flex flex-column justify-content-around p-2">
                        <div class="ws-card-title mb-3">
                            <h2><?php echo lg_get_text("lg_54") ?></h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    <?php echo lg_get_text("lg_58") ?>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="ws-card-button d-flex flex-row justify-content-center">
                            <div class="p-2 col-6">
                                <a href="#">Read More</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="item col-12 p-3 text-center ws-card">
                    <div class="ws-card-content d-flex flex-column justify-content-around p-2">
                        <div class="ws-card-title mb-3">
                            <h2><?php echo lg_get_text("lg_55") ?></h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    <?php echo lg_get_text("lg_59") ?>
                                </p>
                            </div>
                        </div>
                        <!-- <div class="ws-card-button d-flex flex-row justify-content-center">
                            <div class="p-2 col-6">
                                <a href="#">Read More</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What sets us apart ? -->
    
    <!-- Our Leagues -->
    <div class="container-fluid justify-content-center align-content-start pb-5 row m-0 ws-league <?php text_from_right() ?>" <?php content_from_right() ?>>
        <div class="row col-12 justify-content-center mb-5">
            <h2 class="text-center <?php lg_put_text("section-title-l" , "section-title-r" , true) ?>"><?php echo lg_get_text("lg_09") ?></h2>
        </div>
        <?php if(false): ?>
        <div class="row m-0 col-12 mb-2 mb-lg-0">
            <div class="col-12 col-lg-6 py-5 p-md-5 ws-league-desc d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(70deg, #a00ec0, #bea20c);">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5"><?php echo lg_get_text("lg_12") ?> </h2>
                    <p class="text-justify">
                        The Inter-School Tennis League is a thrilling platform that brings together schools, young athletes, and the exhilarating world of tennis. It's more than just a sports league; it's a celebration of talent, teamwork, and the competitive spirit.
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#inter-school-league">Read More...</a></u>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 ws-league-img">
                <div class="overlay"></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row m-0 col-12 mb-2 mb-lg-0">
            <div class="col-12 col-lg-6 ws-league-img">
                <div class="overlay"></div>
            </div>
            <div class="col-12 col-lg-6 py-5 p-md-5 ws-league-desc d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(70deg, #a00ec0, #bea20c);">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5"><?php echo lg_get_text("lg_10") ?></h2>
                    <p class="text-justify <?php text_from_right() ?>">
                        <?php echo lg_get_text("lg_69") ?>
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#national-domestic-league"><?php echo lg_get_text("lg_07") ?>...</a></u>
                    </p>
                </div>
            </div>
        </div>

        <div class="row m-0 col-12 mb-2 mb-lg-0">
            <div class="col-12 col-lg-6 py-5 p-md-5 ws-league-desc d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(70deg, #a00ec0, #bea20c);">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5"><?php echo lg_get_text("lg_11") ?> </h2>
                    <p class="text-justify <?php text_from_right() ?>">
                        <?php echo lg_get_text("lg_70") ?>
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#inter-university-league"><?php echo lg_get_text("lg_07") ?>...</a></u>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 ws-league-img">
                <div class="overlay"></div>
            </div>
        </div>

        <div class="row m-0 col-12 ">
            <div class="col-12 col-lg-6 ws-league-img">
                <div class="overlay"></div>
            </div>
            <div class="col-12 col-lg-6 py-5 p-md-5 ws-league-desc d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(70deg, #a00ec0, #bea20c);">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5"><?php echo lg_get_text("lg_13") ?></h2>
                    <p class="text-justify <?php text_from_right() ?>">
                        <?php echo lg_get_text("lg_48") ?>
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#dota"><?php echo lg_get_text("lg_07") ?>...</a></u>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- Our Leagues -->
    
    <!-- Brand Ambassador -->
    <div class="container-fluid row justify-content-center pb-5 m-0" <?php content_from_right() ?>>
        <div class="row col-12 justify-content-center mb-5">
            <h2 class="text-center <?php lg_put_text("section-title-l" , "section-title-r") ?>"><?php echo lg_get_text("lg_14") ?></h2>
        </div>
        <div class="row m-0 col-12 col-lg-8">
            <div class="col-12 p-3 text-center ws-card">
                <div class="ws-card-content row align-items-center">

                    <div class="ws-card-img col-12 col-md-6">
                        <img src="<?php echo base_url() ?>/assets/img/dota_ambassador.jpg" alt="">
                    </div>

                    <div class="ws-card-description d-flex aling-items-center col-12 col-md-6">
                        <div>
                            <p class="text-justify">
                                <h3><?php echo lg_get_text("lg_101") ?></h3>
                                <p class="text-justify <?php text_from_right() ?>"><?php echo lg_get_text("lg_67") ?></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Ambassador -->
    
    <!-- Gallery -->
    <?php 
    $images  = array_merge(glob(ROOTPATH."/assets/img/gallery/2023/*.jpg" , GLOB_NOSORT ) , glob(ROOTPATH."/assets/img/gallery/2023/*.png" , GLOB_NOSORT ));
    array_multisort(array_map('filemtime', $images), SORT_NUMERIC , SORT_DESC , $images);
    ?>
    <?php if(sizeof($images) > 0): ?>
    <div class="container-fluid row justify-content-center pb-5 m-0">
        <div class="row col-12 justify-content-center mb-5">
            <h2 class="text-center <?php lg_put_text("section-title-l" , "section-title-r" , true) ?>"><?php echo lg_get_text("lg_15") ?></h2>
        </div>
        <div class="row m-0 col-12 col-lg-10">
            <div class="col-12 ws-gallery-content p-0 text-align-center" id="animated-thumbnails-gallery" style="background-color: transparent">
                <?php 
                $i=0; 
                foreach($images as $image): 
                    if($i <= 20):
                ?>
                    <div class="ws-gallery-item" data-src="<?php echo base_url() ?>/assets/img/gallery/2023/<?php echo basename($image) ?>">
                        <img src="<?php echo base_url() ?>/assets/img/gallery/2023/<?php echo basename($image) ?>" alt="">
                    </div>
                <?php 
                endif;
                $i++; 
                endforeach; ?>
                
            </div>  
        </div>
    </div>
    <?php endif; ?>
    <!-- Gallery -->


    <!-- general modal -->
    <div class="modal fade" data-modal-autoshow="true" id="generalmodal" tabindex="-1" aria-labelledby="generalmodallabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row m-0 justify-content-center">
                    <?php if($session->get("pop") || true): ?>
                        <div class="col-12 p-0 row m-0" <?php content_from_right() ?>>
                            <div class="col-12 p-3 rounded text-center d-flex align-items-start" style="max-height: auto; overflow: hidden;">
                                <img src="<?php echo base_url() ?>/assets/img/registration_now_open.jpg" alt="" width="100%">
                            </div>
                            <div class="col-12 pt-3 row m-0 p-0 justify-content-center">
                                <a class="col-12" href="<?php echo base_url() ?>/dota-form">
                                    <button type="button" class="btn col-12" data-bs-dismiss="modal" style="background-color: #a00ec0; color:white"><?php echo lg_get_text("lg_32") ?></button>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo lg_get_text("lg_31") ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- general modal -->