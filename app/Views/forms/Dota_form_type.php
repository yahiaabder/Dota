<style>
input.senior-h{
    border: none!important;
    background-color: transparent!important
}
.senior-h:hover{
    cursor: pointer;
    text-decoration: underline;
}
</style>

<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 80vh">
    <div class="row justify-content-center col-12 col-md-10">
        <div class="col-12 col-lg-6 p-3 m-3 text-center" style="background-color: #6a1a7c; font-size: 1.5rem">
            <a href="<?php echo base_url() ?>/dota-form/junior">Junior Registration</a>
        </div>
        <!-- <div class="col-12 col-lg-6 p-3 m-3 text-center" style="background-color: #077434; font-size: 1.5rem">
            <form action="<?php echo base_url() ?>/dota-form/senior" method="post">
                <input type="text" value="senior" name="type" hidden required>
                <input type="submit" value="Senior Registration" class="m-0 senior-h p-0" style="color: white">
            </form>
        </div> -->
        <div class="col-12 col-lg-6 p-3 m-3 text-center" style="background-color: #6a1a7c; font-size: 1.5rem">
            <a href="<?php echo base_url() ?>/dota-form/senior">Senior Registration</a>
        </div>
    </div>
</div>
