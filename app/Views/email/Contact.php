<?php 
    if(false):
        $full_name= "yahia";
        $email= "yahiaabd@gmaiul.com";
        $phone= "0526918854";
        $subject= "hello world";
        $message= "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita itaque quia at, quasi repudiandae quae numquam? Quam consequuntur molestiae amet illum alias, iusto eveniet minima nulla! Cumque architecto laborum neque?";
    endif;
    ?>
<style>
    * {
        font-family: \'Poppins\', sans-serif;
    }
</style>
<div
    style="height: auto; width:650px; background-color: rgb(232, 234, 238); border: solid 1px rgba(0, 0, 0, 0.171); margin: 15px auto">

    <!-- Header -->
    <div style="padding: 0px 50px 20px; background-color: rgb(232, 234, 238);">
        <table style="width:100%; height:auto; text-align:center">
            <tbody>
                <tr>
                    <td style="text-align: center; width: auto;" colspan="2">
                        <div style="height: 100%; width: 100%; margin: auto; padding: 25px 0px">
                            <a target="blank" href="<?php echo base_url() ?>">
                                <img src="<?php echo base_url() ?>/assets/img/dota_logo.png" width="100px" alt="">
                            </a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- Header -->

    <!-- Call to action message -->
    <div style="width: 90%; padding: 25px 25px; text-align: justify; margin: auto; box-sizing: border-box;">
        <p>Dear DOTA team; </p>
        <p>The following person is trying to contact you:</p>
        <p>
            Full name: <?php echo $full_name ?> <br>
            Email address: <?php echo $email ?> <br>
            Phone number: <?php echo $phone ?>
        </p>
        <p></p>
        <p>
            Subject: <b><?php echo $subject ?></b> <br>
            Message: <br>   <b><?php echo $message ?></b>
        </p>
        <p>Thank you!</p>
        
    </div>
    <!-- Call to action message -->



</div>