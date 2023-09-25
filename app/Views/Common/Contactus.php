<?php 

    // $errors = ["user name invalid" , "email not correct" , "Phone number is user"];
    // var_dump($settings);die();
?>

<div class="container-fluid p-0 m-0 row justify-content-center align-content-start" <?php content_from_right() ?>>
    <?php echo view("Common/Page_title" , ["title" => lg_get_text("lg_05")]); ?>
    <?php if(isset($errors) && sizeof($errors) > 0): ?>
    <div class="row col-12 col-lg-10 pt-3 justify-content-center">
            <div class="alert alert-danger col-8" role="alert">
                <?php foreach($errors as $error): ?>
                    <p>
                        <?php echo $error; ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row col-12 col-lg-10 py-5 justify-content-center align-content-center">

        <form action="<?php echo base_url() ?>/contact-request" method="post" class="col-12 col-lg-8">
            <div class="form-row justify-content-center">
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="<?php echo lg_get_text("lg_16") ?>" name="full_name" required value="<?php if(isset($name)) echo $name?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="<?php echo lg_get_text("lg_17") ?>" name="email" required value="<?php if(isset($email)) echo $email?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="<?php echo lg_get_text("lg_18") ?>" name="phone" required value="<?php if(isset($phone)) echo $phone?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="<?php echo lg_get_text("lg_19") ?>" name="subject" required value="<?php if(isset($subject)) echo $subject?>">
                </div>
                <div class="form-group col-12">
                    <textarea class="form-control" placeholder="<?php echo lg_get_text("lg_66") ?>" name="message" cols="45" rows="3" aria-required="true"><?php if(isset($message) && trim($message) !=="") echo $message ?></textarea>
                </div>
                <div class="form-group col-8">
                    <input type="submit" value="<?php echo lg_get_text("lg_20") ?>" class="form-control">
                </div>
            </div>
        </form>

        <div class="col-12 col-lg-8 row justify-content-center my-3 ws-contactus-infos" style="font-size: 1.4rem"> 
            <div class="col-12 col-lg-4 text-center row justify-content-between">

                <div class="col-2 mb-2 col-lg-12 p-0 text-center" style="height: 40%">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="col-10 col-lg-12 p-0 text-center" style="height: 60%">
                    <p style="font-size: 18px"><a style="color: black!important" href="tel:<?php echo str_replace(' ', '', $settings->phone) ?>" dir="ltr"><?php echo $settings->phone ?></a></p>
                </div>

            </div>

            <div class="col-12 col-lg-4 text-center row justify-content-between">

                <div class="col-2 mb-2 col-lg-12 p-0 text-center" style="height: 40%">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="col-10 col-lg-12 p-0 text-center" style="height: 60%">
                    <p class="mb-0" style="font-size: 18px"><?php echo $settings->email ?></p>
                    <?php if(trim($settings->email_2) !== ""): ?>
                    <p style="font-size: 18px"><?php echo $settings->email_2 ?></p>
                    <?php endif; ?>
                </div>

            </div>

            <div class="col-12 col-lg-4 text-center row justify-content-between">

                <div class="col-2 mb-2 col-lg-12 p-0 text-center" style="height: 40%">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                </div>
                <div class="col-10 col-lg-12 p-0 text-center" style="height: 60%">
                    <p style="font-size: 18px"><?php echo lg_put_text($settings->address , $settings->address_arabic) ?></p>
                </div>

            </div>
        </div>
    </div>
</div>