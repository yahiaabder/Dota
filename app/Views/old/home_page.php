
    <div class="container-fluid">
        <div class="container">


            <?php if(true): ?>
            <?php echo view("Common/menu" , ["op_header"=>false , "menu"=>false]); ?>
            <?php endif; ?>

            <!-- Page title -->
            <?php echo view("Common/page-title" , ["title" => "Create account"]); ?>

            <!-- Login Page -->
            <?php if(false): ?>
            <?php echo view("login.php"); ?>
            <?php endif; ?>
            
            <!-- Register Page -->
            <?php if(false): ?>
            <?php echo view("Register.php"); ?>
            <?php endif; ?>

            <!-- Create Business card form Page -->
            <?php if(true): ?>
            <?php echo view("create_bcard.php"); ?>
            <?php endif; ?>

        </div>
    </div>
