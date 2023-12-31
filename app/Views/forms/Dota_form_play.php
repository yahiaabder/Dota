

<div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 80vh">
    <form method="post" action="<?php echo base_url() ?>/dota-register" class="row justify-content-center col-12 col-md-10 my-3" <?php content_from_right() ?>>
        <div class="col-12 px-0 py-3">
            <p class="h3 text-center "><?php echo lg_get_text("lg_83") ?></p>
        </div>
        <input name="type" type="text" value="senior" hidden required>
        <div class="row justify-content-center m-0 col-12 my-2">

            <input required type="text" hidden value="<?php echo $_POST["category"][0] ?>" name="category[]">
            <input required type="text" hidden value="<?php echo $_POST["type"] ?>" name="type">

            <div class="col-12 col-lg-6 p-1 m-3 text-center input-group" style="background-color: #988107; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u12-b">Under 12 - Cut Off Date : > 2011</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input required name="play" type="radio" id="play_single" aria-label="Checkbox for following text input" value="single">
                    <label for="play_single" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"  style="font-size: 1.5rem"><?php echo lg_get_text("lg_84") ?></label>
                </div>
            </div>
            <div class="col-12 col-lg-6 p-1 m-3 text-center input-group" style="background-color: #988107; font-size: 1.2rem">
                <!-- <a href="<?php echo base_url() ?>/dota-register?type=junior&category=u14-b">Under 14 - Cut Off Date : > 2009</a> -->
                <div class="input-group-text justify-content-around" style="background-color:transparent; color:white; border:none">
                    <input required name="play" type="radio" id="play_double" aria-label="Checkbox for following text input" value="double">
                    <label for="play_double" class="m-0 <?php if(get_cookie("language") == "EN") echo 'ml-3'; else echo 'mr-3' ?>"  style="font-size: 1.5rem"><?php echo lg_get_text("lg_85") ?></label>
                </div>
            </div>
            <div class="row justify-content-center m-0 col-12 my-2">
                <div class="form-group row my-3 mx-0 px-0 justify-content-center col-12 align-items-center">
                    <button type="submit" class="py-2 col-lg-3 col-sm-12 mx-2 form-control"><?php echo lg_get_text("lg_75") ?></button>
                </div>
            </div>
            
        </div>
        
    </form>
</div>