<?php 
    $color = "#0c964561";
    // $status = false;
    if(!$status){
        $color = "#ff000059";
    }
?>

<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 80vh">
    <div class="justify-content-center w-100 row align-items-center">
        <div class="col-11 col-lg-8 p-3 p-lg-5" style="background-color: <?php echo $color ?>;">
            <?php if($status): ?>
            <p class="text-center col-auto" style="font-size: 1.5rem; color: rgb(77, 77, 77)">
                Thank you for contacting us, our team will be in touch with you shortly.                                
            </p>

            <?php else: ?>
            <p class="text-center col-auto" style="font-size: 1.5rem; color: rgb(77, 77, 77)">
                Something went wrong. Please <a href="<?php echo base_url() ?>/contact-us" style="color: rgb(77, 77, 77)!important; text-decoration: underline!important"><b>try again</b></a> later.                                
            </p>
            <?php endif; ?>

            <p class="text-center" style="font-size: 1.5rem; color: rgb(77, 77, 77)">
                <a href="<?php echo base_url() ?>" style="color: rgb(56, 56, 56)!important"><b>Go to home page >></a>
            </p>
        </div>
    </div>
</div>