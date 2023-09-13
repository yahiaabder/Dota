
<?php 

    $session = session();

?>

<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">

    <title>DOTA | Sign in</title>

    <style>
        body {
            background-color: #EAEBEC;
            font-family: 'Ubuntu', sans-serif;
        }

        .main {
            background-color: #FFFFFF;
            width: 400px;
            height: 400px;
            /* margin: 15em auto; */
            border-radius: 1.5em;
            box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
        }

        .sign {
            padding-top: 40px;
            color: #043565;
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            font-size: 23px;
        }

        
        form.form1 {
            padding-top: 40px;
        }

        .pass , .name {
            width: 76%;
            color: rgb(38, 50, 56);
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background: rgba(136, 126, 126, 0.04);
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            outline: none;
            box-sizing: border-box;
            border: 2px solid rgba(0, 0, 0, 0.02);
            margin-bottom: 50px;
            margin-left: 46px;
            text-align: center;
            margin-bottom: 27px;
            font-family: 'Ubuntu', sans-serif;
        }

    
        .name:focus, .pass:focus {
            border: 2px solid rgba(0, 0, 0, 0.18) !important;

        }

        .submit {
            cursor: pointer;
            border-radius: 5em;
            color: #fff;
            background: #043565;
            border: 0;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-family: 'Ubuntu', sans-serif;
            margin-left: 35%;
            font-size: 13px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
        }

        .forgot {
            padding-top: 15px;
        }

        a {
            text-shadow: 0px 0px 3px #C7DFF7;
            color: #C7DFF7;
            text-decoration: none
        }

        @media (max-width: 600px) {
            .main {
                border-radius: 0px;
            }
        }
    </style>

</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-content-center" style="height: 100vh">
        <div class="row justify-content-center align-content-center">
            <div class="col-12 col-md-8">
                <?php if($session->getFlashdata("error")): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                            if(is_array($session->getFlashdata("error"))): 
                                foreach ($session->getFlashdata("error") as $value) {
                                    # code...
                                    echo "<p class='m-0'>".$value."</p>";
                                }
                            else:
                                echo $session->getFlashdata("error");
                            endif;
                        ?>
                   
                    </div>
                <?php endif; ?>
                <?php if($session->getFlashdata("success") && trim($session->getFlashdata("success")) !==""): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $session->getFlashdata("success") ?>
                    </div>
                <?php endif; ?>
                <?php if($session->getFlashdata("pwd_reset_status") && trim($session->getFlashdata("pwd_reset_status")) !==""): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $session->getFlashdata("pwd_reset_status") ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($username)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $username ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($password)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $password ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="main">
                <p class="sign" align="center">Reset admin password</p>
                <form class="form1" method="POST" action="<?php echo base_url() ?>/admin/update_pwd/<?php echo $ref ?>">
                    <input class="pass" name="password1" type="password" align="center" placeholder="Password">
                    <input class="pass" name="password2" type="password" align="center" placeholder="Confirm Password">
                    <button class="submit" align="center" type="submit">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>