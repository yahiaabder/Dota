<?php 
// $c_code = "12456";
// $academy_name ="DUBAI ACADEMY";
// $title = "Sept tournament";
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
                                <img src="<?php echo base_url() ?>/assets/img/dota_logo.png" width="100px"
                                    alt="">
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
        <p>Dear <?php echo $academy_name ?>, </p>
        To confirm your registration for <b><?php echo $title ?></b>, please click the button below.
        <p>Thank you!</p>
        <div style="margin:30px auto; width: 200px; height: auto; background-color: #0c9645; text-align: center;">
            <a href="https://dota.ae/user/cr/<?php echo $c_code ?>" style="color:white;">
                <p style="padding:10px 0px; margin: 0px;">Confirm registration</p>
            </a>
        </div>
    </div>
    <!-- Call to action message -->

    <!-- footer -->
    <table align="center"
        style="width:100%; height:auto; column-gap:10px; margin-top: 20px; border-collapse:separate; border-spacing:8px; border-radius:3px">
        <tbody>
            <tr></tr>
            <tr>
                <td style="height:auto; text-align:center; line-height:20px; padding:0; color:#363636" colspan="4">
                    <p style="font-size: .8rem; margin:0">
                        Tel: +971 54 791 4134 <br>
                        Email: contact@dota.ae <br>
                        © DOTA | Business Bay Opus by Omniat, Dubai.
                    </p>
                </td>
            </tr>
            <tr>
                <td style="text-align: center">
                    <a style="text-decoration:none; margin:0 10px; fill:#363636"
                        href="http://www.facebook.com/dotauaeofficial">
                        <img style="height:30px; vertical-align:middle; margin: 15px 0"
                            src="https://zamzamgames.com/assets/uploads/ns_facebook.png" alt="">
                    </a>
                    <a style="text-decoration:none; margin:0 10px; fill:#363636"
                        href="http://www.instagram.com/dotauaeofficial">
                        <img style="height:30px; vertical-align:middle; margin: 15px 0"
                            src="https://zamzamgames.com/assets/uploads/ns_instagram.png" alt="">
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- footer -->

</div>