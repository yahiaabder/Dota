<?php 

    // $errors = ["user name invalid" , "email not correct" , "Phone number is user"];
?>

<div class="container-fluid p-0 m-0 row justify-content-center align-content-start" style="height: auto;">
    <?php echo view("Common/Page_title" , ["title" => "Contact us"]); ?>
    <div class="row col-12 col-lg-10 pt-3 justify-content-center">
        <?php if(isset($errors) && sizeof($errors) > 0): ?>
            <div class="alert alert-danger col-8" role="alert">
                <?php foreach($errors as $error): ?>
                    <p>
                        <?php echo $error; ?>
                    </p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row col-12 col-lg-10 py-5 justify-content-center">

        <form action="<?php echo base_url() ?>/contact-request" method="post" class="col-12 col-lg-8">
            <div class="form-row justify-content-center">
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="Name" name="full_name" required value="<?php if(isset($name)) echo $name?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="Email" name="email" required value="<?php if(isset($email)) echo $email?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="Phone number" name="phone" required value="<?php if(isset($phone)) echo $phone?>">
                </div>
                <div class="form-group col-12 col-lg-6">
                    <input type="text" class="form-control" placeholder="Subject" name="subject" required value="<?php if(isset($subject)) echo $subject?>">
                </div>
                <div class="form-group col-12">
                    <textarea class="form-control" placeholder="Let us know what you are contacting us for..." name="message" cols="45" rows="3" aria-required="true">
                        <?php if(isset($message)) echo $message ?>
                    </textarea>
                </div>
                <div class="form-group col-8">
                    <input type="submit" value="Send" class="form-control">
                </div>
            </div>
        </form>

        <div class="col-12 col-lg-8 row justify-content-center my-3 ws-contactus-infos" style="font-size: 1.4rem"> 
            <div class="col-12 col-lg-4 text-center row justify-content-between">

                <div class="col-2 mb-2 col-lg-12 p-0 text-center" style="height: 40%">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="col-10 col-lg-12 p-0 text-center" style="height: 60%">
                    <p style="font-size: 18px"><a style="color: black!important" href="tel:+971551336697">+971 55 133 6697</a></p>
                </div>

            </div>

            <div class="col-12 col-lg-4 text-center row justify-content-between">

                <div class="col-2 mb-2 col-lg-12 p-0 text-center" style="height: 40%">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="col-10 col-lg-12 p-0 text-center" style="height: 60%">
                    <p style="font-size: 18px">contact@dota.ae</p>
                </div>

            </div>

            <div class="col-12 col-lg-4 text-center row justify-content-between">

                <div class="col-2 mb-2 col-lg-12 p-0 text-center" style="height: 40%">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                </div>
                <div class="col-10 col-lg-12 p-0 text-center" style="height: 60%">
                    <p style="font-size: 18px">Dubai sports council, Dubai - UAE</p>
                </div>

            </div>
        </div>
    </div>
</div>