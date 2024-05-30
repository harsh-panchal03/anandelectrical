<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="TWT" />


    <title>Tigers HR Forgot Password</title>
    <link rel="icon" href="https://hms.thewildtigers.com/assets/images/icon.png">
    <link href="https://hms.thewildtigers.com/assets/css/combo.css" rel="stylesheet" />
    <link href="https://hms.thewildtigers.com/assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://hms.thewildtigers.com/assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://hms.thewildtigers.com/assets/css/alertify.min.css">
    <script type="text/javascript" src="https://hms.thewildtigers.com/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="https://hms.thewildtigers.com/assets/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- common custom js -->
    <script type="text/javascript" src="https://hms.thewildtigers.com/assets/js/jquery.validate.js?ver=15.11"></script>
    <style>
        @font-face {
            font-family: "Poppins";
            src: url("assets/fonts/Poppins/Poppins-Medium.ttf");
            src: url("assets/fonts/Poppins/Poppins-Regular.ttf");
        }

        body {
            font-family: "Poppins" !important;
        }

        .particles-js-canvas-el {
            position: absolute;
            top: 0;
            z-index: 0;
        }

        .login-page .main-card {
            z-index: 11111111;
        }

        .bdy-bg-color {
            background: rgba(12, 83, 157, 0.3);
        }

        .sign-in-button:focus {
            outline: 0 !important;
        }
    </style>
</head>


<body class="final-login-screen">
    <div class="container-fluid">
        <div class="row login-row">
            <div class="col-lg-7 d-none d-lg-inline-block m-auto">
                <div class="slider">
                    <div class="m-auto">
                        <img src="https://hms.thewildtigers.com/assets/images/forgot_pass.png" alt="Task Vector" class="slider-images">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 login-column">
                <div class="login-body">
                    <form action="https://hms.thewildtigers.com/login/forgotPassword" id="forgot-password" method="post" accept-charset="utf-8">

                        <div class="login-header">
                            <h4 class="login-welcome-text mb-0">Forgot Password?</h4>
                        </div>
                        <div class="login-input-section">
                            <div class="form-group login-input-icon email-content">
                                <input type="email" class="form-control login-email email" tabindex="1" id="login_username" name="email_id" type="email" value="" placeholder="Email Address" aria-label="Email Address" required>
                            </div>
                            <div class="sign-in">
                                <button type="submit" tabindex="2" class="w-100 sign-in-button">Send Link</button>
                            </div>
                            <a href="login" class="back-to-login mb-0 text-center mt-4"><i class="fa fa-arrow-left mr-2 back-to-login "></i>Back to Login</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <style>
        .invalid-feedback {
            color: #c00;
        }

        /* login-page-deep-suthar */

        .password-icon {
            font-size: 65px;
            color: #245a9c;
            margin-bottom: 3px;
        }

        .login {
            top: 0;
            width: 100%;
            text-align: center;
            bottom: 0;
            opacity: 1;
            z-index: 999;
            min-height: 100vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 0;
            background: #fff;
            overflow: hidden;
        }

        .login-form {
            display: flex;
            justify-content: center;
        }

        .form-body {
            max-width: 600px;
            width: 100%;
            padding: 45px;
            /* padding-top: 25px; */
            /* padding-bottom: 0px; */
            text-align: center;
            z-index: 999;
            background: #fff;
            box-shadow: 0 0 35px rgb(0 0 0 / 10%);
        }

        .welcome-text {
            color: #0c539d;
            font-size: 25px;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            font-weight: 700;
        }

        .back-to-login {
            color: #374957;
            font-size: 14px;
            text-decoration: none !important;
        }

        .login .form-control {
            font-family: inherit;
            font-size: 16px;
            font-weight: 400;
            line-height: inherit;
            width: 100%;
            height: auto;
            padding: 0.75rem 1.25rem;
            border: 2px solid #ddd;
            outline: none;
            border-radius: 5px;
            color: #121212;
            text-transform: unset;
        }

        .checkbox {
            width: 100%;
            position: relative;
        }

        .form-check {
            float: left;
        }

        .login .form-lable {
            padding-left: 23px;
            margin-top: 9px;
            font-size: 16px;
        }

        .f-pass {
            float: right;
            margin-top: 9px;
        }

        .login .input-checkbox {
            width: 17px;
            height: 24px;
            vertical-align: top;
            position: absolute;
            border-radius: 2px;
            border: none;
            background-color: #f7f7f7;
        }

        .login .login-btn {
            width: 100%;
        }

        .email-lable {
            color: #000000;
            font-size: 16px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .side-vector {
            width: 423px;
            margin-top: 55px;
            margin-left: 94px;
        }

        .login .form-group {
            margin-bottom: 2rem !important;
        }

        @media(max-width:992px) {
            .form-body {
                padding: 26px;
            }

            .main-login-logo {
                width: 270px;
            }
        }

        @media(max-width:1200px) {
            .form-body {
                padding: 46px;
            }

            .main-login-logo {
                width: 270px;
            }
        }

        #login_username-error,
        #login_password-error {
            float: left;
            padding-top: 5px;
            color: #dc3545;
        }

        /* main screen  */


        /* .final-login-screen{font-family: 'Poppins', sans-serif;} */
        .login-row {
            background-color: #EFF3F6;
        }

        .login-row .login-column {
            height: 100vh;
            width: 100%;
            background-color: #007BFF;
        }

        .login-column {
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            height: 100vh;
            flex-direction: column !important;
        }

        .login-body {
            background-color: white;
            padding: 70px 50px;
            border-radius: 34px;
        }

        .login-header {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .login-welcome-text {
            font-size: 20px;
            color: #000000;
            line-height: 28px;
            text-align: center;
        }

        .login-input-section {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .login-email {
            height: 54px !important;
            border: 1px solid #CFD9E0;
            border-radius: 10px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 50px;
            padding-right: 10px;
        }

        .login-input-icon {
            position: relative;
        }

        .email-content::after {
            content: "\f0e0";
        }

        /* .pw-content::after {content: '\f023';} */
        .login-input-icon::after {
            position: absolute;
            top: 19px;
            left: 15px;
            color: #374957;
            font-family: "Font Awesome 5 Free";
            font-size: 16px;
            font-weight: 400;
            line-height: 16px;
        }

        .login-input-icon-pass {
            position: relative;
        }

        /* .login-input-icon-pass::after{position: absolute;top: 19px;left: 15px;color: #374957;font-family: "Font Awesome 5 Free";font-size: 16px;font-weight: 900;line-height: 16px;} */
        .lock-icon {
            position: absolute;
            top: 19px;
            left: 15px;
        }

        .login-email {
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #374957;
        }

        .sign-in {
            margin-top: 10px;
        }

        .sign-in-button {
            padding: 15px 20px;
            border: 0;
            background: #007BFF;
            box-shadow: 0px 4px 4px rgba(0, 123, 255, 0.25);
            border-radius: 100px;
            color: white;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            cursor: pointer;
        }

        .sign-in-button:hover {
            box-shadow: none !important;
        }

        .login-password {
            height: 54px !important;
            border: 1px solid #CFD9E0;
            border-radius: 10px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 50px;
            padding-right: 38px;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #CFD9E0 !important;
            outline: 0;
            background-color: white !important;
            box-shadow: 0 0 0 0.05rem rgb(102 126 234 / 25%) !important;
        }

        .eye-slash-icon {
            position: absolute;
            right: 15px;
            top: 19px;
            color: #374957;
        }

        .slider-images {
            width: 450px !important;
            display: block;
            margin: auto;
        }

        /* Change the white to any color */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px white inset !important;
        }

        @media (max-width:768px) {
            .login-body {
                padding: 55px 23px;
                border-radius: 20px;
            }

            .login-welcome-text {
                font-size: 18px;
            }
        }
    </style>

    <script type="text/javascript" src="https://hms.thewildtigers.com/assets/js/messages.js"></script>
    <script>
        $("#forgot-password").validate({
            rules: {
                email_id: {
                    required: true
                },
            },
            messages: {
                email_id: {
                    required: "Please Enter Your Email Address"
                },
            }
        });
    </script>
</body>

</html>