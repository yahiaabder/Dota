<?php 
    $session = session();
    if(!is_null($session->get("pop")))
    $session->set("pop" , false);
    else
    $session->set("pop" , true)
    
 ?>




    <div class="ws-home w-100">
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
                <img class="w-100" src="<?php echo base_url() ?>/assets/uploads/TE-New Logo-01.png" alt="">
            </div>
            <div class="flying-logo-1 col-5 col-md-3 align-items-center p-0 m-0 d-flex justify-content-end">
                <img class="w-100" src="<?php echo base_url() ?>/assets/uploads/dubai_sport_council.png" alt="">
            </div>
        </div>
    </div>

    <!-- What about us ? -->
    <div class="ws-wwa container-fluid pb-5">
        <div class="row justify-content-center m-0 aling-items-center p-4">
            <div class="col-12 col-lg-4 p-3 text-center ws-card" style="position:relative; bottom:100px; height: 350px">
                <div class="ws-card-content p-2 d-flex flex-column justify-content-between">
                    <div class="ws-card-title mb-3">
                        <h2>WHO WE ARE?</h2>
                    </div>
                    <div class="ws-card-description d-flex aling-items-center">
                        <div>
                            <p>
                                "Dubai Open Tennis Academies League" - a groundbreaking tournament that brings together the finest young tennis talents from across the globe. This premier event is designed exclusively for tennis academies, offering a unique platform for emerging players to showcase their skills, tenacity, and sportsmanship.
                            </p>
                        </div>
                    </div>
                    <div class="ws-card-button d-flex flex-row justify-content-center">
                        <div class="p-2 col-6">
                            <a href="<?php echo base_url() ?>/about-us">Read More</a>
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
            <h2 class="text-center section-title">What Sets Us Apart?</h2>
        </div>
        <div class="row m-0 col-12 col-md-8">
            <div class="owl-carousel owl-theme catpage_bts_slider_2">
                <div class="item col-12 p-3 text-center ws-card">
                    <div class="ws-card-content d-flex flex-column justify-content-around p-2">
                        <div class="ws-card-title mb-3">
                            <h2>Education Meets Athletics</h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    We firmly believe in the power of combining academics with sports. The Inter-Academies Tennis League provides a unique opportunity for students to excel not only in the classroom but also on the tennis court.
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
                            <h2>Friendly Competition</h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    Academies from all over the region come together to compete, fostering camaraderie and healthy competition among students. It's a chance for young athletes to represent their schools with pride.
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
                            <h2>Skill Development</h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    Our league isn't just about winning matches; it's about honing skills, setting personal goals, and striving for excellence. Our experienced coaches and mentors are here to guide each player's journey.
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
                            <h2>Lifelong Memories</h2>
                        </div>
                        <div class="ws-card-description d-flex aling-items-center">
                            <div>
                                <p>
                                    The Dota Tennis League is a place where unforgettable memories are made. It's about forming friendships, learning life lessons, and creating stories that will be cherished for years to come.
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
    <div class="container-fluid justify-content-center align-content-start pb-5 row m-0 ws-league">
        <div class="row col-12 justify-content-center mb-5">
            <h2 class="text-center section-title">Our Leagues</h2>
        </div>
        <?php if(false): ?>
        <div class="row m-0 col-12 mb-2 mb-lg-0">
            <div class="col-12 col-lg-6 py-5 p-md-5 ws-league-desc d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(70deg, #a00ec0, #bea20c);">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5">INTER SCHOOL LEAGUE </h2>
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
                    <h2 class="mb-5">NATIONAL DOMESTIC LEAGUE</h2>
                    <p class="text-justify">
                        The National Emirati Citizens Tennis Program is a comprehensive initiative launched by Dubai Sports Council in association With the renowned tennis Player Sania Mirza to promote and develop tennis among Emirati citizens. This program aims to foster a love for tennis, identify and nurture young talent, and ultimately enhance the presence of Emirati players on the international tennis stage.
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#national-domestic-league">Read More...</a></u>
                    </p>
                </div>
            </div>
        </div>

        <div class="row m-0 col-12 mb-2 mb-lg-0">
            <div class="col-12 col-lg-6 py-5 p-md-5 ws-league-desc d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(70deg, #a00ec0, #bea20c);">
                <div class="col-12 col-md-8">
                    <h2 class="mb-5">INTER UNIVERSITY LEAGUE </h2>
                    <p class="text-justify">
                        The Inter-University Tennis League program is a competitive sporting initiative that will bring together universities and colleges to participate in organized tennis competitions.
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#inter-university-league">Read More...</a></u>
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
                    <h2 class="mb-5">DOTA</h2>
                    <p class="text-justify">
                        "Dubai Open for Tennis Academies league" - a groundbreaking tournament that brings together the finest young tennis talents from across the globe. This premier event is designed exclusively for tennis academies, offering a unique platform for emerging players to showcase their skills, tenacity, and sportsmanship.
                    </p>
                    <p>
                        <u><a href="<?php echo base_url() ?>/programs/#dota">Read More...</a></u>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- Our Leagues -->
    
    <!-- Brand Ambassador -->
    <div class="container-fluid row justify-content-center pb-5 m-0">
        <div class="row col-12 justify-content-center mb-5">
            <h2 class="text-center section-title">Brand Ambassador</h2>
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
                                <h3>Sania Mirza,</h3>
                                <p class="text-justify">
                                The accomplished Indian tennis icon, has taken on the prestigious role of becoming the brand ambassador for the Dubai Open Tennis Academies. With her stellar tennis career and global recognition, Sania brings immense credibility and appeal to this position. Her association underscores the commitment of the Dubai Open Tennis Academies to nurture talent, promote tennis excellence, and elevate the status of the sport in the region. Sania's influence as a role model and her dedication to tennis make her the ideal ambassador to inspire aspiring players and enhance the reputation of the academies as world-class tennis training centers. Her partnership with the Dubai Open Tennis Academies reinforces their commitment to fostering the next generation of tennis champions.
                                </p>
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
            <h2 class="text-center section-title">Best moments</h2>
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
                                    <button type="button" class="btn col-12" data-bs-dismiss="modal" style="background-color: #a00ec0; color:white">Register now</button>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo lg_get_text("lg_186") ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- general modal -->