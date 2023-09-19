
<?php
    $session = session();
?>
<div class="container-fluid row m-0 align-items-center justify-content-center" style="min-height: 80vh" <?php content_from_right() ?>>
    <?php if($session->getFlashdata("error")): ?>
    <div class="row col-12 col-lg-6 justify-content-center">
        <div class="alert col-12 alert-warning" role="alert">
            <?php echo($session->getFlashdata("error")); ?>
        </div>
    </div>  
    <?php endif; ?>

    <?php if($type == 'junior'): ?>
    <form method="post" action="<?php echo base_url() ?>/dota-register" class="row justify-content-center col-12 col-md-10 my-3 p-0 p-lg-2">
        <div class="col-12 px-0 py-3">
            <p class="h3 text-center "><?php echo lg_get_text("lg_77") ?></p>
        </div>
        <input name="type" type="text" value="junior" hidden required>
        <div class="row justify-content-center m-0 col-12 my-2">
            <div class="col-12 col-lg-6 m-0 mb-0" style="background-color: #07335f">
                <p class="text-center h2 m-0 py-2" style="color:white"><?php echo lg_get_text("lg_78") ?></p>
            </div>
            <div class="col-12 col-lg-6 p-3 mx-1 mb-1 mt-0 text-center input-group" style="background-color: #1058a0; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u12-b">Under 12 - Cut Off Date : > 2011</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="checkbox" id="u12-b" aria-label="Checkbox for following text input" value="u12-b">
                    <label for="u12-b" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"><?php echo lg_get_text("lg_79") ?></label>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-3 mx-1 mb-1 mt-0 text-center input-group" style="background-color: #1058a0; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u14-b">Under 14 - Cut Off Date : > 2009</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="checkbox" id="u14-b" aria-label="Checkbox for following text input" value="u14-b">
                    <label for="u14-b" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"><?php echo lg_get_text("lg_80") ?></label>
                </div>
            </div>
            <?php if(false): ?>
            <div class="col-12 col-lg-6 p-3 mx-1 mb-1 mt-0 text-center input-group" style="background-color: #1058a0; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u18-b">Under 18 - Cut Off Date : > 2005</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="checkbox" id="u18-b" aria-label="Checkbox for following text input" value="u18-b">
                    <label for="u18-b" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"><?php echo lg_get_text("lg_81") ?></label>
                </div>
            </div>
            <?php endif; ?>

        </div>
        <div class="row justify-content-center m-0 col-12 my-2">
            <div class="col-12 col-lg-6 m-0 mb-0" style="background-color: #610951">
                <p class="text-center h2 m-0 py-2" style="color:white"><?php echo lg_get_text("lg_82") ?></p>
            </div>
            <div class="col-12 col-lg-6 p-3 mx-1 mb-1 mt-0 text-center input-group" style="background-color: #a01086; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u12-g">Under 12 - Cut Off Date : > 2011</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="checkbox" id="u12-g" aria-label="Checkbox for following text input" value="u12-g">
                    <label for="u12-g" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"><?php echo lg_get_text("lg_79") ?></label>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-3 mx-1 mb-1 mt-0 text-center input-group" style="background-color: #a01086; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u14-g">Under 14 - Cut Off Date : > 2009</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="checkbox" id="u14-g" aria-label="Checkbox for following text input" value="u14-g">
                    <label for="u14-g" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"><?php echo lg_get_text("lg_80") ?></label>
                </div>
            </div>
            <?php if(false): ?>
            <div class="col-12 col-lg-6 p-3 mx-1 mb-1 mt-0 text-center input-group" style="background-color: #a01086; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u18-g">Under 18 - Cut Off Date : > 2005</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="checkbox" id="u18-g" aria-label="Checkbox for following text input" value="u18-g">
                    <label for="u18-g" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"><?php echo lg_get_text("lg_81") ?></label>
                </div>
            </div>
            <?php endif; ?>

        </div>
        <div class="row justify-content-center m-0 col-12 my-2">
            <div class="form-group row my-3 mx-0 px-0 justify-content-center col-12">
                <input class="py-2 col-lg-3 col-sm-12 mx-2 form-control" value="<?php echo lg_get_text("lg_75") ?>" type="submit"></input>
            </div>
        </div>


    </form>

    <?php 
        elseif($type == "senior"):
    ?>
    <form method="post" action="<?php echo base_url() ?>/dota-form/senior/play" class="row justify-content-center col-12 col-md-10 my-3">
        <div class="col-12 px-0 py-3">
            <p class="h3 text-center "><?php echo lg_get_text("lg_76") ?></p>
        </div>
        <input name="type" type="text" value="senior" hidden required>
        <div class="row justify-content-center m-0 col-12 my-2">
            
            <div class="col-12 col-lg-6 p-1 m-3 text-center input-group" style="background-color: #988107; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u12-b">Under 12 - Cut Off Date : > 2011</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="radio" id="category_men" aria-label="Checkbox for following text input" value="men">
                    <label for="category_men" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"  style="font-size: 1.5rem"><?php echo lg_get_text("lg_73") ?></label>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-1 m-3 text-center input-group" style="background-color: #988107; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u14-b">Under 14 - Cut Off Date : > 2009</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="radio" id="category_men_35_plus" aria-label="Checkbox for following text input" value="men-35-plus">
                    <label for="category_men_35_plus" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"  style="font-size: 1.5rem"><?php echo lg_get_text("lg_104") ?></label>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-1 m-3 text-center input-group" style="background-color: #988107; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u14-b">Under 14 - Cut Off Date : > 2009</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="radio" id="category_women" aria-label="Checkbox for following text input" value="women">
                    <label for="category_women" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"  style="font-size: 1.5rem"><?php echo lg_get_text("lg_74") ?></label>
                </div>
            </div>
            
            <div class="col-12 col-lg-6 p-1 m-3 text-center input-group" style="background-color: #988107; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u14-b">Under 14 - Cut Off Date : > 2009</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input name="category[]" type="radio" id="category_women_35_plus" aria-label="Checkbox for following text input" value="women-35-plus">
                    <label for="category_women_35_plus" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"  style="font-size: 1.5rem"><?php echo lg_get_text("lg_103") ?></label>
                </div>
            </div>
            <div class="row justify-content-center m-0 col-12 my-2">
                <div class="form-group row my-3 mx-0 px-0 justify-content-center col-12 align-items-center">
                    <button type="submit" class="py-2 col-lg-3 col-sm-12 mx-2 form-control"><?php echo lg_get_text("lg_75") ?></button>
                </div>
            </div>
            
        </div>

    </form>
    <?php endif; ?>

</div>

