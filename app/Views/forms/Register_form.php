<?php
    $userModel = model("App\Model\UserModel");
    $countryModel = model("App\Model\Countries");
    // var_dump($userModel);die();
    $req = "select * from city where title <> 'All' and status='Active'";
    $res = $userModel->customQuery($req);

    $cities = [];
    if($res && sizeof($res) > 0 ) 
    $cities = $res;
    $countries = $countryModel->get_countries();
    
    $categories_title = [
        "u12-b" => "Under 12 - Cut Off Date : > 2011 (Boys)", 
        "u14-b" => "Under 14 - Cut Off Date : > 2009 (Boys)", 
        "u18-b" => "Under 18 - Cut Off Date : > 2005 (Boys)", 
        "u12-g" => "Under 12 - Cut Off Date : > 2011 (Girls)", 
        "u14-g" => "Under 14 - Cut Off Date : > 2009 (Girls)", 
        "u18-g" => "Under 18 - Cut Off Date : > 2005 (Girls)", 
    ];


    // var_dump($data , $_POST); 

?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');
    .register-form-bg{
        font-family: 'Raleway', sans-serif;
        background-image: url(<?php echo base_url()."/assets/others/punching_ball_bow_tournament.jpg" ?>),linear-gradient(to bottom , #34bd3c 10%, #34bd3c 65%);
        background-size: 100%;
        background-position: top;
        background-repeat: no-repeat;
    }

    .register-form-header{
        height: 450px
    }

    .register-form-description :is(p,h1){
        color: rgb(39, 39, 39);
    }
    .register-form-description p{
        font-size: 1.1rem;
    }
    .register-form-description h1{
        font-size: 1.5rem;
        font-weight: bold
    }

    form.register-form-preorder .form-group{
        position: relative;
    }

    form.register-form-preorder .form-group label{
        color: rgb(75, 75, 75)
    }

    form.register-form-preorder .form-group .err-msg{
        color: red;
        margin: 0;
        position: absolute;
        right: 0;
        font-size: .9rem;
    }

    @media screen and (max-width: 750px) {
        .register-form-bg{
            background-size: 100%!important;
            background-image: url(<?php echo base_url()."/assets/others/punching_ball_bow_tournament_mobile.jpg" ?>),linear-gradient(to bottom , #34bd3c 10%, #34bd3c 65%);

        }

        .register-form-header{
            height: auto!important;
            min-height: 300px
        }
        .register-form-bg h1,.register-form-bg img{
            position:absolute;
            bottom:30px!important;
            left:50%;
            transform: translateX(-50%);
            max-width:85%;
            font-size: 1.6rem
        }

        form.register-form-preorder .form-group .err-msg{
            position: relative;
            text-align:left
        }
    }

    .register-form-bg h1,.register-form-bg img{
        position:absolute;
        bottom:70px;
        left:50%;
        transform: translateX(-50%);
        width:400px;
    }

    form.register-form-preorder input[type='text'],form.register-form-preorder input[type='tel'],form.register-form-preorder select , form.register-form-preorder input[type='date']{
        min-height: 50px;
    }
    
    form.register-form-preorder .form-group.store{
        display:none
    }



</style>

<?php echo view("Common/Page_title" , ["title" => "Registration form"]) ?>

<div class="container-fluid row m-0 align-content-center py-3">
    
        
    
    <!-- form of the page -->   
    <?php 
    if(!isset($success)): 
        // var_dump($logs);die();
        // if(isset($data["type"]) && in_array($data["type"] , ["junior" , "senior"]) || isset($_GET["type"]) && in_array($_GET["type"] , ["junior" , "senior"])):
        $type = (isset($data["type"])) ? $data["type"] : $_POST["type"];
        // $categories = (isset($data["players_category"])) ? $data["players_category"] : $_POST["category"];

    ?>
    <div class="container" style="background-color:#ececec">
        <?php if(isset($logs) && sizeof($logs) > 0):?>
        <div class="col-12 p-0 m-0">
            <div class="alert alert-warning" role="alert">
                <?php foreach($logs as $key=>$value): ?>
                    <p class=""><?php echo $value ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-12 row justify-content-center col-12 mx-0 p-0 py-5">
            <?php if(isset($message)): ?>
                <div class="col-12 col-lg-10 my-5 p-3 register-form-description">
                    <p><?php echo $message ?></p>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo base_url() ?>/user/register" method="post" id="ws-register-form" class="row j-c-center p-0 m-0 col-12 col-lg-11 px-0 register-form-preorder <?php content_from_right() ?>">

                <div class="row px-0 col-12 m-0 my-0 j-c-center">
                    
                    <div class="col-12 mb-5 px-0">
                        <div class="col-12 bg-dark">
                            <p class="text-center py-3 h3" style="color:white"><?php if(isset($data["type"])) echo ucfirst($data["type"]); else echo ucfirst($_POST["type"]) ?></p>
                        </div>
                        <input type="text" value="<?php if(isset($data["type"])) echo $data["type"]; else echo $_POST["type"] ?>" name="type" hidden>
                        <!-- Name of the academy-->
                            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['academy_name'])) echo $errors["academy_name"]; ?></p>
                                <label class="form-label col-12 mb-3 px-0 <?php text_from_right(true) ?>" for="academy_name">Academy name*</label>
                                <input required class="form-control col-12 <?php text_from_right(true) ?>" type="text" name="academy_name" id="academy_name" placeholder="Academy name" value="<?php if(isset($data["academy_name"])) echo $data["academy_name"]; ?>">
                            </div>

                        <!-- email of the academy-->
                            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['academy_email'])) echo $errors["academy_email"]; ?></p>
                                <label class="form-label col-12 mb-3 px-0 <?php text_from_right(true) ?>" for="academy_email">Academy email*</label>
                                <input required class="form-control col-12 <?php text_from_right(true) ?>" type="text" name="academy_email" id="academy_email" placeholder="Academy email" value="<?php if(isset($data["academy_email"])) echo $data["academy_email"]; ?>">
                            </div>
                        <!-- Categories -->
                        <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                                <select multiple class="form-control col-12" name="category[]" hidden>
                                    <?php 
                                        $categories = (isset($data["category"])) ? $data["category"] : $_POST["category"];
                                        // var_dump($categories);die();
                                        if(sizeof($categories) > 0):
                                            foreach($categories as $key=> $value):
                                    ?>
                                    <option selected value="<?php echo $value ?>"></option>
                                    <?php
                                            endforeach;
                                        endif;
                                    ?>
                                </select>
                        </div>

                        <!-- PLay type -->
                        <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                            <?php
                            if(((isset($_POST["type"]) && $_POST["type"] == "senior") || (isset($data["type"]) && $data["type"] == "senior"))):
                                $play = (isset($data["play"])) ? $data["play"] : $_POST["play"];
                            ?>
                                <input type="text" name="play" hidden value="<?php echo $play ?>">
                            <?php else: ?>
                                <input type="text" name="play" hidden value="">
                            <?php endif; ?>
                        </div>

                    </div>

                    
                    
                    <?php 
                        if(((isset($_POST["type"]) && $_POST["type"] == "senior") || (isset($data["type"]) && $data["type"] == "senior")) && (isset($_POST["play"]) || isset($data["play"]))){
                            $end = (isset($data["play"])) ? $data["play"] : $_POST["play"];
                            $title = (isset($data["category"][0])) ? ucfirst($data["category"][0]) . " (".$end.")" : ucfirst($_POST["category"][0]) . " (".$end.")";;
                            $play = (isset($data["play"])) ? $data["play"] : $_POST["play"];
                            echo view("forms/Players_form" , ["errors" => $errors , "data" => $data , "nbr" => 1 , "start" => 1 , "end" => ($end == "single") ? 1 : 2 , "category_title" => $title , "category" => $_POST["category"][0] , "play" => $play , "countries" => $countries]);
                        }
                        elseif(isset($categories)){
                            foreach($categories as $key => $value):
                                echo view("forms/Players_form" , ["errors" => $errors , "data" => $data , "start" => $key*6+1 , "end" => $key*6+6 , "category_title" => $categories_title[$value] , "category" => $value , "countries" => $countries]);
                            endforeach;
                        }
                        
                        
                    ?>

                    <?php if(false): ?>
                    <!-- Terms & Conditions -->
                    <div class="form-group row mt-0 mx-0 px-0 col-12">
                        <div class="col-12">
                            <input  class="form-check-input" type="checkbox" name="term_cond" id="term_cond">
                            <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['term_cond'])) echo $errors["term_cond"]; ?></p>
                            <label class="form-check-label mb-3 px-0 <?php text_from_right(true) ?>" for="term_cond">
                                <?php echo lg_get_text("lg_147")." <a href='#' style='color: blue'>".lg_get_text("lg_05")."</a>" ?>
                            </label>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
                <div class="col-12">
                    <p>
                        <b>Note :</b> After the Form Submission , Our Operations Team will contact the applicant for further necessary requisite.
                    </p>
                </div>

                <div class="form-group row my-3 mx-0 px-0 justify-content-center col-12">
                    <input class="py-2 col-lg-3 col-sm-12 mx-2 form-control" value="Submit" type="submit"></input>
                </div>

            </form>
        </div>
    </div>
    <?php 
        // else:
            // header('Location: '.base_url().'/dota-from');
        // endif;
    else: 
    ?>
        <div class="container py-4" style="height: 80vh">

            <div class="col-12 row justify-content-center align-items-center p-0 m-0 h-100">
                <div class="col-12 col-md-8" style=" color: #3c3c3c; text-align:center;background-color:#d4fed9;">
                    <p class="col-12 py-4 m-0 px-0" style="font-size: 1.5rem; line-height: 2rem;">
                        <?php echo($message) ?>
                    </p>
                    
                    <?php if($success): ?>
                    <div class="col-auto my-3">
                        <!-- <i class="fa-regular fa-hand-back-fist" style="font-size: 10.5rem"></i> -->
                    </div>
                    <?php else:?>
                    <div class="col-auto my-3">
                        <i class="fa-solid fa-triangle-exclamation" style="font-size: 10.5rem"></i>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    <?php endif; ?>
<!-- 
Senior/Junior

Name of the academy

TE- PIN : 

Player name
DOB
Gender :
Email ID : 
Contact No :
Nationality: 
Players Category

 -->


</div>