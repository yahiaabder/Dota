<?php 
// $c_code = "12456";
// $academy_name ="DUBAI ACADEMY";
// $title = "Sept tournament";
// var_dump($form);die();
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
        <p>Dear Team</p>
        <p><?php echo $form["academy_name"] ?> made a registration, here is the related details</p>
        <p>
            Type: <b><?php echo $form["type"] ?></b> <br>
            Academy name: <b><?php echo $form["academy_name"] ?></b>
            Academy email: <b><?php echo $form["academy_email"] ?></b>
            <?php if(false): ?>
            Players category: <b><?php echo $form["players_category"] ?></b>
            <?php endif; ?>
            <p>Players:</p>
            
            <?php 
            $i=0; 
            foreach($form as $key => $value): 
                if($i >= 5):
            ?>
                <div style="width: 100%; marginb-bottom: 15px; padding:8px">
                    <p>Name: <b><?php echo $form["player_".($i-4)]["name"] ?></b></p>
                    <p>Date of birth: <b><?php echo $form["player_".($i-4)]["dob"] ?></b></p>
                    <p>Gender: <b><?php echo $form["player_".($i-4)]["gender"] ?></b></p>
                    <p>E-mail: <b><?php echo $form["player_".($i-4)]["email"] ?></b></p>
                    <p>Phone number: <b><?php echo $form["player_".($i-4)]["phone"] ?></b></p>
                    <p>Nationality: <b><?php echo $form["player_".($i-4)]["nationality"] ?></b></p>
                    <?php if(isset($form["player_".($i-4)]["category"]) && trim($form["player_".($i-4)]["category"]) !== ""): ?>
                    <p>Category: <b><?php echo $form["player_".($i-4)]["category"] ?></b></p>
                    <?php endif; ?>
                    <?php if(isset($form["player_".($i-4)]["play"]) && trim($form["player_".($i-4)]["play"]) !== ""): ?>
                    <p>Play type: <b><?php echo $form["player_".($i-4)]["play"] ?></b></p>
                    <?php endif; ?>
                </div>
            <?php 
            endif;
            $i++;
            endforeach; 
            ?>

            
        </p>
    </div>
    <!-- Call to action message -->

</div>