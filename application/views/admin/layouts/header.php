<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="-" />
    <meta name="theme-color" content="#1a388a">
    <title><?php echo $this->lang->line('anad-electrical')." | " . (isset($pageTitle) ? $pageTitle : "") ?></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	

    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "alertify.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "alertify.bs.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo FONTAWESOME_FOLDER . "css/all.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "bootstrap-datetimepicker.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "select2.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "select2-bootstrap4.min.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "main.css" ?>">
    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "dataTables.min.css" ?>">

    <link rel="stylesheet" href="<?php echo CSS_FOLDER . "dashboard.css" ?>">
    <link rel="icon" href="<?php echo IMAGES_FOLDER."medli-ma.png" ?>">
	
	<script type="text/javascript" src="<?php echo JS_FOLDER . "jquery-3.3.1.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "bootstrap.bundle.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "moment.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "bootstrap-datetimepicker.min.js" ?>"></script>

    <script type="text/javascript" src="<?php echo JS_FOLDER . "jquery.validate.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "validator-additional-methods.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "alertify.min.js" ?>"></script>


    <script type="text/javascript" src="<?php echo JS_FOLDER . "select2.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "messages.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "common.js" ?>"></script>
    <script type="text/javascript" src="<?php echo JS_FOLDER . "datatable.min.js" ?>"></script>

    <link rel="stylesheet" href="<?php echo CSS_FOLDER ?>hierarchy-select.min.css" />

<script src="<?php echo JS_FOLDER?>hierarchy-select.min.js"></script>
    
    <script>
        var site_url = '<?php echo SITE_URL ?>';
    </script>
</head>

<body class="akula-theme-2 sky">
    <div id="wrapper" class="wrapper">
        <header class="d-print-none">
            <nav class="navbar navbar-dark border-bottom-0">
                <button class="navbar-toggler mr-3 ripple" type="button" accesskey="m">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto d-none d-md-block" href="<?php echo SITE_URL ?>"> <span><?php echo $this->lang->line("admin-panel") ?></span></a>
                <div class="dropdown">
                    <a class="dropdown-toggle d-inline-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo IMAGES_FOLDER . "medli-ma.png"?>" alt srcset class="img-fluid img-user d-none d-sm-inline-block align-middle mr-2">
                        <span id="username" class="d-inline-block align-middle"><?php echo $this->lang->line('admin') ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/change_password">Change Password</a>
                        <a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/adminLogout">Logout</a>
                    </div>
                </div>
            </nav>
            <div class="sidebar" id="sidebar">
                <ul class="sidebar-nav scrollContainer">
                    <a class href="https://www.propertyincity.com/demo/dashboard/">
                        <li class="p-3 border-bottom d-flex align-items-center justify-content-center nav-users mb-3 bg-white sit-logo-admin">
                            <img src="<?php echo IMAGES_FOLDER . "medli-ma.png"?>" alt="logo Image" srcset class="img-fluid w-75 ">
                        </li>
                    </a>
                    <li class="first-item border-effect" data-toggle="tooltip">
                        <a data-toggle="tooltip" data-placement="left" title="Dashboard" href="<?php echo DASHBOARD_URL ?>" class="nav-link text-dark d-block px-3 py-2" title="<?php echo $this->lang->line("dashboard")?>">
                            <i class="fa fa-tachometer-alt fa-fw"></i>
                            <span class="nav-text"><?php echo $this->lang->line('dashboard')?></span>
                        </a>
                    </li>
		
                    <li class="show-collapse">
                        <a href="<?php echo SUB_STATION_URL ?>" class="text-dark nav-link d-block px-3 py-2" title="<?php echo $this->lang->line("sub-stations")?>">
                            <i class="fa fa-house fa-fw" aria-hidden="true"></i>
                            
                            <span class="nav-text"><?php echo $this->lang->line("sub-stations")?></span>
                        </a>
                    </li>
                     
                      <li class="border-effect">
                        <a href="#manageLocationMenu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="<?php echo $this->lang->line("manage-location")?>">
                            <i class="fa fa-map-marked-alt fa-fw" aria-hidden="true"></i>
                            <span class="nav-text"><?php echo $this->lang->line("manage-location")?></span>
                        </a>
                        <div class="collapse navbar-collapse" id="manageLocationMenu">
                            <ul class="nav navbar-nav">
                                <li class="show-collapse">
                                    <a href="<?php echo CITY_URL ?>" class="text-dark nav-link d-block px-3 py-2" title="<?php echo $this->lang->line("city")?>">
                                        <i class="fa fa-city fa-fw" aria-hidden="true"></i>
                                        
                                        <span class="nav-text"><?php echo $this->lang->line("city")?></span>
                                    </a>
                                </li>
                                <li class="show-collapse">
                                    <a href="<?php echo LOCALITY_URL ?>" class="text-dark nav-link d-block px-3 py-2" title="<?php echo $this->lang->line("locality")?>">
                                        <i class="fa fa-map-marker-alt fa-fw" aria-hidden="true"></i>
                                        <span class="nav-text"><?php echo $this->lang->line("locality")?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="show-collapse">
                        <a href="<?php echo DESCRIPTION_DETAILS_MASTER_URL ?>" class="text-dark nav-link d-block px-3 py-2" title="<?php echo $this->lang->line("description")?>">
                            <i class="fa fa-server fa-fw" aria-hidden="true"></i>
                            <span class="nav-text"><?php echo $this->lang->line("description")?></span>
                        </a>
                    </li>
                    
                    <li class="show-collapse">
                        <a href="<?php echo INQUIRY_MASTER_URL ?>" class="text-dark nav-link d-block px-3 py-2" title="<?php echo $this->lang->line("inquiry")?>">
                            <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
                            <span class="nav-text"><?php echo $this->lang->line("inquiry")?></span>
                        </a>
                    </li>
                   	
                   	 <li class="show-collapse">
                        <a href="<?php echo VENDOR_MASTER_URL ?>" class="text-dark nav-link d-block px-3 py-2" title="<?php echo $this->lang->line("vendor")?>">
                            <i class="fa fa-user-friends fa-fw" aria-hidden="true"></i>
                            <span class="nav-text"><?php echo $this->lang->line("vendor")?></span>
                        </a>
                    </li>
                   

                </ul>
                <footer class="fixed-footer border-top p-3 bg-light">
                <?php $date = date("Y")?>
                    <p class="text-center small mb-0">&copy; <?php echo $date ?> <span class="text-theme"><?php echo $this->lang->line('anand-electrical-co')?></span>
                    </p>
                </footer>
            </div>
        </header>
        <div class="content">
            <script>
                $('.icon_wrap').on('click', function() {
                    if ($(this).parent().hasClass('active')) {
                        $(this).parent().removeClass('active');
                    } else {
                        $(this).parent().addClass('active');
                    }
                });

                $('.content').click(function() {
                    $('.notifications').removeClass('active');
                });
            </script>