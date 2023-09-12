<?php

$dob_valid = "";

switch ($category) {
    case 'u12-b':
        # code...
        $dob_valid = "max='2018-09-01' min='2011-09-01'";
        break;
        
    case 'u14-b':
        # code...
        $dob_valid = "max='2011-09-01' min='2009-09-01'";
        break;
    
    case 'u18-b':
        # code...
        $dob_valid = "max='2011-09-01' min='2005-09-01'";
        break;
    
    case 'u12-g':
        # code...
        $dob_valid = "min='2011-09-01'";
        break;
    
    case 'u14-g':
        # code...
        $dob_valid = "max='2011-09-01' min='2009-09-01'";
        break;
    
    case 'u18-g':
        # code...
        $dob_valid = "max='2011-09-01' min='2005-09-01'";
        break;
    
    default:
        # code...
        $dob_valid = "";
        break;
}

?>


<div class="row col-12 p-0 m-0 <?php if($end == 1): echo "justify-content-center"; endif; ?>">
    <?php if(isset($category_title)): ?>
    <div class="col-12">
        <p class="h3 py-3"><?php echo $category_title ?></p>
    </div>
    <?php endif; ?>

    <?php for($i = $start ; $i<=$end ; $i++ ): ?>
    <div class="col-12 <?php if($end == 1): echo "col-lg-8"; elseif($end == 2): echo "col-lg-6"; else: echo "col-lg-4"; endif; ?> mb-3 px-0 px-md-2 ws-player-form">
        <!-- Players -->
        <div class="col-12 p-0 px-3 mb-4 py-3 ws-player-form-heading">
            <p class="h-3 m-0" style="color:white">Player <?php echo $i ?></p>
        </div>
        <div class="col-12 p-0 px-3 ws-player-form-content">
            <!-- Player Name 1-->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["name"])) echo $errors["player_".$i]["name"]; ?></p>
                <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_name_<?php echo $i ?>">Full name*</label>
                <input required class="form-control col-12 <?php text_from_right(true) ?>" type="text" name="player_<?php echo $i ?>[name]" id="player_name_<?php echo $i ?>" placeholder="Full name" value="<?php if(isset($data["player_".$i]["name"])) echo $data["player_".$i]["name"]; ?>">
            </div>


            <!-- Player DOB 1 -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["dob"])) echo $errors["player_".$i]["dob"]; ?></p>
                <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_dob_<?php echo $i ?>"><?php echo lg_get_text("lg_318")?>*</label>
                <input required <?php echo $dob_valid ?> class="form-control col-12 <?php text_from_right(true) ?>" type="date" name="player_<?php echo $i ?>[dob]" placeholder="<?php echo lg_get_text("lg_276") ?>" id="player_dob_<?php echo $i ?>" value="<?php if(isset($data["player_".$i]["dob"])) echo $data["player_".$i]["dob"]; ?>">
            </div>

            <!-- Player Gender 1 -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["gender"])) echo $errors["player_".$i]["gender"]; ?></p>
                <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_gender_<?php echo $i ?>">Gender*</label>                        
                <select name="player_<?php echo $i ?>[gender]" id="player_gender_<?php echo $i ?>" class="form-control col-12 <?php text_from_right(true) ?>">
                    <option value="">Player-1 gender</option>
                    <option value="male" <?php if(isset($data["player_".$i]["gender"]) && $data["player_".$i]["gender"] == "male") echo "selected"; ?>> Male</option>
                    <option value="female" <?php if(isset($data["player_".$i]["gender"]) && $data["player_".$i]["gender"] == "female") echo "selected" ?>> Female</option>
                </select>
            </div>

            <!-- Player Email 1 -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["email"])) echo $errors["player_".$i]["email"]; ?></p>
                <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_email_<?php echo $i ?>">Email ID*</label>
                <input class="form-control col-12 <?php text_from_right(true) ?>" type="text" name="player_<?php echo $i ?>[email]" placeholder="<?php echo lg_get_text("lg_276") ?>" id="player_email_<?php echo $i ?>" value="<?php if(isset($data["player_".$i]["email"])) echo $data["player_".$i]["email"];?>">
            </div>

            <!-- Player Phone 1 -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["phone"])) echo $errors["player_".$i]["phone"]; ?></p>
                <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_phone_<?php echo $i ?>">Phone*</label>
                <input required class="form-control col-12 <?php text_from_right(true) ?>" type="tel" name="player_<?php echo $i ?>[phone]" placeholder="<?php echo lg_get_text("lg_274") ?>: +971520000000" id="player_phone_<?php echo $i ?>" value="<?php if(isset($data["player_".$i]["phone"])) echo $data["player_".$i]["phone"];?>">
            </div>

            <!-- Player Nationality 1 -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["nationality"])) echo $errors["player_".$i]["nationality"]; ?></p>
                <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_nationality_<?php echo $i ?>">Nationality*</label>                        
                <select name="player_<?php echo $i ?>[nationality]" id="player_nationality_<?php echo $i ?>" class="form-control col-12 <?php text_from_right(true) ?>">
                    <option value="">Choose player-1 nationality</option>
                    <?php 
                        foreach($countries as $country): 
                    ?>
                        <option value="<?php echo $country->iso ?>" <?php if(isset($data["player_".$i]["nationality"]) && $data["player_".$i]["nationality"] == $country->iso) echo "selected" ?>> <?php echo $country->nicename ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Player category -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["category"])) echo $errors["player_".$i]["category"]; ?></p>
                <!-- <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_category_<?php echo $i ?>">Category*</label> -->
                <input hidden class="form-control col-12 <?php text_from_right(true) ?>" type="text" name="player_<?php echo $i ?>[category]" id="player_category_<?php echo $i ?>" value="<?php if(isset($data["player_".$i]["category"])) echo $data["player_".$i]["category"]; else if(isset($category)) echo $category ?>">
            </div>
            <!-- Player category -->
            <!-- play type -->
            <div class="form-group row mt-0 mx-0 px-0 j-c-center col-12">
                <p class="err-msg col-12 col-md-auto p-0" style="color:red"><?php if(isset($errors['player_'.$i]["play"])) echo $errors["player_".$i]["play"]; ?></p>
                <!-- <label class="form-label col-12 mb-2 px-0 <?php text_from_right(true) ?>" for="player_category_<?php echo $i ?>">Category*</label> -->
                <input hidden class="form-control col-12 <?php text_from_right(true) ?>" type="text" name="player_<?php echo $i ?>[play]" id="player_playtype_<?php echo $i ?>" value="<?php if(isset($data["player_".$i]["play"])) echo $data["player_".$i]["play"]; else if(isset($play)) echo $play ?>">
            </div>
            <!-- play type -->

        </div>
        <!-- Players -->

        
        
    </div>
    <?php endfor; ?>
</div>