<?php echo view("Common/Page_title" , ["title" => "Gallery"]) ?>

<?php 
// var_dump($year);die();
?>

<div class="container-fluid justify-content-center py-4">
    <div class="row m-0 p-0 p-lg-2 justify-content-center align-items-center responsive-reversed">
        <div class="ws-gallery col-12 col-lg-10 ws-gallery-content row justify-content-center align-content-start p-0 p-lg-3 m-0 mr-lg-2">
            <?php if(isset($images) && sizeof($images) > 0 && isset($year)): ?>
            <div class="col-12 ws-gallery-content p-0 text-align-center" id="animated-thumbnails-gallery">
                <?php foreach($images as $image): ?>
                    <div class="ws-gallery-item" data-src="<?php echo base_url() ?>/assets/img/gallery/<?php echo $year ?>/<?php echo basename($image) ?>">
                        <img src="<?php echo base_url() ?>/assets/img/gallery/<?php echo $year ?>/<?php echo basename($image) ?>" alt="">
                    </div>
                <?php endforeach; ?>
                
            </div>  
            <?php endif; ?>
        </div>
        
        <div class="col-12 col-lg-1 p-0 mb-3 m-lg-0 py-3 py-lg-0 pl-lg-3 of-sm-hidden">
            <div class="ws-time-line my-5 my-lg-0 d-flex justify-content-between align-items-center">
                <a href="<?php echo base_url() ?>/gallery/2023">
                    <div class="year p-3 <?php if($year == "2023") echo 'selected';?>" id="year-1">
                        <label for="year">2023</label>
                    </div>
                </a>
                <?php if(false): ?>
                <a href="<?php echo base_url() ?>/gallery/2022">
                    <div class="year p-3" <?php if($year == "2022") echo 'selected';?> id="year-2">
                        <label for="year">2022</label>
                    </div>
                </a>
                <a href="<?php echo base_url() ?>/gallery/2021">
                    <div class="year <?php if($year == "2021") echo 'selected';?> p-3" id="year-3">
                        <label for="year">2021</label>
                    </div>
                </a>
                <a href="<?php echo base_url() ?>/gallery/2020">
                    <div class="year <?php if($year == "2020") echo 'selected';?> p-3" id="year-4">
                        <label for="year">2020</label>
                    </div>
                </a>
                <a href="<?php echo base_url() ?>/gallery/2019">
                    <div class="year <?php if($year == "2019") echo 'selected';?> p-3" id="year-5">
                        <label for="year">2019</label>
                    </div>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div> 
</div>