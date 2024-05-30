<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content />
    <meta name="author" content="ANA" />
    <meta name="theme-color" content="<?php echo ADMIN_THEME ?>">
    <title><?php echo $this->lang->line('anad-electrical') ?> - <?php echo $this->lang->line('login') ?></title>

    <!-- <link rel="stylesheet" href="<?php echo CSS_FOLDER . "font-1.css" ?>"> -->
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "all.min.css" ?>">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "alertify.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "main.css" ?>">
    <style>
        .bg-grad-sharp {
            background: #fff;
        }

        .invalid-feedback {
            font-size: 90%;
        }

        @media (min-width: 992px) {
            .bg-grad-sharp {
                background: linear-gradient(to right, #fff 71%, var(--primary-color) 71%)
            }
        }

        .radio-boxes .radio-box {
            position: relative;
        }

        .radio-boxes .radio-box:not(:last-child) {
            padding-right: 3px;
        }

        .radio-boxes .radio-box input[type="radio"] {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
        }

        .radio-boxes .radio-box .form-check {
            padding-left: 0;
        }

        .radio-boxes .radio-box .form-check-label {
            display: block;
            background: #fff;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            border: 1px solid #ddd;
            text-align: center;
            font-weight: bold;
            transition: 0.25s all;
        }

        @media (max-width:575px) {
            .radio-boxes .radio-box .form-check-label {
                font-size: 80%;
            }
        }

        .radio-boxes .radio-box input[type="radio"]:focus~.form-check-label,
        .radio-boxes .radio-box .form-check-label:hover {
            border-color: #006fb9;
            color: #006fb9;
        }

        .radio-boxes .radio-box input[type="radio"]:checked~.form-check-label {
            border-color: #203c8f;
            background-color: #203c8f;
            color: #fff !important;
        }
    </style>
    <link rel="icon" href="<?php echo ASSET_FOLDER . "images/medli-ma.png" ?>">

    <script type="text/javascript" src="<?php echo JS_FOLDER . "jquery-3.3.1.min.js" ?>"></script>

    <script type="text/javascript" src="<?php echo JS_FOLDER . "jquery.validate.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "bootstrap.bundle.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "validator-additional-methods.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "common.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "alertify.min.js" ?>"></script>
</head>

<body class="akula-theme-v2 ferrari pt-lg-5 bg-grad-sharp">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="<?php echo ASSET_FOLDER . "images/medli-ma.png" ?>" alt="Site Logo" class="brand-logo-img img-fluid w-75 mb-3 mb-lg-5 mx-auto">
            </div>
            <div class="col-lg-6">

            <?php echo form_open( LOGIN_URL."checkAdminLogin"  , [ "id" => "login-form" , "method" => "post" ]) ?>
                    <div class="card card-login pb-3 mx-auto my-5 border-0 shadow-lg bg-transparents">
                        <div class="card-body pt-5">
                            <h3 class="font-weight-lighter mb-lg-3 login-account"><span><?php echo $this->lang->line('login-account') ?></span></h3>
                           
                            <div class="form-group">
                                <label for="login_email" class="email-label"><?php echo $this->lang->line("email") ?>:</label>
                                <input class="form-control" onchange="onClickDrop()" id="login_email" name="login_email" type="text" placeholder="<?php echo $this->lang->line("email") ?>"  autofocus />
                            </div>
                            <div class="form-group mb-5">
                                <label for="password"><?php echo $this->lang->line("password") ?>:</label>
                                <input class="form-control" id="login_password" name="login_password" type="password" placeholder="<?php echo $this->lang->line("password") ?>"  autocomplete="new-password" />
                            </div>

                            <div class="login-buttons">
                                <button type="submit" class="btn bg-theme login-button btn-block text-white font-weight-bold"><?php echo $this->lang->line("login") ?></button>
                            </div>
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
    <script>
    
    function onClickDrop(){
    	console.log("call me back");
    }	
    
        $("#login-form").validate({
            errorClass: "invalid-input",
            rules: {
                login_email: {
                    required: true
                },
                login_password: {
                    required: true
                },
            },
            messages: {
                login_email: {
                    required: "<?php echo sprintf($this->lang->line("required-text-input") , $this->lang->line("email")); ?>",
                },
                login_password: {
                    required: "<?php echo sprintf($this->lang->line("required-text-input") , $this->lang->line("password")); ?>",
                },
            },
            submitHandler: function(form) {
                showLoader()
                form.submit();
            }
        });

      
    </script>
</body>

</html>