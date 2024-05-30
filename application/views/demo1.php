<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="-" />
	<meta name="theme-color" content="#1a388a">
	<title>City - One Stop Property Admin Panel</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.min.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.bs.min.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/fontawesome/css/all.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/main.css?v=2.01">

	<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/dashboard.css?v=2.01">
	<link rel="icon" href="https://www.propertyincity.com/demo/assets/images/icon.png">

	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/moment.min.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery.validate.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/validator-additional-methods.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/alertifyjs/alertify.min.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/select2.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/scrollbar/scrollBar.js"></script>

	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/messages.js"></script>
	<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/common.js?v=2.01"></script>
	<script>
		var site_url = 'https://www.propertyincity.com/demo/';
	</script>
	<script>
		$(document).ready(function() {
			$(".scrollContainer").scrollBox();
			$('[data-toggle="collapse"]').each(function() {
				var target = $(this).attr('href');
				$(target).on('hidden.bs.collapse', function() {
					$(window).trigger("resize.scrollBox");
				});
				$(target).on('shown.bs.collapse', function() {
					$(window).trigger("resize.scrollBox");
				});
			});
		});
	</script>
</head>

<body class="akula-theme-2 sky">
	<div id="wrapper" class="wrapper">
		<header class="d-print-none">
			<nav class="navbar navbar-dark border-bottom-0">
				<button class="navbar-toggler mr-3 ripple" type="button" accesskey="m">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand mr-auto d-none d-md-block" href="https://www.propertyincity.com/demo/dashboard/"> <span>Admin Panel</span></a>
				<div class="notification-part">
					<div class="custom-notification-design justify-content-center ">
						<div class="navbar_right">
							<div class="notifications">
								<div class="icon_wrap">
									<a href="javascript:void(0);">
										<i class="far text-white fa-bell"></i>
										<div class="overlay-notification-count">
											<span>91</span>
										</div>
									</a>
								</div>
								<div class="notification_dd p-3">
									<div class="py-2 overlay-mark-as-read shadow-sm bg-theme border-bottom">
										<div class="d-flex justify-content-between align-items-center px-3 notification-heading">
											<span class="text-white font-weight-bold">Notification</span>
											<a href="https://www.propertyincity.com/demo/dashboard/markAllAsRead" class="text-white font-weight-bold">Mark All As Read</a>
										</div>
									</div>
									<div class="overlay-fixed-part pt-4 mt-4">
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//129/11124">You have received a new requirement for Villa / Bungalows - Sell From Forntend Test. Please review and do the needful.</a></p>
												<small class="d-block text-muted">02-01-2024 04:43:07 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11120">You have a new registration of forntEnd test.</a></p>
												<small class="d-block text-muted">02-01-2024 04:38:23 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11118">You have a new signup of forntEnd test.</a></p>
												<small class="d-block text-muted">02-01-2024 04:37:50 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//126/10682">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
												<small class="d-block text-muted">02-11-2023 02:15:16 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//125/10534">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
												<small class="d-block text-muted">02-11-2023 02:13:29 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//346/10386">You have received a new project enquiry for Warehouse/godown For Sale In Navrangpura, Ahmedabad ( Villa / Bungalows - Sell ) .</a></p>
												<small class="d-block text-muted">01-11-2023 04:49:30 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//345/10382">You have received a new project enquiry for Riyank Register ( Villa / Bungalows - Sell ) .</a></p>
												<small class="d-block text-muted">01-11-2023 04:48:55 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//344/10378">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
												<small class="d-block text-muted">01-11-2023 12:32:32 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//123/10230">You have received a new requirement for Flat / Apartment - Sell From Riyank Shah. Please review and do the needful.</a></p>
												<small class="d-block text-muted">01-11-2023 11:23:46 AM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10085">740</a></p>
												<small class="d-block text-muted">31-10-2023 06:32:59 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//343/10081">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
												<small class="d-block text-muted">31-10-2023 06:29:11 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10078">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
												<small class="d-block text-muted">31-10-2023 06:27:23 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//341/10075">You have received a new hot project enquiry for Unreg Agent Ae Advertisement Add Kri ( Flat / Apartment ) .</a></p>
												<small class="d-block text-muted">31-10-2023 06:24:27 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9930">716</a></p>
												<small class="d-block text-muted">31-10-2023 06:19:27 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9927">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
												<small class="d-block text-muted">31-10-2023 06:17:15 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//337/9924">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
												<small class="d-block text-muted">31-10-2023 06:13:16 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//336/9633">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
												<small class="d-block text-muted">31-10-2023 12:58:28 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//335/9630">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
												<small class="d-block text-muted">31-10-2023 12:42:32 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//334/9627">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
												<small class="d-block text-muted">31-10-2023 12:35:12 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9626">test 23</a></p>
												<small class="d-block text-muted">31-10-2023 11:00:57 AM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9625">done</a></p>
												<small class="d-block text-muted">31-10-2023 10:41:30 AM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9622">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
												<small class="d-block text-muted">31-10-2023 10:40:54 AM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//332/9333">https://prnt.sc/zKA7bRJgO19C</a></p>
												<small class="d-block text-muted">30-10-2023 01:33:20 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//331/9044">ok</a></p>
												<small class="d-block text-muted">27-10-2023 05:41:46 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8899">asd</a></p>
												<small class="d-block text-muted">27-10-2023 05:30:54 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8898">Reg. Agent Enquiry (Open Enquiry Report): 05 (show total)</a></p>
												<small class="d-block text-muted">27-10-2023 04:21:22 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//328/8174">You have received a new property enquiry for Project V1 ( Flat / Apartment - Sell ) .</a></p>
												<small class="d-block text-muted">07-08-2023 01:46:12 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//321/8170">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
												<small class="d-block text-muted">04-08-2023 08:16:38 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//320/8167">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
												<small class="d-block text-muted">04-08-2023 08:15:23 PM</small>
											</div>
										</div>
										<div class="media mb-2 border-bottom pb-2">
											<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
											<div class="media-body">
												<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//319/8163">You have received a new property enquiry for Check In Static Page ( Office - Sell ) .</a></p>
												<small class="d-block text-muted">04-08-2023 06:59:44 PM</small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="dropdown">
					<a class="dropdown-toggle d-inline-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="https://www.propertyincity.com/demo/assets/images//defaultuser.svg" alt srcset class="img-fluid img-user d-none d-sm-inline-block align-middle mr-2">
						<span id="username" class="d-inline-block align-middle">OSP Admin</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/change_password">Change Password</a>
						<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/adminLogout">Logout</a>
					</div>
				</div>
			</nav>
			<div class="sidebar  " id="sidebar">
				<ul class="sidebar-nav scrollContainer">
					<a class href="https://www.propertyincity.com/demo/dashboard/">
						<li class="p-3 border-bottom d-flex align-items-center justify-content-center nav-users mb-3 bg-white sit-logo-admin">
							<img src="https://www.propertyincity.com/demo/assets/images/logo.png" alt srcset class="img-fluid w-75 ">
						</li>
					</a>
					<li class="first-item border-effect" data-toggle="tooltip">
						<a data-toggle="tooltip" data-placement="left" title="Dashboard" href="https://www.propertyincity.com/demo/dashboard/" class="nav-link text-dark d-block px-3 py-2" title="Dashboard">
							<i class="fa fa-tachometer-alt fa-fw"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li class="first-item border-effect" data-toggle="tooltip">
						<a data-toggle="tooltip" data-placement="left" title="Version History" href="https://www.propertyincity.com/demo/version_history/" class="nav-link text-dark d-block px-3 py-2" title="Version History">
							<i class="fa fa-tachometer-alt fa-fw"></i>
							<span class="nav-text">Version History</span>
						</a>
					</li>
					<li class="border-effect">
						<a href="#manageLocationMenu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Locations">
							<i class="fa fa-map-marked-alt fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Manage Locations</span>
						</a>
						<div class="collapse navbar-collapse" id="manageLocationMenu">
							<ul class="nav navbar-nav">
								<li class="show-collapse">
									<a href="https://www.propertyincity.com/demo/city/" class="text-dark nav-link d-block px-3 py-2" title="Manage City">
										<i class="fa fa-map fa-fw" aria-hidden="true"></i>
										<span class="nav-text">City</span>
									</a>
								</li>
								<li class="show-collapse">
									<a href="https://www.propertyincity.com/demo/locality/" class="text-dark nav-link d-block px-3 py-2" title="Manage Locality">
										<i class="fa fa-map-marker-alt fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Locality</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#managePropertyMenu" data-toggle="collapse" aria-expanded="true" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Attribute">
							<i class="fa fa-tags fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Manage Attribute</span>
						</a>
						<div class="collapse navbar-collapse" id="managePropertyMenu">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/landzone/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Landzone">
										<i class="fa fa-layer-group fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Landzone</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/facility/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Facility">
										<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Facility</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/property_area/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Area">
										<i class="fa fa-drafting-compass fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Property Area</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/property_type/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Type">
										<i class="fa fa-building fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Property Type</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/property_plan/" class="nav-link text-dark d-block px-3 py-2" title="Manage Plans">
										<i class="fa fa-hand-holding-usd fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Manage Plans</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/specification/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Specification">
										<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Specification</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/sizes_master/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sizes">
										<i class="fa-fw fa fas fa-chart-area" aria-hidden="true"></i>
										<span class="nav-text">Sizes</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#manageWebsite" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Website">
							<i class="fa fa-globe-asia fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Manage Website</span>
						</a>
						<div class="collapse navbar-collapse" id="manageWebsite">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/slider/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sliders">
										<i class="fa fa-images fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Sliders</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/advertisement/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Advertisement">
										<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Advertisement</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/unregister_advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Manage Unregister Advertisement">
										<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Unregister Advertisement</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/property_of_the_month/" class="text-dark d-block px-3 py-2 nav-link" title="Property Of The Month">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Property Of The Month</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/builder/" class="text-dark d-block px-3 py-2 nav-link" title="Builders">
										<i class="fa fa-user-shield fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Builders</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/careers/" class="text-dark d-block px-3 py-2 nav-link" title="Careers">
										<i class="fa fa-user-tie fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Careers</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/advisor/" class="text-dark d-block px-3 py-2 nav-link" title="Advisor">
										<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Advisor</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/faq/" class="text-dark d-block px-3 py-2 nav-link" title="FAQ">
										<i class="fa fa-question-circle fa-fw" aria-hidden="true"></i>
										<span class="nav-text">FAQ</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/brochure_upload_master/" class="text-dark d-block px-3 py-2 nav-link" title="Brochure Upload">
										<i class="fa fa-upload fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Brochure Upload</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#user_management" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="User Management">
							<i class="fa fa-users fa-fw" aria-hidden="true"></i>
							<span class="nav-text">User Management</span>
						</a>
						<div class="collapse navbar-collapse" id="user_management">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/designation/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Designation">
										<i class="fa fa-building fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Designation</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/user/" class="text-dark d-block px-3 py-2 nav-link" title="User">
										<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
										<span class="nav-text">User</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#manageAgents" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Agents">
							<i class="fa fa-users fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Manage Agents</span>
						</a>
						<div class="collapse navbar-collapse" id="manageAgents">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Registered Agents">
										<i class="fa fa-users fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Registered Agents</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/unregistered_agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Agents">
										<i class="fa fa-users fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Unregistered Agents</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/agent_database/" class="nav-link text-dark d-block px-3 py-2" title="Agent Database">
										<i class="fa fa-users fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Agent Database</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/signup_report/" class="nav-link text-dark d-block px-3 py-2" title="Signup Report">
										<i class="fa fa-users fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Signup Report</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#manageProperty" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Properties">
							<i class="fa fa-city fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Manage Properties</span>
						</a>
						<div class="collapse navbar-collapse" id="manageProperty">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/property/" class="nav-link text-dark d-block px-3 py-2" title="Registered Property">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Registered Property</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/unregister_property" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Property">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Unregistered Property</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/new_project/" class="nav-link text-dark d-block px-3 py-2" title="Manage New Project">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">New Project</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/unregister_new_project" class="nav-link text-dark d-block px-3 py-2" title="Unregister New Project">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Unregister New Project</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/property_template/" class="nav-link text-dark d-block px-3 py-2" title="Properties Template">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Properties Template</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/property_database/" class="nav-link text-dark d-block px-3 py-2" title="Property Database">
							<i class="fa fa-city fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Property Database</span>
						</a>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/requirement/" class="text-dark d-block px-3 py-2 nav-link" title="Requirements">
							<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Requirements</span>
						</a>
					</li>
					<li class="border-effect">
						<a href="#comparison-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Comparison">
							<i class="fa fas fa-chart-bar fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Comparison</span>
						</a>
						<div class="collapse navbar-collapse" id="comparison-report">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/comparison_master/flat-apartment" class="text-dark d-block px-3 py-2 nav-link" title="Flat/Apartment Comparison">
										<i class="fas fa-chart-bar fa-fw"></i>
										<span class="nav-text">Flat/Apartment Comparison</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/comparison_master/office" class="text-dark d-block px-3 py-2 nav-link" title="Office Comparison">
										<i class="fas fa-chart-bar fa-fw"></i>
										<span class="nav-text">Office Comparison</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/comparison_master/plot" class="text-dark d-block px-3 py-2 nav-link" title="Plot Comparison">
										<i class="fas fa-chart-bar fa-fw"></i>
										<span class="nav-text">Plot Comparison</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/enquiry_list/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
							<i class="fas fa-phone-alt fa fa-fw"></i>
							<span class="nav-text">Enquiry Received</span>
						</a>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/enquiry_report/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
							<i class="fas fa-phone-alt fa fa-fw"></i>
							<span class="nav-text">Enquiry Report</span>
						</a>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/project_price/" class="text-dark d-block px-3 py-2 nav-link" title="Project Price">
							<i class="fas fa-rupee-sign fa fa-fw"></i>
							<span class="nav-text">Project Price</span>
						</a>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/static_page/" class="text-dark d-block px-3 py-2 nav-link" title="Static Page">
							<i class="far fa-file-alt fa fa-fw"></i>
							<span class="nav-text">Static Page</span>
						</a>
					</li>
					<li>
						<a href="https://www.propertyincity.com/demo/static_page/managestaticpage" class="text-dark d-block px-3 py-2 nav-link" title="Manage Static Page">
							<i class="far fa-file-alt fa fa-fw"></i>
							<span class="nav-text">Manage Static Page</span>
						</a>
					</li>
					<li class="border-effect">
						<a href="#sms" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage SMS">
							<i class="fas fa-location-arrow fa-fw mr-2" aria-hidden="true"></i>
							<span class="nav-text">Manage SMS</span>
						</a>
						<div class="collapse navbar-collapse" id="sms">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/sms/" class="text-dark d-block px-3 py-2 nav-link" title="SMS Templates">
										<i class="far fa-comment-alt mr-2"></i>
										<span class="nav-text">SMS Templates</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/sms/sendSms" class="text-dark d-block px-3 py-2 nav-link" title="Send SMS">
										<i class="fas fa-paper-plane mr-2"></i>
										<span class="nav-text">Send SMS</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/sms/smsHistory" class="text-dark d-block px-3 py-2 nav-link" title="SMS History">
										<i class="far fa-paper-plane mr-2"></i>
										<span class="nav-text">SMS History</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#email-main" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Email">
							<i class="fas fa-envelope fa-fw mr-2" aria-hidden="true"></i>
							<span class="nav-text">Manage Email</span>
						</a>
						<div class="collapse navbar-collapse" id="email-main">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/email/" class="text-dark d-block px-3 py-2 nav-link" title="Email Templates">
										<i class="fas fa-envelope mr-2"></i>
										<span class="nav-text">Email Templates</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/email/sendEmail/" class="text-dark d-block px-3 py-2 nav-link" title="Send Emails">
										<i class="fas fa-paper-plane mr-2"></i>
										<span class="nav-text">Send Emails</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/email/emailHistory" class="text-dark d-block px-3 py-2 nav-link" title="Email History">
										<i class="far fa-paper-plane mr-2"></i>
										<span class="nav-text">Email History</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#manage-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Report">
							<i class="fas fa-file-pdf fa-fw mr-2" aria-hidden="true"></i>
							<span class="nav-text">Manage Report</span>
						</a>
						<div class="collapse navbar-collapse" id="manage-report">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/report/property_report" class="text-dark d-block px-3 py-2 nav-link" title="Property Report">
										<i class="fas fa-file-pdf fa-fw mr-2"></i>
										<span class="nav-text">Property Report</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="border-effect">
						<a href="#multi-delete-menu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Multi Delete">
							<i class="fas fa-trash-alt fa-fw mr-2" aria-hidden="true"></i>
							<span class="nav-text">Multi Delete</span>
						</a>
						<div class="collapse navbar-collapse" id="multi-delete-menu">
							<ul class="nav navbar-nav">
								<li>
									<a href="https://www.propertyincity.com/demo/multi_delete/property" class="text-dark d-block px-3 py-2 nav-link" title="Property">
										<i class="fas fa-building fa-fw mr-2"></i>
										<span class="nav-text">Property</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/multi_delete/new_project" class="text-dark d-block px-3 py-2 nav-link" title="New Project">
										<i class="fas fa-building fa-fw mr-2"></i>
										<span class="nav-text">New Project</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/multi_delete/advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Advertisement">
										<i class="fas fa-ad fa-fw mr-2"></i>
										<span class="nav-text">Advertisement</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li>
						<a href="https://www.propertyincity.com/demo/settings/" class="text-dark d-block px-3 py-2 nav-link" title="Settings">
							<i class="fa fa-cog fa-fw" aria-hidden="true"></i>
							<span class="nav-text">Settings</span>
						</a>
					</li>
					<li class="visit-site">
						<a href="https://www.propertyincity.com/demo/" target="_blank" class="nav-link text-dark d-block px-3 py-2" title="Visit Site">
							<i class="fa fa-external-link-alt fa-fw"></i>
							<span class="nav-text">Visit Site</span>
						</a>
					</li>
				</ul>
				<footer class="fixed-footer border-top p-3 bg-light">
					<p class="text-center small mb-0">&copy; 2024 <span class="text-theme">One Stop Property</span>
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
			<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
				<h1 class="h3 mb-lg-0 mr-3" id="pageTitle">Manage City</h1>
				<div class="ml-auto text-right">
					<a href="https://www.propertyincity.com/demo/city/showAddForm" class="btn btn-light text-dark border btn-sm mr-2" title="Add City"><i class="fas fa-plus"></i> Add City</a>
					<button class="btn btn-light border btn-sm" data-toggle="collapse" data-target="#searchFilter" title="Toggle Filter"><i class="fas fa-filter"></i> Filter</button>
				</div>
			</div>
			<div class="container-fluid pt-3">
				<div class="collapse" id="searchFilter">
					<div class="card card-body border-0 shadow mb-4">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="form-group">
									<label class="control-label" for="city_name">City Name</label>
									<input type="text" name="city_name" id="city_name" class="form-control" placeholder="City Name">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="form-group">
									<label class="control-label" for="State">State</label>
									<select class="form-control select2" id="state" name="state" onchange="filterData()">
										<option value>Select</option>
										<option value="1">Andhra Pradesh</option>
										<option value="2">Arunachal Pradesh</option>
										<option value="3">Assam</option>
										<option value="4">Bihar</option>
										<option value="5">Chhattisgarh</option>
										<option value="6">Goa</option>
										<option value="7">Gujarat</option>
										<option value="8">Haryana</option>
										<option value="9">Himachal Pradesh</option>
										<option value="10">Jammu and Kashmir</option>
										<option value="11">Jharkhand</option>
										<option value="12">Karnataka</option>
										<option value="13">Kerala</option>
										<option value="14">Madhya Pradesh</option>
										<option value="15">Maharashtra</option>
										<option value="16">Manipur</option>
										<option value="17">Meghalaya</option>
										<option value="18">Mizoram</option>
										<option value="19">Nagaland</option>
										<option value="20">Odisha</option>
										<option value="21">Punjab</option>
										<option value="22">Rajasthan</option>
										<option value="23">Sikkim</option>
										<option value="24">Tamil Nadu</option>
										<option value="25">Telangana</option>
										<option value="26">Tripura</option>
										<option value="27">Uttar Pradesh</option>
										<option value="28">Uttarakhand</option>
										<option value="29">West Bengal</option>
										<option value="30">Delhi</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="form-group">
									<label class="control-label" for="status">Status</label>
									<select class="form-control" id="status" name="status" onchange="filterData()">
										<option value="all">Select</option>
										<option value="Active">Active</option>
										<option value="Inactive">Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md pt-lg-2  mt-md-4 mt-lg-0">
								<button type="button" onclick="filterData()" class="btn btn-info mt-lg-3">Search</button>
								<button class="btn btn-outline-secondary reset-wild-tigers mt-lg-3">Reset</button>
							</div>
						</div>
					</div>
				</div>
				<div class="filter-result-wrapper">
					<h3 class="h4 mb-3">All Cities</h3>
					<div class="card card-body shadow-sm">
						<div class="table-responsive">
							<table class="table table-sm table-bordered table-hover">
								<thead>
									<tr>
										<th class="sr-col">Sr. No.</th>
										<th class="text-center">City</th>
										<th class="text-center">State</th>
										<th class="text-center">Status</th>
										<th class="actions-col">Actions</th>
									</tr>
								</thead>
								<tbody class="ajax-view">
									<tr>
										<td class="sr-col">1</td>
										<td>Ahmedabad</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/1" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="1" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="1" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">2</td>
										<td>Ahmedabad Tester</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/47" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="47" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="47" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">3</td>
										<td>Amreli</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/20" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="20" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="20" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">4</td>
										<td>Anand</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/8" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="8" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="8" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">5</td>
										<td>Aravalli</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/21" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="21" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="21" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">6</td>
										<td>Banaskantha</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/22" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="22" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="22" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">7</td>
										<td>Bharuch</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/14" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="14" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="14" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">8</td>
										<td>Bhavnagar</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/5" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="5" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="5" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">9</td>
										<td>Botad</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/23" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="23" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="23" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">10</td>
										<td>Chhota Udaipur</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/24" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="24" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="24" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">11</td>
										<td>Dahod</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/25" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="25" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="25" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">12</td>
										<td>Dang</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/26" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="26" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="26" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">13</td>
										<td>Delete For Second Test1</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/44" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="44" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="44" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">14</td>
										<td>Dwarka</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/27" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="27" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="27" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">15</td>
										<td>Gandhidham</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/12" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="12" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="12" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">16</td>
										<td>Ghandhinagar</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/16" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="16" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="16" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">17</td>
										<td>Gir Somnath</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/28" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="28" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="28" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">18</td>
										<td>Jamnagar</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/6" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="6" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="6" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">19</td>
										<td>Jetpur</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/17" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="17" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="17" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<tr>
										<td class="sr-col">20</td>
										<td>Junagadh</td>
										<td class="text-center">Gujarat</td>
										<td class="text-center status">Active</td>
										<td class="actions-col">
											<a title="Edit Record" href="https://www.propertyincity.com/demo/city/showEditForm/7" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
											<button title="Inactive" data-cityid="7" onclick="updateStatusCity(this)" class="btn btn-sm btn-warning mb-1"><i class="fa fa-eye-slash fa-fw iconStatus"></i></button>
											<button title="Delete" onclick="deleteCity(this)" data-cityid="7" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
										</td>
									</tr>
									<input name="current_page" type="hidden" id="current_page" value="1">
									<input name="last_page" type="hidden" id="last_page" value="3">
									<input name="per_page" type="hidden" id="per_page" value="20">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<script>
				function updateStatusCity(thisiteam) {
					var cityId = $(thisiteam).data("cityid");
					var hitURL = site_url + "city/statusCity";
					var currentRow = $(thisiteam);
					var status = $(thisiteam).parents('tr').find('.status').text();

					status = $.trim(status);

					var doStatus = null;

					if (status.toLowerCase() == 'active') {
						doStatus = 'Inactive';
					} else if (status.toLowerCase() == 'inactive') {
						doStatus = 'Active';
					} else {
						alerifyMessage('error', messages['system_error']);
						return false;
					}
					alertify.confirm(messages['update_status'], "Are you sure you want to " + doStatus + " this City ? ", function() {

						//ajax reqeust
						jQuery.ajax({
							type: "POST",
							dataType: "json",
							url: hitURL,
							data: {
								'city_id': cityId,
								'status': doStatus
							},
							beforeSend: function() {
								//block ui
								showLoader();
							},
							success: function(data) {
								hideLoader();
								if (data.status_code == 1) {
									alertifyMessage('success', data.message);
									currentRow.parents('tr').find('.status').html('');
									currentRow.parents('tr').find('.status').html(doStatus);
									currentRow.attr('title', status);
									if (status.toLowerCase() == 'active') {
										currentRow.parents('tr').find('.iconStatus').removeClass('fa fa-eye-slash');
										currentRow.parents('tr').find('.iconStatus').addClass(' fa fa-eye');
									} else {
										currentRow.parents('tr').find('.iconStatus').removeClass(' fa fa-eye');
										currentRow.parents('tr').find('.iconStatus').addClass(' fa fa-eye-slash');
									}
								} else if (data.status_code == 101) {
									alertifyMessage('error', data.message);
								} else {
									alertifyMessage('error', messages['system_error']);
								}
							},
							error: function() {

							}
						});
					}, function() {});
				}

				function deleteCity(thisitem) {
					alertify.confirm(messages['delete_record'], messages['delete-city'], function() {
						var cityId = $(thisitem).data("cityid");
						var deleteUrl = site_url + 'city/delete/' + cityId;
						window.location = deleteUrl;
					}, function() {});

				}

				function filterData() {
					var state_id = $('#state').val();
					var city_name = $.trim($('#city_name').val());
					var status = $('#status').val();

					searchAjax(site_url + 'city/filter', {
						'state_id': state_id,
						'city_name': city_name,
						'status': status
					});
				}

				$(window).scroll(function() {

					//get last page value
					let lastPage = $('#last_page').val();
					//current page value
					let CurrentPage = $('#current_page').val();

					//inc current page value
					CurrentPage = parseInt(CurrentPage) + 1;

					var scrollTop = $(window).scrollTop();

					//scrollTop = parseFloat(scrollTop).toFixed(0);

					scrollTop = (parseFloat(scrollTop) + parseInt(1));

					if ((parseFloat(scrollTop) + $(window).height()) >= $(document).height()) {

						if (lastPage >= CurrentPage) {
							var state_id = $('#state').val();
							var city_name = $.trim($('#city_name').val());
							var status = $('#status').val() != '' ? $('#status').val() : 'all';

							var check_ajax_response = true;
							check_ajax_response = searchAjax(site_url + 'city/filter', {
								'state_id': state_id,
								'city_name': city_name,
								'status': status,
								'page': CurrentPage
							}, true);
							//update current page value
							if (check_ajax_response != false) {
								$('#current_page').val(CurrentPage);
							}
						}
					}
				});
			</script>
		</div>

	</div>



	<div class="modal fade" id="comparison-builder-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Builder</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<form action="https://www.propertyincity.com/demo/comparison_master/" id="comparison-builder-form" method="post" accept-charset="utf-8">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" for="comparison_builder_name">Builder Name<span class="text-danger">*</span>:</label> <input type="text" class="form-control" name="comparison_builder_name" placeholder="Builder Name" value>
								</div>
							</div>
							<div class="col-md-12 name-mobile-multi-container">
							</div>
							<input type="hidden" name="contact_details_add_count" value>
						</div>
					</div>
					<div class="modal-footer justify-content-center">
						<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addcomparisonBuilder();" title="Add">Add</button>
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function showAddBuilderModel(thisitem) {
			var htmlform = '';
			htmlform += '<div class="card">';
			htmlform += '<div class="card-header commn-header-color">';
			htmlform += '    <div class="d-flex align-items-center">';
			htmlform += '<h5 class="mb-0 text-theme font-weight-bold">Contact Details</h5>';
			htmlform += '<button class="btn bg-theme text-white btn-sm ml-auto" onclick="addNewMobileRow();" title="" type="button"><i class="fas fa-plus text-white"></i> </button>';
			htmlform += '    </div>';
			htmlform += '</div>';
			htmlform += '<div class="card-body">';
			htmlform += '    <div class="table-responsive">';
			htmlform += '<table class="table table-sm table-bordered mb-1">';
			htmlform += '<thead>';
			htmlform += '<tr>';
			htmlform += '<th class="w-180">Name</th>';
			htmlform += '<th class="w-180">Mobile</th>';
			htmlform += '<th class="text-center">Actions</th>';
			htmlform += '</tr>';
			htmlform += '</thead>';
			htmlform += '<tbody class="other-mobile-div">';
			htmlform += '<tr class="person-detail-tr other-mobile-row">';
			htmlform += '<td><input type="text" class="form-control secondary-name" value="" placeholder="Name" name="name_1"></td>';
			htmlform += '<td>';
			htmlform += '<div class="d-flex">';
			htmlform += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" value="" placeholder="Mobile" name="mobile_1">';
			htmlform += '</div>';
			htmlform += '<label id="mobile_1-error" class="invalid-input" for="mobile_1" style="display:none"></label>'
			htmlform += '</td>';
			htmlform += '<td class="text-center"><button type="button" onclick="deleteSecondaryInfo(this)" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
			htmlform += '</tr>';
			htmlform += '</tbody>';
			htmlform += '</table>';
			htmlform += '    </div>';
			htmlform += '</div>';
			htmlform += '</div>';

			$('.name-mobile-multi-container').html(htmlform);
			openBootstrapModal('comparison-builder-model')
		}



		<tr class="person-detail-tr other-mobile-row">
                				
                				
                                    <td>
										<select class="form-control qyt">
											<option>1</option>
										</select>                					
                					</td>
                					<td>
                						<input type="text" name="rate" onchange="getOriginalAmout(this)" onkeyup="onlyNumber(this)" class="form-control rate-class"  placeholder="<?php echo $this->lang->line("rate")?>">
                					</td>
                					<td>
										<select class="form-control">
											<option><?php echo $this->lang->line("no"); ?></option>
											<option><?php echo $this->lang->line("kg"); ?></option>
										</select>                					
                					</td>
                					
                					<td>
                						<input type="text" name="original_qyt" onkeyup="onlyNumber(this)" onchange="getOriginalAmout(this); " class="form-control original-qyt"  placeholder="<?php echo $this->lang->line("orignal-qyt")?>">
                					</td>
                					<td>
                						<input type="text" class="form-control" name="total_amount_1" value="" readonly>
                					</td>
  	                              <td class="text-center"><button type="button" onclick="deleteSecondaryInfo(this)" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>
                				</tr>
              





		var contact_details_add_count = 1;

		function addNewMobileRow(thisitem) {
			contact_details_add_count++;
					
											<option>1</option>
			html += '<select class="form-control qyt" name="qyt'+ contact_details_add_count +'">'  		
			html += '<td>';
			html += '<div >';
			html += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" placeholder="Mobile" name="mobile_' + contact_details_add_count + '">';
			html += '</div>';
			html += '<label id="mobile_' + contact_details_add_count + '-error" class="invalid-input" for="mobile_' + contact_details_add_count + '" style="display:none"></label>'
			html += '</td>';
			html += '<td class="text-center"><button type="button" title="Delete" onclick ="deleteSecondaryInfo(this)" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
			html += '</tr>';
			if ($('.other-mobile-div').find('.other-mobile-row').length > 0) {
				$(html).insertAfter($('.other-mobile-div').find('.other-mobile-row:last'));
			} else {
				$('.other-mobile-div').html(html);
			}
			$('.select2').select2();
		}

		function deleteSecondaryInfo(thisitem) {
			alertify.confirm(
				messages["delete_contact_row"],
				messages["delete_row"],
				function() {
					$(thisitem).parents('.other-mobile-row').remove();
				},
				function() {}
			);
		}


		$("#comparison-builder-form").validate({
			errorClass: "invalid-input",
			rules: {
				//comparison_builder_name: { required: true, noSpace : true},
				comparison_builder_name: {
					required: true,
					validateUniqueBuilderName: true,
					noSpace: true
				},


			},
			messages: {
				comparison_builder_name: {
					required: "Please Enter Builder Name"
				},
			},
		});

		$.validator.addMethod("validateUniqueBuilderName", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkUniqueBuilderName',
				dataType: "json",
				data: {
					'comparison_builder_name': $.trim($("[name='comparison_builder_name']").val()),
					'checkUniqueName': 'yes',
					'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, ' Builder Name is Already exists in Another Builder Name. Please try again.');


		function addcomparisonBuilder() {

			if ($("#comparison-builder-form").valid() != true) {
				return false;
			}

			var secondary_name_value = false;
			var secondary_mobile_value = false;
			$('.other-mobile-div tr').each(function() {
				var secondary_name = $.trim($(this).find('.secondary-name').val());
				var secondary_mobile = $.trim($(this).find('.secondary-mobile').val());

				if ((secondary_name != '' && secondary_name != null)) {
					secondary_name_value = true;
					if ((secondary_mobile == '' || secondary_mobile == null) && secondary_mobile_value != true) {
						$(this).find('.secondary-mobile').focus();
						secondary_mobile_value = true;
					}
				}
			});

			if (secondary_name_value != true) {
				$(".secondary-name:first").focus();
				alertifyMessage('error', 'Please Enter Name');
				return false
			}

			if (secondary_mobile_value != false) {
				alertifyMessage('error', 'Please Enter Mobile');
				return false
			}

			$("[name='contact_details_add_count']").val(contact_details_add_count);

			var comparison_builder_name = $.trim($("[name=comparison_builder_name]").val())
			var fromData = new FormData($("#comparison-builder-form")[0]);

			alertify.confirm("Add Builder", 'Are you sure you want to Add Builder ?', function() {
				$.ajax({
					type: 'POST',
					url: 'https://www.propertyincity.com/demo/comparison_master/' + 'addComparisonBuilderInfo',
					data: fromData,
					dataType: 'json',
					processData: false,
					contentType: false,
					beforeSend: function() {
						showLoader();
					},
					success: function(response) {
						hideLoader();

						if (response.status_code == 1) {
							alertifyMessage('success', response.message);
							$(document).find('.builder-list').html(response.data.html);
							$('#comparison-builder-model').modal('hide');
						} else {
							alertifyMessage('error', response.message);
							return false;
						}
					}
				});
			}, function() {});
		}

		$('.modal').on('hidden.bs.modal', function() {
			if ($(this).find('form').length > 0) {
				$(this).find('form').validate().resetForm();
				$(this).find('form .custom-file-label').html('Choose file');
				$(this).find('form').trigger("reset");
				console.log($(this).find('form'));
			}
		});

		$.validator.addMethod("validateAdvertisementProject", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkAdvertisementProjectName',
				dataType: "json",
				data: {
					project_advertisement_name: $.trim($("[name='project_advertisement_name']").val()),
					'checkUniqueName': 'yes',
					record_id: (($.trim($("[name='record_id']").val()) != null) ? $.trim($("[name='record_id']").val()) : ''),
				},
				success: function(response) {

					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, 'Advertisement Project Name is Already exists Please Select another Project Name Please try again');


		function advertismentAutoFillSeoDetails(thisitem) {

			var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
			if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
				$("[name='property_category']").val('Commercial');
			} else {
				$("[name='property_category']").val('Residential');
			}

			var property_type = $("[name='property_type'] option:selected").text();
			if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
				property_type = '';
			}
			switch (property_type) {
				case 'Flat / Apartment':
					property_type = 'Flat-Apartment';
					break;
				case 'Villa / Bungalows':
					property_type = 'Villa-Bungalows';
					break;
				case 'Shop / Showroom':
					property_type = 'Shop-Showroom';
					break;
				case 'Warehouse / Godowns':
					property_type = 'Warehouse-Godowns';
					break;
			}
			var property_category = $.trim($("[name='property_category']").val());
			var city = $.trim($('[name="city_id"] option:selected').text());
			var locality = $.trim($('[name="locality"]').val());
			var project_name = $.trim($('[name="project_name"]').val());
			var project_type = $.trim($('[name="project_type"]:checked').val());
			if (project_type === undefined) {
				project_type = '';
			}
			var state = $.trim($('[name="state_id"] option:selected').text());

			var seo_title = '';
			var title_description = '';
			var title_keyword = '';

			if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

				seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
				title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
				title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

				$('[name="seo_title"]').val('');
				$('[name="seo_keywords"]').val('');
				$('[name="seo_description"]').val('');

				$('[name="seo_title"]').val(seo_title);
				$('[name="seo_keywords"]').val(title_keyword);
				$('[name="seo_description"]').val(title_description);
			}

		}

		function multiPropertyAutoFillDetails(thisitem) {

			var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
			if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
				$("[name='property_category']").val('Commercial');
			} else {
				$("[name='property_category']").val('Residential');
			}

			var property_type = $("[name='property_type'] option:selected").text();
			if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
				property_type = '';
			}
			switch (property_type) {
				case 'Flat / Apartment':
					property_type = 'Flat-Apartment';
					break;
				case 'Villa / Bungalows':
					property_type = 'Villa-Bungalows';
					break;
				case 'Shop / Showroom':
					property_type = 'Shop-Showroom';
					break;
				case 'Warehouse / Godowns':
					property_type = 'Warehouse-Godowns';
					break;
			}
			var property_category = $("[name='property_category']").val();
			var city = $('[name="city_id"] option:selected').text();
			var locality = $('[name="locality"]').val();
			var project_name = $('[name="project_name"]').val();
			var project_type = $('[name="project_type"]:checked').val();
			if (project_type === undefined) {
				project_type = '';
			}
			var state = $('[name="state_id"] option:selected').text();

			var seo_title = '';
			var title_description = '';
			var title_keyword = '';

			if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

				seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
				title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
				title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

				$('[name="seo_title"]').val('');
				$('[name="seo_keywords"]').val('');
				$('[name="seo_description"]').val('');

				$('[name="seo_title"]').val(seo_title);
				$('[name="seo_keywords"]').val(title_keyword);
				$('[name="seo_description"]').val(title_description);
			}

		}




		function advertisementData(thisitem) {
			var advertisement_record_id = $.trim($("[name='project_advertisement_name']").find('option:selected').attr('advertisement-data-record-id'));
			if (advertisement_record_id != "" && advertisement_record_id != null) {
				$("[name='project_name']").val(advertisement_record_id);

			}
		}


		function getProjectTypeInfo(thisitem) {
			var property_type = $.trim($("[name=property_type]").val())

			$.ajax({
				url: 'https://www.propertyincity.com/demo/property_of_the_month/' + 'getPropertyAdvertisementRecordDetials',
				type: 'POST',
				data: {
					'property_type': property_type
				},
				beforeSend: function() {
					//block ui
					showLoader();
				},
				success: function(response) {
					hideLoader();
					if (response != "" && response != null) {
						$(thisitem).parents('.dependant-field-selection').find('.advertisement-list').html(response);
					}
				},
				error: function(errorResponse) {
					hideLoader();
				}
			});
		}

		$.validator.addMethod("validateUniqueLandzoneName", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/landzone/' + 'checkUniqueLandzoneName',
				dataType: "json",
				data: {
					'landzone_name': $.trim($("[name='landzone_name']").val()),
					'checkUniqueName': 'yes',
					'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, ' Landzone Name is Already exists in Another Landzone Name. Please try again.');



		$.validator.addMethod("validateUniqueFacilityName", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/facility/' + 'checkUniqueFacilityName',
				dataType: "json",
				data: {
					'name': $.trim($("[name='name']").val()),
					'checkUniqueName': 'yes',
					'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, ' Facility Name is Already exists in Another Facility Name. Please try again.');


		$.validator.addMethod("validateUniqueSpecificationName", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/specification/' + 'checkUniqueSpecificationName',
				dataType: "json",
				data: {
					'specification': $.trim($("[name='specification']").val()),
					'checkUniqueName': 'yes',
					'specification_record_id': ($.trim($("[name='specification_record_id']").val()) != '' ? $.trim($("[name='specification_record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, ' Specification Name is Already exists in Another Specification Name. Please try again.');


		$.validator.addMethod("validateUniquePropertyAreaName", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/property_area/' + 'checkUniquePropertyAreaName',
				dataType: "json",
				data: {
					'name': $.trim($("[name='name']").val()),
					'checkUniqueName': 'yes',
					'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, ' Name is Already exists in Another Name. Please try again.');


		function builderDataInfo(thisitem) {
			var builder_id = $.trim($("[name='builder_name']").val());
			$.ajax({
				url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBuilderRecordDetials',
				type: 'POST',
				data: {
					'builder_id': builder_id
				},
				beforeSend: function() {
					//block ui
					showLoader();
				},
				success: function(response) {
					hideLoader();
					response = $.trim(response);
					if (response != "" && response != null) {
						$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html(response);
						$("[name='site_person_mobile']").val('');
					} else {
						$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html('');
						$("[name='site_person_mobile']").val('');
					}
				},
				error: function(errorResponse) {
					hideLoader();
				}
			});

		}



		function getSitePersonNameInfo(thisitem) {
			var site_person_record_id = $.trim($("[name='site_person_name']").find('option:selected').attr('site-person-mobile-data'));
			if (site_person_record_id != "" && site_person_record_id != null) {
				$("[name='site_person_mobile']").val(site_person_record_id);
			} else {
				$("[name='site_person_mobile']").val('');
			}
		}

		function getSameNameBrochureMasterInfo(thisitem) {
			var project_name = $.trim($(thisitem).parents('.dependant-field-selection').find('.project-name-list').val());
			var builder_id = $.trim($("[name='builder_name']").val());
			$.ajax({
				url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBrochureAdvetimentBuilderRecordDetials',
				type: 'POST',
				dataType: "json",
				data: {
					'builder_id': builder_id,
					'project_name': project_name
				},
				beforeSend: function() {
					//block ui
					showLoader();
				},
				success: function(response) {
					hideLoader();
					if (response.status_code == 1) {
						$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html(response.data.brochureHtmlReplace);
						$("[name='new_brochure_file[]']").val(response.data.brochureFileName);
						$("[name='final_selected_image']").val(response.data.baseNameImagePreview);
					} else {
						var imageName = 'Choose file';
						$(thisitem).parents('.dependant-field-selection').find('.brocher-file-master-div-list').html(imageName);
						$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html('');
						$("[name='new_brochure_file[]']").val('');
						$("[name='final_selected_image']").val('');
					}
				},
				error: function(errorResponse) {
					hideLoader();
				}
			});


		}

		var removeImage = [];

		function removeImageHtml(thisitem) {
			alertify.confirm(messages['delete_record'], messages['delete-document-master-image-msg'], function() {
				removeImage.push($(thisitem).attr('data-preview-name'));
				$('[name="remove_image"]').val(removeImage)
				$(thisitem).parents('.brocher-document-image-div').remove();

				var remove_images_length = ($('.brocher-document-image-div').length);
				if (remove_images_length == 0) {
					$('[name="brochure_file[]"]').attr('data-valid-image', "No");
				}

			}, function() {});
		}

		function getMultipleDocumentPreview(thisitem, placeToInsertImagePreview) {
			var invalidImage = false;
			var field_id = $(thisitem).attr("id");
			var field_name = $(thisitem).attr("data-field-name");

			$("." + field_id + "-preview-div").html("");
			if (thisitem.files) {
				var filesAmount = thisitem.files.length;

				for (i = 0; i < filesAmount; i++) {
					var f = thisitem.files[i];
					var reader = new FileReader();

					if (
						thisitem.files[i].type == "image/jpg" ||
						thisitem.files[i].type == "image/png" ||
						thisitem.files[i].type == "application/pdf" ||
						thisitem.files[i].type == "image/jpeg"
					) {
						reader.onload = (function(theFile) {
							return function(e) {
								var imageName = "";
								var imageName = theFile.name;
								var imageHtml = "";

								if (imageName != "") {
									multipleImageName.push(imageName);
									$("[name='final_selected_image']").val(multipleImageName.toString());
								}

								imageHtml = '<div class="col-sm-12 my-1 brocher-document-image-div">';
								imageHtml += '<div class="row">';
								imageHtml += '<div class="upload-main-image">';
								imageHtml += '<label class="pr-2">' + imageName + '</label>';
								imageHtml += '</div>';
								imageHtml += '<div class="close-buttons">';
								imageHtml += '<button type="button" class="btn btn-danger button-round" onclick="removeImageHtml(this)" data-field-name="' + field_name + '" data-preview-name="' + imageName + '"><i class="fas fa-times"></i></button>';
								imageHtml += '</div>';
								imageHtml += '</div>';
								imageHtml += '</div>';
								$("." + field_id + "-preview-div").append($.parseHTML(imageHtml));

							};
						})(f);
					} else {
						invalidImage = true;
					}

					reader.readAsDataURL(thisitem.files[i]);
				}

				$("#final_selected_image").val(multipleImageName.toString());

				if (invalidImage != false) {
					$("#" + field_id).val("");
					$("." + field_id + "-preview-div").hide();
					$("." + field_id + "-preview-div").html("");
					alertifyMessage("error", messages["invalid-image-pdf"]);
				} else {
					$("." + field_id + "-preview-div").show();

				}
			}
		}

		$.validator.addMethod("validateUniqueAgentMobile", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
				dataType: "json",
				data: {
					'agent_mobile': ($.trim($("[name='agent_mobile']").val()) != null && $.trim($("[name='agent_mobile']").val()) != '') ? $.trim($("[name='agent_mobile']").val()) : '',
					'checkUniqueName': 'yes',
					'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, 'Mobile already exist. Please enter another Mobile.');

		// $(".get-property-atofill-selection-locality").on("select2:select", function (evt) {
		// 	  var element = evt.params.data.element;
		// 	  var $element = $(element);
		// 	  $element.detach();
		// 	  $(this).append($element);
		// 	  $(this).trigger("change");
		// }); 
		function staticAutoFillSeoDetails(thisitem) {
			var no_of_mutiply_by = $.trim($("[name='no_of_mutiply_by']").val());
			var display_property_count = $('.display-property-count-master-div').text();

			//no_of_mutiply_by = ( parseFloat( no_of_mutiply_by ) > 0.00 ? no_of_mutiply_by : 0 );
			//display_property_count = ( parseFloat( display_property_count ) > 0.00 ? display_property_count : 0 );

			var multiplication_property_count = 1;
			if ((no_of_mutiply_by != "" && no_of_mutiply_by != null) && (display_property_count != "" && display_property_count != null)) {
				multiplication_property_count = (parseFloat(display_property_count) * (parseFloat(no_of_mutiply_by)));
			}
			var property_type = $("[name='property_type_id'] option:selected").text();
			var property_type_id = $("[name='property_type_id'] option:selected").val();
			if ($("[name='property_type_id'] option:selected").val() == '' || $("[name='property_type_id'] option:selected").val() == null) {
				property_type = '';
			}
			var single_property_type_name = '';
			var main_property_type_name = '';
			var property_type_plural_name = '';
			var property_type_plural_slug_name = '';

			var property_type_flat_apartment_name = $('[name="property_type_name_selection"]').val() != '' && $('[name="property_type_name_selection"]').val() != null ? $('[name="property_type_name_selection"]:checked').val() : Flat;

			switch (property_type) {
				case 'Flat / Apartment':
					if (property_type_flat_apartment_name == 'Apartment') {
						property_type = 'Apartment';
						single_property_type_name = 'apartment';
						main_property_type_name = 'Apartment';
						property_type_plural_name = 'Apartment';
						property_type_plural_slug_name = 'apartment';
					} else {
						property_type = 'Flat';
						single_property_type_name = 'flat';
						main_property_type_name = 'Flat';
						property_type_plural_name = 'Flat';
						property_type_plural_slug_name = 'flat';
					}
					break;
				case 'Villa / Bungalows':
					property_type = 'Villa-Bungalows';
					single_property_type_name = 'villa';
					main_property_type_name = 'Villa / Bungalows';
					property_type_plural_name = 'Bungalows';
					property_type_plural_slug_name = 'villa-bungalows';
					break;
				case 'Shop / Showroom':
					property_type = 'Shop-Showroom';
					single_property_type_name = 'shop';
					main_property_type_name = 'Shop / Showroom';
					property_type_plural_name = 'Shops';
					property_type_plural_slug_name = 'shop-showroom';
					break;
				case 'Warehouse / Godowns':
					property_type = 'Warehouse-Godowns';
					single_property_type_name = 'warehouse';
					main_property_type_name = 'Warehouse / Godowns';
					property_type_plural_name = 'Godowns';
					property_type_plural_slug_name = 'warehouse-godowns';
					break;

				case 'Office':
					property_type = 'Office';
					single_property_type_name = 'office';
					main_property_type_name = 'Office';
					property_type_plural_name = 'Offices';
					property_type_plural_slug_name = 'offices';
					break;
				case 'Plot':
					property_type = 'Plot';
					single_property_type_name = 'plot';
					main_property_type_name = 'Plot';
					property_type_plural_name = 'Plots';
					property_type_plural_slug_name = 'plots';
					break;
				case 'Land':
					property_type = 'Land';
					single_property_type_name = 'land';
					main_property_type_name = 'Land';
					property_type_plural_name = 'Lands';
					property_type_plural_slug_name = 'lands';
					break;
			}
			var city = "";
			var city_id = $.trim($('[name="city_id"] option:selected').val());
			if (city_id != "" && city_id != null) {
				var city = $.trim($('[name="city_id"] option:selected').text());
			}

			var state = "";
			var state_id = $.trim($('[name="state_id"] option:selected').val());
			if (state_id != "" && state_id != null) {
				var state = $.trim($('[name="state_id"] option:selected').text());
			}

			//var city = $.trim($('[name="city_id"] option:selected').text());

			var first_locality_value = $.trim($('[name="locality_id[]"]').val()).split(",");

			var first_locality_text = '';
			if (first_locality_value != '' && first_locality_value != null) {
				var selected_locality_values = $('[name="select_locality_order[]"]').val();
				if (selected_locality_values != '' && selected_locality_values != null) {
					selected_locality_values = selected_locality_values.split(',')
					var first_value_of_location = selected_locality_values[0];
					first_locality_text = $("[name='locality_id[]'] option[value='" + first_value_of_location + "']").text();
				} else {
					first_locality_text = $('[name="locality_id[]"] option[value="' + first_locality_value[0] + '"]').text();
				}
			} else {
				first_locality_text = '';
			}

			// 	var first_locality_text = $('[name="locality_id[]"] option[value="'+first_locality_value[0]+'"]').text();
			//var state = $.trim($('[name="state_id"] option:selected').text());
			var new_purpose_status = $.trim($('[name="purpose"]:checked').val());
			var bhk_selection = $.trim($('[name="bhk_selection"]:checked').val());
			var purpose_status = $.trim($('[name="purpose"]:checked').val());
			if (new_purpose_status == 'hot_project') {
				new_purpose_status = 'Hot Projects';
			}


			if (bhk_selection != "" && bhk_selection != null) {
				var new_purpose_status = bhk_selection + 'BHK';
			}


			var house_type_array = $.trim($('[name="house_type[]"]:checked').val());
			var pre_leased_status_info = $.trim($('[name="pre_leased_status"] option:selected').val());
			var furnished_status_info = $.trim($('[name="furnished_status"]').val());

			var furnished_status = '';
			// condtion add Furnished tyre j ave chhe jyare sell rent and all property type ma ave chhe
			if (purpose_status == 'sell' || purpose_status == 'rent') {
				if (furnished_status_info != "" && furnished_status_info != null && furnished_status_info == "full") {
					furnished_status = 'Furnished';
				}
			}

			// condtion add PreLeased tyre j ave chhe jyare sell rent anf office and shop show room hoye tyre
			var pre_leased_status = '';
			if (property_type_id == '3' || property_type_id == '4') {
				if (purpose_status == 'sell' || purpose_status == 'rent') {
					if (pre_leased_status_info != "" && pre_leased_status_info != null && pre_leased_status_info == "Yes") {
						pre_leased_status = 'PreLeased';
					}
				}
			}
			var seo_title = '';
			var title_description = '';
			var title_keyword = '';
			var description = '';

			var display_purpose = '';
			var display_purpose_slug_name = '';
			switch (purpose_status) {
				case 'sell':
					display_purpose = "Sale";
					display_purpose_slug_name = "sale";
					break;
				case 'rent':
					display_purpose = "Rent";
					display_purpose_slug_name = "Rent";
					break;
				case 'hot_project':
					display_purpose = "New Project";
					purpose_status = "New Project";
					display_purpose_slug_name = "new-project";
					break;

			}

			if (property_type_id == '1' || property_type_id == '2') {

			} else {
				bhk_selection = null;
			}

			if (first_selected_locality_text != "" && first_selected_locality_text != null) {
				first_locality_text = first_selected_locality_text;
			}

			first_locality_text_array = first_locality_text.split('-');
			var upper = first_locality_text_array.map(element => {
				return element.toLowerCase().replace(/\b[a-z]/g, function(letter) {
					return letter.toUpperCase();
				});
			});
			// 	first_locality_text = upper.join('-');

			if (first_locality_value != '' && first_locality_value != null) {
				first_locality_text = upper.join('-');
			} else {
				first_locality_text = '';
			}

			var static_page_name = '';
			var static_page_name_slug = '';

			setTimeout(function() {
				seo_title = multiplication_property_count + '+ ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + property_type + ' ' + ((purpose_status != "" && purpose_status != null ? 'For ' + purpose_status : '')) + ' in ' + first_locality_text + ', ' + city;
				title_keyword = ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + first_locality_text + ', ' + city + ', ' + first_locality_text + ' ' + city + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + single_property_type_name + ' in ' + city + ', ' + single_property_type_name + ' in ' + first_locality_text + ', property in ' + first_locality_text + ', property on ' + purpose_status + ' in ' + first_locality_text + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ' in ' + first_locality_text + ' ' + city;
				title_description = 'Find ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + single_property_type_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + single_property_type_name + ' for ' + ((purpose_status != "" && purpose_status != null) ? purpose_status + ' ' : '') + 'in ' + first_locality_text + ', ' + city + " with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious " + single_property_type_name + " and much more.";

				// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
				description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + multiplication_property_count + ' ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + property_type + '. Find ' + house_type_array + '' + single_property_type_name + ' in ' + first_locality_text + '  ' + city + '. Choose Best ' + house_type_array + ' ' + single_property_type_name + ' for ' + new_purpose_status + ' in ' + first_locality_text + ',' + city + ' with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious ' + single_property_type_name + ' and much more.Â you can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in  ' + first_locality_text + ' based on your specific budget.';

				seo_title = ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + main_property_type_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city;
				title_keyword = ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk, ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' + first_locality_text.toLowerCase() + ', ' + city.toLowerCase() + ', ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk  ' + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' : '')) + '' + single_property_type_name + ' in ' + city.toLowerCase() + ', ' + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ', property in ' + first_locality_text.toLowerCase() + ', property on ' + purpose_status + ' in ' + first_locality_text.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase();
				title_description = 'Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more.';

				// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
				description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + main_property_type_name + '. Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + '. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more. You can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in ' + first_locality_text + ' based on your specific budget.';

				static_page_name = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status : '') + ' ' + (main_property_type_name != "" && main_property_type_name != null ? main_property_type_name : '') + ' for ' + (display_purpose != "" && display_purpose != null ? display_purpose : '') + ' in ' + (first_locality_text != "" && first_locality_text != null ? first_locality_text + ', ' : '') + (city != "" && city != null ? city : '');
				static_page_name_slug = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status.toLowerCase() + '-' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + '-bhk-' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + '-' : '') + (property_type_plural_slug_name != "" && property_type_plural_slug_name != null ? property_type_plural_slug_name + '-for-' : '') + (display_purpose_slug_name != "" && display_purpose_slug_name != null ? display_purpose_slug_name.toLowerCase() : '') + '-in-' + (first_locality_text != "" && first_locality_text != null ? first_locality_text.replaceAll(' ', '-').toLowerCase() + '-' : '') + ((city != "" && city != null ? city.toLowerCase() : ''));

				$('[name="seo_title"]').val('');
				$('[name="seo_keywords"]').val('');
				$('[name="seo_description"]').val('');
				$('[name="description"]').val('');

				$('[name="static_page_name"]').val('');
				$('[name="static_page_name_slug"]').val('');

				$('[name="seo_title"]').val(seo_title);
				$('[name="seo_keywords"]').val(title_keyword);
				$('[name="seo_description"]').val(title_description);
				CKEDITOR.instances['description'].setData(description);

				$('[name="static_page_name"]').val(static_page_name);
				$('[name="static_page_name_slug"]').val(static_page_name_slug);

			}, 200);




		}

		function furnishedTypeHideShow(thisitem) {
			var selected_property_type_id = $.trim($("[name='property_type_id']").val());
			var selected_value_show = $.trim($("[name='purpose']:checked").val());
			if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 1 || selected_property_type_id == 2 || selected_property_type_id == 3 || selected_property_type_id == 4 || selected_property_type_id == 5))) {
				$('.display-furnished-status-div').show();
			} else {
				$('.display-furnished-status-div').hide();
			}

			if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 3 || selected_property_type_id == 4))) {
				$('.display-pre-leased-status-div').show();
			} else {
				$('.display-pre-leased-status-div').hide();
			}

		}
	</script>
	<div class="modal fade show" id="add-agent-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Agent Database</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<form action="https://www.propertyincity.com/demo/city" id="add-agent-database-form" method="post" accept-charset="utf-8">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="database_agent_mobile">Agent Mobile No<span class="text-danger line-height">*</span>:</label>
									<input type="text" class="form-control" id="database_agent_mobile" name="database_agent_mobile" value placeholder="Agent Mobile No" autofocus onkeyup="onlyNumber(this)" minlength="10" maxlength="10">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="database_agent_name">Agent Name<span class="text-danger line-height">*</span>:</label>
									<input type="text" class="form-control valid" id="database_agent_name" name="database_agent_name" value placeholder="Agent Name" autofocus aria-invalid="false">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-center">
						<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addAgentDatabse()" title="Add">Add</button>
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		function showAddAgentDatabaseModel(thisitem) {
			openBootstrapModal('add-agent-modal');
		}


		$("#add-agent-database-form").validate({
			errorClass: "invalid-input",
			rules: {
				database_agent_name: {
					required: true,
					noSpace: true
				},
				database_agent_mobile: {
					required: true,
					mobile_regex: /^[6789]\d{9}$/,
					validateUniqueAgentDatabaseMobile: true
				},
			},
			messages: {
				database_agent_mobile: {
					required: "Please Enter Agent Mobile No."
				},
				database_agent_name: {
					required: "Please enter Agent Name."
				},

			},

		});

		function addAgentDatabse() {

			if ($("#add-agent-database-form").valid() != true) {
				return false;
			}

			var agent_mobile = $.trim($("[name='database_agent_mobile']").val());
			var agent_name = $.trim($("[name='database_agent_name']").val());

			var confirm_box = "Add Agent Database";
			var confirm_box_msg = "Are you sure you want to Agent Database ?";

			alertify.confirm(confirm_box, confirm_box_msg, function() {

				$.ajax({
					type: "POST",
					dataType: "json",
					url: 'https://www.propertyincity.com/demo/agent_database/create',
					data: {
						'agent_name': agent_name,
						'agent_mobile': agent_mobile,
					},
					beforeSend: function() {
						showLoader();
					},
					success: function(response) {
						hideLoader();
						if (response.status_code == 1) {
							alertifyMessage('success', response.message);
							$("#add-agent-modal").modal('hide');
						} else {
							alertifyMessage('error', response.message);
						}
					},
					error: function() {
						hideLoader();
					}
				});
			}, function() {});
		}

		$.validator.addMethod('validateUniqueCustomerMobileNumber', function(value, element, param) {
			var result = true;
			var mobile_no = $.trim(value);
			var record_id = $.trim($('[name="record_id"]').val());

			$.ajax({
				type: 'post',
				async: false,
				dataType: 'json',
				data: {
					'mobile_no': mobile_no,
					'record_id': record_id
				},
				url: 'https://www.propertyincity.com/demo/customer/' + 'checkUniqueCustomerMobileNumber',
				success: function(response) {
					if (response.status_code == 1) {
						result = false;
					} else {
						result = true;
					}
				},
			});
			return result;
		}, 'Mobile already exist. Please enter another Mobile.');

		function relatedCustomerNameByMobile(thisitem) {
			var mobile = $.trim($(thisitem).val());

			$.ajax({
				type: 'post',
				data: {
					'mobile': mobile
				},
				url: 'https://www.propertyincity.com/demo/customer/' + 'relatedCustomerNameByMobile',
				beforeSend: function() {
					showLoader();
				},
				success: function(response) {
					hideLoader();
					if (response != '' && response != null) {
						$('[name="customer_name"]').val(response);
					} else {
						$('[name="customer_name"]').val('');
					}
				},
				error: function() {
					hideLoader();
				}
			});
		}

		function autoGenerateAdditionalInfo() {
			var listing_purpose = ($.trim($('[name="listing_purpose"]').val()) != '' && $.trim($('[name="listing_purpose"]').val()) != null ? $.trim($('[name="listing_purpose"] option:selected').text()) : '');
			var property_type = ($.trim($('[name="property_type"]').val()) != '' && $.trim($('[name="property_type"]').val()) != null ? $.trim($('[name="property_type"] option:selected').text()) : '');
			var scheme_name = $.trim($('[name="scheme_name"]').val());
			var type = ($.trim($('[name="type"]').val()) != '' && $.trim($('[name="type"]').val()) != null ? $.trim($('[name="type"] option:selected').text()) : '');
			var project_price = $.trim($('[name="project_price"]').val());
			var furniture_type = $.trim($("[name='furniture_type']:checked").val());
			var locality = ($.trim($('[name="locality"]').val()) != '' && $.trim($('[name="locality"]').val()) != null) ? $.trim($('[name="locality"]').val()) : "";


			var size = "";
			var area = "";
			var construction_size = "";
			var construction_area = "";
			if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
				area = ($.trim($('[name="plot_area"]').val()) != "" && $.trim($('[name="plot_area"]').val()) != null) ? $.trim($('[name="plot_area"] option:selected').text()) : "";
				size = ($.trim($('[name="plot_size"]').val()) != "" && $.trim($('[name="plot_size"]').val()) != null) ? 'Plot Size ' + $.trim($('[name="plot_size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
				construction_area = ($.trim($('[name="construction_area"]').val()) != "" && $.trim($('[name="construction_area"]').val()) != null) ? $.trim($('[name="construction_area"] option:selected').text()) : "";
				construction_size = ($.trim($('[name="construction_size"]').val()) != "" && $.trim($('[name="construction_size"]').val()) != null) ? $.trim($('[name="construction_size"]').val()) + ((construction_area != "" && construction_area != null) ? ' ' + construction_area : '') : "";
			} else {
				area = ($.trim($("[name='area']").val()) != "" && $.trim($("[name='area']").val()) != null) ? $.trim($('[name="area"] option:selected').text()) : "";
				size = ($.trim($('[name="size"]').val()) != "" && $.trim($('[name="size"]').val()) != null) ? 'Size ' + $.trim($('[name="size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
			}
			console.log("construction_size = " + construction_size);
			console.log("size = " + size);

			var city = ($.trim($('[name="city_id"]').val()) != "" && $.trim($('[name="city_id"]').val()) != null) ? $.trim($('[name="city_id"] option:selected').text()) : "";
			var state = ($.trim($('[name="state_id"]').val()) != "" && $.trim($('[name="state_id"]').val()) != null) ? $.trim($('[name="state_id"] option:selected').text()) : "";

			var pre_lease = "";
			if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '4' || $('[name="property_type"]').val() == '5') {
				var pre_lease_value = ($.trim($('[name="pre_lease"]').val()) != "" && $.trim($('[name="pre_lease"]').val()) != null) ? $.trim($("input[name='pre_lease']:checked").val()) : "";;
				if (pre_lease_value == "yes") {
					pre_lease = " Pre-Leased";
				}
			}

			var house_type = [];

			if ($('[name="property_type"]').val() == '1') {

				$.each($("input[name='house_type[]']:checked"), function(K, V) {
					house_type.push(V.value);
				});
				var house_type = (house_type != null && house_type != '') ? house_type.join(', ') : "";
			}
			var furniture_type_text = "";
			if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '1' || $('[name="property_type"]').val() == '2') {
				if (furniture_type != "" && furniture_type != null && furniture_type != "none") {
					if (furniture_type == "full") {
						furniture_type_text = "Fully Furnished ";
					} else if (furniture_type == "semi") {
						furniture_type_text = "Semi Furnished ";
					}
				}
			}
			var tenure = "";
			if ($('[name="property_type"]').val() == '7') {
				tenure = $.trim($('[name="tenure"]:checked').attr('data-text'));
			}

			var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + 'Property for ' + listing_purpose + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + ' ' + (locality != "" && locality != null ? ' ' + locality : '') + ' ' + type + ' ' + house_type + ' ' + size + ' of ' + project_price;
			var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + (furniture_type_text != "" && furniture_type_text != null ? furniture_type_text : '') + 'Property for ' + listing_purpose + (tenure != "" && tenure != null ? ' ' + tenure : '') + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + (locality != "" && locality != null ? ' ' + locality : '') + (city != "" && city != null ? ' ' + city : '') + (state != "" && state != null ? ' ' + state : '') + (type != "" && type != null ? ' ' + type : '') + (house_type != "" && house_type != null ? ' ' + house_type : '') + (size != "" && size != null ? ' ' + size : '') + (construction_size != "" && construction_size != null ? ' ' + ' and Construction Size ' + construction_size : '') + (project_price != "" && project_price != null ? ' Price of ' + project_price : '');

			$('[name="additional_info"]').val(additional_info);
		}


		$.validator.addMethod("validateUniqueAgentDatabaseMobile", function(value, element) {
			var result = true;
			ajaxResponse = $.ajax({
				type: "POST",
				async: false,
				url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
				dataType: "json",
				data: {
					'agent_mobile': ($.trim($("[name='database_agent_mobile']").val()) != null && $.trim($("[name='database_agent_mobile']").val()) != '') ? $.trim($("[name='database_agent_mobile']").val()) : '',
					'checkUniqueName': 'yes',
					'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
				},
				beforeSend: function() {

				},
				success: function(response) {
					if (response.status_code == 1) {
						return false;
					} else {
						result = false;
						return true;
					}
				}
			});
			return result;
		}, 'Mobile already exist. Please enter another Mobile.');



		function checkDuplicatePropertyDatabase() {

			var result = false;
			var record_id = $.trim($("[name='record_id']").val());
			var agent_mobile = $.trim($("[name='agent_mobile']").val());
			var agent_name = $.trim($("[name='agent_name']").val());
			var customer_mobile = $.trim($("[name=customer_mobile]").val());
			var customer_name = $.trim($("[name='customer_name']").val());
			var listing_purpose = $.trim($("[name='listing_purpose']").val());
			var property_type = $.trim($("[name='property_type']").val());
			var scheme_name = $.trim($("[name='scheme_name']").val());
			var state_id = $.trim($("[name='state_id']").val());
			var city_id = $.trim($("[name='city_id']").val());
			var locality = $.trim($("[name='locality']").val());

			var type = $.trim($("[name='type']").val());

			var size = "";
			var plot_size = "";

			if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
				plot_size = $.trim($("[name='plot_size']").val());
			} else {
				size = $.trim($("[name='size']").val());
			}

			$.ajax({

				type: "POST",
				dataType: "json",
				async: false,
				url: property_database_url + 'checkDuplicatePropertyDatabase',
				data: {
					'record_id': record_id,
					'agent_mobile': agent_mobile,
					'agent_name': agent_name,
					'customer_mobile': customer_mobile,
					'customer_name': customer_name,
					'listing_purpose': listing_purpose,
					'property_type': property_type,
					'scheme_name': scheme_name,
					'state_id': state_id,
					'city_id': city_id,
					'locality': locality,
					'type': type,
					'size': size,
					'plot_size': plot_size,
				},
				beforeSend: function() {

				},
				success: function(response) {

					if (response.status_code == 1) {
						$(".duplicate-database-entry-div").show();
					} else {
						$(".duplicate-database-entry-div").hide();
					}

				},
				error: function() {

				}
			});

			return result;
		}
	</script>





	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="-" />
		<meta name="theme-color" content="#1a388a">
		<title>Add City - One Stop Property Admin Panel</title>

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.min.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.bs.min.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/fontawesome/css/all.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2-bootstrap4.min.css">
		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/main.css?v=2.01">

		<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/dashboard.css?v=2.01">
		<link rel="icon" href="https://www.propertyincity.com/demo/assets/images/icon.png">

		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap.bundle.min.js"></script>

		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/moment.min.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery.validate.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/validator-additional-methods.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/alertifyjs/alertify.min.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/select2.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/scrollbar/scrollBar.js"></script>

		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/messages.js"></script>
		<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/common.js?v=2.01"></script>
		<script>
			var site_url = 'https://www.propertyincity.com/demo/';
		</script>
		<script>
			$(document).ready(function() {
				$(".scrollContainer").scrollBox();
				$('[data-toggle="collapse"]').each(function() {
					var target = $(this).attr('href');
					$(target).on('hidden.bs.collapse', function() {
						$(window).trigger("resize.scrollBox");
					});
					$(target).on('shown.bs.collapse', function() {
						$(window).trigger("resize.scrollBox");
					});
				});
			});
		</script>
	</head>

	<body class="akula-theme-2 sky">
		<div id="wrapper" class="wrapper">
			<header class="d-print-none">
				<nav class="navbar navbar-dark border-bottom-0">
					<button class="navbar-toggler mr-3 ripple" type="button" accesskey="m">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand mr-auto d-none d-md-block" href="https://www.propertyincity.com/demo/dashboard/"> <span>Admin Panel</span></a>
					<div class="notification-part">
						<div class="custom-notification-design justify-content-center ">
							<div class="navbar_right">
								<div class="notifications">
									<div class="icon_wrap">
										<a href="javascript:void(0);">
											<i class="far text-white fa-bell"></i>
											<div class="overlay-notification-count">
												<span>91</span>
											</div>
										</a>
									</div>
									<div class="notification_dd p-3">
										<div class="py-2 overlay-mark-as-read shadow-sm bg-theme border-bottom">
											<div class="d-flex justify-content-between align-items-center px-3 notification-heading">
												<span class="text-white font-weight-bold">Notification</span>
												<a href="https://www.propertyincity.com/demo/dashboard/markAllAsRead" class="text-white font-weight-bold">Mark All As Read</a>
											</div>
										</div>
										<div class="overlay-fixed-part pt-4 mt-4">
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//129/11124">You have received a new requirement for Villa / Bungalows - Sell From Forntend Test. Please review and do the needful.</a></p>
													<small class="d-block text-muted">02-01-2024 04:43:07 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11120">You have a new registration of forntEnd test.</a></p>
													<small class="d-block text-muted">02-01-2024 04:38:23 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11118">You have a new signup of forntEnd test.</a></p>
													<small class="d-block text-muted">02-01-2024 04:37:50 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//126/10682">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
													<small class="d-block text-muted">02-11-2023 02:15:16 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//125/10534">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
													<small class="d-block text-muted">02-11-2023 02:13:29 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//346/10386">You have received a new project enquiry for Warehouse/godown For Sale In Navrangpura, Ahmedabad ( Villa / Bungalows - Sell ) .</a></p>
													<small class="d-block text-muted">01-11-2023 04:49:30 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//345/10382">You have received a new project enquiry for Riyank Register ( Villa / Bungalows - Sell ) .</a></p>
													<small class="d-block text-muted">01-11-2023 04:48:55 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//344/10378">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
													<small class="d-block text-muted">01-11-2023 12:32:32 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//123/10230">You have received a new requirement for Flat / Apartment - Sell From Riyank Shah. Please review and do the needful.</a></p>
													<small class="d-block text-muted">01-11-2023 11:23:46 AM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10085">740</a></p>
													<small class="d-block text-muted">31-10-2023 06:32:59 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//343/10081">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
													<small class="d-block text-muted">31-10-2023 06:29:11 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10078">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
													<small class="d-block text-muted">31-10-2023 06:27:23 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//341/10075">You have received a new hot project enquiry for Unreg Agent Ae Advertisement Add Kri ( Flat / Apartment ) .</a></p>
													<small class="d-block text-muted">31-10-2023 06:24:27 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9930">716</a></p>
													<small class="d-block text-muted">31-10-2023 06:19:27 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9927">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
													<small class="d-block text-muted">31-10-2023 06:17:15 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//337/9924">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
													<small class="d-block text-muted">31-10-2023 06:13:16 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//336/9633">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
													<small class="d-block text-muted">31-10-2023 12:58:28 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//335/9630">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
													<small class="d-block text-muted">31-10-2023 12:42:32 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//334/9627">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
													<small class="d-block text-muted">31-10-2023 12:35:12 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9626">test 23</a></p>
													<small class="d-block text-muted">31-10-2023 11:00:57 AM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9625">done</a></p>
													<small class="d-block text-muted">31-10-2023 10:41:30 AM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9622">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
													<small class="d-block text-muted">31-10-2023 10:40:54 AM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//332/9333">https://prnt.sc/zKA7bRJgO19C</a></p>
													<small class="d-block text-muted">30-10-2023 01:33:20 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//331/9044">ok</a></p>
													<small class="d-block text-muted">27-10-2023 05:41:46 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8899">asd</a></p>
													<small class="d-block text-muted">27-10-2023 05:30:54 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8898">Reg. Agent Enquiry (Open Enquiry Report): 05 (show total)</a></p>
													<small class="d-block text-muted">27-10-2023 04:21:22 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//328/8174">You have received a new property enquiry for Project V1 ( Flat / Apartment - Sell ) .</a></p>
													<small class="d-block text-muted">07-08-2023 01:46:12 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//321/8170">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
													<small class="d-block text-muted">04-08-2023 08:16:38 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//320/8167">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
													<small class="d-block text-muted">04-08-2023 08:15:23 PM</small>
												</div>
											</div>
											<div class="media mb-2 border-bottom pb-2">
												<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
												<div class="media-body">
													<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//319/8163">You have received a new property enquiry for Check In Static Page ( Office - Sell ) .</a></p>
													<small class="d-block text-muted">04-08-2023 06:59:44 PM</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dropdown">
						<a class="dropdown-toggle d-inline-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="https://www.propertyincity.com/demo/assets/images//defaultuser.svg" alt srcset class="img-fluid img-user d-none d-sm-inline-block align-middle mr-2">
							<span id="username" class="d-inline-block align-middle">OSP Admin</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/change_password">Change Password</a>
							<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/adminLogout">Logout</a>
						</div>
					</div>
				</nav>
				<div class="sidebar  " id="sidebar">
					<ul class="sidebar-nav scrollContainer">
						<a class href="https://www.propertyincity.com/demo/dashboard/">
							<li class="p-3 border-bottom d-flex align-items-center justify-content-center nav-users mb-3 bg-white sit-logo-admin">
								<img src="https://www.propertyincity.com/demo/assets/images/logo.png" alt srcset class="img-fluid w-75 ">
							</li>
						</a>
						<li class="first-item border-effect" data-toggle="tooltip">
							<a data-toggle="tooltip" data-placement="left" title="Dashboard" href="https://www.propertyincity.com/demo/dashboard/" class="nav-link text-dark d-block px-3 py-2" title="Dashboard">
								<i class="fa fa-tachometer-alt fa-fw"></i>
								<span class="nav-text">Dashboard</span>
							</a>
						</li>
						<li class="first-item border-effect" data-toggle="tooltip">
							<a data-toggle="tooltip" data-placement="left" title="Version History" href="https://www.propertyincity.com/demo/version_history/" class="nav-link text-dark d-block px-3 py-2" title="Version History">
								<i class="fa fa-tachometer-alt fa-fw"></i>
								<span class="nav-text">Version History</span>
							</a>
						</li>
						<li class="border-effect">
							<a href="#manageLocationMenu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Locations">
								<i class="fa fa-map-marked-alt fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Manage Locations</span>
							</a>
							<div class="collapse navbar-collapse" id="manageLocationMenu">
								<ul class="nav navbar-nav">
									<li class="show-collapse">
										<a href="https://www.propertyincity.com/demo/city/" class="text-dark nav-link d-block px-3 py-2" title="Manage City">
											<i class="fa fa-map fa-fw" aria-hidden="true"></i>
											<span class="nav-text">City</span>
										</a>
									</li>
									<li class="show-collapse">
										<a href="https://www.propertyincity.com/demo/locality/" class="text-dark nav-link d-block px-3 py-2" title="Manage Locality">
											<i class="fa fa-map-marker-alt fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Locality</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#managePropertyMenu" data-toggle="collapse" aria-expanded="true" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Attribute">
								<i class="fa fa-tags fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Manage Attribute</span>
							</a>
							<div class="collapse navbar-collapse" id="managePropertyMenu">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/landzone/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Landzone">
											<i class="fa fa-layer-group fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Landzone</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/facility/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Facility">
											<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Facility</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/property_area/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Area">
											<i class="fa fa-drafting-compass fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Property Area</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/property_type/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Type">
											<i class="fa fa-building fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Property Type</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/property_plan/" class="nav-link text-dark d-block px-3 py-2" title="Manage Plans">
											<i class="fa fa-hand-holding-usd fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Manage Plans</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/specification/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Specification">
											<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Specification</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/sizes_master/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sizes">
											<i class="fa-fw fa fas fa-chart-area" aria-hidden="true"></i>
											<span class="nav-text">Sizes</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#manageWebsite" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Website">
								<i class="fa fa-globe-asia fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Manage Website</span>
							</a>
							<div class="collapse navbar-collapse" id="manageWebsite">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/slider/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sliders">
											<i class="fa fa-images fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Sliders</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/advertisement/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Advertisement">
											<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Advertisement</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/unregister_advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Manage Unregister Advertisement">
											<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Unregister Advertisement</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/property_of_the_month/" class="text-dark d-block px-3 py-2 nav-link" title="Property Of The Month">
											<i class="fa fa-city fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Property Of The Month</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/builder/" class="text-dark d-block px-3 py-2 nav-link" title="Builders">
											<i class="fa fa-user-shield fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Builders</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/careers/" class="text-dark d-block px-3 py-2 nav-link" title="Careers">
											<i class="fa fa-user-tie fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Careers</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/advisor/" class="text-dark d-block px-3 py-2 nav-link" title="Advisor">
											<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Advisor</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/faq/" class="text-dark d-block px-3 py-2 nav-link" title="FAQ">
											<i class="fa fa-question-circle fa-fw" aria-hidden="true"></i>
											<span class="nav-text">FAQ</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/brochure_upload_master/" class="text-dark d-block px-3 py-2 nav-link" title="Brochure Upload">
											<i class="fa fa-upload fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Brochure Upload</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#user_management" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="User Management">
								<i class="fa fa-users fa-fw" aria-hidden="true"></i>
								<span class="nav-text">User Management</span>
							</a>
							<div class="collapse navbar-collapse" id="user_management">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/designation/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Designation">
											<i class="fa fa-building fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Designation</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/user/" class="text-dark d-block px-3 py-2 nav-link" title="User">
											<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
											<span class="nav-text">User</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#manageAgents" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Agents">
								<i class="fa fa-users fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Manage Agents</span>
							</a>
							<div class="collapse navbar-collapse" id="manageAgents">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Registered Agents">
											<i class="fa fa-users fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Registered Agents</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/unregistered_agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Agents">
											<i class="fa fa-users fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Unregistered Agents</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/agent_database/" class="nav-link text-dark d-block px-3 py-2" title="Agent Database">
											<i class="fa fa-users fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Agent Database</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/signup_report/" class="nav-link text-dark d-block px-3 py-2" title="Signup Report">
											<i class="fa fa-users fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Signup Report</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#manageProperty" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Properties">
								<i class="fa fa-city fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Manage Properties</span>
							</a>
							<div class="collapse navbar-collapse" id="manageProperty">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/property/" class="nav-link text-dark d-block px-3 py-2" title="Registered Property">
											<i class="fa fa-city fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Registered Property</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/unregister_property" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Property">
											<i class="fa fa-city fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Unregistered Property</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/new_project/" class="nav-link text-dark d-block px-3 py-2" title="Manage New Project">
											<i class="fa fa-city fa-fw" aria-hidden="true"></i>
											<span class="nav-text">New Project</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/unregister_new_project" class="nav-link text-dark d-block px-3 py-2" title="Unregister New Project">
											<i class="fa fa-city fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Unregister New Project</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/property_template/" class="nav-link text-dark d-block px-3 py-2" title="Properties Template">
											<i class="fa fa-city fa-fw" aria-hidden="true"></i>
											<span class="nav-text">Properties Template</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/property_database/" class="nav-link text-dark d-block px-3 py-2" title="Property Database">
								<i class="fa fa-city fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Property Database</span>
							</a>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/requirement/" class="text-dark d-block px-3 py-2 nav-link" title="Requirements">
								<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Requirements</span>
							</a>
						</li>
						<li class="border-effect">
							<a href="#comparison-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Comparison">
								<i class="fa fas fa-chart-bar fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Comparison</span>
							</a>
							<div class="collapse navbar-collapse" id="comparison-report">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/comparison_master/flat-apartment" class="text-dark d-block px-3 py-2 nav-link" title="Flat/Apartment Comparison">
											<i class="fas fa-chart-bar fa-fw"></i>
											<span class="nav-text">Flat/Apartment Comparison</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/comparison_master/office" class="text-dark d-block px-3 py-2 nav-link" title="Office Comparison">
											<i class="fas fa-chart-bar fa-fw"></i>
											<span class="nav-text">Office Comparison</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/comparison_master/plot" class="text-dark d-block px-3 py-2 nav-link" title="Plot Comparison">
											<i class="fas fa-chart-bar fa-fw"></i>
											<span class="nav-text">Plot Comparison</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/enquiry_list/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
								<i class="fas fa-phone-alt fa fa-fw"></i>
								<span class="nav-text">Enquiry Received</span>
							</a>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/enquiry_report/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
								<i class="fas fa-phone-alt fa fa-fw"></i>
								<span class="nav-text">Enquiry Report</span>
							</a>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/project_price/" class="text-dark d-block px-3 py-2 nav-link" title="Project Price">
								<i class="fas fa-rupee-sign fa fa-fw"></i>
								<span class="nav-text">Project Price</span>
							</a>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/static_page/" class="text-dark d-block px-3 py-2 nav-link" title="Static Page">
								<i class="far fa-file-alt fa fa-fw"></i>
								<span class="nav-text">Static Page</span>
							</a>
						</li>
						<li>
							<a href="https://www.propertyincity.com/demo/static_page/managestaticpage" class="text-dark d-block px-3 py-2 nav-link" title="Manage Static Page">
								<i class="far fa-file-alt fa fa-fw"></i>
								<span class="nav-text">Manage Static Page</span>
							</a>
						</li>
						<li class="border-effect">
							<a href="#sms" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage SMS">
								<i class="fas fa-location-arrow fa-fw mr-2" aria-hidden="true"></i>
								<span class="nav-text">Manage SMS</span>
							</a>
							<div class="collapse navbar-collapse" id="sms">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/sms/" class="text-dark d-block px-3 py-2 nav-link" title="SMS Templates">
											<i class="far fa-comment-alt mr-2"></i>
											<span class="nav-text">SMS Templates</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/sms/sendSms" class="text-dark d-block px-3 py-2 nav-link" title="Send SMS">
											<i class="fas fa-paper-plane mr-2"></i>
											<span class="nav-text">Send SMS</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/sms/smsHistory" class="text-dark d-block px-3 py-2 nav-link" title="SMS History">
											<i class="far fa-paper-plane mr-2"></i>
											<span class="nav-text">SMS History</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#email-main" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Email">
								<i class="fas fa-envelope fa-fw mr-2" aria-hidden="true"></i>
								<span class="nav-text">Manage Email</span>
							</a>
							<div class="collapse navbar-collapse" id="email-main">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/email/" class="text-dark d-block px-3 py-2 nav-link" title="Email Templates">
											<i class="fas fa-envelope mr-2"></i>
											<span class="nav-text">Email Templates</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/email/sendEmail/" class="text-dark d-block px-3 py-2 nav-link" title="Send Emails">
											<i class="fas fa-paper-plane mr-2"></i>
											<span class="nav-text">Send Emails</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/email/emailHistory" class="text-dark d-block px-3 py-2 nav-link" title="Email History">
											<i class="far fa-paper-plane mr-2"></i>
											<span class="nav-text">Email History</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#manage-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Report">
								<i class="fas fa-file-pdf fa-fw mr-2" aria-hidden="true"></i>
								<span class="nav-text">Manage Report</span>
							</a>
							<div class="collapse navbar-collapse" id="manage-report">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/report/property_report" class="text-dark d-block px-3 py-2 nav-link" title="Property Report">
											<i class="fas fa-file-pdf fa-fw mr-2"></i>
											<span class="nav-text">Property Report</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="border-effect">
							<a href="#multi-delete-menu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Multi Delete">
								<i class="fas fa-trash-alt fa-fw mr-2" aria-hidden="true"></i>
								<span class="nav-text">Multi Delete</span>
							</a>
							<div class="collapse navbar-collapse" id="multi-delete-menu">
								<ul class="nav navbar-nav">
									<li>
										<a href="https://www.propertyincity.com/demo/multi_delete/property" class="text-dark d-block px-3 py-2 nav-link" title="Property">
											<i class="fas fa-building fa-fw mr-2"></i>
											<span class="nav-text">Property</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/multi_delete/new_project" class="text-dark d-block px-3 py-2 nav-link" title="New Project">
											<i class="fas fa-building fa-fw mr-2"></i>
											<span class="nav-text">New Project</span>
										</a>
									</li>
									<li>
										<a href="https://www.propertyincity.com/demo/multi_delete/advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Advertisement">
											<i class="fas fa-ad fa-fw mr-2"></i>
											<span class="nav-text">Advertisement</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<a href="https://www.propertyincity.com/demo/settings/" class="text-dark d-block px-3 py-2 nav-link" title="Settings">
								<i class="fa fa-cog fa-fw" aria-hidden="true"></i>
								<span class="nav-text">Settings</span>
							</a>
						</li>
						<li class="visit-site">
							<a href="https://www.propertyincity.com/demo/" target="_blank" class="nav-link text-dark d-block px-3 py-2" title="Visit Site">
								<i class="fa fa-external-link-alt fa-fw"></i>
								<span class="nav-text">Visit Site</span>
							</a>
						</li>
					</ul>
					<footer class="fixed-footer border-top p-3 bg-light">
						<p class="text-center small mb-0">&copy; 2024 <span class="text-theme">One Stop Property</span>
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
				<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
					<h1 class="h3 mb-lg-0 mr-3" id="pageTitle">Add City</h1>
					<nav aria-label="breadcrumb" class="d-flex mr-3">
						<ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
							<li class="breadcrumb-item"><a href="https://www.propertyincity.com/demo/city/">All Cities</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add City</li>
						</ol>
					</nav>
				</div>
				<div class="container-fluid pt-3">
					<div class="card card-body mb-3 shadow-sm">
						<form action="https://www.propertyincity.com/demo/city/create" id="cityForm" method="post" accept-charset="utf-8">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" for="city_name">City Name<span class="text-danger line-height">*</span>:</label>
										<input type="text" class="form-control" id="city_name" name="city_name" placeholder="City Name" autofocus value>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" for="state_id">State<span class="text-danger line-height">*</span>:</label>
										<select class="form-control" id="state" name="state">
											<option value>Select</option>
											<option value="1">Andhra Pradesh</option>
											<option value="2">Arunachal Pradesh</option>
											<option value="3">Assam</option>
											<option value="4">Bihar</option>
											<option value="5">Chhattisgarh</option>
											<option value="6">Goa</option>
											<option value="7">Gujarat</option>
											<option value="8">Haryana</option>
											<option value="9">Himachal Pradesh</option>
											<option value="10">Jammu and Kashmir</option>
											<option value="11">Jharkhand</option>
											<option value="12">Karnataka</option>
											<option value="13">Kerala</option>
											<option value="14">Madhya Pradesh</option>
											<option value="15">Maharashtra</option>
											<option value="16">Manipur</option>
											<option value="17">Meghalaya</option>
											<option value="18">Mizoram</option>
											<option value="19">Nagaland</option>
											<option value="20">Odisha</option>
											<option value="21">Punjab</option>
											<option value="22">Rajasthan</option>
											<option value="23">Sikkim</option>
											<option value="24">Tamil Nadu</option>
											<option value="25">Telangana</option>
											<option value="26">Tripura</option>
											<option value="27">Uttar Pradesh</option>
											<option value="28">Uttarakhand</option>
											<option value="29">West Bengal</option>
											<option value="30">Delhi</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn bg-success text-white btn-wide">Submit</button>
									<a href="https://www.propertyincity.com/demo/city/" class="btn btn-outline-secondary btn-wide">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
				<script>
					$("#cityForm").validate({
						errorClass: "invalid-input",
						rules: {
							city_name: {
								required: true,
								noSpace: true,
								validateCity: true
							},
							state: {
								required: true
							},
						},
						messages: {
							city_name: {
								required: "Please enter City Name."
							},
							state: {
								required: "Please select State."
							},
						},
						submitHandler: function(form) {
							showLoader()
							form.submit();
						}
					});
				</script>
			</div>

		</div>



		<div class="modal fade" id="comparison-builder-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Builder</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times"></i>
						</button>
					</div>
					<form action="https://www.propertyincity.com/demo/comparison_master/" id="comparison-builder-form" method="post" accept-charset="utf-8">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" for="comparison_builder_name">Builder Name<span class="text-danger">*</span>:</label> <input type="text" class="form-control" name="comparison_builder_name" placeholder="Builder Name" value>
									</div>
								</div>
								<div class="col-md-12 name-mobile-multi-container">
								</div>
								<input type="hidden" name="contact_details_add_count" value>
							</div>
						</div>
						<div class="modal-footer justify-content-center">
							<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addcomparisonBuilder();" title="Add">Add</button>
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script>
			function showAddBuilderModel(thisitem) {
				var htmlform = '';
				htmlform += '<div class="card">';
				htmlform += '<div class="card-header commn-header-color">';
				htmlform += '    <div class="d-flex align-items-center">';
				htmlform += '<h5 class="mb-0 text-theme font-weight-bold">Contact Details</h5>';
				htmlform += '<button class="btn bg-theme text-white btn-sm ml-auto" onclick="addNewMobileRow();" title="" type="button"><i class="fas fa-plus text-white"></i> </button>';
				htmlform += '    </div>';
				htmlform += '</div>';
				htmlform += '<div class="card-body">';
				htmlform += '    <div class="table-responsive">';
				htmlform += '<table class="table table-sm table-bordered mb-1">';
				htmlform += '<thead>';
				htmlform += '<tr>';
				htmlform += '<th class="w-180">Name</th>';
				htmlform += '<th class="w-180">Mobile</th>';
				htmlform += '<th class="text-center">Actions</th>';
				htmlform += '</tr>';
				htmlform += '</thead>';
				htmlform += '<tbody class="other-mobile-div">';
				htmlform += '<tr class="person-detail-tr other-mobile-row">';
				htmlform += '<td><input type="text" class="form-control secondary-name" value="" placeholder="Name" name="name_1"></td>';
				htmlform += '<td>';
				htmlform += '<div class="d-flex">';
				htmlform += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" value="" placeholder="Mobile" name="mobile_1">';
				htmlform += '</div>';
				htmlform += '<label id="mobile_1-error" class="invalid-input" for="mobile_1" style="display:none"></label>'
				htmlform += '</td>';
				htmlform += '<td class="text-center"><button type="button" onclick="deleteSecondaryInfo(this)" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
				htmlform += '</tr>';
				htmlform += '</tbody>';
				htmlform += '</table>';
				htmlform += '    </div>';
				htmlform += '</div>';
				htmlform += '</div>';

				$('.name-mobile-multi-container').html(htmlform);
				openBootstrapModal('comparison-builder-model')
			}

			var contact_details_add_count = 1;

			function addNewMobileRow(thisitem) {
				contact_details_add_count++;
				var html = "";
				html += '<tr class="person-detail-tr other-mobile-row">';
				html += '<td><input type="text" class="form-control secondary-name" placeholder="Name" name="name_' + contact_details_add_count + '"></td>';
				html += '<td>';
				html += '<div class="d-flex">';
				html += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" placeholder="Mobile" name="mobile_' + contact_details_add_count + '">';
				html += '</div>';
				html += '<label id="mobile_' + contact_details_add_count + '-error" class="invalid-input" for="mobile_' + contact_details_add_count + '" style="display:none"></label>'
				html += '</td>';
				html += '<td class="text-center"><button type="button" title="Delete" onclick ="deleteSecondaryInfo(this)" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
				html += '</tr>';
				if ($('.other-mobile-div').find('.other-mobile-row').length > 0) {
					$(html).insertAfter($('.other-mobile-div').find('.other-mobile-row:last'));
				} else {
					$('.other-mobile-div').html(html);
				}
				$('.select2').select2();
			}

			function deleteSecondaryInfo(thisitem) {
				alertify.confirm(
					messages["delete_contact_row"],
					messages["delete_row"],
					function() {
						$(thisitem).parents('.other-mobile-row').remove();
					},
					function() {}
				);
			}


			$("#comparison-builder-form").validate({
				errorClass: "invalid-input",
				rules: {
					//comparison_builder_name: { required: true, noSpace : true},
					comparison_builder_name: {
						required: true,
						validateUniqueBuilderName: true,
						noSpace: true
					},


				},
				messages: {
					comparison_builder_name: {
						required: "Please Enter Builder Name"
					},
				},
			});

			$.validator.addMethod("validateUniqueBuilderName", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkUniqueBuilderName',
					dataType: "json",
					data: {
						'comparison_builder_name': $.trim($("[name='comparison_builder_name']").val()),
						'checkUniqueName': 'yes',
						'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, ' Builder Name is Already exists in Another Builder Name. Please try again.');


			function addcomparisonBuilder() {

				if ($("#comparison-builder-form").valid() != true) {
					return false;
				}

				var secondary_name_value = false;
				var secondary_mobile_value = false;
				$('.other-mobile-div tr').each(function() {
					var secondary_name = $.trim($(this).find('.secondary-name').val());
					var secondary_mobile = $.trim($(this).find('.secondary-mobile').val());

					if ((secondary_name != '' && secondary_name != null)) {
						secondary_name_value = true;
						if ((secondary_mobile == '' || secondary_mobile == null) && secondary_mobile_value != true) {
							$(this).find('.secondary-mobile').focus();
							secondary_mobile_value = true;
						}
					}
				});

				if (secondary_name_value != true) {
					$(".secondary-name:first").focus();
					alertifyMessage('error', 'Please Enter Name');
					return false
				}

				if (secondary_mobile_value != false) {
					alertifyMessage('error', 'Please Enter Mobile');
					return false
				}

				$("[name='contact_details_add_count']").val(contact_details_add_count);

				var comparison_builder_name = $.trim($("[name=comparison_builder_name]").val())
				var fromData = new FormData($("#comparison-builder-form")[0]);

				alertify.confirm("Add Builder", 'Are you sure you want to Add Builder ?', function() {
					$.ajax({
						type: 'POST',
						url: 'https://www.propertyincity.com/demo/comparison_master/' + 'addComparisonBuilderInfo',
						data: fromData,
						dataType: 'json',
						processData: false,
						contentType: false,
						beforeSend: function() {
							showLoader();
						},
						success: function(response) {
							hideLoader();

							if (response.status_code == 1) {
								alertifyMessage('success', response.message);
								$(document).find('.builder-list').html(response.data.html);
								$('#comparison-builder-model').modal('hide');
							} else {
								alertifyMessage('error', response.message);
								return false;
							}
						}
					});
				}, function() {});
			}

			$('.modal').on('hidden.bs.modal', function() {
				if ($(this).find('form').length > 0) {
					$(this).find('form').validate().resetForm();
					$(this).find('form .custom-file-label').html('Choose file');
					$(this).find('form').trigger("reset");
					console.log($(this).find('form'));
				}
			});

			$.validator.addMethod("validateAdvertisementProject", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkAdvertisementProjectName',
					dataType: "json",
					data: {
						project_advertisement_name: $.trim($("[name='project_advertisement_name']").val()),
						'checkUniqueName': 'yes',
						record_id: (($.trim($("[name='record_id']").val()) != null) ? $.trim($("[name='record_id']").val()) : ''),
					},
					success: function(response) {

						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, 'Advertisement Project Name is Already exists Please Select another Project Name Please try again');


			function advertismentAutoFillSeoDetails(thisitem) {

				var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
				if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
					$("[name='property_category']").val('Commercial');
				} else {
					$("[name='property_category']").val('Residential');
				}

				var property_type = $("[name='property_type'] option:selected").text();
				if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
					property_type = '';
				}
				switch (property_type) {
					case 'Flat / Apartment':
						property_type = 'Flat-Apartment';
						break;
					case 'Villa / Bungalows':
						property_type = 'Villa-Bungalows';
						break;
					case 'Shop / Showroom':
						property_type = 'Shop-Showroom';
						break;
					case 'Warehouse / Godowns':
						property_type = 'Warehouse-Godowns';
						break;
				}
				var property_category = $.trim($("[name='property_category']").val());
				var city = $.trim($('[name="city_id"] option:selected').text());
				var locality = $.trim($('[name="locality"]').val());
				var project_name = $.trim($('[name="project_name"]').val());
				var project_type = $.trim($('[name="project_type"]:checked').val());
				if (project_type === undefined) {
					project_type = '';
				}
				var state = $.trim($('[name="state_id"] option:selected').text());

				var seo_title = '';
				var title_description = '';
				var title_keyword = '';

				if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

					seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
					title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
					title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

					$('[name="seo_title"]').val('');
					$('[name="seo_keywords"]').val('');
					$('[name="seo_description"]').val('');

					$('[name="seo_title"]').val(seo_title);
					$('[name="seo_keywords"]').val(title_keyword);
					$('[name="seo_description"]').val(title_description);
				}

			}

			function multiPropertyAutoFillDetails(thisitem) {

				var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
				if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
					$("[name='property_category']").val('Commercial');
				} else {
					$("[name='property_category']").val('Residential');
				}

				var property_type = $("[name='property_type'] option:selected").text();
				if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
					property_type = '';
				}
				switch (property_type) {
					case 'Flat / Apartment':
						property_type = 'Flat-Apartment';
						break;
					case 'Villa / Bungalows':
						property_type = 'Villa-Bungalows';
						break;
					case 'Shop / Showroom':
						property_type = 'Shop-Showroom';
						break;
					case 'Warehouse / Godowns':
						property_type = 'Warehouse-Godowns';
						break;
				}
				var property_category = $("[name='property_category']").val();
				var city = $('[name="city_id"] option:selected').text();
				var locality = $('[name="locality"]').val();
				var project_name = $('[name="project_name"]').val();
				var project_type = $('[name="project_type"]:checked').val();
				if (project_type === undefined) {
					project_type = '';
				}
				var state = $('[name="state_id"] option:selected').text();

				var seo_title = '';
				var title_description = '';
				var title_keyword = '';

				if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

					seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
					title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
					title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

					$('[name="seo_title"]').val('');
					$('[name="seo_keywords"]').val('');
					$('[name="seo_description"]').val('');

					$('[name="seo_title"]').val(seo_title);
					$('[name="seo_keywords"]').val(title_keyword);
					$('[name="seo_description"]').val(title_description);
				}

			}




			function advertisementData(thisitem) {
				var advertisement_record_id = $.trim($("[name='project_advertisement_name']").find('option:selected').attr('advertisement-data-record-id'));
				if (advertisement_record_id != "" && advertisement_record_id != null) {
					$("[name='project_name']").val(advertisement_record_id);

				}
			}


			function getProjectTypeInfo(thisitem) {
				var property_type = $.trim($("[name=property_type]").val())

				$.ajax({
					url: 'https://www.propertyincity.com/demo/property_of_the_month/' + 'getPropertyAdvertisementRecordDetials',
					type: 'POST',
					data: {
						'property_type': property_type
					},
					beforeSend: function() {
						//block ui
						showLoader();
					},
					success: function(response) {
						hideLoader();
						if (response != "" && response != null) {
							$(thisitem).parents('.dependant-field-selection').find('.advertisement-list').html(response);
						}
					},
					error: function(errorResponse) {
						hideLoader();
					}
				});
			}

			$.validator.addMethod("validateUniqueLandzoneName", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/landzone/' + 'checkUniqueLandzoneName',
					dataType: "json",
					data: {
						'landzone_name': $.trim($("[name='landzone_name']").val()),
						'checkUniqueName': 'yes',
						'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, ' Landzone Name is Already exists in Another Landzone Name. Please try again.');



			$.validator.addMethod("validateUniqueFacilityName", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/facility/' + 'checkUniqueFacilityName',
					dataType: "json",
					data: {
						'name': $.trim($("[name='name']").val()),
						'checkUniqueName': 'yes',
						'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, ' Facility Name is Already exists in Another Facility Name. Please try again.');


			$.validator.addMethod("validateUniqueSpecificationName", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/specification/' + 'checkUniqueSpecificationName',
					dataType: "json",
					data: {
						'specification': $.trim($("[name='specification']").val()),
						'checkUniqueName': 'yes',
						'specification_record_id': ($.trim($("[name='specification_record_id']").val()) != '' ? $.trim($("[name='specification_record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, ' Specification Name is Already exists in Another Specification Name. Please try again.');


			$.validator.addMethod("validateUniquePropertyAreaName", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/property_area/' + 'checkUniquePropertyAreaName',
					dataType: "json",
					data: {
						'name': $.trim($("[name='name']").val()),
						'checkUniqueName': 'yes',
						'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, ' Name is Already exists in Another Name. Please try again.');


			function builderDataInfo(thisitem) {
				var builder_id = $.trim($("[name='builder_name']").val());
				$.ajax({
					url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBuilderRecordDetials',
					type: 'POST',
					data: {
						'builder_id': builder_id
					},
					beforeSend: function() {
						//block ui
						showLoader();
					},
					success: function(response) {
						hideLoader();
						response = $.trim(response);
						if (response != "" && response != null) {
							$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html(response);
							$("[name='site_person_mobile']").val('');
						} else {
							$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html('');
							$("[name='site_person_mobile']").val('');
						}
					},
					error: function(errorResponse) {
						hideLoader();
					}
				});

			}



			function getSitePersonNameInfo(thisitem) {
				var site_person_record_id = $.trim($("[name='site_person_name']").find('option:selected').attr('site-person-mobile-data'));
				if (site_person_record_id != "" && site_person_record_id != null) {
					$("[name='site_person_mobile']").val(site_person_record_id);
				} else {
					$("[name='site_person_mobile']").val('');
				}
			}

			function getSameNameBrochureMasterInfo(thisitem) {
				var project_name = $.trim($(thisitem).parents('.dependant-field-selection').find('.project-name-list').val());
				var builder_id = $.trim($("[name='builder_name']").val());
				$.ajax({
					url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBrochureAdvetimentBuilderRecordDetials',
					type: 'POST',
					dataType: "json",
					data: {
						'builder_id': builder_id,
						'project_name': project_name
					},
					beforeSend: function() {
						//block ui
						showLoader();
					},
					success: function(response) {
						hideLoader();
						if (response.status_code == 1) {
							$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html(response.data.brochureHtmlReplace);
							$("[name='new_brochure_file[]']").val(response.data.brochureFileName);
							$("[name='final_selected_image']").val(response.data.baseNameImagePreview);
						} else {
							var imageName = 'Choose file';
							$(thisitem).parents('.dependant-field-selection').find('.brocher-file-master-div-list').html(imageName);
							$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html('');
							$("[name='new_brochure_file[]']").val('');
							$("[name='final_selected_image']").val('');
						}
					},
					error: function(errorResponse) {
						hideLoader();
					}
				});


			}

			var removeImage = [];

			function removeImageHtml(thisitem) {
				alertify.confirm(messages['delete_record'], messages['delete-document-master-image-msg'], function() {
					removeImage.push($(thisitem).attr('data-preview-name'));
					$('[name="remove_image"]').val(removeImage)
					$(thisitem).parents('.brocher-document-image-div').remove();

					var remove_images_length = ($('.brocher-document-image-div').length);
					if (remove_images_length == 0) {
						$('[name="brochure_file[]"]').attr('data-valid-image', "No");
					}

				}, function() {});
			}

			function getMultipleDocumentPreview(thisitem, placeToInsertImagePreview) {
				var invalidImage = false;
				var field_id = $(thisitem).attr("id");
				var field_name = $(thisitem).attr("data-field-name");

				$("." + field_id + "-preview-div").html("");
				if (thisitem.files) {
					var filesAmount = thisitem.files.length;

					for (i = 0; i < filesAmount; i++) {
						var f = thisitem.files[i];
						var reader = new FileReader();

						if (
							thisitem.files[i].type == "image/jpg" ||
							thisitem.files[i].type == "image/png" ||
							thisitem.files[i].type == "application/pdf" ||
							thisitem.files[i].type == "image/jpeg"
						) {
							reader.onload = (function(theFile) {
								return function(e) {
									var imageName = "";
									var imageName = theFile.name;
									var imageHtml = "";

									if (imageName != "") {
										multipleImageName.push(imageName);
										$("[name='final_selected_image']").val(multipleImageName.toString());
									}

									imageHtml = '<div class="col-sm-12 my-1 brocher-document-image-div">';
									imageHtml += '<div class="row">';
									imageHtml += '<div class="upload-main-image">';
									imageHtml += '<label class="pr-2">' + imageName + '</label>';
									imageHtml += '</div>';
									imageHtml += '<div class="close-buttons">';
									imageHtml += '<button type="button" class="btn btn-danger button-round" onclick="removeImageHtml(this)" data-field-name="' + field_name + '" data-preview-name="' + imageName + '"><i class="fas fa-times"></i></button>';
									imageHtml += '</div>';
									imageHtml += '</div>';
									imageHtml += '</div>';
									$("." + field_id + "-preview-div").append($.parseHTML(imageHtml));

								};
							})(f);
						} else {
							invalidImage = true;
						}

						reader.readAsDataURL(thisitem.files[i]);
					}

					$("#final_selected_image").val(multipleImageName.toString());

					if (invalidImage != false) {
						$("#" + field_id).val("");
						$("." + field_id + "-preview-div").hide();
						$("." + field_id + "-preview-div").html("");
						alertifyMessage("error", messages["invalid-image-pdf"]);
					} else {
						$("." + field_id + "-preview-div").show();

					}
				}
			}

			$.validator.addMethod("validateUniqueAgentMobile", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
					dataType: "json",
					data: {
						'agent_mobile': ($.trim($("[name='agent_mobile']").val()) != null && $.trim($("[name='agent_mobile']").val()) != '') ? $.trim($("[name='agent_mobile']").val()) : '',
						'checkUniqueName': 'yes',
						'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, 'Mobile already exist. Please enter another Mobile.');

			// $(".get-property-atofill-selection-locality").on("select2:select", function (evt) {
			// 	  var element = evt.params.data.element;
			// 	  var $element = $(element);
			// 	  $element.detach();
			// 	  $(this).append($element);
			// 	  $(this).trigger("change");
			// }); 
			function staticAutoFillSeoDetails(thisitem) {
				var no_of_mutiply_by = $.trim($("[name='no_of_mutiply_by']").val());
				var display_property_count = $('.display-property-count-master-div').text();

				//no_of_mutiply_by = ( parseFloat( no_of_mutiply_by ) > 0.00 ? no_of_mutiply_by : 0 );
				//display_property_count = ( parseFloat( display_property_count ) > 0.00 ? display_property_count : 0 );

				var multiplication_property_count = 1;
				if ((no_of_mutiply_by != "" && no_of_mutiply_by != null) && (display_property_count != "" && display_property_count != null)) {
					multiplication_property_count = (parseFloat(display_property_count) * (parseFloat(no_of_mutiply_by)));
				}
				var property_type = $("[name='property_type_id'] option:selected").text();
				var property_type_id = $("[name='property_type_id'] option:selected").val();
				if ($("[name='property_type_id'] option:selected").val() == '' || $("[name='property_type_id'] option:selected").val() == null) {
					property_type = '';
				}
				var single_property_type_name = '';
				var main_property_type_name = '';
				var property_type_plural_name = '';
				var property_type_plural_slug_name = '';

				var property_type_flat_apartment_name = $('[name="property_type_name_selection"]').val() != '' && $('[name="property_type_name_selection"]').val() != null ? $('[name="property_type_name_selection"]:checked').val() : Flat;

				switch (property_type) {
					case 'Flat / Apartment':
						if (property_type_flat_apartment_name == 'Apartment') {
							property_type = 'Apartment';
							single_property_type_name = 'apartment';
							main_property_type_name = 'Apartment';
							property_type_plural_name = 'Apartment';
							property_type_plural_slug_name = 'apartment';
						} else {
							property_type = 'Flat';
							single_property_type_name = 'flat';
							main_property_type_name = 'Flat';
							property_type_plural_name = 'Flat';
							property_type_plural_slug_name = 'flat';
						}
						break;
					case 'Villa / Bungalows':
						property_type = 'Villa-Bungalows';
						single_property_type_name = 'villa';
						main_property_type_name = 'Villa / Bungalows';
						property_type_plural_name = 'Bungalows';
						property_type_plural_slug_name = 'villa-bungalows';
						break;
					case 'Shop / Showroom':
						property_type = 'Shop-Showroom';
						single_property_type_name = 'shop';
						main_property_type_name = 'Shop / Showroom';
						property_type_plural_name = 'Shops';
						property_type_plural_slug_name = 'shop-showroom';
						break;
					case 'Warehouse / Godowns':
						property_type = 'Warehouse-Godowns';
						single_property_type_name = 'warehouse';
						main_property_type_name = 'Warehouse / Godowns';
						property_type_plural_name = 'Godowns';
						property_type_plural_slug_name = 'warehouse-godowns';
						break;

					case 'Office':
						property_type = 'Office';
						single_property_type_name = 'office';
						main_property_type_name = 'Office';
						property_type_plural_name = 'Offices';
						property_type_plural_slug_name = 'offices';
						break;
					case 'Plot':
						property_type = 'Plot';
						single_property_type_name = 'plot';
						main_property_type_name = 'Plot';
						property_type_plural_name = 'Plots';
						property_type_plural_slug_name = 'plots';
						break;
					case 'Land':
						property_type = 'Land';
						single_property_type_name = 'land';
						main_property_type_name = 'Land';
						property_type_plural_name = 'Lands';
						property_type_plural_slug_name = 'lands';
						break;
				}
				var city = "";
				var city_id = $.trim($('[name="city_id"] option:selected').val());
				if (city_id != "" && city_id != null) {
					var city = $.trim($('[name="city_id"] option:selected').text());
				}

				var state = "";
				var state_id = $.trim($('[name="state_id"] option:selected').val());
				if (state_id != "" && state_id != null) {
					var state = $.trim($('[name="state_id"] option:selected').text());
				}

				//var city = $.trim($('[name="city_id"] option:selected').text());

				var first_locality_value = $.trim($('[name="locality_id[]"]').val()).split(",");

				var first_locality_text = '';
				if (first_locality_value != '' && first_locality_value != null) {
					var selected_locality_values = $('[name="select_locality_order[]"]').val();
					if (selected_locality_values != '' && selected_locality_values != null) {
						selected_locality_values = selected_locality_values.split(',')
						var first_value_of_location = selected_locality_values[0];
						first_locality_text = $("[name='locality_id[]'] option[value='" + first_value_of_location + "']").text();
					} else {
						first_locality_text = $('[name="locality_id[]"] option[value="' + first_locality_value[0] + '"]').text();
					}
				} else {
					first_locality_text = '';
				}

				// 	var first_locality_text = $('[name="locality_id[]"] option[value="'+first_locality_value[0]+'"]').text();
				//var state = $.trim($('[name="state_id"] option:selected').text());
				var new_purpose_status = $.trim($('[name="purpose"]:checked').val());
				var bhk_selection = $.trim($('[name="bhk_selection"]:checked').val());
				var purpose_status = $.trim($('[name="purpose"]:checked').val());
				if (new_purpose_status == 'hot_project') {
					new_purpose_status = 'Hot Projects';
				}


				if (bhk_selection != "" && bhk_selection != null) {
					var new_purpose_status = bhk_selection + 'BHK';
				}


				var house_type_array = $.trim($('[name="house_type[]"]:checked').val());
				var pre_leased_status_info = $.trim($('[name="pre_leased_status"] option:selected').val());
				var furnished_status_info = $.trim($('[name="furnished_status"]').val());

				var furnished_status = '';
				// condtion add Furnished tyre j ave chhe jyare sell rent and all property type ma ave chhe
				if (purpose_status == 'sell' || purpose_status == 'rent') {
					if (furnished_status_info != "" && furnished_status_info != null && furnished_status_info == "full") {
						furnished_status = 'Furnished';
					}
				}

				// condtion add PreLeased tyre j ave chhe jyare sell rent anf office and shop show room hoye tyre
				var pre_leased_status = '';
				if (property_type_id == '3' || property_type_id == '4') {
					if (purpose_status == 'sell' || purpose_status == 'rent') {
						if (pre_leased_status_info != "" && pre_leased_status_info != null && pre_leased_status_info == "Yes") {
							pre_leased_status = 'PreLeased';
						}
					}
				}
				var seo_title = '';
				var title_description = '';
				var title_keyword = '';
				var description = '';

				var display_purpose = '';
				var display_purpose_slug_name = '';
				switch (purpose_status) {
					case 'sell':
						display_purpose = "Sale";
						display_purpose_slug_name = "sale";
						break;
					case 'rent':
						display_purpose = "Rent";
						display_purpose_slug_name = "Rent";
						break;
					case 'hot_project':
						display_purpose = "New Project";
						purpose_status = "New Project";
						display_purpose_slug_name = "new-project";
						break;

				}

				if (property_type_id == '1' || property_type_id == '2') {

				} else {
					bhk_selection = null;
				}

				if (first_selected_locality_text != "" && first_selected_locality_text != null) {
					first_locality_text = first_selected_locality_text;
				}

				first_locality_text_array = first_locality_text.split('-');
				var upper = first_locality_text_array.map(element => {
					return element.toLowerCase().replace(/\b[a-z]/g, function(letter) {
						return letter.toUpperCase();
					});
				});
				// 	first_locality_text = upper.join('-');

				if (first_locality_value != '' && first_locality_value != null) {
					first_locality_text = upper.join('-');
				} else {
					first_locality_text = '';
				}

				var static_page_name = '';
				var static_page_name_slug = '';

				setTimeout(function() {
					seo_title = multiplication_property_count + '+ ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + property_type + ' ' + ((purpose_status != "" && purpose_status != null ? 'For ' + purpose_status : '')) + ' in ' + first_locality_text + ', ' + city;
					title_keyword = ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + first_locality_text + ', ' + city + ', ' + first_locality_text + ' ' + city + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + single_property_type_name + ' in ' + city + ', ' + single_property_type_name + ' in ' + first_locality_text + ', property in ' + first_locality_text + ', property on ' + purpose_status + ' in ' + first_locality_text + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ' in ' + first_locality_text + ' ' + city;
					title_description = 'Find ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + single_property_type_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + single_property_type_name + ' for ' + ((purpose_status != "" && purpose_status != null) ? purpose_status + ' ' : '') + 'in ' + first_locality_text + ', ' + city + " with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious " + single_property_type_name + " and much more.";

					// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
					description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + multiplication_property_count + ' ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + property_type + '. Find ' + house_type_array + '' + single_property_type_name + ' in ' + first_locality_text + '  ' + city + '. Choose Best ' + house_type_array + ' ' + single_property_type_name + ' for ' + new_purpose_status + ' in ' + first_locality_text + ',' + city + ' with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious ' + single_property_type_name + ' and much more.Â you can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in  ' + first_locality_text + ' based on your specific budget.';

					seo_title = ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + main_property_type_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city;
					title_keyword = ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk, ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' + first_locality_text.toLowerCase() + ', ' + city.toLowerCase() + ', ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk  ' + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' : '')) + '' + single_property_type_name + ' in ' + city.toLowerCase() + ', ' + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ', property in ' + first_locality_text.toLowerCase() + ', property on ' + purpose_status + ' in ' + first_locality_text.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase();
					title_description = 'Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more.';

					// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
					description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + main_property_type_name + '. Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + '. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more. You can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in ' + first_locality_text + ' based on your specific budget.';

					static_page_name = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status : '') + ' ' + (main_property_type_name != "" && main_property_type_name != null ? main_property_type_name : '') + ' for ' + (display_purpose != "" && display_purpose != null ? display_purpose : '') + ' in ' + (first_locality_text != "" && first_locality_text != null ? first_locality_text + ', ' : '') + (city != "" && city != null ? city : '');
					static_page_name_slug = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status.toLowerCase() + '-' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + '-bhk-' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + '-' : '') + (property_type_plural_slug_name != "" && property_type_plural_slug_name != null ? property_type_plural_slug_name + '-for-' : '') + (display_purpose_slug_name != "" && display_purpose_slug_name != null ? display_purpose_slug_name.toLowerCase() : '') + '-in-' + (first_locality_text != "" && first_locality_text != null ? first_locality_text.replaceAll(' ', '-').toLowerCase() + '-' : '') + ((city != "" && city != null ? city.toLowerCase() : ''));

					$('[name="seo_title"]').val('');
					$('[name="seo_keywords"]').val('');
					$('[name="seo_description"]').val('');
					$('[name="description"]').val('');

					$('[name="static_page_name"]').val('');
					$('[name="static_page_name_slug"]').val('');

					$('[name="seo_title"]').val(seo_title);
					$('[name="seo_keywords"]').val(title_keyword);
					$('[name="seo_description"]').val(title_description);
					CKEDITOR.instances['description'].setData(description);

					$('[name="static_page_name"]').val(static_page_name);
					$('[name="static_page_name_slug"]').val(static_page_name_slug);

				}, 200);




			}

			function furnishedTypeHideShow(thisitem) {
				var selected_property_type_id = $.trim($("[name='property_type_id']").val());
				var selected_value_show = $.trim($("[name='purpose']:checked").val());
				if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 1 || selected_property_type_id == 2 || selected_property_type_id == 3 || selected_property_type_id == 4 || selected_property_type_id == 5))) {
					$('.display-furnished-status-div').show();
				} else {
					$('.display-furnished-status-div').hide();
				}

				if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 3 || selected_property_type_id == 4))) {
					$('.display-pre-leased-status-div').show();
				} else {
					$('.display-pre-leased-status-div').hide();
				}

			}
		</script>
		<div class="modal fade show" id="add-agent-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Agent Database</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times"></i>
						</button>
					</div>
					<form action="https://www.propertyincity.com/demo/city/showAddForm" id="add-agent-database-form" method="post" accept-charset="utf-8">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="database_agent_mobile">Agent Mobile No<span class="text-danger line-height">*</span>:</label>
										<input type="text" class="form-control" id="database_agent_mobile" name="database_agent_mobile" value placeholder="Agent Mobile No" autofocus onkeyup="onlyNumber(this)" minlength="10" maxlength="10">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="database_agent_name">Agent Name<span class="text-danger line-height">*</span>:</label>
										<input type="text" class="form-control valid" id="database_agent_name" name="database_agent_name" value placeholder="Agent Name" autofocus aria-invalid="false">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer justify-content-center">
							<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addAgentDatabse()" title="Add">Add</button>
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script>
			function showAddAgentDatabaseModel(thisitem) {
				openBootstrapModal('add-agent-modal');
			}


			$("#add-agent-database-form").validate({
				errorClass: "invalid-input",
				rules: {
					database_agent_name: {
						required: true,
						noSpace: true
					},
					database_agent_mobile: {
						required: true,
						mobile_regex: /^[6789]\d{9}$/,
						validateUniqueAgentDatabaseMobile: true
					},
				},
				messages: {
					database_agent_mobile: {
						required: "Please Enter Agent Mobile No."
					},
					database_agent_name: {
						required: "Please enter Agent Name."
					},

				},

			});

			function addAgentDatabse() {

				if ($("#add-agent-database-form").valid() != true) {
					return false;
				}

				var agent_mobile = $.trim($("[name='database_agent_mobile']").val());
				var agent_name = $.trim($("[name='database_agent_name']").val());

				var confirm_box = "Add Agent Database";
				var confirm_box_msg = "Are you sure you want to Agent Database ?";

				alertify.confirm(confirm_box, confirm_box_msg, function() {

					$.ajax({
						type: "POST",
						dataType: "json",
						url: 'https://www.propertyincity.com/demo/agent_database/create',
						data: {
							'agent_name': agent_name,
							'agent_mobile': agent_mobile,
						},
						beforeSend: function() {
							showLoader();
						},
						success: function(response) {
							hideLoader();
							if (response.status_code == 1) {
								alertifyMessage('success', response.message);
								$("#add-agent-modal").modal('hide');
							} else {
								alertifyMessage('error', response.message);
							}
						},
						error: function() {
							hideLoader();
						}
					});
				}, function() {});
			}

			$.validator.addMethod('validateUniqueCustomerMobileNumber', function(value, element, param) {
				var result = true;
				var mobile_no = $.trim(value);
				var record_id = $.trim($('[name="record_id"]').val());

				$.ajax({
					type: 'post',
					async: false,
					dataType: 'json',
					data: {
						'mobile_no': mobile_no,
						'record_id': record_id
					},
					url: 'https://www.propertyincity.com/demo/customer/' + 'checkUniqueCustomerMobileNumber',
					success: function(response) {
						if (response.status_code == 1) {
							result = false;
						} else {
							result = true;
						}
					},
				});
				return result;
			}, 'Mobile already exist. Please enter another Mobile.');

			function relatedCustomerNameByMobile(thisitem) {
				var mobile = $.trim($(thisitem).val());

				$.ajax({
					type: 'post',
					data: {
						'mobile': mobile
					},
					url: 'https://www.propertyincity.com/demo/customer/' + 'relatedCustomerNameByMobile',
					beforeSend: function() {
						showLoader();
					},
					success: function(response) {
						hideLoader();
						if (response != '' && response != null) {
							$('[name="customer_name"]').val(response);
						} else {
							$('[name="customer_name"]').val('');
						}
					},
					error: function() {
						hideLoader();
					}
				});
			}

			function autoGenerateAdditionalInfo() {
				var listing_purpose = ($.trim($('[name="listing_purpose"]').val()) != '' && $.trim($('[name="listing_purpose"]').val()) != null ? $.trim($('[name="listing_purpose"] option:selected').text()) : '');
				var property_type = ($.trim($('[name="property_type"]').val()) != '' && $.trim($('[name="property_type"]').val()) != null ? $.trim($('[name="property_type"] option:selected').text()) : '');
				var scheme_name = $.trim($('[name="scheme_name"]').val());
				var type = ($.trim($('[name="type"]').val()) != '' && $.trim($('[name="type"]').val()) != null ? $.trim($('[name="type"] option:selected').text()) : '');
				var project_price = $.trim($('[name="project_price"]').val());
				var furniture_type = $.trim($("[name='furniture_type']:checked").val());
				var locality = ($.trim($('[name="locality"]').val()) != '' && $.trim($('[name="locality"]').val()) != null) ? $.trim($('[name="locality"]').val()) : "";


				var size = "";
				var area = "";
				var construction_size = "";
				var construction_area = "";
				if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
					area = ($.trim($('[name="plot_area"]').val()) != "" && $.trim($('[name="plot_area"]').val()) != null) ? $.trim($('[name="plot_area"] option:selected').text()) : "";
					size = ($.trim($('[name="plot_size"]').val()) != "" && $.trim($('[name="plot_size"]').val()) != null) ? 'Plot Size ' + $.trim($('[name="plot_size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
					construction_area = ($.trim($('[name="construction_area"]').val()) != "" && $.trim($('[name="construction_area"]').val()) != null) ? $.trim($('[name="construction_area"] option:selected').text()) : "";
					construction_size = ($.trim($('[name="construction_size"]').val()) != "" && $.trim($('[name="construction_size"]').val()) != null) ? $.trim($('[name="construction_size"]').val()) + ((construction_area != "" && construction_area != null) ? ' ' + construction_area : '') : "";
				} else {
					area = ($.trim($("[name='area']").val()) != "" && $.trim($("[name='area']").val()) != null) ? $.trim($('[name="area"] option:selected').text()) : "";
					size = ($.trim($('[name="size"]').val()) != "" && $.trim($('[name="size"]').val()) != null) ? 'Size ' + $.trim($('[name="size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
				}
				console.log("construction_size = " + construction_size);
				console.log("size = " + size);

				var city = ($.trim($('[name="city_id"]').val()) != "" && $.trim($('[name="city_id"]').val()) != null) ? $.trim($('[name="city_id"] option:selected').text()) : "";
				var state = ($.trim($('[name="state_id"]').val()) != "" && $.trim($('[name="state_id"]').val()) != null) ? $.trim($('[name="state_id"] option:selected').text()) : "";

				var pre_lease = "";
				if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '4' || $('[name="property_type"]').val() == '5') {
					var pre_lease_value = ($.trim($('[name="pre_lease"]').val()) != "" && $.trim($('[name="pre_lease"]').val()) != null) ? $.trim($("input[name='pre_lease']:checked").val()) : "";;
					if (pre_lease_value == "yes") {
						pre_lease = " Pre-Leased";
					}
				}

				var house_type = [];

				if ($('[name="property_type"]').val() == '1') {

					$.each($("input[name='house_type[]']:checked"), function(K, V) {
						house_type.push(V.value);
					});
					var house_type = (house_type != null && house_type != '') ? house_type.join(', ') : "";
				}
				var furniture_type_text = "";
				if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '1' || $('[name="property_type"]').val() == '2') {
					if (furniture_type != "" && furniture_type != null && furniture_type != "none") {
						if (furniture_type == "full") {
							furniture_type_text = "Fully Furnished ";
						} else if (furniture_type == "semi") {
							furniture_type_text = "Semi Furnished ";
						}
					}
				}
				var tenure = "";
				if ($('[name="property_type"]').val() == '7') {
					tenure = $.trim($('[name="tenure"]:checked').attr('data-text'));
				}

				var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + 'Property for ' + listing_purpose + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + ' ' + (locality != "" && locality != null ? ' ' + locality : '') + ' ' + type + ' ' + house_type + ' ' + size + ' of ' + project_price;
				var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + (furniture_type_text != "" && furniture_type_text != null ? furniture_type_text : '') + 'Property for ' + listing_purpose + (tenure != "" && tenure != null ? ' ' + tenure : '') + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + (locality != "" && locality != null ? ' ' + locality : '') + (city != "" && city != null ? ' ' + city : '') + (state != "" && state != null ? ' ' + state : '') + (type != "" && type != null ? ' ' + type : '') + (house_type != "" && house_type != null ? ' ' + house_type : '') + (size != "" && size != null ? ' ' + size : '') + (construction_size != "" && construction_size != null ? ' ' + ' and Construction Size ' + construction_size : '') + (project_price != "" && project_price != null ? ' Price of ' + project_price : '');

				$('[name="additional_info"]').val(additional_info);
			}


			$.validator.addMethod("validateUniqueAgentDatabaseMobile", function(value, element) {
				var result = true;
				ajaxResponse = $.ajax({
					type: "POST",
					async: false,
					url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
					dataType: "json",
					data: {
						'agent_mobile': ($.trim($("[name='database_agent_mobile']").val()) != null && $.trim($("[name='database_agent_mobile']").val()) != '') ? $.trim($("[name='database_agent_mobile']").val()) : '',
						'checkUniqueName': 'yes',
						'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
					},
					beforeSend: function() {

					},
					success: function(response) {
						if (response.status_code == 1) {
							return false;
						} else {
							result = false;
							return true;
						}
					}
				});
				return result;
			}, 'Mobile already exist. Please enter another Mobile.');



			function checkDuplicatePropertyDatabase() {

				var result = false;
				var record_id = $.trim($("[name='record_id']").val());
				var agent_mobile = $.trim($("[name='agent_mobile']").val());
				var agent_name = $.trim($("[name='agent_name']").val());
				var customer_mobile = $.trim($("[name=customer_mobile]").val());
				var customer_name = $.trim($("[name='customer_name']").val());
				var listing_purpose = $.trim($("[name='listing_purpose']").val());
				var property_type = $.trim($("[name='property_type']").val());
				var scheme_name = $.trim($("[name='scheme_name']").val());
				var state_id = $.trim($("[name='state_id']").val());
				var city_id = $.trim($("[name='city_id']").val());
				var locality = $.trim($("[name='locality']").val());

				var type = $.trim($("[name='type']").val());

				var size = "";
				var plot_size = "";

				if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
					plot_size = $.trim($("[name='plot_size']").val());
				} else {
					size = $.trim($("[name='size']").val());
				}

				$.ajax({

					type: "POST",
					dataType: "json",
					async: false,
					url: property_database_url + 'checkDuplicatePropertyDatabase',
					data: {
						'record_id': record_id,
						'agent_mobile': agent_mobile,
						'agent_name': agent_name,
						'customer_mobile': customer_mobile,
						'customer_name': customer_name,
						'listing_purpose': listing_purpose,
						'property_type': property_type,
						'scheme_name': scheme_name,
						'state_id': state_id,
						'city_id': city_id,
						'locality': locality,
						'type': type,
						'size': size,
						'plot_size': plot_size,
					},
					beforeSend: function() {

					},
					success: function(response) {

						if (response.status_code == 1) {
							$(".duplicate-database-entry-div").show();
						} else {
							$(".duplicate-database-entry-div").hide();
						}

					},
					error: function() {

					}
				});

				return result;
			}
		</script>



		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<meta name="description" content="-" />
			<meta name="theme-color" content="#1a388a">
			<title>Requirements - One Stop Property Admin Panel</title>

			<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.min.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.bs.min.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/fontawesome/css/all.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap-datetimepicker.min.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2-bootstrap4.min.css">
			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/main.css?v=2.01">

			<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/dashboard.css?v=2.01">
			<link rel="icon" href="https://www.propertyincity.com/demo/assets/images/icon.png">

			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery-3.3.1.min.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap.bundle.min.js"></script>

			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/moment.min.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap-datetimepicker.min.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery.validate.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/validator-additional-methods.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/alertifyjs/alertify.min.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/select2.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/scrollbar/scrollBar.js"></script>

			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/messages.js"></script>
			<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/common.js?v=2.01"></script>
			<script>
				var site_url = 'https://www.propertyincity.com/demo/';
			</script>
			<script>
				$(document).ready(function() {
					$(".scrollContainer").scrollBox();
					$('[data-toggle="collapse"]').each(function() {
						var target = $(this).attr('href');
						$(target).on('hidden.bs.collapse', function() {
							$(window).trigger("resize.scrollBox");
						});
						$(target).on('shown.bs.collapse', function() {
							$(window).trigger("resize.scrollBox");
						});
					});
				});
			</script>
		</head>

		<body class="akula-theme-2 sky">
			<div id="wrapper" class="wrapper">
				<header class="d-print-none">
					<nav class="navbar navbar-dark border-bottom-0">
						<button class="navbar-toggler mr-3 ripple" type="button" accesskey="m">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a class="navbar-brand mr-auto d-none d-md-block" href="https://www.propertyincity.com/demo/dashboard/"> <span>Admin Panel</span></a>
						<div class="notification-part">
							<div class="custom-notification-design justify-content-center ">
								<div class="navbar_right">
									<div class="notifications">
										<div class="icon_wrap">
											<a href="javascript:void(0);">
												<i class="far text-white fa-bell"></i>
												<div class="overlay-notification-count">
													<span>91</span>
												</div>
											</a>
										</div>
										<div class="notification_dd p-3">
											<div class="py-2 overlay-mark-as-read shadow-sm bg-theme border-bottom">
												<div class="d-flex justify-content-between align-items-center px-3 notification-heading">
													<span class="text-white font-weight-bold">Notification</span>
													<a href="https://www.propertyincity.com/demo/dashboard/markAllAsRead" class="text-white font-weight-bold">Mark All As Read</a>
												</div>
											</div>
											<div class="overlay-fixed-part pt-4 mt-4">
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//129/11124">You have received a new requirement for Villa / Bungalows - Sell From Forntend Test. Please review and do the needful.</a></p>
														<small class="d-block text-muted">02-01-2024 04:43:07 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11120">You have a new registration of forntEnd test.</a></p>
														<small class="d-block text-muted">02-01-2024 04:38:23 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11118">You have a new signup of forntEnd test.</a></p>
														<small class="d-block text-muted">02-01-2024 04:37:50 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//126/10682">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
														<small class="d-block text-muted">02-11-2023 02:15:16 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//125/10534">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
														<small class="d-block text-muted">02-11-2023 02:13:29 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//346/10386">You have received a new project enquiry for Warehouse/godown For Sale In Navrangpura, Ahmedabad ( Villa / Bungalows - Sell ) .</a></p>
														<small class="d-block text-muted">01-11-2023 04:49:30 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//345/10382">You have received a new project enquiry for Riyank Register ( Villa / Bungalows - Sell ) .</a></p>
														<small class="d-block text-muted">01-11-2023 04:48:55 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//344/10378">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
														<small class="d-block text-muted">01-11-2023 12:32:32 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//123/10230">You have received a new requirement for Flat / Apartment - Sell From Riyank Shah. Please review and do the needful.</a></p>
														<small class="d-block text-muted">01-11-2023 11:23:46 AM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10085">740</a></p>
														<small class="d-block text-muted">31-10-2023 06:32:59 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//343/10081">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
														<small class="d-block text-muted">31-10-2023 06:29:11 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10078">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
														<small class="d-block text-muted">31-10-2023 06:27:23 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//341/10075">You have received a new hot project enquiry for Unreg Agent Ae Advertisement Add Kri ( Flat / Apartment ) .</a></p>
														<small class="d-block text-muted">31-10-2023 06:24:27 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9930">716</a></p>
														<small class="d-block text-muted">31-10-2023 06:19:27 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9927">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
														<small class="d-block text-muted">31-10-2023 06:17:15 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//337/9924">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
														<small class="d-block text-muted">31-10-2023 06:13:16 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//336/9633">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
														<small class="d-block text-muted">31-10-2023 12:58:28 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//335/9630">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
														<small class="d-block text-muted">31-10-2023 12:42:32 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//334/9627">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
														<small class="d-block text-muted">31-10-2023 12:35:12 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9626">test 23</a></p>
														<small class="d-block text-muted">31-10-2023 11:00:57 AM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9625">done</a></p>
														<small class="d-block text-muted">31-10-2023 10:41:30 AM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9622">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
														<small class="d-block text-muted">31-10-2023 10:40:54 AM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//332/9333">https://prnt.sc/zKA7bRJgO19C</a></p>
														<small class="d-block text-muted">30-10-2023 01:33:20 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//331/9044">ok</a></p>
														<small class="d-block text-muted">27-10-2023 05:41:46 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8899">asd</a></p>
														<small class="d-block text-muted">27-10-2023 05:30:54 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8898">Reg. Agent Enquiry (Open Enquiry Report): 05 (show total)</a></p>
														<small class="d-block text-muted">27-10-2023 04:21:22 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//328/8174">You have received a new property enquiry for Project V1 ( Flat / Apartment - Sell ) .</a></p>
														<small class="d-block text-muted">07-08-2023 01:46:12 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//321/8170">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
														<small class="d-block text-muted">04-08-2023 08:16:38 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//320/8167">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
														<small class="d-block text-muted">04-08-2023 08:15:23 PM</small>
													</div>
												</div>
												<div class="media mb-2 border-bottom pb-2">
													<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
													<div class="media-body">
														<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//319/8163">You have received a new property enquiry for Check In Static Page ( Office - Sell ) .</a></p>
														<small class="d-block text-muted">04-08-2023 06:59:44 PM</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown">
							<a class="dropdown-toggle d-inline-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://www.propertyincity.com/demo/assets/images//defaultuser.svg" alt srcset class="img-fluid img-user d-none d-sm-inline-block align-middle mr-2">
								<span id="username" class="d-inline-block align-middle">OSP Admin</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/change_password">Change Password</a>
								<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/adminLogout">Logout</a>
							</div>
						</div>
					</nav>
					<div class="sidebar  " id="sidebar">
						<ul class="sidebar-nav scrollContainer">
							<a class href="https://www.propertyincity.com/demo/dashboard/">
								<li class="p-3 border-bottom d-flex align-items-center justify-content-center nav-users mb-3 bg-white sit-logo-admin">
									<img src="https://www.propertyincity.com/demo/assets/images/logo.png" alt srcset class="img-fluid w-75 ">
								</li>
							</a>
							<li class="first-item border-effect" data-toggle="tooltip">
								<a data-toggle="tooltip" data-placement="left" title="Dashboard" href="https://www.propertyincity.com/demo/dashboard/" class="nav-link text-dark d-block px-3 py-2" title="Dashboard">
									<i class="fa fa-tachometer-alt fa-fw"></i>
									<span class="nav-text">Dashboard</span>
								</a>
							</li>
							<li class="first-item border-effect" data-toggle="tooltip">
								<a data-toggle="tooltip" data-placement="left" title="Version History" href="https://www.propertyincity.com/demo/version_history/" class="nav-link text-dark d-block px-3 py-2" title="Version History">
									<i class="fa fa-tachometer-alt fa-fw"></i>
									<span class="nav-text">Version History</span>
								</a>
							</li>
							<li class="border-effect">
								<a href="#manageLocationMenu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Locations">
									<i class="fa fa-map-marked-alt fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Manage Locations</span>
								</a>
								<div class="collapse navbar-collapse" id="manageLocationMenu">
									<ul class="nav navbar-nav">
										<li class="show-collapse">
											<a href="https://www.propertyincity.com/demo/city/" class="text-dark nav-link d-block px-3 py-2" title="Manage City">
												<i class="fa fa-map fa-fw" aria-hidden="true"></i>
												<span class="nav-text">City</span>
											</a>
										</li>
										<li class="show-collapse">
											<a href="https://www.propertyincity.com/demo/locality/" class="text-dark nav-link d-block px-3 py-2" title="Manage Locality">
												<i class="fa fa-map-marker-alt fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Locality</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#managePropertyMenu" data-toggle="collapse" aria-expanded="true" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Attribute">
									<i class="fa fa-tags fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Manage Attribute</span>
								</a>
								<div class="collapse navbar-collapse" id="managePropertyMenu">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/landzone/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Landzone">
												<i class="fa fa-layer-group fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Landzone</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/facility/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Facility">
												<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Facility</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/property_area/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Area">
												<i class="fa fa-drafting-compass fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Property Area</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/property_type/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Type">
												<i class="fa fa-building fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Property Type</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/property_plan/" class="nav-link text-dark d-block px-3 py-2" title="Manage Plans">
												<i class="fa fa-hand-holding-usd fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Manage Plans</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/specification/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Specification">
												<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Specification</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/sizes_master/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sizes">
												<i class="fa-fw fa fas fa-chart-area" aria-hidden="true"></i>
												<span class="nav-text">Sizes</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#manageWebsite" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Website">
									<i class="fa fa-globe-asia fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Manage Website</span>
								</a>
								<div class="collapse navbar-collapse" id="manageWebsite">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/slider/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sliders">
												<i class="fa fa-images fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Sliders</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/advertisement/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Advertisement">
												<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Advertisement</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/unregister_advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Manage Unregister Advertisement">
												<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Unregister Advertisement</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/property_of_the_month/" class="text-dark d-block px-3 py-2 nav-link" title="Property Of The Month">
												<i class="fa fa-city fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Property Of The Month</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/builder/" class="text-dark d-block px-3 py-2 nav-link" title="Builders">
												<i class="fa fa-user-shield fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Builders</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/careers/" class="text-dark d-block px-3 py-2 nav-link" title="Careers">
												<i class="fa fa-user-tie fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Careers</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/advisor/" class="text-dark d-block px-3 py-2 nav-link" title="Advisor">
												<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Advisor</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/faq/" class="text-dark d-block px-3 py-2 nav-link" title="FAQ">
												<i class="fa fa-question-circle fa-fw" aria-hidden="true"></i>
												<span class="nav-text">FAQ</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/brochure_upload_master/" class="text-dark d-block px-3 py-2 nav-link" title="Brochure Upload">
												<i class="fa fa-upload fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Brochure Upload</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#user_management" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="User Management">
									<i class="fa fa-users fa-fw" aria-hidden="true"></i>
									<span class="nav-text">User Management</span>
								</a>
								<div class="collapse navbar-collapse" id="user_management">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/designation/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Designation">
												<i class="fa fa-building fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Designation</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/user/" class="text-dark d-block px-3 py-2 nav-link" title="User">
												<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
												<span class="nav-text">User</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#manageAgents" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Agents">
									<i class="fa fa-users fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Manage Agents</span>
								</a>
								<div class="collapse navbar-collapse" id="manageAgents">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Registered Agents">
												<i class="fa fa-users fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Registered Agents</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/unregistered_agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Agents">
												<i class="fa fa-users fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Unregistered Agents</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/agent_database/" class="nav-link text-dark d-block px-3 py-2" title="Agent Database">
												<i class="fa fa-users fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Agent Database</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/signup_report/" class="nav-link text-dark d-block px-3 py-2" title="Signup Report">
												<i class="fa fa-users fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Signup Report</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#manageProperty" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Properties">
									<i class="fa fa-city fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Manage Properties</span>
								</a>
								<div class="collapse navbar-collapse" id="manageProperty">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/property/" class="nav-link text-dark d-block px-3 py-2" title="Registered Property">
												<i class="fa fa-city fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Registered Property</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/unregister_property" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Property">
												<i class="fa fa-city fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Unregistered Property</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/new_project/" class="nav-link text-dark d-block px-3 py-2" title="Manage New Project">
												<i class="fa fa-city fa-fw" aria-hidden="true"></i>
												<span class="nav-text">New Project</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/unregister_new_project" class="nav-link text-dark d-block px-3 py-2" title="Unregister New Project">
												<i class="fa fa-city fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Unregister New Project</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/property_template/" class="nav-link text-dark d-block px-3 py-2" title="Properties Template">
												<i class="fa fa-city fa-fw" aria-hidden="true"></i>
												<span class="nav-text">Properties Template</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/property_database/" class="nav-link text-dark d-block px-3 py-2" title="Property Database">
									<i class="fa fa-city fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Property Database</span>
								</a>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/requirement/" class="text-dark d-block px-3 py-2 nav-link" title="Requirements">
									<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Requirements</span>
								</a>
							</li>
							<li class="border-effect">
								<a href="#comparison-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Comparison">
									<i class="fa fas fa-chart-bar fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Comparison</span>
								</a>
								<div class="collapse navbar-collapse" id="comparison-report">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/comparison_master/flat-apartment" class="text-dark d-block px-3 py-2 nav-link" title="Flat/Apartment Comparison">
												<i class="fas fa-chart-bar fa-fw"></i>
												<span class="nav-text">Flat/Apartment Comparison</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/comparison_master/office" class="text-dark d-block px-3 py-2 nav-link" title="Office Comparison">
												<i class="fas fa-chart-bar fa-fw"></i>
												<span class="nav-text">Office Comparison</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/comparison_master/plot" class="text-dark d-block px-3 py-2 nav-link" title="Plot Comparison">
												<i class="fas fa-chart-bar fa-fw"></i>
												<span class="nav-text">Plot Comparison</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/enquiry_list/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
									<i class="fas fa-phone-alt fa fa-fw"></i>
									<span class="nav-text">Enquiry Received</span>
								</a>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/enquiry_report/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
									<i class="fas fa-phone-alt fa fa-fw"></i>
									<span class="nav-text">Enquiry Report</span>
								</a>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/project_price/" class="text-dark d-block px-3 py-2 nav-link" title="Project Price">
									<i class="fas fa-rupee-sign fa fa-fw"></i>
									<span class="nav-text">Project Price</span>
								</a>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/static_page/" class="text-dark d-block px-3 py-2 nav-link" title="Static Page">
									<i class="far fa-file-alt fa fa-fw"></i>
									<span class="nav-text">Static Page</span>
								</a>
							</li>
							<li>
								<a href="https://www.propertyincity.com/demo/static_page/managestaticpage" class="text-dark d-block px-3 py-2 nav-link" title="Manage Static Page">
									<i class="far fa-file-alt fa fa-fw"></i>
									<span class="nav-text">Manage Static Page</span>
								</a>
							</li>
							<li class="border-effect">
								<a href="#sms" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage SMS">
									<i class="fas fa-location-arrow fa-fw mr-2" aria-hidden="true"></i>
									<span class="nav-text">Manage SMS</span>
								</a>
								<div class="collapse navbar-collapse" id="sms">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/sms/" class="text-dark d-block px-3 py-2 nav-link" title="SMS Templates">
												<i class="far fa-comment-alt mr-2"></i>
												<span class="nav-text">SMS Templates</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/sms/sendSms" class="text-dark d-block px-3 py-2 nav-link" title="Send SMS">
												<i class="fas fa-paper-plane mr-2"></i>
												<span class="nav-text">Send SMS</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/sms/smsHistory" class="text-dark d-block px-3 py-2 nav-link" title="SMS History">
												<i class="far fa-paper-plane mr-2"></i>
												<span class="nav-text">SMS History</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#email-main" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Email">
									<i class="fas fa-envelope fa-fw mr-2" aria-hidden="true"></i>
									<span class="nav-text">Manage Email</span>
								</a>
								<div class="collapse navbar-collapse" id="email-main">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/email/" class="text-dark d-block px-3 py-2 nav-link" title="Email Templates">
												<i class="fas fa-envelope mr-2"></i>
												<span class="nav-text">Email Templates</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/email/sendEmail/" class="text-dark d-block px-3 py-2 nav-link" title="Send Emails">
												<i class="fas fa-paper-plane mr-2"></i>
												<span class="nav-text">Send Emails</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/email/emailHistory" class="text-dark d-block px-3 py-2 nav-link" title="Email History">
												<i class="far fa-paper-plane mr-2"></i>
												<span class="nav-text">Email History</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#manage-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Report">
									<i class="fas fa-file-pdf fa-fw mr-2" aria-hidden="true"></i>
									<span class="nav-text">Manage Report</span>
								</a>
								<div class="collapse navbar-collapse" id="manage-report">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/report/property_report" class="text-dark d-block px-3 py-2 nav-link" title="Property Report">
												<i class="fas fa-file-pdf fa-fw mr-2"></i>
												<span class="nav-text">Property Report</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="border-effect">
								<a href="#multi-delete-menu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Multi Delete">
									<i class="fas fa-trash-alt fa-fw mr-2" aria-hidden="true"></i>
									<span class="nav-text">Multi Delete</span>
								</a>
								<div class="collapse navbar-collapse" id="multi-delete-menu">
									<ul class="nav navbar-nav">
										<li>
											<a href="https://www.propertyincity.com/demo/multi_delete/property" class="text-dark d-block px-3 py-2 nav-link" title="Property">
												<i class="fas fa-building fa-fw mr-2"></i>
												<span class="nav-text">Property</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/multi_delete/new_project" class="text-dark d-block px-3 py-2 nav-link" title="New Project">
												<i class="fas fa-building fa-fw mr-2"></i>
												<span class="nav-text">New Project</span>
											</a>
										</li>
										<li>
											<a href="https://www.propertyincity.com/demo/multi_delete/advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Advertisement">
												<i class="fas fa-ad fa-fw mr-2"></i>
												<span class="nav-text">Advertisement</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

							<li>
								<a href="https://www.propertyincity.com/demo/settings/" class="text-dark d-block px-3 py-2 nav-link" title="Settings">
									<i class="fa fa-cog fa-fw" aria-hidden="true"></i>
									<span class="nav-text">Settings</span>
								</a>
							</li>
							<li class="visit-site">
								<a href="https://www.propertyincity.com/demo/" target="_blank" class="nav-link text-dark d-block px-3 py-2" title="Visit Site">
									<i class="fa fa-external-link-alt fa-fw"></i>
									<span class="nav-text">Visit Site</span>
								</a>
							</li>
						</ul>
						<footer class="fixed-footer border-top p-3 bg-light">
							<p class="text-center small mb-0">&copy; 2024 <span class="text-theme">One Stop Property</span>
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
					<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
						<h1 class="h3 mb-lg-0 mr-3" id="pageTitle">Manage Requirement</h1>
						<div class="ml-auto text-right">
							<a href="https://www.propertyincity.com/demo/requirement/showAddForm" class="btn btn-light text-dark border btn-sm mr-2" title="Post Your Requirement"><i class="fas fa-plus"></i> Post Your Requirement</a>
							<button class="btn btn-light border btn-sm" data-toggle="collapse" data-target="#searchFilter" title="Toggle Filter"><i class="fas fa-filter"></i> Filter</button>
						</div>
					</div>
					<div class="container-fluid pt-3">
						<div class="collapse" id="searchFilter">
							<div class="card card-body border-0 shadow mb-4">
								<div class="row">
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="search_by_name">Search by Name, Email, Mobile</label>
											<input type="text" name="search_by_name" id="search_by_name" class="form-control" placeholder="Search by Name, Email, Mobile">
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="City">City</label>
											<select class="form-control select2" id="city" name="city" onchange="filterData()">
												<option value>Select</option>
												<option value="1">Ahmedabad</option>
												<option value="47">Ahmedabad Tester</option>
												<option value="20">AMRELI</option>
												<option value="8">Anand</option>
												<option value="21">Aravalli</option>
												<option value="22">Banaskantha</option>
												<option value="14">Bharuch</option>
												<option value="5">Bhavnagar</option>
												<option value="23">Botad</option>
												<option value="24">Chhota Udaipur</option>
												<option value="25">Dahod</option>
												<option value="26">Dang</option>
												<option value="44">Delete For Second Test1</option>
												<option value="27">Dwarka</option>
												<option value="12">Gandhidham</option>
												<option value="16">Ghandhinagar</option>
												<option value="28">Gir Somnath</option>
												<option value="6">Jamnagar</option>
												<option value="17">Jetpur</option>
												<option value="7">Junagadh</option>
												<option value="30">Kheda</option>
												<option value="38">Khedbrahma</option>
												<option value="29">Kutch</option>
												<option value="31">Mahisagar</option>
												<option value="18">Mehsana</option>
												<option value="11">Morbi</option>
												<option value="13">Nadiad</option>
												<option value="32">Narmada</option>
												<option value="9">Navsari</option>
												<option value="19">Palanpur</option>
												<option value="33">Panchmahal</option>
												<option value="34">Patan</option>
												<option value="15">Porbandar</option>
												<option value="4">Rajkot</option>
												<option value="48">Rajkot T</option>
												<option value="35">Sabarkantha</option>
												<option value="2">Surat</option>
												<option value="10">Surendranagar</option>
												<option value="36">Tapi</option>
												<option value="3">Vadodara</option>
												<option value="37">Valsad</option>
												<option value="46">VISNAGAR</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="requirement">Requirement</label>
											<select class="form-control select2" id="requirement" name="requirement" onchange="filterData(), getRequirementInfo(this)">
												<option value>Select</option>
												<option value="buy">Buy</option>
												<option value="sell">Sell</option>
												<option value="rent">Rent</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 rent-purpose-master-div" style="display: none;">
										<div class="form-group">
											<label class="control-label" for="rent_purpose">Rent Purpose</label>
											<select class="form-control" id="rent_purpose" name="rent_purpose" onchange="filterData()">
												<option value>Select</option>
												<option value="give_property_on_rent">Giving On Rent</option>
												<option value="looking_property_on_rent">Looking For Rent</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="Property Type">Property Type</label>
											<select class="form-control select2" id="property_type" name="property_type" onchange="filterData() ,getHouseTypeInfo(this) , getPreLeaseInfo(this)">
												<option value>Select</option>
												<option value="1">Flat / Apartment</option>
												<option value="2">Villa / Bungalows</option>
												<option value="3">Office</option>
												<option value="4">Shop / Showroom</option>
												<option value="5">Warehouse / Godowns</option>
												<option value="6">Plot</option>
												<option value="7">Land</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 house-type-master-div" style="display: none;">
										<div class="form-group">
											<label class="control-label" for="house_type">House Type</label>
											<select class="form-control" id="house_type" name="house_type" onchange="filterData()">
												<option value>Select</option>
												<option value="PentHouse">Penthouse</option>
												<option value="Duplex">Duplex</option>
												<option value="Triplex">Triplex</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="source">Source</label>
											<select class="form-control" id="source" name="source" onchange="filterData()">
												<option value>Select</option>
												<option value="website">OSP Website</option>
												<option value="google">Google</option>
												<option value="newspaper">Newspaper</option>
												<option value="walk-in">Walk-in</option>
												<option value="reference">Reference</option>
												<option value="online_portal">Online Portal</option>
												<option value="other">Other</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="show_to_agent">Show To Agent</label>
											<select class="form-control" id="show_to_agent" name="show_to_agent" onchange="filterData()">
												<option value>Select</option>
												<option value="yes">Yes</option>
												<option value="no">No</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 ">
										<div class="form-group">
											<label class="control-label" for="enquiry_start_date">Requirement Start Date:</label>
											<input type="text" class="form-control rounded-0" id="enquiry_start_date" name="enquiry_start_date" placeholder="Requirement Start Date" value readonly>
										</div>
									</div>
									<div class="col-lg-3 col-md-6 ">
										<div class="form-group">
											<label class="control-label" for="enquiry_end_date">Requirement End Date:</label>
											<input type="text" class="form-control rounded-0" id="enquiry_end_date" name="enquiry_end_date" placeholder="Requirement End Date" value readonly>
										</div>
									</div>
									<div class="col-lg-3 col-md-6">
										<div class="form-group">
											<label class="control-label" for="requirement_status">Requirement Status</label>
											<select class="form-control" id="requirement_status" name="requirement_status" onchange="filterData()">
												<option value>Select</option>
												<option value="pending">Pending</option>
												<option value="open">Open</option>
												<option value="close">Close</option>
												<option value="rejected">Rejected</option>
											</select>
										</div>
									</div>
									<div class="col-md col-md-3 baudget-range-value-buy-sell-master-div" style="display: none;">
										<div class="form-group">
											<label class="control-label" for="search_baudget_range_value">Budget Range<span class="text-danger line-height"></span>:</label>
											<select class="form-control select2" multiple name="search_baudget_range_value" onchange="filterData()">
												<option value="None">None</option>
												<option value="50L - 1CR">50L - 1CR</option>
												<option value="1CR - 2CR">1CR - 2CR</option>
												<option value="2CR - 3CR">2CR - 3CR</option>
												<option value="3CR - 4CR">3CR - 4CR</option>
												<option value="4CR - 4CR+">4CR+</option>
											</select>
										</div>
									</div>
									<div class="col-md col-md-3 baudget-range-rent-value-master-div" style="display: none;">
										<div class="form-group">
											<label class="control-label" for="search_baudget_range_rent_value">Budget Range<span class="text-danger line-height"></span>:</label>
											<select class="form-control select2" multiple name="search_baudget_range_rent_value" onchange="filterData()">
												<option value="None">None</option>
												<option value="10K-50K">10K - 50K</option>
												<option value="51K-1L">51K - 1L</option>
												<option value="1L-2L">1L - 2L</option>
												<option value="2L-4L">2L - 4L</option>
												<option value="4L+">4L+</option>
											</select>
										</div>
									</div>
									<div class="col-md col-md-3 pre-lease-value-master-div" style="display: none;">
										<div class="form-group">
											<div class="form-group">
												<label class="control-label" for="show_to_agent">Pre-Lease</label>
												<select class="form-control" id="search_pre_lease" name="search_pre_lease" onchange="filterData()">
													<option value>Select</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md pt-lg-2  mt-md-4 mt-lg-0">
										<button type="button" onclick="filterData()" class="btn btn-info mt-lg-3">Search</button>
										<button class="btn btn-outline-secondary reset-wild-tigers mt-lg-3">Reset</button>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs-main-wrapper">
							<ul class="nav property-pills enquiry-pills nav-pills justify-content-center justify-content-md-start nav-justified mb-3 all-filter-data" id="property_listing_tabs" role="tablist">
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link active bg-color-blue" data-toggle="pill" role="tab" data-filter-name="all_enquiry" data-enquiry-status="All Enquiry">All Enquiry ( <span class="all-enquiry-count">119 </span>)</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-bahama-blue" data-toggle="pill" role="tab" data-filter-name="new_enquiry" data-enquiry-status="New Enquiry">New Enquiry ( <span class="new-enquiry-count">95 </span>)</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-red" data-toggle="pill" role="tab" data-filter-name="call_not_answered" data-enquiry-status="Call not Answered">Call not Answered ( <span class="inquiry-by-mistake-count">2</span> )</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-dark" data-toggle="pill" role="tab" data-filter-name="details_send" data-enquiry-status="Details Send">Details Send ( <span class="detail-sent-count">1</span> )</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-green" data-toggle="pill" role="tab" data-filter-name="more_options" data-enquiry-status="More Options">More Options ( <span class="more-options-count">0</span> )</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-info" data-toggle="pill" role="tab" data-filter-name="site_visit" data-enquiry-status="Site Visit">Site Visit ( <span class="site-visit-count">1</span>)</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-orange" data-toggle="pill" role="tab" data-filter-name="meeting" data-enquiry-status="Meeting">Meeting ( <span class="meeting-count">1</span> )</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-dark-info" data-toggle="pill" role="tab" data-filter-name="deal" data-enquiry-status="Deal">Deal ( <span class="deal-count">0</span> )</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-coffee" data-toggle="pill" role="tab" data-filter-name="bought_somewhere_else" data-enquiry-status="Bought Somewhere Else">Bought Somewhere Else ( <span class="bought-somewhere-else-count">2</span>)</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-blue" data-toggle="pill" role="tab" data-filter-name="today_enquiry" data-enquiry-status="Today Enquiry">Today Enquiry ( <span class="today-enquiry-count">0</span> )</button>
								</li>
								<li class="nav-item twt-nav">
									<button type="button" class="nav-link bg-color-black-rock" data-toggle="pill" role="tab" data-filter-name="follow_ups" data-enquiry-status="Follow Ups">Follow Ups ( <span class="follow-ups-count">0</span> )</button>
								</li>
							</ul>
						</div>
						<div class="filter-result-wrapper">
							<h3 class="h4 mb-3">All Requirements</h3>
							<div class="card card-body shadow-sm">
								<div class="mb-3 d-md-flex">
									<span class="mr-3"><strong>Name : </strong><span>One Stop Property</span><br></span>
									<span class="mr-3"><strong>Email : </strong><a href="/cdn-cgi/l/email-protection#c4adaaa2ab84abaaa1b7b0abb4b4b6abb4a1b6b0bdeaadaa" target="_blank" class="text-theme"><span class="__cf_email__" data-cfemail="036a6d656c436c6d6670776c7373716c736671777a2d6a6d">[email&#160;protected]</span></a><br></span>
									<span class="mr-3"><strong>Mobile : </strong><a href="tel:8758291548" class="text-theme">8758291548</a><br></span>
									<span class="mr-3"><strong>Whatsapp : </strong><a href="https://api.whatsapp.com/send?phone=919909477702" target="_blank" class="text-theme">9909477702</a></span>
								</div>
								<div class="table-responsive">
									<table class="table table-sm table-bordered table-hover word-break table-manage-requirement">
										<thead>
											<tr>
												<th class="sr-col" style="min-width: 50px;width:50px">Sr. No.</th>
												<th class="text-center" style="width:100px;">Source</th>
												<th class="text-center" style="width:125px;">
													Name<br>
													Mobile<br>
													Email </th>
												<th class="text-center" style="width:104px;">Date & Time</th>
												<th class="text-center" style="width:117px;">Requirement<br><br>Status<br>Date</th>
												<th class="text-center" style="width:75px;">Property <br> Type</th>
												<th class="text-center" style="width:105px;">
													City<br>
													Location</th>
												<th class="text-center" style="width:60px;">Budget</th>
												<th class="text-center" style="width:140px;">Additional Details</th>
												<th class="text-center" style="width:70px;">Status</th>
												<th class="text-center" style="width:140px;">Budget Range</th>
												<th class="actions-col">Actions</th>
											</tr>
										</thead>
										<tbody class="ajax-view">
											<tr class="main-tr">
												<td class="sr-col">1</td>
												<td>OSP Website</td>
												<td>
													Forntend Test <br> ( Agent )<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919638515687">9638515687</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#77110518190312191337101a161e1b5914181a"><span class="__cf_email__" data-cfemail="3452465b5a40515a50745359555d581a575b59">[email&#160;protected]</span></a><br>
												</td>
												<td>
													02-01-2024<br>
													04:43:07 </td>
												<td class="text-center">
													Sell <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Villa / Bungalows<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">No. of Bedrooms: <span class="font-weight-bold">1 BHK</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													Ahmedabad<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Pending</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Approve" class="btn btn-sm btn-success mb-1" data-record-id="129" data-record-name="approve" onclick="approveRejectRequirement(this)">Approve</button>
													<button title="Reject" class="btn btn-sm btn-danger mb-1" data-record-id="129" data-record-name="reject" onclick="approveRejectRequirement(this)">Reject</button>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/BYACi4R2Z1rdnCoQaRa_GLbNp8M1o0c2Gqup5QsUr12z6QcYrl8DsESPpjwNFWFxpaz-jCP5FnKB8kt6mIubsg" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="129" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">2</td>
												<td>Walk-in</td>
												<td>
													riyank 2<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919099812121">9099812121</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#2d5f44544c4346035e03595a596d4a404c4441034e4240"><span class="__cf_email__" data-cfemail="cbb9a2b2aaa5a0e5b8e5bfbcbf8baca6aaa2a7e5a8a4a6">[email&#160;protected]</span></a>
												</td>
												<td>
													02-11-2023<br>
													04:43:48 </td>
												<td class="text-center">
													Sell <br><br><span class="color-blue">Follow Ups</span> - <br> ( 04-11-2023 ) </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">No. of Bedrooms: <span class="font-weight-bold">3 BHK</span></div>
															<div class="dropdown-item">Size: <span class="font-weight-bold">1800 Sq. Ft.</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													Ahmedabad<br>
												</td>
												<td>1cr</td>
												<td>ok</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">1CR - 2CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="128" data-record-name="riyank 2 9099812121" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_128" data-record-id="128" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_128">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_128" data-record-id="128" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_128">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/PwUZnjcbBNDUqF-rzJXlS9nymzhGLeVsnrpqlzyZly2UK1aBJCqceR-L12fIwEbQltS12ugPvP8nt-TF00K0xg" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="128" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">3</td>
												<td>OSP Website</td>
												<td>
													riyank 1<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919099889898">9099889898</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#21534858404f4a1061464c40484d0f424e4c"><span class="__cf_email__" data-cfemail="10627969717e7b2150777d71797c3e737f7d">[email&#160;protected]</span></a>
												</td>
												<td>
													02-11-2023<br>
													04:42:06 </td>
												<td class="text-center">
													Buy <br><br><span class="color-blue">Follow Ups</span> - <br> ( 03-11-2023 ) </td>
												<td class="text-center position-relative">
													Villa / Bungalows<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">No. of Bedrooms: <span class="font-weight-bold">4 BHK</span></div>
															<div class="dropdown-item">Plot Size: <span class="font-weight-bold">2500 Sq. Ft.</span></div>
															<div class="dropdown-item">Construction Size: <span class="font-weight-bold">2200 Sq. Ft.</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													<br>
													bopal
												</td>
												<td>3cr to 4cr</td>
												<td>check for followup</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">3CR - 4CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="127" data-record-name="riyank 1 9099889898" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_127" data-record-id="127" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_127">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_127" data-record-id="127" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_127">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/WLwlA0vwUSYtwzk6H5F_agaY40dKc7h_m_6xCzF7raAIyzI3UvuLQKHeszs75olezyNKY3nWoquncQ32vIQY2g" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="127" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">4</td>
												<td>OSP Website</td>
												<td>
													Riyank Shah <br> ( Agent )<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919099809060">9099809060</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#2d5f44544c4346035e03595a596d4a404c4441034e4240"><span class="__cf_email__" data-cfemail="ccbea5b5ada2a7e2bfe2b8bbb88caba1ada5a0e2afa3a1">[email&#160;protected]</span></a><br>
												</td>
												<td>
													02-11-2023<br>
													02:15:16 </td>
												<td class="text-center">
													Buy <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
												</td>
												<td class="text-center">
													Ahmedabad<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="126" data-record-name="Riyank Shah 9099809060" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_126" data-record-id="126" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_126">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_126" data-record-id="126" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_126">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/j77kVs1Q7pP9k9uB153oZeR3M03oUjcQX3gtkWB9ts09GBhp2atmrGfqbALCxeGawB1nFT7pZXHfoufY7I-qMw" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="126" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">5</td>
												<td>Google</td>
												<td>
													Riyank Shah <br> ( Agent )<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919099809060">9099809060</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#54263d2d353a3f7a277a202320143339353d387a373b39"><span class="__cf_email__" data-cfemail="b6c4dfcfd7d8dd98c598c2c1c2f6d1dbd7dfda98d5d9db">[email&#160;protected]</span></a><br>
												</td>
												<td>
													02-11-2023<br>
													02:13:29 </td>
												<td class="text-center">
													Buy <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
												</td>
												<td class="text-center">
													Ahmedabad<br>
													ranip </td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="125" data-record-name="Riyank Shah 9099809060" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_125" data-record-id="125" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_125">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_125" data-record-id="125" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_125">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/AkUfaDo1pnnS4Buccz7u870aroJHB_20AEs241wO4BP5jj5Qw1h9RCg9YxsKIZL_inM4RHKCxudLjVsRAVxnUQ" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="125" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">6</td>
												<td>Newspaper</td>
												<td>
													rider<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758209060">8758209060</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#12607b767760527d7c7761667d6262607d627760666b3c7b7c"><span class="__cf_email__" data-cfemail="592b303d3c2b1936373c2a2d3629292b36293c2b2d20773037">[email&#160;protected]</span></a>
												</td>
												<td>
													01-11-2023<br>
													04:50:46 </td>
												<td class="text-center">
													Looking For Rent <br><br><span class="color-blue">Follow Ups</span> - <br> ( 02-11-2023 ) </td>
												<td class="text-center position-relative">
													Office<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="124" data-record-name="rider 8758209060" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_124" data-record-id="124" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_124">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_124" data-record-id="124" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_124">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/UwPJe7_CdShsyfIjsotj0tkCAW1w2bkfBI3A8iycM2x1laO_BjHgx_noLgxrD3AIr3FVqEfW87od1sTRrC7i5g" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="124" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">7</td>
												<td>Google</td>
												<td>
													Riyank Shah <br> ( Agent )<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919099809060">9099809060</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#eb9982928a8580c598c59f9c9fab8c868a8287c5888486"><span class="__cf_email__" data-cfemail="01736878606f6a2f722f75767541666c60686d2f626e6c">[email&#160;protected]</span></a><br>
												</td>
												<td>
													01-11-2023<br>
													11:23:46 </td>
												<td class="text-center">
													Sell <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">No. of Bedrooms: <span class="font-weight-bold">1 BHK</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="123" data-record-name="Riyank Shah 9099809060" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_123" data-record-id="123" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_123">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_123" data-record-id="123" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_123">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/55kCTu7YYO_zseLmnsrlZn0L4LaRDRiLlMqFKQCfSUCeCLlJKCzXJqmP2M41CfJgdUQBtw6iTTfy0kw8JD69ig" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="123" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">8</td>
												<td>Newspaper</td>
												<td>
													check krva mate agent login ma<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919595898989">9595898989</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#4e2d262b2d250e29232f2722602d2123"><span class="__cf_email__" data-cfemail="ee8d868b8d85ae89838f8782c08d8183">[email&#160;protected]</span></a>
												</td>
												<td>
													31-10-2023<br>
													06:52:48 </td>
												<td class="text-center">
													Sell <br><br><span class="color-blue">Follow Ups</span> - <br> ( 31-10-2023 ) </td>
												<td class="text-center position-relative">
													Land<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">Size: <span class="font-weight-bold">2200-2500 VAR</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td>1cr</td>
												<td>check test</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">2CR - 3CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="122" data-record-name="check krva mate agent login ma 9595898989" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_122" data-record-id="122" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_122">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_122" data-record-id="122" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_122">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/YBrRXIrMcRZgv667v0Fk6_JyaOBwYjADxfNTUQOBjVyu6wiyS2skhrrMqcFQOs55MIg2IAd-tQSK_D6mFdsjzA" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="122" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">9</td>
												<td>OSP Website</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#88e1e6eee7c8e7e6edfbfce7f8f8fae7f8edfafcf1a6e1e6"><span class="__cf_email__" data-cfemail="3d54535b527d5253584e49524d4d4f524d584f4944135453">[email&#160;protected]</span></a>
												</td>
												<td>
													31-10-2023<br>
													06:19:55 </td>
												<td class="text-center">
													Buy <br><br><span class="color-blue">Follow Ups</span> - <br> ( 01-11-2023 ) </td>
												<td class="text-center position-relative">
													Land<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="121" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_121" data-record-id="121" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_121">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_121" data-record-id="121" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_121">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/eR7_UG91PF9XuRCjzRxDB3Df2HqhsDYZhoOYEISV3SuRXucH_ja9wq1x7UwRP4Fo9SUblbWCSSkYGeH-G7FJoA" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="121" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">10</td>
												<td>Reference</td>
												<td>
													user ae add kryu<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919898989898">9898989898</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#9dfcfaf8f3e9ddfaf0fcf4f1b3fef2f0"><span class="__cf_email__" data-cfemail="d8b9bfbdb6ac98bfb5b9b1b4f6bbb7b5">[email&#160;protected]</span></a>
												</td>
												<td>
													30-10-2023<br>
													02:41:53 </td>
												<td class="text-center">
													Sell <br><br><span class="color-blue">Follow Ups</span> - <br> ( 31-10-2023 ) </td>
												<td class="text-center position-relative">
													Warehouse / Godowns<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">Plot Size: <span class="font-weight-bold">1000 VAR</span></div>
															<div class="dropdown-item">Construction Size: <span class="font-weight-bold">900 VAR</span></div>
															<div class="dropdown-item">Pre-Lease: <span class="font-weight-bold">No</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td>agent ae add kryu</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">2CR - 3CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="120" data-record-name="user ae add kryu 9898989898" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_120" data-record-id="120" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_120">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_120" data-record-id="120" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_120">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/Vzi72rk98V-jLDw5z4rH33t_42s3jzRN49Zoz_6kjiNw34pdVK3A6pK-ijz-QgCwhvOnk6K5D0U9HNHjstkWkw" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="120" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">11</td>
												<td>Online Portal</td>
												<td>
													riyank shah<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919099812121">9099812121</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#dba9b2a2bab5b0f5a8f5afacaf9bbcb6bab2b7f5b8b4b6"><span class="__cf_email__" data-cfemail="b7c5deced6d9dc99c499c3c0c3f7d0dad6dedb99d4d8da">[email&#160;protected]</span></a>
												</td>
												<td>
													30-10-2023<br>
													01:23:19 </td>
												<td class="text-center">
													Sell <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Shop / Showroom<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">Size: <span class="font-weight-bold">300 Sq. Ft.</span></div>
															<div class="dropdown-item">Pre-Lease: <span class="font-weight-bold">Yes</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													Ahmedabad<br>
													bopal </td>
												<td>1cr</td>
												<td>vakil bridge</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">1CR - 2CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="119" data-record-name="riyank shah 9099812121" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_119" data-record-id="119" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_119">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_119" data-record-id="119" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_119">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/-KnnaBulfKBjefX3yLjNjqap_OFvduD1_I5Nyaqdc8BxP-2R8PDYvRT1Jo4_WwVVzIWQMVgaCx8JjSpFIz-iIw" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="119" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">12</td>
												<td>Google</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#cea7a0a8a18ea1a0abbdbaa1bebebca1beabbcbab7e0a7a0"><span class="__cf_email__" data-cfemail="543d3a323b143b3a3127203b2424263b243126202d7a3d3a">[email&#160;protected]</span></a>
												</td>
												<td>
													30-10-2023<br>
													01:15:11 </td>
												<td class="text-center">
													Buy <br><br><span class="color-red">Call Not Answered</span> - <br> ( 30-10-2023 ) </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">No. of Bedrooms: <span class="font-weight-bold">2 BHK</span></div>
															<div class="dropdown-item">Size: <span class="font-weight-bold">2200 Sq. Ft.</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													Ahmedabad<br>
													godrej garden city </td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">50L - 1CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="118" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_118" data-record-id="118" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_118">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_118" data-record-id="118" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_118">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/wyhXSAChjQXbKbfmEa2P2fwo3KyijalULPvys1NOymemYJW6eyRF4Tp9QRWc-0Vk5JqdiGgAIJ0DeWHxqZ4u8w" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="118" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">13</td>
												<td>Newspaper</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#85ecebe3eac5eaebe0f6f1eaf5f5f7eaf5e0f7f1fcabeceb"><span class="__cf_email__" data-cfemail="9ef7f0f8f1def1f0fbedeaf1eeeeecf1eefbeceae7b0f7f0">[email&#160;protected]</span></a>
												</td>
												<td>
													27-10-2023<br>
													05:31:12 </td>
												<td class="text-center">
													Buy <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="117" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_117" data-record-id="117" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_117">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_117" data-record-id="117" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_117">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/_oKq_L1bqB4D4Z0FHgFsJn-I1gmCm5mrAyuxpBFkmpt9L5JoqUk3-xUnbmkgNHAfcL1zVnufn0ZAEkZgQtlw4A" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="117" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">14</td>
												<td>OSP Website</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#92fbfcf4fdd2fdfcf7e1e6fde2e2e0fde2f7e0e6ebbcfbfc"><span class="__cf_email__" data-cfemail="98f1f6fef7d8f7f6fdebecf7e8e8eaf7e8fdeaece1b6f1f6">[email&#160;protected]</span></a>
												</td>
												<td>
													27-10-2023<br>
													04:11:05 </td>
												<td class="text-center">
													Buy <br><br><span class="color-blue">Follow Ups</span> - <br> ( 27-10-2023 ) </td>
												<td class="text-center position-relative">
													Shop / Showroom<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">Size: <span class="font-weight-bold">485 Sq. Ft.</span></div>
															<div class="dropdown-item">Pre-Lease: <span class="font-weight-bold">Yes</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													Ahmedabad<br>
												</td>
												<td>1cr</td>
												<td>tester</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">1CR - 2CR,3CR - 4CR</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="116" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_116" data-record-id="116" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_116">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_116" data-record-id="116" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_116">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/qwQqBkSqIAdFG8_bzB8yslbakGM4KObei-NMJx2x3uXnrEduC6k2qmqPatIvPy_x07KOeyZgyqqsD31MwI15aA" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="116" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">15</td>
												<td>Google</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#f1989f979eb19e9f9482859e8181839e8194838588df989f"><span class="__cf_email__" data-cfemail="137a7d757c537c7d7660677c6363617c637661676a3d7a7d">[email&#160;protected]</span></a>
												</td>
												<td>
													27-10-2023<br>
													01:14:03 </td>
												<td class="text-center">
													Sell <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Shop / Showroom<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="115" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_115" data-record-id="115" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_115">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_115" data-record-id="115" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_115">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/v5mH6BGA1kjCBWK0NoAlqyKJaEOSc3DLTylOQjEFMYk4bg797Qi0MSF6g8gFZO300cge4cNE1EyTkWWroWS_1g" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="115" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">16</td>
												<td>Newspaper</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#d5bcbbb3ba95babbb0a6a1baa5a5a7baa5b0a7a1acfbbcbb"><span class="__cf_email__" data-cfemail="bfd6d1d9d0ffd0d1dacccbd0cfcfcdd0cfdacdcbc691d6d1">[email&#160;protected]</span></a>
												</td>
												<td>
													27-10-2023<br>
													12:31:54 </td>
												<td class="text-center">
													Buy <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Office<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="114" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_114" data-record-id="114" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_114">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_114" data-record-id="114" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_114">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/SLb2gbLOdoe5KUr446d5OmUM0PD2kY-yuXs5IEfV9Ab0LXnmYTWGDxHFRGndfxNCkMgeAQgkj2PJccIN9qTkgg" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="114" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">17</td>
												<td>Walk-in</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#523b3c343d123d3c3721263d2222203d223720262b7c3b3c"><span class="__cf_email__" data-cfemail="f69f989099b699989385829986868499869384828fd89f98">[email&#160;protected]</span></a>
												</td>
												<td>
													27-10-2023<br>
													12:05:19 </td>
												<td class="text-center">
													Sell <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Office<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="113" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_113" data-record-id="113" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_113">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_113" data-record-id="113" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_113">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/D8CcESznwPh082KVxqUCMqHPCC3ePmZAvn5_aSEXfCTEBop9TBzJKWIodI2JsR6vS97UWDd5tCfrPcLdvmM6Sg" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="113" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">18</td>
												<td>Google</td>
												<td>
													One Stop Property<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=918758291548">8758291548</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#3851565e577857565d4b4c5748484a57485d4a4c41165156"><span class="__cf_email__" data-cfemail="01686f676e416e6f6472756e7171736e71647375782f686f">[email&#160;protected]</span></a>
												</td>
												<td>
													27-10-2023<br>
													11:33:29 </td>
												<td class="text-center">
													Buy <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Shop / Showroom<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td>sdfsdf</td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center">3CR - 4CR,4CR - 4CR+</td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="112" data-record-name="One Stop Property 8758291548" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_112" data-record-id="112" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_112">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_112" data-record-id="112" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_112">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/E389dIK9wUB1r8Gb5EgsMDS4xTLCpnzfm3ZPAk5R9fDMRhfyK_SoFEzptYf1sQtmwa07NPOaN38qV9dFkWEHug" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="112" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">19</td>
												<td>OSP Website</td>
												<td>
													Riyank Register Active Pw:admin <br> ( Agent )<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919393939393">9393939393</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#e5978c9c848b8ecb96cb919291a58288848c89cb868a88"><span class="__cf_email__" data-cfemail="f3819a8a929d98dd80dd878487b3949e929a9fdd909c9e">[email&#160;protected]</span></a><br>
												</td>
												<td>
													25-04-2023<br>
													02:25:26 </td>
												<td class="text-center">
													Sell <br><br><span class="color-info">Site Visit</span> </td>
												<td class="text-center position-relative">
													Flat / Apartment<br>
													<div class="btn-group pt-3">
														<button type="button" class="btn btn-sm bg-theme text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-list"></i></button>
														<div class="dropdown-menu shadow custom-dropdown-menu">
															<div class="dropdown-item">No. of Bedrooms: <span class="font-weight-bold">2 BHK</span></div>
															<div class="dropdown-item">House Type: <span class="font-weight-bold">PentHouse</span></div>
														</div>
													</div>
												</td>
												<td class="text-center">
													Ahmedabad<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="111" data-record-name="Riyank Register Active Pw:admin 9393939393" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_111" data-record-id="111" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_111">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_111" data-record-id="111" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_111">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/wG16IQWhN5tWpvlnVEdoslvQyckTBHStoE35t2OFMZqyYNhMXgyDod9dhTprYgfBKWOa6bXB1laS8R0PWPAmUQ" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="111" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<tr class="main-tr">
												<td class="sr-col">20</td>
												<td>Reference</td>
												<td>
													Nirav Zalavadiya <br> ( Agent )<br>
													<a class target="_blank" href="https://api.whatsapp.com/send?phone=919737838260">9737838260</a><br>
													<a class target="_blank" href="/cdn-cgi/l/email-protection#e6888f948790c88dc8929192a6818b878f8ac885898b"><span class="__cf_email__" data-cfemail="503e392231267e3b7e24272410373d31393c7e333f3d">[email&#160;protected]</span></a><br>
												</td>
												<td>
													25-04-2023<br>
													01:03:30 </td>
												<td class="text-center">
													Buy <br><br><span class="color-bahama-blue">New Enquiry</span> </td>
												<td class="text-center position-relative">
													Plot<br>
												</td>
												<td class="text-center">
													<br>
												</td>
												<td></td>
												<td></td>
												<td class="requirement-status text-center">Open</td>
												<td class="text-center"></td>
												<td class="actions-col">
													<button title="Add Admin Remarks" class="btn btn-sm btn-info mb-1" data-record-id="110" data-record-name="Nirav Zalavadiya 9737838260" data-source="admin" onclick="showRemarksModal(this)">View Admin Remarks</button>
													<div class="custom-control custom-switch custom-control-inline">
														<input type="checkbox" class="custom-control-input" data-current-status="checked" id="follow_enquiry_110" data-record-id="110" onclick="showToAgent(this, 'show_agent')" checked>
														<label class="custom-control-label" for="follow_enquiry_110">Show To Agent</label>
													</div>
													<div class="custom-control custom-switch custom-control-inline close-requirement-div">
														<input type="checkbox" class="custom-control-input" data-current-status="unchecked" id="close_requirement_110" data-record-id="110" onclick="showToAgent(this, 'close_requirement')" unchecked>
														<label class="custom-control-label close-requirement-label" for="close_requirement_110">Open</label>
													</div>
													<br>
													<a title="Edit Record" href="https://www.propertyincity.com/demo/requirement/showEditForm/4Ja4MqDXn4XFV1nh-c5hqgHvyP2dNhsYeVbmEhC-X0WA0Q8Y6Y8dy1pWJWrh3znhySwnQ0b1wRinrAhqRn9SeA" class="btn btn-sm btn-info mb-1"><i class="fas fa-fw fa-pencil-alt"></i></a>
													<button title="Delete" onclick="deleteRecord(this)" data-record-id="110" class="btn btn-sm btn-danger mb-1"><i class="fa fa-trash fa-fw"></i></button>
												</td>
											</tr>
											<input name="current_page" type="hidden" id="current_page" value="1">
											<input name="last_page" type="hidden" id="last_page" value="6">
											<input name="per_page" type="hidden" id="per_page" value="20">
											<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
											<script type="text/javascript">
												var allEnquiryCount = '119';
												$('.all-filter-data').find('.all-enquiry-count').html(allEnquiryCount);

												var newEnquiryCount = '95';
												$('.all-filter-data').find('.new-enquiry-count').html(newEnquiryCount);

												var inquiryByMistakeCount = '2';
												$('.all-filter-data').find('.inquiry-by-mistake-count').html(inquiryByMistakeCount);

												var detailSentCount = '1';
												$('.all-filter-data').find('.detail-sent-count').html(detailSentCount);

												var moreOptionsCount = '0';
												$('.all-filter-data').find('.more-options-count').html(moreOptionsCount);

												var siteVisitCount = '1';
												$('.all-filter-data').find('.site-visit-count').html(siteVisitCount);

												var meetingCount = '1';
												$('.all-filter-data').find('.meeting-count').html(meetingCount);

												var dealCount = '0';
												$('.all-filter-data').find('.deal-count').html(dealCount);

												var boughtSomewhereElseCount = '2';
												$('.all-filter-data').find('.bought-somewhere-else-count').html(boughtSomewhereElseCount);

												var followupEnquiryCount = '0';
												$('.all-filter-data').find('.follow-ups-count').html(followupEnquiryCount);

												var todayEnquiryCount = '0';
												$('.all-filter-data').find('.today-enquiry-count').html(todayEnquiryCount);
											</script>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="remarksModal" tabindex="-1" role="dialog" aria-hidden="true">
						<form action="https://www.propertyincity.com/demo/requirement/submitRemarks" id="remarksForm" method="post" accept-charset="utf-8">
							<div class="modal-dialog modal-lg modal-dialog-scrollables modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Requirement <span class="post-user-name"></span> </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body p-0">
										<div class="bg-light p-3">
											<div class="add-row-wrapper">

												<div class="row row-single">
													<div class="col-lg-4 col-md-6 enquiry-status-div">
														<div class="form-group">
															<label class="control-label" for="enquiry_status">Requirement Status<span class="text-danger line-height">*</span>:</label>
															<select class="form-control" id="enquiry_status" name="enquiry_status">
																<option value>Select</option>
																<option value="call_not_answered">Call not Answered</option>
																<option value="details_send">Details Send</option>
																<option value="more_options">More Options</option>
																<option value="site_visit">Site Visit</option>
																<option value="meeting">Meeting</option>
																<option value="deal">Deal</option>
																<option value="bought_somewhere_else">Bought Somewhere Else</option>
																<option value="follow_ups">Follow Ups</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-md-6 enquiry-date-div">
														<div class="form-group">
															<label class="control-label" for="enquiry_date">Date:</label>
															<input type="text" class="form-control date-control" id="enquiry_date" name="enquiry_date" placeholder="DD-MM-YYYY" readonly>
														</div>
													</div>
													<div class="col-lg-12 agent-status-change-div">
														<div class="form-group">
															<label for="remarks" class="control-label">Remarks<span class="text-danger line-height">*</span>:</label>
															<textarea name="model_remarks" id="model_remarks" rows="4" class="form-control" placeholder="Remarks"></textarea>
														</div>
													</div>
												</div>

												<input type="hidden" name="post_requirement_id">
												<input type="hidden" name="remarks_type">
												<input type="hidden" name="change_status_type">
											</div>
											<button type="button" class="btn btn-success new-status-change-agent-master" onclick="submitRemarks()">Submit</button>
										</div>

										<div class="requirement-view">


										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal fade" id="additional-details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenterTitle">Additional Details</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body additional-details-modal-body">
									...
								</div>
								<div class="modal-footer d-none">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
					<script>
						var module_url = 'https://www.propertyincity.com/demo/requirement/';

						function deleteRecord(thisitem) {
							alertify.confirm(messages['delete_record'], 'Are you sure you want to delete this Record ?', function() {
								var recordId = $(thisitem).data("record-id");
								var deleteUrl = module_url + 'delete/' + recordId;
								window.location = deleteUrl;
							}, function() {});

						}

						var validatorForm = $("#remarksForm").validate({
							errorClass: "invalid-input",
							rules: {
								model_remarks: {
									required: true,
									noSpace: true
								},
								enquiry_status: {
									required: true,
									noSpace: true
								},
								enquiry_date: {
									required: false
								},
							},
							messages: {
								model_remarks: {
									required: "Please Enter Remarks"
								},
								enquiry_status: {
									required: "Please Select Requirement Status "
								},
								enquiry_date: {
									required: "Please Select Date."
								},
							},
							submitHandler: function(form) {
								showLoader()
								form.submit();
							}
						});

						$('#enquiry_start_date,#enquiry_end_date').datetimepicker({
							ignoreReadonly: true,
							useCurrent: false,
							viewMode: 'days',
							format: 'DD-MM-YYYY',
							showClear: true,
							showClose: true,
							icons: {
								clear: 'fa fa-trash',
								Close: 'fa fa-trash',
							},
						});

						$('#enquiry_date').datetimepicker({
							ignoreReadonly: true,
							useCurrent: false,
							viewMode: 'days',
							format: 'DD-MM-YYYY',
							showClear: true,
							showClose: true,
							widgetPositioning: {
								vertical: 'bottom'
							},
							icons: {
								clear: 'fa fa-trash',
								Close: 'fa fa-trash',
							}
						});

						$(function() {

							$('#enquiry_start_date').datetimepicker().on('dp.change', function(e) {
								var incrementDay = moment((e.date)).startOf('d');
								$('#enquiry_end_date').data('DateTimePicker').minDate(incrementDay);
								$(this).data("DateTimePicker").hide();
							});

							$('#enquiry_end_date').datetimepicker().on('dp.change', function(e) {
								var decrementDay = moment((e.date)).endOf('d');
								$('#enquiry_start_date').data('DateTimePicker').maxDate(decrementDay);
								$(this).data("DateTimePicker").hide();
							});

							$('[name="enquiry_status"]').on('change', function() {
								var enquiry_status = $.trim($(this).val());
								if (enquiry_status === 'follow_ups') {
									$('#enquiry_date').data('DateTimePicker').minDate(moment().startOf('d'));
								} else {
									$('#enquiry_date').data('DateTimePicker').minDate(false);
								}
							});
						})

						function showRemarksModal(thisitem) {
							validatorForm.resetForm();

							var recordId = $(thisitem).data('record-id');
							$('[name="post_requirement_id"]').val(recordId);

							var postName = $(thisitem).data('record-name');
							$('.post-user-name').html('- ' + postName);

							var data_requirement_change = $(thisitem).attr('data-requirement-change');
							if (data_requirement_change != "" && data_requirement_change != null) {
								$('[name="change_status_type"]').val(data_requirement_change);
							} else {
								$('[name="change_status_type"]').val('');
							}
							var source = $(thisitem).data('source');
							$('[name="remarks_type"]').val(source);

							var data_status_info = $(thisitem).attr('data-status-info');

							if (source == 'agent') {
								$('.enquiry-status-div').hide();
								$('.enquiry-date-div').hide();
							} else {
								$('.enquiry-status-div').show();
								$('.enquiry-date-div').show();
							}

							if (recordId != '') {
								$.ajax({
									url: site_url + 'requirement/requirementList',
									type: 'post',
									dataType: 'json',
									data: {
										'record_id': recordId,
										'source': source
									},
									beforeSend: function() {
										showLoader();
									},
									success: function(response) {
										hideLoader();
										$('.requirement-view').html('');
										$('.requirement-view').html(response.data.html);
										if (source == 'admin') {
											$('[name="enquiry_date"]').val(response.data.enquiryDate);
										}
										if (source != 'agent') {

											$('[name="enquiry_status"]').html('');
											$('[name="enquiry_status"]').html(response.data.enquiryStatusHtml);

											$('[name="enquiry_date"]').val(response.data.enquiryDate);

										}

									},
									error: function() {

									}
								});
							}

							$('#remarksModal').modal('show');
						}

						function submitRemarks() {
							if ($("#remarksForm").valid() != true) {
								return false;
							} else {
								$('#remarksForm').submit();
							}
						}

						function showToAgent(thisitem, status) {

							var record_id = $.trim($(thisitem).attr('data-record-id'));
							var current_status = $.trim($(thisitem).attr('data-current-status'));

							$.ajax({
								url: site_url + 'requirement/updateShowToAgent',
								type: 'post',
								dataType: 'json',
								data: {
									'record_id': record_id,
									'current_status': current_status,
									'status': status
								},
								beforeSend: function() {
									showLoader();
								},
								success: function(response) {
									hideLoader();

									if (response.status_code == 1) {
										alertifyMessage('success', response.message);
										$(thisitem).attr('data-current-status', response.data.update_status)

										if (current_status == 'checked') {
											if (status == 'close_requirement') {
												$(thisitem).parents('.main-tr').find('.requirement-status').html('Open');
												$(thisitem).parents('.close-requirement-div').find('.close-requirement-label').html('Open');
											}
										} else if (current_status == 'unchecked') {
											if (status == 'close_requirement') {
												$(thisitem).parents('.main-tr').find('.requirement-status').html('Close');
												$(thisitem).parents('.close-requirement-div').find('.close-requirement-label').html('Close');
											}
										}

									} else if (response.status_code == 101) {
										alertifyMessage('error', response.message);

										if (current_status == 'checked') {
											$(thisitem).prop('checked', true);
											if (status == 'close_requirement') {
												$(thisitem).parents('.main-tr').find('.requirement-status').html('Close');
												$(thisitem).parents('.close-requirement-div').find('.close-requirement-label').html('Close');
											}
										} else if (current_status == 'unchecked') {
											$(thisitem).prop('checked', false);
											if (status == 'close_requirement') {
												$(thisitem).parents('.main-tr').find('.requirement-status').html('Open');
												$(thisitem).parents('.close-requirement-div').find('.close-requirement-label').html('Open');
											}
										}


									}
								},
								error: function() {

								}
							});
						}

						function showAdditionalDetailsModal(thisitem) {
							$('.additional-details-modal-body').html($(thisitem).attr('data-record-value'));
							$('#additional-details-modal').modal('show');
						}

						function approveRejectRequirement(thisitem) {

							var status = $.trim($(thisitem).attr('data-record-name'));
							var recordId = $.trim($(thisitem).attr('data-record-id'));

							var doStatus = '';
							if (status == 'approve') {
								doStatus = 'approved';
							} else if (status == 'reject') {
								doStatus = 'rejected';
							}

							alertify.confirm(messages['update_status'], 'Are you sure you want to ' + status + ' this Record ?', function() {

								$.ajax({
									url: site_url + 'requirement/updateStatus',
									type: 'post',
									dataType: 'json',
									data: {
										'record_id': recordId,
										'status': doStatus
									},
									beforeSend: function() {
										showLoader();
									},
									success: function(response) {
										hideLoader();

										if (response.status_code == 1) {
											alertifyMessage('success', response.message);
										} else {
											alertifyMessage('error', response.message);
										}
										filterData();
									},
									error: function() {

									}
								});

							}, function() {});
						}

						var filter_property = '';
						$('.twt-nav button[data-toggle="pill"]').on('shown.bs.tab', function(e) {
							e.target // newly activated tab
							var statusName = $(this).attr('data-enquiry-status');
							$('.enquiry-title').text(statusName)

							filterData()
						});

						function searchField() {
							var search_by_name = $.trim($('[name="search_by_name"]').val());
							var city = $.trim($('[name="city"]').val());
							var requirement = $.trim($('[name="requirement"]').val());
							var property_type = $.trim($('[name="property_type"]').val());
							var source = $.trim($('[name="source"]').val());
							var show_to_agent = $.trim($('[name="show_to_agent"]').val());
							var requirement_status = $.trim($('[name="requirement_status"]').val());
							var rent_purpose = $.trim($('[name="rent_purpose"]').val());
							var filter_property = $('.all-filter-data').find('.active').data('filter-name');
							var enquiry_start_date = $.trim($("[name='enquiry_start_date']").val());
							var enquiry_end_date = $.trim($("[name='enquiry_end_date']").val());
							var search_baudget_range_value = $.trim($("[name='search_baudget_range_value']").val());
							var search_house_type = $.trim($("[name='house_type']").val());
							var search_baudget_range_rent_value = $.trim($("[name='search_baudget_range_rent_value']").val());
							var search_pre_lease = $.trim($("[name='search_pre_lease']").val());

							var searchData = {
								'search_by_name': search_by_name,
								'city': city,
								'requirement': requirement,
								'property_type': property_type,
								'source': source,
								'show_to_agent': show_to_agent,
								'enquiry_end_date': enquiry_end_date,
								'enquiry_start_date': enquiry_start_date,
								'requirement_status': requirement_status,
								'rent_purpose': rent_purpose,
								'filter_property': filter_property,
								'search_baudget_range_value': search_baudget_range_value,
								'search_house_type': search_house_type,
								'search_baudget_range_rent_value': search_baudget_range_rent_value,
								'search_pre_lease': search_pre_lease,
							}

							return searchData;
						}


						function filterData() {

							var searchFieldName = searchField();

							searchAjax(module_url + 'filter', searchFieldName);

						}
						var paginationUrl = module_url + 'filter';


						function getRequirementInfo(thisitem) {
							var requirement = $.trim($('[name="requirement"]').val());
							if (requirement != "" && requirement != null && requirement == 'rent') {
								$(".rent-purpose-master-div").show();
								$(".baudget-range-rent-value-master-div").show();
							} else {
								$(".rent-purpose-master-div").hide();
								$(".baudget-range-rent-value-master-div").hide();
							}

							if ((requirement != "" && requirement != null && requirement == "buy") || (requirement != "" && requirement != null && requirement == "sell")) {
								$(".baudget-range-value-buy-sell-master-div").show();
							} else {
								$(".baudget-range-value-buy-sell-master-div").hide();
							}


						}

						function getHouseTypeInfo(thisitem) {
							var property_type = $.trim($('[name="property_type"]').val());
							if (property_type != "" && property_type != null && property_type == '1') {
								$(".house-type-master-div").show();
							} else {
								$(".house-type-master-div").hide();
							}
						}


						function getPreLeaseInfo(thisitem) {
							var property_type = $.trim($('[name="property_type"]').val());
							if (property_type != "" && property_type != null && (property_type == '3' || property_type == '4' || property_type == '5')) {
								$(".pre-lease-value-master-div").show();
							} else {
								$(".pre-lease-value-master-div").hide();
							}
						}
					</script>
					<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/twt_scroll_pagination.js"></script>
				</div>

			</div>



			<div class="modal fade" id="comparison-builder-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Builder</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<form action="https://www.propertyincity.com/demo/comparison_master/" id="comparison-builder-form" method="post" accept-charset="utf-8">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label" for="comparison_builder_name">Builder Name<span class="text-danger">*</span>:</label> <input type="text" class="form-control" name="comparison_builder_name" placeholder="Builder Name" value>
										</div>
									</div>
									<div class="col-md-12 name-mobile-multi-container">
									</div>
									<input type="hidden" name="contact_details_add_count" value>
								</div>
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addcomparisonBuilder();" title="Add">Add</button>
								<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script>
				function showAddBuilderModel(thisitem) {
					var htmlform = '';
					htmlform += '<div class="card">';
					htmlform += '<div class="card-header commn-header-color">';
					htmlform += '    <div class="d-flex align-items-center">';
					htmlform += '<h5 class="mb-0 text-theme font-weight-bold">Contact Details</h5>';
					htmlform += '<button class="btn bg-theme text-white btn-sm ml-auto" onclick="addNewMobileRow();" title="" type="button"><i class="fas fa-plus text-white"></i> </button>';
					htmlform += '    </div>';
					htmlform += '</div>';
					htmlform += '<div class="card-body">';
					htmlform += '    <div class="table-responsive">';
					htmlform += '<table class="table table-sm table-bordered mb-1">';
					htmlform += '<thead>';
					htmlform += '<tr>';
					htmlform += '<th class="w-180">Name</th>';
					htmlform += '<th class="w-180">Mobile</th>';
					htmlform += '<th class="text-center">Actions</th>';
					htmlform += '</tr>';
					htmlform += '</thead>';
					htmlform += '<tbody class="other-mobile-div">';
					htmlform += '<tr class="person-detail-tr other-mobile-row">';
					htmlform += '<td><input type="text" class="form-control secondary-name" value="" placeholder="Name" name="name_1"></td>';
					htmlform += '<td>';
					htmlform += '<div class="d-flex">';
					htmlform += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" value="" placeholder="Mobile" name="mobile_1">';
					htmlform += '</div>';
					htmlform += '<label id="mobile_1-error" class="invalid-input" for="mobile_1" style="display:none"></label>'
					htmlform += '</td>';
					htmlform += '<td class="text-center"><button type="button" onclick="deleteSecondaryInfo(this)" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
					htmlform += '</tr>';
					htmlform += '</tbody>';
					htmlform += '</table>';
					htmlform += '    </div>';
					htmlform += '</div>';
					htmlform += '</div>';

					$('.name-mobile-multi-container').html(htmlform);
					openBootstrapModal('comparison-builder-model')
				}

				var contact_details_add_count = 1;

				function addNewMobileRow(thisitem) {
					contact_details_add_count++;
					var html = "";
					html += '<tr class="person-detail-tr other-mobile-row">';
					html += '<td><input type="text" class="form-control secondary-name" placeholder="Name" name="name_' + contact_details_add_count + '"></td>';
					html += '<td>';
					html += '<div class="d-flex">';
					html += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" placeholder="Mobile" name="mobile_' + contact_details_add_count + '">';
					html += '</div>';
					html += '<label id="mobile_' + contact_details_add_count + '-error" class="invalid-input" for="mobile_' + contact_details_add_count + '" style="display:none"></label>'
					html += '</td>';
					html += '<td class="text-center"><button type="button" title="Delete" onclick ="deleteSecondaryInfo(this)" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
					html += '</tr>';
					if ($('.other-mobile-div').find('.other-mobile-row').length > 0) {
						$(html).insertAfter($('.other-mobile-div').find('.other-mobile-row:last'));
					} else {
						$('.other-mobile-div').html(html);
					}
					$('.select2').select2();
				}

				function deleteSecondaryInfo(thisitem) {
					alertify.confirm(
						messages["delete_contact_row"],
						messages["delete_row"],
						function() {
							$(thisitem).parents('.other-mobile-row').remove();
						},
						function() {}
					);
				}


				$("#comparison-builder-form").validate({
					errorClass: "invalid-input",
					rules: {
						//comparison_builder_name: { required: true, noSpace : true},
						comparison_builder_name: {
							required: true,
							validateUniqueBuilderName: true,
							noSpace: true
						},


					},
					messages: {
						comparison_builder_name: {
							required: "Please Enter Builder Name"
						},
					},
				});

				$.validator.addMethod("validateUniqueBuilderName", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkUniqueBuilderName',
						dataType: "json",
						data: {
							'comparison_builder_name': $.trim($("[name='comparison_builder_name']").val()),
							'checkUniqueName': 'yes',
							'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, ' Builder Name is Already exists in Another Builder Name. Please try again.');


				function addcomparisonBuilder() {

					if ($("#comparison-builder-form").valid() != true) {
						return false;
					}

					var secondary_name_value = false;
					var secondary_mobile_value = false;
					$('.other-mobile-div tr').each(function() {
						var secondary_name = $.trim($(this).find('.secondary-name').val());
						var secondary_mobile = $.trim($(this).find('.secondary-mobile').val());

						if ((secondary_name != '' && secondary_name != null)) {
							secondary_name_value = true;
							if ((secondary_mobile == '' || secondary_mobile == null) && secondary_mobile_value != true) {
								$(this).find('.secondary-mobile').focus();
								secondary_mobile_value = true;
							}
						}
					});

					if (secondary_name_value != true) {
						$(".secondary-name:first").focus();
						alertifyMessage('error', 'Please Enter Name');
						return false
					}

					if (secondary_mobile_value != false) {
						alertifyMessage('error', 'Please Enter Mobile');
						return false
					}

					$("[name='contact_details_add_count']").val(contact_details_add_count);

					var comparison_builder_name = $.trim($("[name=comparison_builder_name]").val())
					var fromData = new FormData($("#comparison-builder-form")[0]);

					alertify.confirm("Add Builder", 'Are you sure you want to Add Builder ?', function() {
						$.ajax({
							type: 'POST',
							url: 'https://www.propertyincity.com/demo/comparison_master/' + 'addComparisonBuilderInfo',
							data: fromData,
							dataType: 'json',
							processData: false,
							contentType: false,
							beforeSend: function() {
								showLoader();
							},
							success: function(response) {
								hideLoader();

								if (response.status_code == 1) {
									alertifyMessage('success', response.message);
									$(document).find('.builder-list').html(response.data.html);
									$('#comparison-builder-model').modal('hide');
								} else {
									alertifyMessage('error', response.message);
									return false;
								}
							}
						});
					}, function() {});
				}

				$('.modal').on('hidden.bs.modal', function() {
					if ($(this).find('form').length > 0) {
						$(this).find('form').validate().resetForm();
						$(this).find('form .custom-file-label').html('Choose file');
						$(this).find('form').trigger("reset");
						console.log($(this).find('form'));
					}
				});

				$.validator.addMethod("validateAdvertisementProject", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkAdvertisementProjectName',
						dataType: "json",
						data: {
							project_advertisement_name: $.trim($("[name='project_advertisement_name']").val()),
							'checkUniqueName': 'yes',
							record_id: (($.trim($("[name='record_id']").val()) != null) ? $.trim($("[name='record_id']").val()) : ''),
						},
						success: function(response) {

							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, 'Advertisement Project Name is Already exists Please Select another Project Name Please try again');


				function advertismentAutoFillSeoDetails(thisitem) {

					var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
					if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
						$("[name='property_category']").val('Commercial');
					} else {
						$("[name='property_category']").val('Residential');
					}

					var property_type = $("[name='property_type'] option:selected").text();
					if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
						property_type = '';
					}
					switch (property_type) {
						case 'Flat / Apartment':
							property_type = 'Flat-Apartment';
							break;
						case 'Villa / Bungalows':
							property_type = 'Villa-Bungalows';
							break;
						case 'Shop / Showroom':
							property_type = 'Shop-Showroom';
							break;
						case 'Warehouse / Godowns':
							property_type = 'Warehouse-Godowns';
							break;
					}
					var property_category = $.trim($("[name='property_category']").val());
					var city = $.trim($('[name="city_id"] option:selected').text());
					var locality = $.trim($('[name="locality"]').val());
					var project_name = $.trim($('[name="project_name"]').val());
					var project_type = $.trim($('[name="project_type"]:checked').val());
					if (project_type === undefined) {
						project_type = '';
					}
					var state = $.trim($('[name="state_id"] option:selected').text());

					var seo_title = '';
					var title_description = '';
					var title_keyword = '';

					if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

						seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
						title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
						title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

						$('[name="seo_title"]').val('');
						$('[name="seo_keywords"]').val('');
						$('[name="seo_description"]').val('');

						$('[name="seo_title"]').val(seo_title);
						$('[name="seo_keywords"]').val(title_keyword);
						$('[name="seo_description"]').val(title_description);
					}

				}

				function multiPropertyAutoFillDetails(thisitem) {

					var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
					if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
						$("[name='property_category']").val('Commercial');
					} else {
						$("[name='property_category']").val('Residential');
					}

					var property_type = $("[name='property_type'] option:selected").text();
					if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
						property_type = '';
					}
					switch (property_type) {
						case 'Flat / Apartment':
							property_type = 'Flat-Apartment';
							break;
						case 'Villa / Bungalows':
							property_type = 'Villa-Bungalows';
							break;
						case 'Shop / Showroom':
							property_type = 'Shop-Showroom';
							break;
						case 'Warehouse / Godowns':
							property_type = 'Warehouse-Godowns';
							break;
					}
					var property_category = $("[name='property_category']").val();
					var city = $('[name="city_id"] option:selected').text();
					var locality = $('[name="locality"]').val();
					var project_name = $('[name="project_name"]').val();
					var project_type = $('[name="project_type"]:checked').val();
					if (project_type === undefined) {
						project_type = '';
					}
					var state = $('[name="state_id"] option:selected').text();

					var seo_title = '';
					var title_description = '';
					var title_keyword = '';

					if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

						seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
						title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
						title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

						$('[name="seo_title"]').val('');
						$('[name="seo_keywords"]').val('');
						$('[name="seo_description"]').val('');

						$('[name="seo_title"]').val(seo_title);
						$('[name="seo_keywords"]').val(title_keyword);
						$('[name="seo_description"]').val(title_description);
					}

				}




				function advertisementData(thisitem) {
					var advertisement_record_id = $.trim($("[name='project_advertisement_name']").find('option:selected').attr('advertisement-data-record-id'));
					if (advertisement_record_id != "" && advertisement_record_id != null) {
						$("[name='project_name']").val(advertisement_record_id);

					}
				}


				function getProjectTypeInfo(thisitem) {
					var property_type = $.trim($("[name=property_type]").val())

					$.ajax({
						url: 'https://www.propertyincity.com/demo/property_of_the_month/' + 'getPropertyAdvertisementRecordDetials',
						type: 'POST',
						data: {
							'property_type': property_type
						},
						beforeSend: function() {
							//block ui
							showLoader();
						},
						success: function(response) {
							hideLoader();
							if (response != "" && response != null) {
								$(thisitem).parents('.dependant-field-selection').find('.advertisement-list').html(response);
							}
						},
						error: function(errorResponse) {
							hideLoader();
						}
					});
				}

				$.validator.addMethod("validateUniqueLandzoneName", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/landzone/' + 'checkUniqueLandzoneName',
						dataType: "json",
						data: {
							'landzone_name': $.trim($("[name='landzone_name']").val()),
							'checkUniqueName': 'yes',
							'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, ' Landzone Name is Already exists in Another Landzone Name. Please try again.');



				$.validator.addMethod("validateUniqueFacilityName", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/facility/' + 'checkUniqueFacilityName',
						dataType: "json",
						data: {
							'name': $.trim($("[name='name']").val()),
							'checkUniqueName': 'yes',
							'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, ' Facility Name is Already exists in Another Facility Name. Please try again.');


				$.validator.addMethod("validateUniqueSpecificationName", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/specification/' + 'checkUniqueSpecificationName',
						dataType: "json",
						data: {
							'specification': $.trim($("[name='specification']").val()),
							'checkUniqueName': 'yes',
							'specification_record_id': ($.trim($("[name='specification_record_id']").val()) != '' ? $.trim($("[name='specification_record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, ' Specification Name is Already exists in Another Specification Name. Please try again.');


				$.validator.addMethod("validateUniquePropertyAreaName", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/property_area/' + 'checkUniquePropertyAreaName',
						dataType: "json",
						data: {
							'name': $.trim($("[name='name']").val()),
							'checkUniqueName': 'yes',
							'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, ' Name is Already exists in Another Name. Please try again.');


				function builderDataInfo(thisitem) {
					var builder_id = $.trim($("[name='builder_name']").val());
					$.ajax({
						url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBuilderRecordDetials',
						type: 'POST',
						data: {
							'builder_id': builder_id
						},
						beforeSend: function() {
							//block ui
							showLoader();
						},
						success: function(response) {
							hideLoader();
							response = $.trim(response);
							if (response != "" && response != null) {
								$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html(response);
								$("[name='site_person_mobile']").val('');
							} else {
								$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html('');
								$("[name='site_person_mobile']").val('');
							}
						},
						error: function(errorResponse) {
							hideLoader();
						}
					});

				}



				function getSitePersonNameInfo(thisitem) {
					var site_person_record_id = $.trim($("[name='site_person_name']").find('option:selected').attr('site-person-mobile-data'));
					if (site_person_record_id != "" && site_person_record_id != null) {
						$("[name='site_person_mobile']").val(site_person_record_id);
					} else {
						$("[name='site_person_mobile']").val('');
					}
				}

				function getSameNameBrochureMasterInfo(thisitem) {
					var project_name = $.trim($(thisitem).parents('.dependant-field-selection').find('.project-name-list').val());
					var builder_id = $.trim($("[name='builder_name']").val());
					$.ajax({
						url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBrochureAdvetimentBuilderRecordDetials',
						type: 'POST',
						dataType: "json",
						data: {
							'builder_id': builder_id,
							'project_name': project_name
						},
						beforeSend: function() {
							//block ui
							showLoader();
						},
						success: function(response) {
							hideLoader();
							if (response.status_code == 1) {
								$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html(response.data.brochureHtmlReplace);
								$("[name='new_brochure_file[]']").val(response.data.brochureFileName);
								$("[name='final_selected_image']").val(response.data.baseNameImagePreview);
							} else {
								var imageName = 'Choose file';
								$(thisitem).parents('.dependant-field-selection').find('.brocher-file-master-div-list').html(imageName);
								$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html('');
								$("[name='new_brochure_file[]']").val('');
								$("[name='final_selected_image']").val('');
							}
						},
						error: function(errorResponse) {
							hideLoader();
						}
					});


				}

				var removeImage = [];

				function removeImageHtml(thisitem) {
					alertify.confirm(messages['delete_record'], messages['delete-document-master-image-msg'], function() {
						removeImage.push($(thisitem).attr('data-preview-name'));
						$('[name="remove_image"]').val(removeImage)
						$(thisitem).parents('.brocher-document-image-div').remove();

						var remove_images_length = ($('.brocher-document-image-div').length);
						if (remove_images_length == 0) {
							$('[name="brochure_file[]"]').attr('data-valid-image', "No");
						}

					}, function() {});
				}

				function getMultipleDocumentPreview(thisitem, placeToInsertImagePreview) {
					var invalidImage = false;
					var field_id = $(thisitem).attr("id");
					var field_name = $(thisitem).attr("data-field-name");

					$("." + field_id + "-preview-div").html("");
					if (thisitem.files) {
						var filesAmount = thisitem.files.length;

						for (i = 0; i < filesAmount; i++) {
							var f = thisitem.files[i];
							var reader = new FileReader();

							if (
								thisitem.files[i].type == "image/jpg" ||
								thisitem.files[i].type == "image/png" ||
								thisitem.files[i].type == "application/pdf" ||
								thisitem.files[i].type == "image/jpeg"
							) {
								reader.onload = (function(theFile) {
									return function(e) {
										var imageName = "";
										var imageName = theFile.name;
										var imageHtml = "";

										if (imageName != "") {
											multipleImageName.push(imageName);
											$("[name='final_selected_image']").val(multipleImageName.toString());
										}

										imageHtml = '<div class="col-sm-12 my-1 brocher-document-image-div">';
										imageHtml += '<div class="row">';
										imageHtml += '<div class="upload-main-image">';
										imageHtml += '<label class="pr-2">' + imageName + '</label>';
										imageHtml += '</div>';
										imageHtml += '<div class="close-buttons">';
										imageHtml += '<button type="button" class="btn btn-danger button-round" onclick="removeImageHtml(this)" data-field-name="' + field_name + '" data-preview-name="' + imageName + '"><i class="fas fa-times"></i></button>';
										imageHtml += '</div>';
										imageHtml += '</div>';
										imageHtml += '</div>';
										$("." + field_id + "-preview-div").append($.parseHTML(imageHtml));

									};
								})(f);
							} else {
								invalidImage = true;
							}

							reader.readAsDataURL(thisitem.files[i]);
						}

						$("#final_selected_image").val(multipleImageName.toString());

						if (invalidImage != false) {
							$("#" + field_id).val("");
							$("." + field_id + "-preview-div").hide();
							$("." + field_id + "-preview-div").html("");
							alertifyMessage("error", messages["invalid-image-pdf"]);
						} else {
							$("." + field_id + "-preview-div").show();

						}
					}
				}

				$.validator.addMethod("validateUniqueAgentMobile", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
						dataType: "json",
						data: {
							'agent_mobile': ($.trim($("[name='agent_mobile']").val()) != null && $.trim($("[name='agent_mobile']").val()) != '') ? $.trim($("[name='agent_mobile']").val()) : '',
							'checkUniqueName': 'yes',
							'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, 'Mobile already exist. Please enter another Mobile.');

				// $(".get-property-atofill-selection-locality").on("select2:select", function (evt) {
				// 	  var element = evt.params.data.element;
				// 	  var $element = $(element);
				// 	  $element.detach();
				// 	  $(this).append($element);
				// 	  $(this).trigger("change");
				// }); 
				function staticAutoFillSeoDetails(thisitem) {
					var no_of_mutiply_by = $.trim($("[name='no_of_mutiply_by']").val());
					var display_property_count = $('.display-property-count-master-div').text();

					//no_of_mutiply_by = ( parseFloat( no_of_mutiply_by ) > 0.00 ? no_of_mutiply_by : 0 );
					//display_property_count = ( parseFloat( display_property_count ) > 0.00 ? display_property_count : 0 );

					var multiplication_property_count = 1;
					if ((no_of_mutiply_by != "" && no_of_mutiply_by != null) && (display_property_count != "" && display_property_count != null)) {
						multiplication_property_count = (parseFloat(display_property_count) * (parseFloat(no_of_mutiply_by)));
					}
					var property_type = $("[name='property_type_id'] option:selected").text();
					var property_type_id = $("[name='property_type_id'] option:selected").val();
					if ($("[name='property_type_id'] option:selected").val() == '' || $("[name='property_type_id'] option:selected").val() == null) {
						property_type = '';
					}
					var single_property_type_name = '';
					var main_property_type_name = '';
					var property_type_plural_name = '';
					var property_type_plural_slug_name = '';

					var property_type_flat_apartment_name = $('[name="property_type_name_selection"]').val() != '' && $('[name="property_type_name_selection"]').val() != null ? $('[name="property_type_name_selection"]:checked').val() : Flat;

					switch (property_type) {
						case 'Flat / Apartment':
							if (property_type_flat_apartment_name == 'Apartment') {
								property_type = 'Apartment';
								single_property_type_name = 'apartment';
								main_property_type_name = 'Apartment';
								property_type_plural_name = 'Apartment';
								property_type_plural_slug_name = 'apartment';
							} else {
								property_type = 'Flat';
								single_property_type_name = 'flat';
								main_property_type_name = 'Flat';
								property_type_plural_name = 'Flat';
								property_type_plural_slug_name = 'flat';
							}
							break;
						case 'Villa / Bungalows':
							property_type = 'Villa-Bungalows';
							single_property_type_name = 'villa';
							main_property_type_name = 'Villa / Bungalows';
							property_type_plural_name = 'Bungalows';
							property_type_plural_slug_name = 'villa-bungalows';
							break;
						case 'Shop / Showroom':
							property_type = 'Shop-Showroom';
							single_property_type_name = 'shop';
							main_property_type_name = 'Shop / Showroom';
							property_type_plural_name = 'Shops';
							property_type_plural_slug_name = 'shop-showroom';
							break;
						case 'Warehouse / Godowns':
							property_type = 'Warehouse-Godowns';
							single_property_type_name = 'warehouse';
							main_property_type_name = 'Warehouse / Godowns';
							property_type_plural_name = 'Godowns';
							property_type_plural_slug_name = 'warehouse-godowns';
							break;

						case 'Office':
							property_type = 'Office';
							single_property_type_name = 'office';
							main_property_type_name = 'Office';
							property_type_plural_name = 'Offices';
							property_type_plural_slug_name = 'offices';
							break;
						case 'Plot':
							property_type = 'Plot';
							single_property_type_name = 'plot';
							main_property_type_name = 'Plot';
							property_type_plural_name = 'Plots';
							property_type_plural_slug_name = 'plots';
							break;
						case 'Land':
							property_type = 'Land';
							single_property_type_name = 'land';
							main_property_type_name = 'Land';
							property_type_plural_name = 'Lands';
							property_type_plural_slug_name = 'lands';
							break;
					}
					var city = "";
					var city_id = $.trim($('[name="city_id"] option:selected').val());
					if (city_id != "" && city_id != null) {
						var city = $.trim($('[name="city_id"] option:selected').text());
					}

					var state = "";
					var state_id = $.trim($('[name="state_id"] option:selected').val());
					if (state_id != "" && state_id != null) {
						var state = $.trim($('[name="state_id"] option:selected').text());
					}

					//var city = $.trim($('[name="city_id"] option:selected').text());

					var first_locality_value = $.trim($('[name="locality_id[]"]').val()).split(",");

					var first_locality_text = '';
					if (first_locality_value != '' && first_locality_value != null) {
						var selected_locality_values = $('[name="select_locality_order[]"]').val();
						if (selected_locality_values != '' && selected_locality_values != null) {
							selected_locality_values = selected_locality_values.split(',')
							var first_value_of_location = selected_locality_values[0];
							first_locality_text = $("[name='locality_id[]'] option[value='" + first_value_of_location + "']").text();
						} else {
							first_locality_text = $('[name="locality_id[]"] option[value="' + first_locality_value[0] + '"]').text();
						}
					} else {
						first_locality_text = '';
					}

					// 	var first_locality_text = $('[name="locality_id[]"] option[value="'+first_locality_value[0]+'"]').text();
					//var state = $.trim($('[name="state_id"] option:selected').text());
					var new_purpose_status = $.trim($('[name="purpose"]:checked').val());
					var bhk_selection = $.trim($('[name="bhk_selection"]:checked').val());
					var purpose_status = $.trim($('[name="purpose"]:checked').val());
					if (new_purpose_status == 'hot_project') {
						new_purpose_status = 'Hot Projects';
					}


					if (bhk_selection != "" && bhk_selection != null) {
						var new_purpose_status = bhk_selection + 'BHK';
					}


					var house_type_array = $.trim($('[name="house_type[]"]:checked').val());
					var pre_leased_status_info = $.trim($('[name="pre_leased_status"] option:selected').val());
					var furnished_status_info = $.trim($('[name="furnished_status"]').val());

					var furnished_status = '';
					// condtion add Furnished tyre j ave chhe jyare sell rent and all property type ma ave chhe
					if (purpose_status == 'sell' || purpose_status == 'rent') {
						if (furnished_status_info != "" && furnished_status_info != null && furnished_status_info == "full") {
							furnished_status = 'Furnished';
						}
					}

					// condtion add PreLeased tyre j ave chhe jyare sell rent anf office and shop show room hoye tyre
					var pre_leased_status = '';
					if (property_type_id == '3' || property_type_id == '4') {
						if (purpose_status == 'sell' || purpose_status == 'rent') {
							if (pre_leased_status_info != "" && pre_leased_status_info != null && pre_leased_status_info == "Yes") {
								pre_leased_status = 'PreLeased';
							}
						}
					}
					var seo_title = '';
					var title_description = '';
					var title_keyword = '';
					var description = '';

					var display_purpose = '';
					var display_purpose_slug_name = '';
					switch (purpose_status) {
						case 'sell':
							display_purpose = "Sale";
							display_purpose_slug_name = "sale";
							break;
						case 'rent':
							display_purpose = "Rent";
							display_purpose_slug_name = "Rent";
							break;
						case 'hot_project':
							display_purpose = "New Project";
							purpose_status = "New Project";
							display_purpose_slug_name = "new-project";
							break;

					}

					if (property_type_id == '1' || property_type_id == '2') {

					} else {
						bhk_selection = null;
					}

					if (first_selected_locality_text != "" && first_selected_locality_text != null) {
						first_locality_text = first_selected_locality_text;
					}

					first_locality_text_array = first_locality_text.split('-');
					var upper = first_locality_text_array.map(element => {
						return element.toLowerCase().replace(/\b[a-z]/g, function(letter) {
							return letter.toUpperCase();
						});
					});
					// 	first_locality_text = upper.join('-');

					if (first_locality_value != '' && first_locality_value != null) {
						first_locality_text = upper.join('-');
					} else {
						first_locality_text = '';
					}

					var static_page_name = '';
					var static_page_name_slug = '';

					setTimeout(function() {
						seo_title = multiplication_property_count + '+ ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + property_type + ' ' + ((purpose_status != "" && purpose_status != null ? 'For ' + purpose_status : '')) + ' in ' + first_locality_text + ', ' + city;
						title_keyword = ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + first_locality_text + ', ' + city + ', ' + first_locality_text + ' ' + city + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + single_property_type_name + ' in ' + city + ', ' + single_property_type_name + ' in ' + first_locality_text + ', property in ' + first_locality_text + ', property on ' + purpose_status + ' in ' + first_locality_text + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ' in ' + first_locality_text + ' ' + city;
						title_description = 'Find ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + single_property_type_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + single_property_type_name + ' for ' + ((purpose_status != "" && purpose_status != null) ? purpose_status + ' ' : '') + 'in ' + first_locality_text + ', ' + city + " with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious " + single_property_type_name + " and much more.";

						// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
						description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + multiplication_property_count + ' ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + property_type + '. Find ' + house_type_array + '' + single_property_type_name + ' in ' + first_locality_text + '  ' + city + '. Choose Best ' + house_type_array + ' ' + single_property_type_name + ' for ' + new_purpose_status + ' in ' + first_locality_text + ',' + city + ' with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious ' + single_property_type_name + ' and much more.Â you can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in  ' + first_locality_text + ' based on your specific budget.';

						seo_title = ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + main_property_type_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city;
						title_keyword = ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk, ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' + first_locality_text.toLowerCase() + ', ' + city.toLowerCase() + ', ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk  ' + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' : '')) + '' + single_property_type_name + ' in ' + city.toLowerCase() + ', ' + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ', property in ' + first_locality_text.toLowerCase() + ', property on ' + purpose_status + ' in ' + first_locality_text.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase();
						title_description = 'Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more.';

						// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
						description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + main_property_type_name + '. Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + '. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more. You can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in ' + first_locality_text + ' based on your specific budget.';

						static_page_name = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status : '') + ' ' + (main_property_type_name != "" && main_property_type_name != null ? main_property_type_name : '') + ' for ' + (display_purpose != "" && display_purpose != null ? display_purpose : '') + ' in ' + (first_locality_text != "" && first_locality_text != null ? first_locality_text + ', ' : '') + (city != "" && city != null ? city : '');
						static_page_name_slug = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status.toLowerCase() + '-' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + '-bhk-' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + '-' : '') + (property_type_plural_slug_name != "" && property_type_plural_slug_name != null ? property_type_plural_slug_name + '-for-' : '') + (display_purpose_slug_name != "" && display_purpose_slug_name != null ? display_purpose_slug_name.toLowerCase() : '') + '-in-' + (first_locality_text != "" && first_locality_text != null ? first_locality_text.replaceAll(' ', '-').toLowerCase() + '-' : '') + ((city != "" && city != null ? city.toLowerCase() : ''));

						$('[name="seo_title"]').val('');
						$('[name="seo_keywords"]').val('');
						$('[name="seo_description"]').val('');
						$('[name="description"]').val('');

						$('[name="static_page_name"]').val('');
						$('[name="static_page_name_slug"]').val('');

						$('[name="seo_title"]').val(seo_title);
						$('[name="seo_keywords"]').val(title_keyword);
						$('[name="seo_description"]').val(title_description);
						CKEDITOR.instances['description'].setData(description);

						$('[name="static_page_name"]').val(static_page_name);
						$('[name="static_page_name_slug"]').val(static_page_name_slug);

					}, 200);




				}

				function furnishedTypeHideShow(thisitem) {
					var selected_property_type_id = $.trim($("[name='property_type_id']").val());
					var selected_value_show = $.trim($("[name='purpose']:checked").val());
					if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 1 || selected_property_type_id == 2 || selected_property_type_id == 3 || selected_property_type_id == 4 || selected_property_type_id == 5))) {
						$('.display-furnished-status-div').show();
					} else {
						$('.display-furnished-status-div').hide();
					}

					if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 3 || selected_property_type_id == 4))) {
						$('.display-pre-leased-status-div').show();
					} else {
						$('.display-pre-leased-status-div').hide();
					}

				}
			</script>
			<div class="modal fade show" id="add-agent-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Agent Database</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="fas fa-times"></i>
							</button>
						</div>
						<form action="https://www.propertyincity.com/demo/requirement" id="add-agent-database-form" method="post" accept-charset="utf-8">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="database_agent_mobile">Agent Mobile No<span class="text-danger line-height">*</span>:</label>
											<input type="text" class="form-control" id="database_agent_mobile" name="database_agent_mobile" value placeholder="Agent Mobile No" autofocus onkeyup="onlyNumber(this)" minlength="10" maxlength="10">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="database_agent_name">Agent Name<span class="text-danger line-height">*</span>:</label>
											<input type="text" class="form-control valid" id="database_agent_name" name="database_agent_name" value placeholder="Agent Name" autofocus aria-invalid="false">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addAgentDatabse()" title="Add">Add</button>
								<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script>
				function showAddAgentDatabaseModel(thisitem) {
					openBootstrapModal('add-agent-modal');
				}


				$("#add-agent-database-form").validate({
					errorClass: "invalid-input",
					rules: {
						database_agent_name: {
							required: true,
							noSpace: true
						},
						database_agent_mobile: {
							required: true,
							mobile_regex: /^[6789]\d{9}$/,
							validateUniqueAgentDatabaseMobile: true
						},
					},
					messages: {
						database_agent_mobile: {
							required: "Please Enter Agent Mobile No."
						},
						database_agent_name: {
							required: "Please enter Agent Name."
						},

					},

				});

				function addAgentDatabse() {

					if ($("#add-agent-database-form").valid() != true) {
						return false;
					}

					var agent_mobile = $.trim($("[name='database_agent_mobile']").val());
					var agent_name = $.trim($("[name='database_agent_name']").val());

					var confirm_box = "Add Agent Database";
					var confirm_box_msg = "Are you sure you want to Agent Database ?";

					alertify.confirm(confirm_box, confirm_box_msg, function() {

						$.ajax({
							type: "POST",
							dataType: "json",
							url: 'https://www.propertyincity.com/demo/agent_database/create',
							data: {
								'agent_name': agent_name,
								'agent_mobile': agent_mobile,
							},
							beforeSend: function() {
								showLoader();
							},
							success: function(response) {
								hideLoader();
								if (response.status_code == 1) {
									alertifyMessage('success', response.message);
									$("#add-agent-modal").modal('hide');
								} else {
									alertifyMessage('error', response.message);
								}
							},
							error: function() {
								hideLoader();
							}
						});
					}, function() {});
				}

				$.validator.addMethod('validateUniqueCustomerMobileNumber', function(value, element, param) {
					var result = true;
					var mobile_no = $.trim(value);
					var record_id = $.trim($('[name="record_id"]').val());

					$.ajax({
						type: 'post',
						async: false,
						dataType: 'json',
						data: {
							'mobile_no': mobile_no,
							'record_id': record_id
						},
						url: 'https://www.propertyincity.com/demo/customer/' + 'checkUniqueCustomerMobileNumber',
						success: function(response) {
							if (response.status_code == 1) {
								result = false;
							} else {
								result = true;
							}
						},
					});
					return result;
				}, 'Mobile already exist. Please enter another Mobile.');

				function relatedCustomerNameByMobile(thisitem) {
					var mobile = $.trim($(thisitem).val());

					$.ajax({
						type: 'post',
						data: {
							'mobile': mobile
						},
						url: 'https://www.propertyincity.com/demo/customer/' + 'relatedCustomerNameByMobile',
						beforeSend: function() {
							showLoader();
						},
						success: function(response) {
							hideLoader();
							if (response != '' && response != null) {
								$('[name="customer_name"]').val(response);
							} else {
								$('[name="customer_name"]').val('');
							}
						},
						error: function() {
							hideLoader();
						}
					});
				}

				function autoGenerateAdditionalInfo() {
					var listing_purpose = ($.trim($('[name="listing_purpose"]').val()) != '' && $.trim($('[name="listing_purpose"]').val()) != null ? $.trim($('[name="listing_purpose"] option:selected').text()) : '');
					var property_type = ($.trim($('[name="property_type"]').val()) != '' && $.trim($('[name="property_type"]').val()) != null ? $.trim($('[name="property_type"] option:selected').text()) : '');
					var scheme_name = $.trim($('[name="scheme_name"]').val());
					var type = ($.trim($('[name="type"]').val()) != '' && $.trim($('[name="type"]').val()) != null ? $.trim($('[name="type"] option:selected').text()) : '');
					var project_price = $.trim($('[name="project_price"]').val());
					var furniture_type = $.trim($("[name='furniture_type']:checked").val());
					var locality = ($.trim($('[name="locality"]').val()) != '' && $.trim($('[name="locality"]').val()) != null) ? $.trim($('[name="locality"]').val()) : "";


					var size = "";
					var area = "";
					var construction_size = "";
					var construction_area = "";
					if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
						area = ($.trim($('[name="plot_area"]').val()) != "" && $.trim($('[name="plot_area"]').val()) != null) ? $.trim($('[name="plot_area"] option:selected').text()) : "";
						size = ($.trim($('[name="plot_size"]').val()) != "" && $.trim($('[name="plot_size"]').val()) != null) ? 'Plot Size ' + $.trim($('[name="plot_size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
						construction_area = ($.trim($('[name="construction_area"]').val()) != "" && $.trim($('[name="construction_area"]').val()) != null) ? $.trim($('[name="construction_area"] option:selected').text()) : "";
						construction_size = ($.trim($('[name="construction_size"]').val()) != "" && $.trim($('[name="construction_size"]').val()) != null) ? $.trim($('[name="construction_size"]').val()) + ((construction_area != "" && construction_area != null) ? ' ' + construction_area : '') : "";
					} else {
						area = ($.trim($("[name='area']").val()) != "" && $.trim($("[name='area']").val()) != null) ? $.trim($('[name="area"] option:selected').text()) : "";
						size = ($.trim($('[name="size"]').val()) != "" && $.trim($('[name="size"]').val()) != null) ? 'Size ' + $.trim($('[name="size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
					}
					console.log("construction_size = " + construction_size);
					console.log("size = " + size);

					var city = ($.trim($('[name="city_id"]').val()) != "" && $.trim($('[name="city_id"]').val()) != null) ? $.trim($('[name="city_id"] option:selected').text()) : "";
					var state = ($.trim($('[name="state_id"]').val()) != "" && $.trim($('[name="state_id"]').val()) != null) ? $.trim($('[name="state_id"] option:selected').text()) : "";

					var pre_lease = "";
					if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '4' || $('[name="property_type"]').val() == '5') {
						var pre_lease_value = ($.trim($('[name="pre_lease"]').val()) != "" && $.trim($('[name="pre_lease"]').val()) != null) ? $.trim($("input[name='pre_lease']:checked").val()) : "";;
						if (pre_lease_value == "yes") {
							pre_lease = " Pre-Leased";
						}
					}

					var house_type = [];

					if ($('[name="property_type"]').val() == '1') {

						$.each($("input[name='house_type[]']:checked"), function(K, V) {
							house_type.push(V.value);
						});
						var house_type = (house_type != null && house_type != '') ? house_type.join(', ') : "";
					}
					var furniture_type_text = "";
					if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '1' || $('[name="property_type"]').val() == '2') {
						if (furniture_type != "" && furniture_type != null && furniture_type != "none") {
							if (furniture_type == "full") {
								furniture_type_text = "Fully Furnished ";
							} else if (furniture_type == "semi") {
								furniture_type_text = "Semi Furnished ";
							}
						}
					}
					var tenure = "";
					if ($('[name="property_type"]').val() == '7') {
						tenure = $.trim($('[name="tenure"]:checked').attr('data-text'));
					}

					var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + 'Property for ' + listing_purpose + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + ' ' + (locality != "" && locality != null ? ' ' + locality : '') + ' ' + type + ' ' + house_type + ' ' + size + ' of ' + project_price;
					var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + (furniture_type_text != "" && furniture_type_text != null ? furniture_type_text : '') + 'Property for ' + listing_purpose + (tenure != "" && tenure != null ? ' ' + tenure : '') + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + (locality != "" && locality != null ? ' ' + locality : '') + (city != "" && city != null ? ' ' + city : '') + (state != "" && state != null ? ' ' + state : '') + (type != "" && type != null ? ' ' + type : '') + (house_type != "" && house_type != null ? ' ' + house_type : '') + (size != "" && size != null ? ' ' + size : '') + (construction_size != "" && construction_size != null ? ' ' + ' and Construction Size ' + construction_size : '') + (project_price != "" && project_price != null ? ' Price of ' + project_price : '');

					$('[name="additional_info"]').val(additional_info);
				}


				$.validator.addMethod("validateUniqueAgentDatabaseMobile", function(value, element) {
					var result = true;
					ajaxResponse = $.ajax({
						type: "POST",
						async: false,
						url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
						dataType: "json",
						data: {
							'agent_mobile': ($.trim($("[name='database_agent_mobile']").val()) != null && $.trim($("[name='database_agent_mobile']").val()) != '') ? $.trim($("[name='database_agent_mobile']").val()) : '',
							'checkUniqueName': 'yes',
							'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
						},
						beforeSend: function() {

						},
						success: function(response) {
							if (response.status_code == 1) {
								return false;
							} else {
								result = false;
								return true;
							}
						}
					});
					return result;
				}, 'Mobile already exist. Please enter another Mobile.');



				function checkDuplicatePropertyDatabase() {

					var result = false;
					var record_id = $.trim($("[name='record_id']").val());
					var agent_mobile = $.trim($("[name='agent_mobile']").val());
					var agent_name = $.trim($("[name='agent_name']").val());
					var customer_mobile = $.trim($("[name=customer_mobile]").val());
					var customer_name = $.trim($("[name='customer_name']").val());
					var listing_purpose = $.trim($("[name='listing_purpose']").val());
					var property_type = $.trim($("[name='property_type']").val());
					var scheme_name = $.trim($("[name='scheme_name']").val());
					var state_id = $.trim($("[name='state_id']").val());
					var city_id = $.trim($("[name='city_id']").val());
					var locality = $.trim($("[name='locality']").val());

					var type = $.trim($("[name='type']").val());

					var size = "";
					var plot_size = "";

					if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
						plot_size = $.trim($("[name='plot_size']").val());
					} else {
						size = $.trim($("[name='size']").val());
					}

					$.ajax({

						type: "POST",
						dataType: "json",
						async: false,
						url: property_database_url + 'checkDuplicatePropertyDatabase',
						data: {
							'record_id': record_id,
							'agent_mobile': agent_mobile,
							'agent_name': agent_name,
							'customer_mobile': customer_mobile,
							'customer_name': customer_name,
							'listing_purpose': listing_purpose,
							'property_type': property_type,
							'scheme_name': scheme_name,
							'state_id': state_id,
							'city_id': city_id,
							'locality': locality,
							'type': type,
							'size': size,
							'plot_size': plot_size,
						},
						beforeSend: function() {

						},
						success: function(response) {

							if (response.status_code == 1) {
								$(".duplicate-database-entry-div").show();
							} else {
								$(".duplicate-database-entry-div").hide();
							}

						},
						error: function() {

						}
					});

					return result;
				}
			</script>



			<!DOCTYPE html>
			<html lang="en">

			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<meta name="description" content="-" />
				<meta name="theme-color" content="#1a388a">
				<title>Post Your Requirement - One Stop Property Admin Panel</title>

				<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.min.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/alertify.bs.min.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap.min.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/fontawesome/css/all.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/bootstrap-datetimepicker.min.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/select2-bootstrap4.min.css">
				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/main.css?v=2.01">

				<link rel="stylesheet" href="https://www.propertyincity.com/demo/assets/css/dashboard.css?v=2.01">
				<link rel="icon" href="https://www.propertyincity.com/demo/assets/images/icon.png">

				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery-3.3.1.min.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap.bundle.min.js"></script>

				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/moment.min.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/bootstrap-datetimepicker.min.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/jquery.validate.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/validator-additional-methods.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/alertifyjs/alertify.min.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/select2.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/vendor/scrollbar/scrollBar.js"></script>

				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/messages.js"></script>
				<script type="text/javascript" src="https://www.propertyincity.com/demo/assets/js/common.js?v=2.01"></script>
				<script>
					var site_url = 'https://www.propertyincity.com/demo/';
				</script>
				<script>
					$(document).ready(function() {
						$(".scrollContainer").scrollBox();
						$('[data-toggle="collapse"]').each(function() {
							var target = $(this).attr('href');
							$(target).on('hidden.bs.collapse', function() {
								$(window).trigger("resize.scrollBox");
							});
							$(target).on('shown.bs.collapse', function() {
								$(window).trigger("resize.scrollBox");
							});
						});
					});
				</script>
			</head>

			<body class="akula-theme-2 sky">
				<div id="wrapper" class="wrapper">
					<header class="d-print-none">
						<nav class="navbar navbar-dark border-bottom-0">
							<button class="navbar-toggler mr-3 ripple" type="button" accesskey="m">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-brand mr-auto d-none d-md-block" href="https://www.propertyincity.com/demo/dashboard/"> <span>Admin Panel</span></a>
							<div class="notification-part">
								<div class="custom-notification-design justify-content-center ">
									<div class="navbar_right">
										<div class="notifications">
											<div class="icon_wrap">
												<a href="javascript:void(0);">
													<i class="far text-white fa-bell"></i>
													<div class="overlay-notification-count">
														<span>91</span>
													</div>
												</a>
											</div>
											<div class="notification_dd p-3">
												<div class="py-2 overlay-mark-as-read shadow-sm bg-theme border-bottom">
													<div class="d-flex justify-content-between align-items-center px-3 notification-heading">
														<span class="text-white font-weight-bold">Notification</span>
														<a href="https://www.propertyincity.com/demo/dashboard/markAllAsRead" class="text-white font-weight-bold">Mark All As Read</a>
													</div>
												</div>
												<div class="overlay-fixed-part pt-4 mt-4">
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//129/11124">You have received a new requirement for Villa / Bungalows - Sell From Forntend Test. Please review and do the needful.</a></p>
															<small class="d-block text-muted">02-01-2024 04:43:07 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11120">You have a new registration of forntEnd test.</a></p>
															<small class="d-block text-muted">02-01-2024 04:38:23 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//199/11118">You have a new signup of forntEnd test.</a></p>
															<small class="d-block text-muted">02-01-2024 04:37:50 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//126/10682">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
															<small class="d-block text-muted">02-11-2023 02:15:16 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//125/10534">You have received a new requirement for Flat / Apartment - Buy From Riyank Shah. Please review and do the needful.</a></p>
															<small class="d-block text-muted">02-11-2023 02:13:29 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//346/10386">You have received a new project enquiry for Warehouse/godown For Sale In Navrangpura, Ahmedabad ( Villa / Bungalows - Sell ) .</a></p>
															<small class="d-block text-muted">01-11-2023 04:49:30 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//345/10382">You have received a new project enquiry for Riyank Register ( Villa / Bungalows - Sell ) .</a></p>
															<small class="d-block text-muted">01-11-2023 04:48:55 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//344/10378">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
															<small class="d-block text-muted">01-11-2023 12:32:32 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color color-opacity" href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//123/10230">You have received a new requirement for Flat / Apartment - Sell From Riyank Shah. Please review and do the needful.</a></p>
															<small class="d-block text-muted">01-11-2023 11:23:46 AM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10085">740</a></p>
															<small class="d-block text-muted">31-10-2023 06:32:59 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//343/10081">You have received a new project enquiry for Added By Reg Agent For Reg Enquiry ( Flat / Apartment - Sell ) .</a></p>
															<small class="d-block text-muted">31-10-2023 06:29:11 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//342/10078">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
															<small class="d-block text-muted">31-10-2023 06:27:23 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//341/10075">You have received a new hot project enquiry for Unreg Agent Ae Advertisement Add Kri ( Flat / Apartment ) .</a></p>
															<small class="d-block text-muted">31-10-2023 06:24:27 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9930">716</a></p>
															<small class="d-block text-muted">31-10-2023 06:19:27 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//338/9927">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
															<small class="d-block text-muted">31-10-2023 06:17:15 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//337/9924">You have received a new hot project enquiry for Register Agent Na Naam Ae Admin Ae Advertisment Add Kri ( Villa / Bungalows ) .</a></p>
															<small class="d-block text-muted">31-10-2023 06:13:16 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//336/9633">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
															<small class="d-block text-muted">31-10-2023 12:58:28 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//335/9630">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
															<small class="d-block text-muted">31-10-2023 12:42:32 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//334/9627">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
															<small class="d-block text-muted">31-10-2023 12:35:12 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9626">test 23</a></p>
															<small class="d-block text-muted">31-10-2023 11:00:57 AM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9625">done</a></p>
															<small class="d-block text-muted">31-10-2023 10:41:30 AM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//333/9622">You have received a new hot project enquiry for Test For Count 3 ( Flat / Apartment ) .</a></p>
															<small class="d-block text-muted">31-10-2023 10:40:54 AM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//332/9333">https://prnt.sc/zKA7bRJgO19C</a></p>
															<small class="d-block text-muted">30-10-2023 01:33:20 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//331/9044">ok</a></p>
															<small class="d-block text-muted">27-10-2023 05:41:46 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8899">asd</a></p>
															<small class="d-block text-muted">27-10-2023 05:30:54 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//330/8898">Reg. Agent Enquiry (Open Enquiry Report): 05 (show total)</a></p>
															<small class="d-block text-muted">27-10-2023 04:21:22 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//328/8174">You have received a new property enquiry for Project V1 ( Flat / Apartment - Sell ) .</a></p>
															<small class="d-block text-muted">07-08-2023 01:46:12 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//321/8170">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
															<small class="d-block text-muted">04-08-2023 08:16:38 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//320/8167">You have received a new property enquiry for Unreg Agent Ni Property Ma Enquiry Nakhi ( Flat / Apartment - Sell ) .</a></p>
															<small class="d-block text-muted">04-08-2023 08:15:23 PM</small>
														</div>
													</div>
													<div class="media mb-2 border-bottom pb-2">
														<img src="https://www.propertyincity.com/demo/assets/images/nortification_user.png" class="mr-3 notification-icons shadow-sm" alt="...">
														<div class="media-body">
															<p class="notifications-content mb-0"><a class="links-color " href="https://www.propertyincity.com/demo/dashboard/redirectModuleUrl//319/8163">You have received a new property enquiry for Check In Static Page ( Office - Sell ) .</a></p>
															<small class="d-block text-muted">04-08-2023 06:59:44 PM</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown">
								<a class="dropdown-toggle d-inline-block" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="https://www.propertyincity.com/demo/assets/images//defaultuser.svg" alt srcset class="img-fluid img-user d-none d-sm-inline-block align-middle mr-2">
									<span id="username" class="d-inline-block align-middle">OSP Admin</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/change_password">Change Password</a>
									<a class="dropdown-item" href="https://www.propertyincity.com/demo/dashboard/adminLogout">Logout</a>
								</div>
							</div>
						</nav>
						<div class="sidebar  " id="sidebar">
							<ul class="sidebar-nav scrollContainer">
								<a class href="https://www.propertyincity.com/demo/dashboard/">
									<li class="p-3 border-bottom d-flex align-items-center justify-content-center nav-users mb-3 bg-white sit-logo-admin">
										<img src="https://www.propertyincity.com/demo/assets/images/logo.png" alt srcset class="img-fluid w-75 ">
									</li>
								</a>
								<li class="first-item border-effect" data-toggle="tooltip">
									<a data-toggle="tooltip" data-placement="left" title="Dashboard" href="https://www.propertyincity.com/demo/dashboard/" class="nav-link text-dark d-block px-3 py-2" title="Dashboard">
										<i class="fa fa-tachometer-alt fa-fw"></i>
										<span class="nav-text">Dashboard</span>
									</a>
								</li>
								<li class="first-item border-effect" data-toggle="tooltip">
									<a data-toggle="tooltip" data-placement="left" title="Version History" href="https://www.propertyincity.com/demo/version_history/" class="nav-link text-dark d-block px-3 py-2" title="Version History">
										<i class="fa fa-tachometer-alt fa-fw"></i>
										<span class="nav-text">Version History</span>
									</a>
								</li>
								<li class="border-effect">
									<a href="#manageLocationMenu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Locations">
										<i class="fa fa-map-marked-alt fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Manage Locations</span>
									</a>
									<div class="collapse navbar-collapse" id="manageLocationMenu">
										<ul class="nav navbar-nav">
											<li class="show-collapse">
												<a href="https://www.propertyincity.com/demo/city/" class="text-dark nav-link d-block px-3 py-2" title="Manage City">
													<i class="fa fa-map fa-fw" aria-hidden="true"></i>
													<span class="nav-text">City</span>
												</a>
											</li>
											<li class="show-collapse">
												<a href="https://www.propertyincity.com/demo/locality/" class="text-dark nav-link d-block px-3 py-2" title="Manage Locality">
													<i class="fa fa-map-marker-alt fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Locality</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#managePropertyMenu" data-toggle="collapse" aria-expanded="true" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Attribute">
										<i class="fa fa-tags fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Manage Attribute</span>
									</a>
									<div class="collapse navbar-collapse" id="managePropertyMenu">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/landzone/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Landzone">
													<i class="fa fa-layer-group fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Landzone</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/facility/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Facility">
													<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Facility</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/property_area/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Area">
													<i class="fa fa-drafting-compass fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Property Area</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/property_type/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Property Type">
													<i class="fa fa-building fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Property Type</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/property_plan/" class="nav-link text-dark d-block px-3 py-2" title="Manage Plans">
													<i class="fa fa-hand-holding-usd fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Manage Plans</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/specification/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Specification">
													<i class="fa fa-swimmer fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Specification</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/sizes_master/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sizes">
													<i class="fa-fw fa fas fa-chart-area" aria-hidden="true"></i>
													<span class="nav-text">Sizes</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#manageWebsite" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Website">
										<i class="fa fa-globe-asia fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Manage Website</span>
									</a>
									<div class="collapse navbar-collapse" id="manageWebsite">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/slider/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Sliders">
													<i class="fa fa-images fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Sliders</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/advertisement/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Advertisement">
													<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Advertisement</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/unregister_advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Manage Unregister Advertisement">
													<i class="fa fa-ad fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Unregister Advertisement</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/property_of_the_month/" class="text-dark d-block px-3 py-2 nav-link" title="Property Of The Month">
													<i class="fa fa-city fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Property Of The Month</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/builder/" class="text-dark d-block px-3 py-2 nav-link" title="Builders">
													<i class="fa fa-user-shield fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Builders</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/careers/" class="text-dark d-block px-3 py-2 nav-link" title="Careers">
													<i class="fa fa-user-tie fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Careers</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/advisor/" class="text-dark d-block px-3 py-2 nav-link" title="Advisor">
													<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Advisor</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/faq/" class="text-dark d-block px-3 py-2 nav-link" title="FAQ">
													<i class="fa fa-question-circle fa-fw" aria-hidden="true"></i>
													<span class="nav-text">FAQ</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/brochure_upload_master/" class="text-dark d-block px-3 py-2 nav-link" title="Brochure Upload">
													<i class="fa fa-upload fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Brochure Upload</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#user_management" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="User Management">
										<i class="fa fa-users fa-fw" aria-hidden="true"></i>
										<span class="nav-text">User Management</span>
									</a>
									<div class="collapse navbar-collapse" id="user_management">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/designation/" class="text-dark d-block px-3 py-2 nav-link" title="Manage Designation">
													<i class="fa fa-building fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Designation</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/user/" class="text-dark d-block px-3 py-2 nav-link" title="User">
													<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
													<span class="nav-text">User</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#manageAgents" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Agents">
										<i class="fa fa-users fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Manage Agents</span>
									</a>
									<div class="collapse navbar-collapse" id="manageAgents">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Registered Agents">
													<i class="fa fa-users fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Registered Agents</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/unregistered_agent/agent_list" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Agents">
													<i class="fa fa-users fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Unregistered Agents</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/agent_database/" class="nav-link text-dark d-block px-3 py-2" title="Agent Database">
													<i class="fa fa-users fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Agent Database</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/signup_report/" class="nav-link text-dark d-block px-3 py-2" title="Signup Report">
													<i class="fa fa-users fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Signup Report</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#manageProperty" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Properties">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Manage Properties</span>
									</a>
									<div class="collapse navbar-collapse" id="manageProperty">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/property/" class="nav-link text-dark d-block px-3 py-2" title="Registered Property">
													<i class="fa fa-city fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Registered Property</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/unregister_property" class="nav-link text-dark d-block px-3 py-2" title="Unregistered Property">
													<i class="fa fa-city fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Unregistered Property</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/new_project/" class="nav-link text-dark d-block px-3 py-2" title="Manage New Project">
													<i class="fa fa-city fa-fw" aria-hidden="true"></i>
													<span class="nav-text">New Project</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/unregister_new_project" class="nav-link text-dark d-block px-3 py-2" title="Unregister New Project">
													<i class="fa fa-city fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Unregister New Project</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/property_template/" class="nav-link text-dark d-block px-3 py-2" title="Properties Template">
													<i class="fa fa-city fa-fw" aria-hidden="true"></i>
													<span class="nav-text">Properties Template</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/property_database/" class="nav-link text-dark d-block px-3 py-2" title="Property Database">
										<i class="fa fa-city fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Property Database</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/requirement/" class="text-dark d-block px-3 py-2 nav-link" title="Requirements">
										<i class="fa fa-user-check fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Requirements</span>
									</a>
								</li>
								<li class="border-effect">
									<a href="#comparison-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Comparison">
										<i class="fa fas fa-chart-bar fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Comparison</span>
									</a>
									<div class="collapse navbar-collapse" id="comparison-report">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/comparison_master/flat-apartment" class="text-dark d-block px-3 py-2 nav-link" title="Flat/Apartment Comparison">
													<i class="fas fa-chart-bar fa-fw"></i>
													<span class="nav-text">Flat/Apartment Comparison</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/comparison_master/office" class="text-dark d-block px-3 py-2 nav-link" title="Office Comparison">
													<i class="fas fa-chart-bar fa-fw"></i>
													<span class="nav-text">Office Comparison</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/comparison_master/plot" class="text-dark d-block px-3 py-2 nav-link" title="Plot Comparison">
													<i class="fas fa-chart-bar fa-fw"></i>
													<span class="nav-text">Plot Comparison</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/enquiry_list/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
										<i class="fas fa-phone-alt fa fa-fw"></i>
										<span class="nav-text">Enquiry Received</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/enquiry_report/" class="text-dark d-block px-3 py-2 nav-link" title="Enquiry Received">
										<i class="fas fa-phone-alt fa fa-fw"></i>
										<span class="nav-text">Enquiry Report</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/project_price/" class="text-dark d-block px-3 py-2 nav-link" title="Project Price">
										<i class="fas fa-rupee-sign fa fa-fw"></i>
										<span class="nav-text">Project Price</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/static_page/" class="text-dark d-block px-3 py-2 nav-link" title="Static Page">
										<i class="far fa-file-alt fa fa-fw"></i>
										<span class="nav-text">Static Page</span>
									</a>
								</li>
								<li>
									<a href="https://www.propertyincity.com/demo/static_page/managestaticpage" class="text-dark d-block px-3 py-2 nav-link" title="Manage Static Page">
										<i class="far fa-file-alt fa fa-fw"></i>
										<span class="nav-text">Manage Static Page</span>
									</a>
								</li>
								<li class="border-effect">
									<a href="#sms" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage SMS">
										<i class="fas fa-location-arrow fa-fw mr-2" aria-hidden="true"></i>
										<span class="nav-text">Manage SMS</span>
									</a>
									<div class="collapse navbar-collapse" id="sms">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/sms/" class="text-dark d-block px-3 py-2 nav-link" title="SMS Templates">
													<i class="far fa-comment-alt mr-2"></i>
													<span class="nav-text">SMS Templates</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/sms/sendSms" class="text-dark d-block px-3 py-2 nav-link" title="Send SMS">
													<i class="fas fa-paper-plane mr-2"></i>
													<span class="nav-text">Send SMS</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/sms/smsHistory" class="text-dark d-block px-3 py-2 nav-link" title="SMS History">
													<i class="far fa-paper-plane mr-2"></i>
													<span class="nav-text">SMS History</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#email-main" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Email">
										<i class="fas fa-envelope fa-fw mr-2" aria-hidden="true"></i>
										<span class="nav-text">Manage Email</span>
									</a>
									<div class="collapse navbar-collapse" id="email-main">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/email/" class="text-dark d-block px-3 py-2 nav-link" title="Email Templates">
													<i class="fas fa-envelope mr-2"></i>
													<span class="nav-text">Email Templates</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/email/sendEmail/" class="text-dark d-block px-3 py-2 nav-link" title="Send Emails">
													<i class="fas fa-paper-plane mr-2"></i>
													<span class="nav-text">Send Emails</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/email/emailHistory" class="text-dark d-block px-3 py-2 nav-link" title="Email History">
													<i class="far fa-paper-plane mr-2"></i>
													<span class="nav-text">Email History</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#manage-report" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Manage Report">
										<i class="fas fa-file-pdf fa-fw mr-2" aria-hidden="true"></i>
										<span class="nav-text">Manage Report</span>
									</a>
									<div class="collapse navbar-collapse" id="manage-report">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/report/property_report" class="text-dark d-block px-3 py-2 nav-link" title="Property Report">
													<i class="fas fa-file-pdf fa-fw mr-2"></i>
													<span class="nav-text">Property Report</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="border-effect">
									<a href="#multi-delete-menu" data-toggle="collapse" class="nav-link text-dark d-block px-3 py-2 collapsed" title="Multi Delete">
										<i class="fas fa-trash-alt fa-fw mr-2" aria-hidden="true"></i>
										<span class="nav-text">Multi Delete</span>
									</a>
									<div class="collapse navbar-collapse" id="multi-delete-menu">
										<ul class="nav navbar-nav">
											<li>
												<a href="https://www.propertyincity.com/demo/multi_delete/property" class="text-dark d-block px-3 py-2 nav-link" title="Property">
													<i class="fas fa-building fa-fw mr-2"></i>
													<span class="nav-text">Property</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/multi_delete/new_project" class="text-dark d-block px-3 py-2 nav-link" title="New Project">
													<i class="fas fa-building fa-fw mr-2"></i>
													<span class="nav-text">New Project</span>
												</a>
											</li>
											<li>
												<a href="https://www.propertyincity.com/demo/multi_delete/advertisement" class="text-dark d-block px-3 py-2 nav-link" title="Advertisement">
													<i class="fas fa-ad fa-fw mr-2"></i>
													<span class="nav-text">Advertisement</span>
												</a>
											</li>
										</ul>
									</div>
								</li>

								<li>
									<a href="https://www.propertyincity.com/demo/settings/" class="text-dark d-block px-3 py-2 nav-link" title="Settings">
										<i class="fa fa-cog fa-fw" aria-hidden="true"></i>
										<span class="nav-text">Settings</span>
									</a>
								</li>
								<li class="visit-site">
									<a href="https://www.propertyincity.com/demo/" target="_blank" class="nav-link text-dark d-block px-3 py-2" title="Visit Site">
										<i class="fa fa-external-link-alt fa-fw"></i>
										<span class="nav-text">Visit Site</span>
									</a>
								</li>
							</ul>
							<footer class="fixed-footer border-top p-3 bg-light">
								<p class="text-center small mb-0">&copy; 2024 <span class="text-theme">One Stop Property</span>
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
						<div class="breadcrumb-wrapper d-lg-flex p-3 border-bottom">
							<h1 class="h3 mb-lg-0 mr-3" id="pageTitle">Post Your Requirement</h1>
							<nav aria-label="breadcrumb" class="d-flex mr-3">
								<ol class="breadcrumb bg-transparent p-0 mb-0 align-self-end">
									<li class="breadcrumb-item"><a href="https://www.propertyincity.com/demo/requirement/">All Requirements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Post Your Requirement</li>
								</ol>
							</nav>
						</div>
						<div class="container-fluid pt-3">
							<div class="card card-body mb-3 shadow-sm">
								<form action="https://www.propertyincity.com/demo/requirement/createPostRequirement" id="postForm" method="post" accept-charset="utf-8">
									<input type="hidden" name="record_id" value>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="user_name">Name<span class="text-danger line-height">*</span>:</label>
												<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" autofocus value="One Stop Property">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="mobile">Mobile<span class="text-danger line-height">*</span>:</label>
												<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" onkeyup="onlyNumber(this);" maxlength="10" minlength="10" autofocus value="8758291548">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="email">Email:</label>
												<input type="text" class="form-control" id="email" name="email" placeholder="Email" autofocus value="info@onestopproperty.in">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="source_of_enquiry">Source Of Enquiry<span class="text-danger line-height">*</span>:</label>
												<select class="form-control" id="source_of_enquiry" name="source_of_enquiry">
													<option value>Select</option>
													<option value="website">OSP Website</option>
													<option value="google">Google</option>
													<option value="newspaper">Newspaper</option>
													<option value="walk-in">Walk-in</option>
													<option value="reference">Reference</option>
													<option value="online_portal">Online Portal</option>
													<option value="other">Other</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="state_id">City:</label>
												<select class="form-control" id="city_id" name="city_id">
													<option value>Select</option>
													<option value="1">Ahmedabad</option>
													<option value="47">Ahmedabad Tester</option>
													<option value="20">AMRELI</option>
													<option value="8">Anand</option>
													<option value="21">Aravalli</option>
													<option value="22">Banaskantha</option>
													<option value="14">Bharuch</option>
													<option value="5">Bhavnagar</option>
													<option value="23">Botad</option>
													<option value="24">Chhota Udaipur</option>
													<option value="25">Dahod</option>
													<option value="26">Dang</option>
													<option value="44">Delete For Second Test1</option>
													<option value="27">Dwarka</option>
													<option value="12">Gandhidham</option>
													<option value="16">Ghandhinagar</option>
													<option value="28">Gir Somnath</option>
													<option value="6">Jamnagar</option>
													<option value="17">Jetpur</option>
													<option value="7">Junagadh</option>
													<option value="30">Kheda</option>
													<option value="38">Khedbrahma</option>
													<option value="29">Kutch</option>
													<option value="31">Mahisagar</option>
													<option value="18">Mehsana</option>
													<option value="11">Morbi</option>
													<option value="13">Nadiad</option>
													<option value="32">Narmada</option>
													<option value="9">Navsari</option>
													<option value="19">Palanpur</option>
													<option value="33">Panchmahal</option>
													<option value="34">Patan</option>
													<option value="15">Porbandar</option>
													<option value="4">Rajkot</option>
													<option value="48">Rajkot T</option>
													<option value="35">Sabarkantha</option>
													<option value="2">Surat</option>
													<option value="36">Tapi</option>
													<option value="3">Vadodara</option>
													<option value="37">Valsad</option>
													<option value="46">VISNAGAR</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label" for="location">Location:</label>
												<input type="text" class="form-control" id="location" name="location" value placeholder="Location" autofocus>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label font-weight-bold" for="facility_type">Requirement<span class="text-danger line-height">*</span>:</label>
												<div class="facility-icon-list">
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input requirement-value" id="requirement_buy" name="requirement[]" value="buy">
														<label class="custom-control-label" for="requirement_buy">Buy</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input  requirement-value" id="requirement_sell" name="requirement[]" value="sell">
														<label class="custom-control-label" for="requirement_sell">Sell</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input requirement-value" id="requirement_rent" name="requirement[]" value="rent">
														<label class="custom-control-label" for="requirement_rent">Rent</label>
													</div>
												</div>
												<label id="requirement[]-error" class="invalid-input" for="requirement[]" style="display: none;"></label>
												<div class=" property-for-rent-div mt-md-4 mt-2" style="display: none">
													<div class="form-group">
														<div class="pt-2">
															<div class="custom-control custom-radio custom-control-inline d-block mb-1">
																<input type="radio" id="give_property_on_rent" name="rent_purpose" value="give_property_on_rent" class="custom-control-input">
																<label class="custom-control-label" for="give_property_on_rent">I want to give Property on Rent</label>
															</div>
														</div>
														<div class="pt-1">
															<div class="custom-control custom-radio custom-control-inline d-block mb-1">
																<input type="radio" id="looking_property_on_rent" name="rent_purpose" value="looking_property_on_rent" class="custom-control-input">
																<label class="custom-control-label" for="looking_property_on_rent">I am looking for Property on Rent</label>
															</div>
														</div>
														<label id="rent_purpose-error" class="invalid-input" for="rent_purpose" style="display: none;"></label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label font-weight-bold" for="gender">Property Type<span class="text-danger line-height">*</span>:</label>
												<div class="pt-2">
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_1" name="property_type" value="1" class="custom-control-input">
														<label class="custom-control-label" for="property_type_1">Flat / Apartment</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_2" name="property_type" value="2" class="custom-control-input">
														<label class="custom-control-label" for="property_type_2">Villa / Bungalows</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_3" name="property_type" value="3" class="custom-control-input">
														<label class="custom-control-label" for="property_type_3">Office</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_4" name="property_type" value="4" class="custom-control-input">
														<label class="custom-control-label" for="property_type_4">Shop / Showroom</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_5" name="property_type" value="5" class="custom-control-input">
														<label class="custom-control-label" for="property_type_5">Warehouse / Godowns</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_6" name="property_type" value="6" class="custom-control-input">
														<label class="custom-control-label" for="property_type_6">Plot</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline d-block mb-2">
														<input type="radio" id="property_type_7" name="property_type" value="7" class="custom-control-input">
														<label class="custom-control-label" for="property_type_7">Land</label>
													</div>
												</div>
												<label id="property_type-error" class="invalid-input" for="property_type" style="display: none;"></label>
											</div>
										</div>
										<div class="col-md-4 no-bedroom-div" style="display: none;">
											<div class="form-group">
												<label for class="control-label small font-weight-bold">No. of Bedrooms:</label>
												<div class="block">
													<div class="custom-control custom-checkbox custom-control-inline mb-1">
														<input type="checkbox" class="custom-control-input" name="bedroom_size[]" id="bed_count_1" value="1">
														<label class="custom-control-label" for="bed_count_1">1 BHK</label>
													</div>
													<div class="custom-control custom-checkbox custom-control-inline mb-1">
														<input type="checkbox" class="custom-control-input" name="bedroom_size[]" id="bed_count_2" value="2">
														<label class="custom-control-label" for="bed_count_2">2 BHK</label>
													</div>
													<div class="custom-control custom-checkbox custom-control-inline mb-1">
														<input type="checkbox" class="custom-control-input" name="bedroom_size[]" id="bed_count_3" value="3">
														<label class="custom-control-label" for="bed_count_3">3 BHK</label>
													</div>
													<div class="custom-control custom-checkbox custom-control-inline mb-1">
														<input type="checkbox" class="custom-control-input" name="bedroom_size[]" id="bed_count_4" value="4">
														<label class="custom-control-label" for="bed_count_4">4 BHK</label>
													</div>
													<div class="custom-control custom-checkbox custom-control-inline mb-1">
														<input type="checkbox" class="custom-control-input" name="bedroom_size[]" id="bed_count_5" value="5">
														<label class="custom-control-label" for="bed_count_5">5 BHK</label>
													</div>
													<div class="custom-control custom-checkbox custom-control-inline mb-1">
														<input type="checkbox" class="custom-control-input" name="bedroom_size[]" id="bed_count_5p" value="6">
														<label class="custom-control-label" for="bed_count_5p">5+ BHK</label>
													</div>
												</div>
											</div>
											<div class="mt-3 requirement-house-type-master-div" style="display: none;">
												<label class="control-label">House Type:</label>
												<div class="form-group d-flex align-items-center flex-wrap">
													<div class="pt-2">
														<div class="custom-control custom-checkbox custom-control-inline d-block mb-1">
															<input type="checkbox" id="house_type_PentHouse" name="house_type[]" value="PentHouse" class="custom-control-input">
															<label class="custom-control-label" for="house_type_PentHouse">Penthouse</label>
														</div>
													</div>
													<div class="pt-2">
														<div class="custom-control custom-checkbox custom-control-inline d-block mb-1">
															<input type="checkbox" id="house_type_Duplex" name="house_type[]" value="Duplex" class="custom-control-input">
															<label class="custom-control-label" for="house_type_Duplex">Duplex</label>
														</div>
													</div>
													<div class="pt-2">
														<div class="custom-control custom-checkbox custom-control-inline d-block mb-1">
															<input type="checkbox" id="house_type_Triplex" name="house_type[]" value="Triplex" class="custom-control-input">
															<label class="custom-control-label" for="house_type_Triplex">Triplex</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-4 size-div" style="display: none;">
													<div class="form-group">
														<label class="control-label font-weight-bold" for="size">Size:</label>
														<input type="text" class="form-control" id="size" name="size" value placeholder="eg. 700" autofocus>
													</div>
												</div>
												<div class="col-md-4 area-div" style="display: none;">
													<div class="form-group">
														<label class="control-label" for="area">Area:</label>
														<select class="form-control" id="area" name="area">
															<option value>Select</option>
															<option value="1">Sq. Ft.</option>
															<option value="3">Acre</option>
															<option value="4">Sq. Mtr.</option>
															<option value="6">Ft</option>
															<option value="7">Bigha</option>
															<option value="9">VAR</option>
														</select>
													</div>
												</div>
												<div class="col-md-3 plot-size-div" style="display: none;">
													<div class="form-group">
														<label class="control-label font-weight-bold" for="plot_size">Plot Size:</label>
														<input type="text" class="form-control" id="plot_size" name="plot_size" value placeholder="eg. 700" autofocus>
													</div>
												</div>
												<div class="col-md-3 plot-area-div" style="display: none;">
													<div class="form-group">
														<label class="control-label" for="plot_area">Plot Area:</label>
														<select class="form-control" id="plot_area" name="plot_area">
															<option value>Select</option>
															<option value="1">Sq. Ft.</option>
															<option value="3">Acre</option>
															<option value="4">Sq. Mtr.</option>
															<option value="6">Ft</option>
															<option value="7">Bigha</option>
															<option value="9">VAR</option>
														</select>
													</div>
												</div>
												<div class="col-md-3 construction-size-div" style="display: none;">
													<div class="form-group">
														<label class="control-label font-weight-bold" for="construction_size">Construction Size:</label>
														<input type="text" class="form-control" id="construction_size" name="construction_size" value placeholder="eg. 700" autofocus>
													</div>
												</div>
												<div class="col-md-3 construction-area-div" style="display: none;">
													<div class="form-group">
														<label class="control-label" for="construction_area">Construction Area:</label>
														<select class="form-control" id="construction_area" name="construction_area">
															<option value>Select</option>
															<option value="1">Sq. Ft.</option>
															<option value="3">Acre</option>
															<option value="4">Sq. Mtr.</option>
															<option value="6">Ft</option>
															<option value="7">Bigha</option>
															<option value="9">VAR</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label font-weight-bold" for="budget">Budget:</label>
												<input type="text" class="form-control" id="budget" name="budget" onkeyup="formatMoneyBugetRange(this,'expected');" value placeholder="eg. 25,000 - 30,000" autofocus>
											</div>
										</div>
										<div class="col-md-4 baudget-range-value-buy-sell-master-div" style="display: none;">
											<div class="form-group">
												<label class="control-label" for="buy_sell_baudget_range_value">Budget Range:</label>
												<select class="form-control select2" multiple name="buy_sell_baudget_range_value[]">
													<option value="None">None</option>
													<option value="50L - 1CR">50L - 1CR</option>
													<option value="1CR - 2CR">1CR - 2CR</option>
													<option value="2CR - 3CR">2CR - 3CR</option>
													<option value="3CR - 4CR">3CR - 4CR</option>
													<option value="4CR - 4CR+">4CR+</option>
												</select>
											</div>
										</div>
										<div class="col-md-4 baudget-range-rent-value-master-div" style="display: none;">
											<div class="form-group">
												<label class="control-label" for="rent_baudget_range_value">Budget Range:</label>
												<select class="form-control select2" multiple name="rent_baudget_range_value[]">
													<option value="None">None</option>
													<option value="10K-50K">10K - 50K</option>
													<option value="51K-1L">51K - 1L</option>
													<option value="1L-2L">1L - 2L</option>
													<option value="2L-4L">2L - 4L</option>
													<option value="4L+">4L+</option>
												</select>
											</div>
										</div>
										<div class="col-md-4 pre-lease-value-master-div" style="display: none;">
											<div class="form-group">
												<label class="control-label font-weight-bold" for="facility_type">Pre-Lease<span class="text-danger line-height">*</span>:</label>
												<div class="facility-icon-list">
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input pre-lease-value" id="pre_lease_yes" name="pre_lease" value="yes">
														<label class="custom-control-label" for="pre_lease_yes">Yes</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input type="radio" class="custom-control-input  pre-lease-value" id="pre_lease_no" name="pre_lease" value="No">
														<label class="custom-control-label" for="pre_lease_no">No</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<label class="control-label font-weight-bold" for="additional_details">Additional Details:</label>
												<textarea class="form-control" name="additional_details" id="additional_details" cols="30" rows="3" placeholder="Additional Details"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn bg-success text-white btn-wide">Submit</button>
											<a href="https://www.propertyincity.com/demo/requirement/" class="btn btn-outline-secondary btn-wide">Cancel</a>
										</div>
									</div>
								</form>
							</div>
						</div>
						<script>
							var firstSegment = 'requirement';
							var property_type = $.trim($("[name='property_type']").val());

							$("#postForm").validate({
								errorClass: "invalid-input",
								rules: {
									user_name: {
										required: function() {
											return ((firstSegment != '') && (firstSegment != 'agent_requirement'))
										},
										noSpace: true
									},
									mobile: {
										required: function() {
											return ((firstSegment != '') && (firstSegment != 'agent_requirement'))
										},
										mobile_regex: /^[6789]\d{9}$/
									},
									email: {
										email_regex: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b$/i
									},
									'requirement[]': {
										required: true
									},
									property_type: {
										required: true
									},
									//budget : { maxlength : 12 },
									rent_purpose: {
										required: function() {
											return ($('#requirement_rent').prop('checked') == true);
										}
									},
									source_of_enquiry: {
										required: true
									},
									'buy_sell_baudget_range_value[]': {
										required: false,
										noSpace: true

									},
									'rent_baudget_range_value[]': {
										required: false,
										noSpace: true
									},
									pre_lease: {
										required: (property_type == '4' || property_type == '5' || property_type == '3') ? false : true,
									}

								},
								messages: {
									user_name: {
										required: 'Please Enter ' + $('[name="user_name"]').attr('placeholder') + '.'
									},
									mobile: {
										required: 'Please Enter ' + $('[name="mobile"]').attr('placeholder') + '.'
									},
									'requirement[]': {
										required: "Please Select Requirement."
									},
									property_type: {
										required: "Please select Property Type.."
									},
									//budget : { maxlength : 'Please Do Not Enter More Than 12 Digit.' },
									rent_purpose: {
										required: "Please Select Rent Purpose"
									},
									source_of_enquiry: {
										required: "Please Select Source Of Enquiry"
									},
									'buy_sell_baudget_range_value[]': {
										required: 'Please Select Budget Range.'
									},
									'rent_baudget_range_value[]': {
										required: 'Please Select Budget Range.'
									},
									pre_lease: {
										required: 'Please Select Pre-Lease'
									}
								},
								submitHandler: function(form) {
									showLoader()
									form.submit();
								}
							});

							$('[name="budget"]').on('keyup', function() {
								var value = $(this).val().trim().split(',').join('');;
								if (parseFloat(value) > 0.00) {
									$('.budget-in-word').html(amtInWords(value));
								} else {
									$('.budget-in-word').html('');
								}
							});

							$('.requirement-value').on('click', function() {

								if ($('#requirement_rent').prop('checked') == true) {
									$('.property-for-rent-div').show();
									$('.baudget-range-rent-value-master-div').show();
								} else {
									$('.property-for-rent-div').hide();
									$('.baudget-range-rent-value-master-div').hide();
								}

								if (($('#requirement_buy').prop('checked') == true) || ($('#requirement_sell').prop('checked') == true)) {
									$('.baudget-range-value-buy-sell-master-div').show();
								} else {
									$('.baudget-range-value-buy-sell-master-div').hide();
								}


							});

							$('[name="property_type"]').on('click', function() {

								if ($(this).val() == '1') {

									$('.no-bedroom-div').show();
									$('.size-div').show();
									$('.area-div').show();

									$('.plot-size-div').hide();
									$('.plot-area-div').hide();
									$('.construction-size-div').hide();
									$('.construction-area-div').hide();
									$('.pre-lease-value-master-div').hide();
									$('.requirement-house-type-master-div').show();

								} else if ($(this).val() == '2') {

									$('.no-bedroom-div').show();
									$('.plot-size-div').show();
									$('.plot-area-div').show();
									$('.construction-size-div').show();
									$('.construction-area-div').show();

									$('.size-div').hide();
									$('.area-div').hide();
									$('.pre-lease-value-master-div').hide();
									$('.requirement-house-type-master-div').hide();

								} else if ($(this).val() == '5') {

									$('.construction-size-div').show();
									$('.construction-area-div').show();
									$('.plot-size-div').show();
									$('.plot-area-div').show();
									$('.pre-lease-value-master-div').show();

									$('.no-bedroom-div').hide();
									$('.size-div').hide();
									$('.area-div').hide();
									$('.requirement-house-type-master-div').hide();

								} else if ($(this).val() == '3') {

									$('.plot-size-div').hide();
									$('.plot-area-div').hide();
									$('.no-bedroom-div').hide();
									$('.construction-size-div').hide();
									$('.construction-area-div').hide();

									$('.size-div').show();
									$('.area-div').show();
									$('.pre-lease-value-master-div').show();
									$('.requirement-house-type-master-div').hide();

								} else if ($(this).val() == '4') {

									$('.plot-size-div').hide();
									$('.plot-area-div').hide();
									$('.no-bedroom-div').hide();
									$('.construction-size-div').hide();
									$('.construction-area-div').hide();

									$('.size-div').show();
									$('.area-div').show();
									$('.pre-lease-value-master-div').show();
									$('.requirement-house-type-master-div').hide();

								} else if ($(this).val() == '6') {

									$('.plot-size-div').hide();
									$('.plot-area-div').hide();
									$('.no-bedroom-div').hide();
									$('.construction-size-div').hide();
									$('.construction-area-div').hide();

									$('.size-div').show();
									$('.area-div').show();
									$('.requirement-house-type-master-div').hide();
									$('.pre-lease-value-master-div').hide();

								} else if ($(this).val() == '7') {

									$('.plot-size-div').hide();
									$('.plot-area-div').hide();
									$('.no-bedroom-div').hide();
									$('.construction-size-div').hide();
									$('.construction-area-div').hide();

									$('.size-div').show();
									$('.area-div').show();
									$('.requirement-house-type-master-div').hide();
									$('.pre-lease-value-master-div').hide();

								} else {

									$('.no-bedroom-div').hide();
									$('.size-div').hide();
									$('.area-div').hide();
									$('.plot-size-div').hide();
									$('.plot-area-div').hide();
									$('.construction-size-div').hide();
									$('.construction-area-div').hide();
									$('.pre-lease-value-master-div').hide();
									$('.requirement-house-type-master-div').hide();
								}
							});
						</script>
					</div>

				</div>



				<div class="modal fade" id="comparison-builder-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add Builder</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<form action="https://www.propertyincity.com/demo/comparison_master/" id="comparison-builder-form" method="post" accept-charset="utf-8">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label" for="comparison_builder_name">Builder Name<span class="text-danger">*</span>:</label> <input type="text" class="form-control" name="comparison_builder_name" placeholder="Builder Name" value>
											</div>
										</div>
										<div class="col-md-12 name-mobile-multi-container">
										</div>
										<input type="hidden" name="contact_details_add_count" value>
									</div>
								</div>
								<div class="modal-footer justify-content-center">
									<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addcomparisonBuilder();" title="Add">Add</button>
									<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<script>
					function showAddBuilderModel(thisitem) {
						var htmlform = '';
						htmlform += '<div class="card">';
						htmlform += '<div class="card-header commn-header-color">';
						htmlform += '    <div class="d-flex align-items-center">';
						htmlform += '<h5 class="mb-0 text-theme font-weight-bold">Contact Details</h5>';
						htmlform += '<button class="btn bg-theme text-white btn-sm ml-auto" onclick="addNewMobileRow();" title="" type="button"><i class="fas fa-plus text-white"></i> </button>';
						htmlform += '    </div>';
						htmlform += '</div>';
						htmlform += '<div class="card-body">';
						htmlform += '    <div class="table-responsive">';
						htmlform += '<table class="table table-sm table-bordered mb-1">';
						htmlform += '<thead>';
						htmlform += '<tr>';
						htmlform += '<th class="w-180">Name</th>';
						htmlform += '<th class="w-180">Mobile</th>';
						htmlform += '<th class="text-center">Actions</th>';
						htmlform += '</tr>';
						htmlform += '</thead>';
						htmlform += '<tbody class="other-mobile-div">';
						htmlform += '<tr class="person-detail-tr other-mobile-row">';
						htmlform += '<td><input type="text" class="form-control secondary-name" value="" placeholder="Name" name="name_1"></td>';
						htmlform += '<td>';
						htmlform += '<div class="d-flex">';
						htmlform += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" value="" placeholder="Mobile" name="mobile_1">';
						htmlform += '</div>';
						htmlform += '<label id="mobile_1-error" class="invalid-input" for="mobile_1" style="display:none"></label>'
						htmlform += '</td>';
						htmlform += '<td class="text-center"><button type="button" onclick="deleteSecondaryInfo(this)" title="Delete" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
						htmlform += '</tr>';
						htmlform += '</tbody>';
						htmlform += '</table>';
						htmlform += '    </div>';
						htmlform += '</div>';
						htmlform += '</div>';

						$('.name-mobile-multi-container').html(htmlform);
						openBootstrapModal('comparison-builder-model')
					}

					var contact_details_add_count = 1;

					function addNewMobileRow(thisitem) {
						contact_details_add_count++;
						var html = "";
						html += '<tr class="person-detail-tr other-mobile-row">';
						html += '<td><input type="text" class="form-control secondary-name" placeholder="Name" name="name_' + contact_details_add_count + '"></td>';
						html += '<td>';
						html += '<div class="d-flex">';
						html += '<input type="text" class="form-control secondary-mobile" maxlength="10" onkeyup="onlyNumber(this);" minlength="10" placeholder="Mobile" name="mobile_' + contact_details_add_count + '">';
						html += '</div>';
						html += '<label id="mobile_' + contact_details_add_count + '-error" class="invalid-input" for="mobile_' + contact_details_add_count + '" style="display:none"></label>'
						html += '</td>';
						html += '<td class="text-center"><button type="button" title="Delete" onclick ="deleteSecondaryInfo(this)" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i> </button></td>';
						html += '</tr>';
						if ($('.other-mobile-div').find('.other-mobile-row').length > 0) {
							$(html).insertAfter($('.other-mobile-div').find('.other-mobile-row:last'));
						} else {
							$('.other-mobile-div').html(html);
						}
						$('.select2').select2();
					}

					function deleteSecondaryInfo(thisitem) {
						alertify.confirm(
							messages["delete_contact_row"],
							messages["delete_row"],
							function() {
								$(thisitem).parents('.other-mobile-row').remove();
							},
							function() {}
						);
					}


					$("#comparison-builder-form").validate({
						errorClass: "invalid-input",
						rules: {
							//comparison_builder_name: { required: true, noSpace : true},
							comparison_builder_name: {
								required: true,
								validateUniqueBuilderName: true,
								noSpace: true
							},


						},
						messages: {
							comparison_builder_name: {
								required: "Please Enter Builder Name"
							},
						},
					});

					$.validator.addMethod("validateUniqueBuilderName", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkUniqueBuilderName',
							dataType: "json",
							data: {
								'comparison_builder_name': $.trim($("[name='comparison_builder_name']").val()),
								'checkUniqueName': 'yes',
								'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, ' Builder Name is Already exists in Another Builder Name. Please try again.');


					function addcomparisonBuilder() {

						if ($("#comparison-builder-form").valid() != true) {
							return false;
						}

						var secondary_name_value = false;
						var secondary_mobile_value = false;
						$('.other-mobile-div tr').each(function() {
							var secondary_name = $.trim($(this).find('.secondary-name').val());
							var secondary_mobile = $.trim($(this).find('.secondary-mobile').val());

							if ((secondary_name != '' && secondary_name != null)) {
								secondary_name_value = true;
								if ((secondary_mobile == '' || secondary_mobile == null) && secondary_mobile_value != true) {
									$(this).find('.secondary-mobile').focus();
									secondary_mobile_value = true;
								}
							}
						});

						if (secondary_name_value != true) {
							$(".secondary-name:first").focus();
							alertifyMessage('error', 'Please Enter Name');
							return false
						}

						if (secondary_mobile_value != false) {
							alertifyMessage('error', 'Please Enter Mobile');
							return false
						}

						$("[name='contact_details_add_count']").val(contact_details_add_count);

						var comparison_builder_name = $.trim($("[name=comparison_builder_name]").val())
						var fromData = new FormData($("#comparison-builder-form")[0]);

						alertify.confirm("Add Builder", 'Are you sure you want to Add Builder ?', function() {
							$.ajax({
								type: 'POST',
								url: 'https://www.propertyincity.com/demo/comparison_master/' + 'addComparisonBuilderInfo',
								data: fromData,
								dataType: 'json',
								processData: false,
								contentType: false,
								beforeSend: function() {
									showLoader();
								},
								success: function(response) {
									hideLoader();

									if (response.status_code == 1) {
										alertifyMessage('success', response.message);
										$(document).find('.builder-list').html(response.data.html);
										$('#comparison-builder-model').modal('hide');
									} else {
										alertifyMessage('error', response.message);
										return false;
									}
								}
							});
						}, function() {});
					}

					$('.modal').on('hidden.bs.modal', function() {
						if ($(this).find('form').length > 0) {
							$(this).find('form').validate().resetForm();
							$(this).find('form .custom-file-label').html('Choose file');
							$(this).find('form').trigger("reset");
							console.log($(this).find('form'));
						}
					});

					$.validator.addMethod("validateAdvertisementProject", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/comparison_master/' + 'checkAdvertisementProjectName',
							dataType: "json",
							data: {
								project_advertisement_name: $.trim($("[name='project_advertisement_name']").val()),
								'checkUniqueName': 'yes',
								record_id: (($.trim($("[name='record_id']").val()) != null) ? $.trim($("[name='record_id']").val()) : ''),
							},
							success: function(response) {

								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, 'Advertisement Project Name is Already exists Please Select another Project Name Please try again');


					function advertismentAutoFillSeoDetails(thisitem) {

						var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
						if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
							$("[name='property_category']").val('Commercial');
						} else {
							$("[name='property_category']").val('Residential');
						}

						var property_type = $("[name='property_type'] option:selected").text();
						if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
							property_type = '';
						}
						switch (property_type) {
							case 'Flat / Apartment':
								property_type = 'Flat-Apartment';
								break;
							case 'Villa / Bungalows':
								property_type = 'Villa-Bungalows';
								break;
							case 'Shop / Showroom':
								property_type = 'Shop-Showroom';
								break;
							case 'Warehouse / Godowns':
								property_type = 'Warehouse-Godowns';
								break;
						}
						var property_category = $.trim($("[name='property_category']").val());
						var city = $.trim($('[name="city_id"] option:selected').text());
						var locality = $.trim($('[name="locality"]').val());
						var project_name = $.trim($('[name="project_name"]').val());
						var project_type = $.trim($('[name="project_type"]:checked').val());
						if (project_type === undefined) {
							project_type = '';
						}
						var state = $.trim($('[name="state_id"] option:selected').text());

						var seo_title = '';
						var title_description = '';
						var title_keyword = '';

						if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

							seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
							title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
							title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

							$('[name="seo_title"]').val('');
							$('[name="seo_keywords"]').val('');
							$('[name="seo_description"]').val('');

							$('[name="seo_title"]').val(seo_title);
							$('[name="seo_keywords"]').val(title_keyword);
							$('[name="seo_description"]').val(title_description);
						}

					}

					function multiPropertyAutoFillDetails(thisitem) {

						var property_type_value = $.trim($("[name='property_type']").find('option:selected').val());
						if ((property_type_value != "" && property_type_value != null) && (property_type_value == 3 || property_type_value == 4 || property_type_value == 5)) {
							$("[name='property_category']").val('Commercial');
						} else {
							$("[name='property_category']").val('Residential');
						}

						var property_type = $("[name='property_type'] option:selected").text();
						if ($("[name='property_type'] option:selected").val() == '' || $("[name='property_type'] option:selected").val() == null) {
							property_type = '';
						}
						switch (property_type) {
							case 'Flat / Apartment':
								property_type = 'Flat-Apartment';
								break;
							case 'Villa / Bungalows':
								property_type = 'Villa-Bungalows';
								break;
							case 'Shop / Showroom':
								property_type = 'Shop-Showroom';
								break;
							case 'Warehouse / Godowns':
								property_type = 'Warehouse-Godowns';
								break;
						}
						var property_category = $("[name='property_category']").val();
						var city = $('[name="city_id"] option:selected').text();
						var locality = $('[name="locality"]').val();
						var project_name = $('[name="project_name"]').val();
						var project_type = $('[name="project_type"]:checked').val();
						if (project_type === undefined) {
							project_type = '';
						}
						var state = $('[name="state_id"] option:selected').text();

						var seo_title = '';
						var title_description = '';
						var title_keyword = '';

						if ($('[name="help_for_fill_seo_details"]').prop('checked') == true) {

							seo_title = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + ', ' + locality + ', ' + city + ', ' + state + ' | ' + ucword(project_type) + ' Project in ' + city;
							title_keyword = 'New Project in ' + city + ', Hot Project in ' + city + ', Best New Projects Near ' + city + ', ' + property_category + ' ' + property_type + ', New Developing Property Near ' + locality + ', New Project Estate Agent, Property Dealer for New Project, Property Dealer For ' + project_name;
							title_description = 'New Project in ' + city + ' | ' + property_category + ' ' + property_type + ' in ' + project_name + '. Project Near ' + locality + ', ' + city + '. Best real estate agent for ' + project_type + ' projects in ' + city + '. Property Dealer in ' + city;

							$('[name="seo_title"]').val('');
							$('[name="seo_keywords"]').val('');
							$('[name="seo_description"]').val('');

							$('[name="seo_title"]').val(seo_title);
							$('[name="seo_keywords"]').val(title_keyword);
							$('[name="seo_description"]').val(title_description);
						}

					}




					function advertisementData(thisitem) {
						var advertisement_record_id = $.trim($("[name='project_advertisement_name']").find('option:selected').attr('advertisement-data-record-id'));
						if (advertisement_record_id != "" && advertisement_record_id != null) {
							$("[name='project_name']").val(advertisement_record_id);

						}
					}


					function getProjectTypeInfo(thisitem) {
						var property_type = $.trim($("[name=property_type]").val())

						$.ajax({
							url: 'https://www.propertyincity.com/demo/property_of_the_month/' + 'getPropertyAdvertisementRecordDetials',
							type: 'POST',
							data: {
								'property_type': property_type
							},
							beforeSend: function() {
								//block ui
								showLoader();
							},
							success: function(response) {
								hideLoader();
								if (response != "" && response != null) {
									$(thisitem).parents('.dependant-field-selection').find('.advertisement-list').html(response);
								}
							},
							error: function(errorResponse) {
								hideLoader();
							}
						});
					}

					$.validator.addMethod("validateUniqueLandzoneName", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/landzone/' + 'checkUniqueLandzoneName',
							dataType: "json",
							data: {
								'landzone_name': $.trim($("[name='landzone_name']").val()),
								'checkUniqueName': 'yes',
								'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, ' Landzone Name is Already exists in Another Landzone Name. Please try again.');



					$.validator.addMethod("validateUniqueFacilityName", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/facility/' + 'checkUniqueFacilityName',
							dataType: "json",
							data: {
								'name': $.trim($("[name='name']").val()),
								'checkUniqueName': 'yes',
								'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, ' Facility Name is Already exists in Another Facility Name. Please try again.');


					$.validator.addMethod("validateUniqueSpecificationName", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/specification/' + 'checkUniqueSpecificationName',
							dataType: "json",
							data: {
								'specification': $.trim($("[name='specification']").val()),
								'checkUniqueName': 'yes',
								'specification_record_id': ($.trim($("[name='specification_record_id']").val()) != '' ? $.trim($("[name='specification_record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, ' Specification Name is Already exists in Another Specification Name. Please try again.');


					$.validator.addMethod("validateUniquePropertyAreaName", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/property_area/' + 'checkUniquePropertyAreaName',
							dataType: "json",
							data: {
								'name': $.trim($("[name='name']").val()),
								'checkUniqueName': 'yes',
								'record_id': ($.trim($("[name='record_id']").val()) != '' ? $.trim($("[name='record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, ' Name is Already exists in Another Name. Please try again.');


					function builderDataInfo(thisitem) {
						var builder_id = $.trim($("[name='builder_name']").val());
						$.ajax({
							url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBuilderRecordDetials',
							type: 'POST',
							data: {
								'builder_id': builder_id
							},
							beforeSend: function() {
								//block ui
								showLoader();
							},
							success: function(response) {
								hideLoader();
								response = $.trim(response);
								if (response != "" && response != null) {
									$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html(response);
									$("[name='site_person_mobile']").val('');
								} else {
									$(thisitem).parents('.dependant-field-selection').find('.site-person-name-list').html('');
									$("[name='site_person_mobile']").val('');
								}
							},
							error: function(errorResponse) {
								hideLoader();
							}
						});

					}



					function getSitePersonNameInfo(thisitem) {
						var site_person_record_id = $.trim($("[name='site_person_name']").find('option:selected').attr('site-person-mobile-data'));
						if (site_person_record_id != "" && site_person_record_id != null) {
							$("[name='site_person_mobile']").val(site_person_record_id);
						} else {
							$("[name='site_person_mobile']").val('');
						}
					}

					function getSameNameBrochureMasterInfo(thisitem) {
						var project_name = $.trim($(thisitem).parents('.dependant-field-selection').find('.project-name-list').val());
						var builder_id = $.trim($("[name='builder_name']").val());
						$.ajax({
							url: 'https://www.propertyincity.com/demo/comparison_master/' + 'getBrochureAdvetimentBuilderRecordDetials',
							type: 'POST',
							dataType: "json",
							data: {
								'builder_id': builder_id,
								'project_name': project_name
							},
							beforeSend: function() {
								//block ui
								showLoader();
							},
							success: function(response) {
								hideLoader();
								if (response.status_code == 1) {
									$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html(response.data.brochureHtmlReplace);
									$("[name='new_brochure_file[]']").val(response.data.brochureFileName);
									$("[name='final_selected_image']").val(response.data.baseNameImagePreview);
								} else {
									var imageName = 'Choose file';
									$(thisitem).parents('.dependant-field-selection').find('.brocher-file-master-div-list').html(imageName);
									$(thisitem).parents('.dependant-field-selection').find('.brochure_file-preview-div').html('');
									$("[name='new_brochure_file[]']").val('');
									$("[name='final_selected_image']").val('');
								}
							},
							error: function(errorResponse) {
								hideLoader();
							}
						});


					}

					var removeImage = [];

					function removeImageHtml(thisitem) {
						alertify.confirm(messages['delete_record'], messages['delete-document-master-image-msg'], function() {
							removeImage.push($(thisitem).attr('data-preview-name'));
							$('[name="remove_image"]').val(removeImage)
							$(thisitem).parents('.brocher-document-image-div').remove();

							var remove_images_length = ($('.brocher-document-image-div').length);
							if (remove_images_length == 0) {
								$('[name="brochure_file[]"]').attr('data-valid-image', "No");
							}

						}, function() {});
					}

					function getMultipleDocumentPreview(thisitem, placeToInsertImagePreview) {
						var invalidImage = false;
						var field_id = $(thisitem).attr("id");
						var field_name = $(thisitem).attr("data-field-name");

						$("." + field_id + "-preview-div").html("");
						if (thisitem.files) {
							var filesAmount = thisitem.files.length;

							for (i = 0; i < filesAmount; i++) {
								var f = thisitem.files[i];
								var reader = new FileReader();

								if (
									thisitem.files[i].type == "image/jpg" ||
									thisitem.files[i].type == "image/png" ||
									thisitem.files[i].type == "application/pdf" ||
									thisitem.files[i].type == "image/jpeg"
								) {
									reader.onload = (function(theFile) {
										return function(e) {
											var imageName = "";
											var imageName = theFile.name;
											var imageHtml = "";

											if (imageName != "") {
												multipleImageName.push(imageName);
												$("[name='final_selected_image']").val(multipleImageName.toString());
											}

											imageHtml = '<div class="col-sm-12 my-1 brocher-document-image-div">';
											imageHtml += '<div class="row">';
											imageHtml += '<div class="upload-main-image">';
											imageHtml += '<label class="pr-2">' + imageName + '</label>';
											imageHtml += '</div>';
											imageHtml += '<div class="close-buttons">';
											imageHtml += '<button type="button" class="btn btn-danger button-round" onclick="removeImageHtml(this)" data-field-name="' + field_name + '" data-preview-name="' + imageName + '"><i class="fas fa-times"></i></button>';
											imageHtml += '</div>';
											imageHtml += '</div>';
											imageHtml += '</div>';
											$("." + field_id + "-preview-div").append($.parseHTML(imageHtml));

										};
									})(f);
								} else {
									invalidImage = true;
								}

								reader.readAsDataURL(thisitem.files[i]);
							}

							$("#final_selected_image").val(multipleImageName.toString());

							if (invalidImage != false) {
								$("#" + field_id).val("");
								$("." + field_id + "-preview-div").hide();
								$("." + field_id + "-preview-div").html("");
								alertifyMessage("error", messages["invalid-image-pdf"]);
							} else {
								$("." + field_id + "-preview-div").show();

							}
						}
					}

					$.validator.addMethod("validateUniqueAgentMobile", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
							dataType: "json",
							data: {
								'agent_mobile': ($.trim($("[name='agent_mobile']").val()) != null && $.trim($("[name='agent_mobile']").val()) != '') ? $.trim($("[name='agent_mobile']").val()) : '',
								'checkUniqueName': 'yes',
								'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, 'Mobile already exist. Please enter another Mobile.');

					// $(".get-property-atofill-selection-locality").on("select2:select", function (evt) {
					// 	  var element = evt.params.data.element;
					// 	  var $element = $(element);
					// 	  $element.detach();
					// 	  $(this).append($element);
					// 	  $(this).trigger("change");
					// }); 
					function staticAutoFillSeoDetails(thisitem) {
						var no_of_mutiply_by = $.trim($("[name='no_of_mutiply_by']").val());
						var display_property_count = $('.display-property-count-master-div').text();

						//no_of_mutiply_by = ( parseFloat( no_of_mutiply_by ) > 0.00 ? no_of_mutiply_by : 0 );
						//display_property_count = ( parseFloat( display_property_count ) > 0.00 ? display_property_count : 0 );

						var multiplication_property_count = 1;
						if ((no_of_mutiply_by != "" && no_of_mutiply_by != null) && (display_property_count != "" && display_property_count != null)) {
							multiplication_property_count = (parseFloat(display_property_count) * (parseFloat(no_of_mutiply_by)));
						}
						var property_type = $("[name='property_type_id'] option:selected").text();
						var property_type_id = $("[name='property_type_id'] option:selected").val();
						if ($("[name='property_type_id'] option:selected").val() == '' || $("[name='property_type_id'] option:selected").val() == null) {
							property_type = '';
						}
						var single_property_type_name = '';
						var main_property_type_name = '';
						var property_type_plural_name = '';
						var property_type_plural_slug_name = '';

						var property_type_flat_apartment_name = $('[name="property_type_name_selection"]').val() != '' && $('[name="property_type_name_selection"]').val() != null ? $('[name="property_type_name_selection"]:checked').val() : Flat;

						switch (property_type) {
							case 'Flat / Apartment':
								if (property_type_flat_apartment_name == 'Apartment') {
									property_type = 'Apartment';
									single_property_type_name = 'apartment';
									main_property_type_name = 'Apartment';
									property_type_plural_name = 'Apartment';
									property_type_plural_slug_name = 'apartment';
								} else {
									property_type = 'Flat';
									single_property_type_name = 'flat';
									main_property_type_name = 'Flat';
									property_type_plural_name = 'Flat';
									property_type_plural_slug_name = 'flat';
								}
								break;
							case 'Villa / Bungalows':
								property_type = 'Villa-Bungalows';
								single_property_type_name = 'villa';
								main_property_type_name = 'Villa / Bungalows';
								property_type_plural_name = 'Bungalows';
								property_type_plural_slug_name = 'villa-bungalows';
								break;
							case 'Shop / Showroom':
								property_type = 'Shop-Showroom';
								single_property_type_name = 'shop';
								main_property_type_name = 'Shop / Showroom';
								property_type_plural_name = 'Shops';
								property_type_plural_slug_name = 'shop-showroom';
								break;
							case 'Warehouse / Godowns':
								property_type = 'Warehouse-Godowns';
								single_property_type_name = 'warehouse';
								main_property_type_name = 'Warehouse / Godowns';
								property_type_plural_name = 'Godowns';
								property_type_plural_slug_name = 'warehouse-godowns';
								break;

							case 'Office':
								property_type = 'Office';
								single_property_type_name = 'office';
								main_property_type_name = 'Office';
								property_type_plural_name = 'Offices';
								property_type_plural_slug_name = 'offices';
								break;
							case 'Plot':
								property_type = 'Plot';
								single_property_type_name = 'plot';
								main_property_type_name = 'Plot';
								property_type_plural_name = 'Plots';
								property_type_plural_slug_name = 'plots';
								break;
							case 'Land':
								property_type = 'Land';
								single_property_type_name = 'land';
								main_property_type_name = 'Land';
								property_type_plural_name = 'Lands';
								property_type_plural_slug_name = 'lands';
								break;
						}
						var city = "";
						var city_id = $.trim($('[name="city_id"] option:selected').val());
						if (city_id != "" && city_id != null) {
							var city = $.trim($('[name="city_id"] option:selected').text());
						}

						var state = "";
						var state_id = $.trim($('[name="state_id"] option:selected').val());
						if (state_id != "" && state_id != null) {
							var state = $.trim($('[name="state_id"] option:selected').text());
						}

						//var city = $.trim($('[name="city_id"] option:selected').text());

						var first_locality_value = $.trim($('[name="locality_id[]"]').val()).split(",");

						var first_locality_text = '';
						if (first_locality_value != '' && first_locality_value != null) {
							var selected_locality_values = $('[name="select_locality_order[]"]').val();
							if (selected_locality_values != '' && selected_locality_values != null) {
								selected_locality_values = selected_locality_values.split(',')
								var first_value_of_location = selected_locality_values[0];
								first_locality_text = $("[name='locality_id[]'] option[value='" + first_value_of_location + "']").text();
							} else {
								first_locality_text = $('[name="locality_id[]"] option[value="' + first_locality_value[0] + '"]').text();
							}
						} else {
							first_locality_text = '';
						}

						// 	var first_locality_text = $('[name="locality_id[]"] option[value="'+first_locality_value[0]+'"]').text();
						//var state = $.trim($('[name="state_id"] option:selected').text());
						var new_purpose_status = $.trim($('[name="purpose"]:checked').val());
						var bhk_selection = $.trim($('[name="bhk_selection"]:checked').val());
						var purpose_status = $.trim($('[name="purpose"]:checked').val());
						if (new_purpose_status == 'hot_project') {
							new_purpose_status = 'Hot Projects';
						}


						if (bhk_selection != "" && bhk_selection != null) {
							var new_purpose_status = bhk_selection + 'BHK';
						}


						var house_type_array = $.trim($('[name="house_type[]"]:checked').val());
						var pre_leased_status_info = $.trim($('[name="pre_leased_status"] option:selected').val());
						var furnished_status_info = $.trim($('[name="furnished_status"]').val());

						var furnished_status = '';
						// condtion add Furnished tyre j ave chhe jyare sell rent and all property type ma ave chhe
						if (purpose_status == 'sell' || purpose_status == 'rent') {
							if (furnished_status_info != "" && furnished_status_info != null && furnished_status_info == "full") {
								furnished_status = 'Furnished';
							}
						}

						// condtion add PreLeased tyre j ave chhe jyare sell rent anf office and shop show room hoye tyre
						var pre_leased_status = '';
						if (property_type_id == '3' || property_type_id == '4') {
							if (purpose_status == 'sell' || purpose_status == 'rent') {
								if (pre_leased_status_info != "" && pre_leased_status_info != null && pre_leased_status_info == "Yes") {
									pre_leased_status = 'PreLeased';
								}
							}
						}
						var seo_title = '';
						var title_description = '';
						var title_keyword = '';
						var description = '';

						var display_purpose = '';
						var display_purpose_slug_name = '';
						switch (purpose_status) {
							case 'sell':
								display_purpose = "Sale";
								display_purpose_slug_name = "sale";
								break;
							case 'rent':
								display_purpose = "Rent";
								display_purpose_slug_name = "Rent";
								break;
							case 'hot_project':
								display_purpose = "New Project";
								purpose_status = "New Project";
								display_purpose_slug_name = "new-project";
								break;

						}

						if (property_type_id == '1' || property_type_id == '2') {

						} else {
							bhk_selection = null;
						}

						if (first_selected_locality_text != "" && first_selected_locality_text != null) {
							first_locality_text = first_selected_locality_text;
						}

						first_locality_text_array = first_locality_text.split('-');
						var upper = first_locality_text_array.map(element => {
							return element.toLowerCase().replace(/\b[a-z]/g, function(letter) {
								return letter.toUpperCase();
							});
						});
						// 	first_locality_text = upper.join('-');

						if (first_locality_value != '' && first_locality_value != null) {
							first_locality_text = upper.join('-');
						} else {
							first_locality_text = '';
						}

						var static_page_name = '';
						var static_page_name_slug = '';

						setTimeout(function() {
							seo_title = multiplication_property_count + '+ ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + property_type + ' ' + ((purpose_status != "" && purpose_status != null ? 'For ' + purpose_status : '')) + ' in ' + first_locality_text + ', ' + city;
							title_keyword = ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk, ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + first_locality_text + ', ' + city + ', ' + first_locality_text + ' ' + city + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ', ' + single_property_type_name + ' in ' + city + ', ' + single_property_type_name + ' in ' + first_locality_text + ', property in ' + first_locality_text + ', property on ' + purpose_status + ' in ' + first_locality_text + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + '' + single_property_type_name + ' in ' + first_locality_text + ' ' + city;
							title_description = 'Find ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + ' ' + single_property_type_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' BHK ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + single_property_type_name + ' for ' + ((purpose_status != "" && purpose_status != null) ? purpose_status + ' ' : '') + 'in ' + first_locality_text + ', ' + city + " with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious " + single_property_type_name + " and much more.";

							// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
							description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + multiplication_property_count + ' ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + property_type + '. Find ' + house_type_array + '' + single_property_type_name + ' in ' + first_locality_text + '  ' + city + '. Choose Best ' + house_type_array + ' ' + single_property_type_name + ' for ' + new_purpose_status + ' in ' + first_locality_text + ',' + city + ' with Verified Listings âœ“ Real photos âœ“ Ready to Move âœ“ Fully Furnished âœ“ Luxurious ' + single_property_type_name + ' and much more.Â you can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in  ' + first_locality_text + ' based on your specific budget.';

							seo_title = ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + main_property_type_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city;
							title_keyword = ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk, ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' + first_locality_text.toLowerCase() + ', ' + city.toLowerCase() + ', ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' bhk  ' + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ', ' : '')) + '' + single_property_type_name + ' in ' + city.toLowerCase() + ', ' + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ', property in ' + first_locality_text.toLowerCase() + ', property on ' + purpose_status + ' in ' + first_locality_text.toLowerCase() + ', ' + ((bhk_selection != "" && bhk_selection != null) ? bhk_selection + ' bhk  ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + ' ' : '') + single_property_type_name + ' in ' + first_locality_text.toLowerCase() + ' ' + city.toLowerCase();
							title_description = 'Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + ' on onestopproperty.in. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more.';

							// description pre_leased add karyu chhe  looking for prorty in between and  find and in between office  and serch in between ofcice ma  Furnished Type add
							description = 'Looking for ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + 'Property in ' + first_locality_text + '? onestopproperty.in offers ' + ((multiplication_property_count != "" && multiplication_property_count != null) ? multiplication_property_count + '+ ' : '') + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + main_property_type_name + '. Find ' + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' in ' + first_locality_text + ', ' + city + '. Choose Best ' + ((bhk_selection != "" && bhk_selection != null ? bhk_selection + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + '' + property_type_plural_name + ' for ' + display_purpose + ' in ' + first_locality_text + ', ' + city + ' with Verified Listings ✓ Real photos ✓ Ready to Move ✓ Fully Furnished ✓ Luxurious ' + property_type_plural_name + ' and much more. You can contact us to search ' + (furnished_status != "" && furnished_status != null ? furnished_status + ' ' : '') + (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + single_property_type_name + ' in ' + first_locality_text + ' based on your specific budget.';

							static_page_name = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status + ' ' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + ' BHK ' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status : '') + ' ' + (main_property_type_name != "" && main_property_type_name != null ? main_property_type_name : '') + ' for ' + (display_purpose != "" && display_purpose != null ? display_purpose : '') + ' in ' + (first_locality_text != "" && first_locality_text != null ? first_locality_text + ', ' : '') + (city != "" && city != null ? city : '');
							static_page_name_slug = (pre_leased_status != "" && pre_leased_status != null ? pre_leased_status.toLowerCase() + '-' : '') + ((bhk_selection != "" && bhk_selection != null ? bhk_selection.toLowerCase() + '-bhk-' : '')) + (furnished_status != "" && furnished_status != null ? furnished_status.toLowerCase() + '-' : '') + (property_type_plural_slug_name != "" && property_type_plural_slug_name != null ? property_type_plural_slug_name + '-for-' : '') + (display_purpose_slug_name != "" && display_purpose_slug_name != null ? display_purpose_slug_name.toLowerCase() : '') + '-in-' + (first_locality_text != "" && first_locality_text != null ? first_locality_text.replaceAll(' ', '-').toLowerCase() + '-' : '') + ((city != "" && city != null ? city.toLowerCase() : ''));

							$('[name="seo_title"]').val('');
							$('[name="seo_keywords"]').val('');
							$('[name="seo_description"]').val('');
							$('[name="description"]').val('');

							$('[name="static_page_name"]').val('');
							$('[name="static_page_name_slug"]').val('');

							$('[name="seo_title"]').val(seo_title);
							$('[name="seo_keywords"]').val(title_keyword);
							$('[name="seo_description"]').val(title_description);
							CKEDITOR.instances['description'].setData(description);

							$('[name="static_page_name"]').val(static_page_name);
							$('[name="static_page_name_slug"]').val(static_page_name_slug);

						}, 200);




					}

					function furnishedTypeHideShow(thisitem) {
						var selected_property_type_id = $.trim($("[name='property_type_id']").val());
						var selected_value_show = $.trim($("[name='purpose']:checked").val());
						if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 1 || selected_property_type_id == 2 || selected_property_type_id == 3 || selected_property_type_id == 4 || selected_property_type_id == 5))) {
							$('.display-furnished-status-div').show();
						} else {
							$('.display-furnished-status-div').hide();
						}

						if ((selected_value_show != "" && selected_value_show != null && (selected_value_show == "sell" || selected_value_show == "rent")) && (selected_property_type_id != "" && selected_property_type_id != null && (selected_property_type_id == 3 || selected_property_type_id == 4))) {
							$('.display-pre-leased-status-div').show();
						} else {
							$('.display-pre-leased-status-div').hide();
						}

					}
				</script>
				<div class="modal fade show" id="add-agent-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add Agent Database</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="fas fa-times"></i>
								</button>
							</div>
							<form action="https://www.propertyincity.com/demo/requirement/showAddForm" id="add-agent-database-form" method="post" accept-charset="utf-8">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="database_agent_mobile">Agent Mobile No<span class="text-danger line-height">*</span>:</label>
												<input type="text" class="form-control" id="database_agent_mobile" name="database_agent_mobile" value placeholder="Agent Mobile No" autofocus onkeyup="onlyNumber(this)" minlength="10" maxlength="10">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="database_agent_name">Agent Name<span class="text-danger line-height">*</span>:</label>
												<input type="text" class="form-control valid" id="database_agent_name" name="database_agent_name" value placeholder="Agent Name" autofocus aria-invalid="false">
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer justify-content-center">
									<button type="button" class="btn bg-theme  text-white add-comparison-model-action-button" onclick="addAgentDatabse()" title="Add">Add</button>
									<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" title="Close">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<script>
					function showAddAgentDatabaseModel(thisitem) {
						openBootstrapModal('add-agent-modal');
					}


					$("#add-agent-database-form").validate({
						errorClass: "invalid-input",
						rules: {
							database_agent_name: {
								required: true,
								noSpace: true
							},
							database_agent_mobile: {
								required: true,
								mobile_regex: /^[6789]\d{9}$/,
								validateUniqueAgentDatabaseMobile: true
							},
						},
						messages: {
							database_agent_mobile: {
								required: "Please Enter Agent Mobile No."
							},
							database_agent_name: {
								required: "Please enter Agent Name."
							},

						},

					});

					function addAgentDatabse() {

						if ($("#add-agent-database-form").valid() != true) {
							return false;
						}

						var agent_mobile = $.trim($("[name='database_agent_mobile']").val());
						var agent_name = $.trim($("[name='database_agent_name']").val());

						var confirm_box = "Add Agent Database";
						var confirm_box_msg = "Are you sure you want to Agent Database ?";

						alertify.confirm(confirm_box, confirm_box_msg, function() {

							$.ajax({
								type: "POST",
								dataType: "json",
								url: 'https://www.propertyincity.com/demo/agent_database/create',
								data: {
									'agent_name': agent_name,
									'agent_mobile': agent_mobile,
								},
								beforeSend: function() {
									showLoader();
								},
								success: function(response) {
									hideLoader();
									if (response.status_code == 1) {
										alertifyMessage('success', response.message);
										$("#add-agent-modal").modal('hide');
									} else {
										alertifyMessage('error', response.message);
									}
								},
								error: function() {
									hideLoader();
								}
							});
						}, function() {});
					}

					$.validator.addMethod('validateUniqueCustomerMobileNumber', function(value, element, param) {
						var result = true;
						var mobile_no = $.trim(value);
						var record_id = $.trim($('[name="record_id"]').val());

						$.ajax({
							type: 'post',
							async: false,
							dataType: 'json',
							data: {
								'mobile_no': mobile_no,
								'record_id': record_id
							},
							url: 'https://www.propertyincity.com/demo/customer/' + 'checkUniqueCustomerMobileNumber',
							success: function(response) {
								if (response.status_code == 1) {
									result = false;
								} else {
									result = true;
								}
							},
						});
						return result;
					}, 'Mobile already exist. Please enter another Mobile.');

					function relatedCustomerNameByMobile(thisitem) {
						var mobile = $.trim($(thisitem).val());

						$.ajax({
							type: 'post',
							data: {
								'mobile': mobile
							},
							url: 'https://www.propertyincity.com/demo/customer/' + 'relatedCustomerNameByMobile',
							beforeSend: function() {
								showLoader();
							},
							success: function(response) {
								hideLoader();
								if (response != '' && response != null) {
									$('[name="customer_name"]').val(response);
								} else {
									$('[name="customer_name"]').val('');
								}
							},
							error: function() {
								hideLoader();
							}
						});
					}

					function autoGenerateAdditionalInfo() {
						var listing_purpose = ($.trim($('[name="listing_purpose"]').val()) != '' && $.trim($('[name="listing_purpose"]').val()) != null ? $.trim($('[name="listing_purpose"] option:selected').text()) : '');
						var property_type = ($.trim($('[name="property_type"]').val()) != '' && $.trim($('[name="property_type"]').val()) != null ? $.trim($('[name="property_type"] option:selected').text()) : '');
						var scheme_name = $.trim($('[name="scheme_name"]').val());
						var type = ($.trim($('[name="type"]').val()) != '' && $.trim($('[name="type"]').val()) != null ? $.trim($('[name="type"] option:selected').text()) : '');
						var project_price = $.trim($('[name="project_price"]').val());
						var furniture_type = $.trim($("[name='furniture_type']:checked").val());
						var locality = ($.trim($('[name="locality"]').val()) != '' && $.trim($('[name="locality"]').val()) != null) ? $.trim($('[name="locality"]').val()) : "";


						var size = "";
						var area = "";
						var construction_size = "";
						var construction_area = "";
						if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
							area = ($.trim($('[name="plot_area"]').val()) != "" && $.trim($('[name="plot_area"]').val()) != null) ? $.trim($('[name="plot_area"] option:selected').text()) : "";
							size = ($.trim($('[name="plot_size"]').val()) != "" && $.trim($('[name="plot_size"]').val()) != null) ? 'Plot Size ' + $.trim($('[name="plot_size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
							construction_area = ($.trim($('[name="construction_area"]').val()) != "" && $.trim($('[name="construction_area"]').val()) != null) ? $.trim($('[name="construction_area"] option:selected').text()) : "";
							construction_size = ($.trim($('[name="construction_size"]').val()) != "" && $.trim($('[name="construction_size"]').val()) != null) ? $.trim($('[name="construction_size"]').val()) + ((construction_area != "" && construction_area != null) ? ' ' + construction_area : '') : "";
						} else {
							area = ($.trim($("[name='area']").val()) != "" && $.trim($("[name='area']").val()) != null) ? $.trim($('[name="area"] option:selected').text()) : "";
							size = ($.trim($('[name="size"]').val()) != "" && $.trim($('[name="size"]').val()) != null) ? 'Size ' + $.trim($('[name="size"]').val()) + ((area != "" && area != null) ? ' ' + area : '') : "";
						}
						console.log("construction_size = " + construction_size);
						console.log("size = " + size);

						var city = ($.trim($('[name="city_id"]').val()) != "" && $.trim($('[name="city_id"]').val()) != null) ? $.trim($('[name="city_id"] option:selected').text()) : "";
						var state = ($.trim($('[name="state_id"]').val()) != "" && $.trim($('[name="state_id"]').val()) != null) ? $.trim($('[name="state_id"] option:selected').text()) : "";

						var pre_lease = "";
						if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '4' || $('[name="property_type"]').val() == '5') {
							var pre_lease_value = ($.trim($('[name="pre_lease"]').val()) != "" && $.trim($('[name="pre_lease"]').val()) != null) ? $.trim($("input[name='pre_lease']:checked").val()) : "";;
							if (pre_lease_value == "yes") {
								pre_lease = " Pre-Leased";
							}
						}

						var house_type = [];

						if ($('[name="property_type"]').val() == '1') {

							$.each($("input[name='house_type[]']:checked"), function(K, V) {
								house_type.push(V.value);
							});
							var house_type = (house_type != null && house_type != '') ? house_type.join(', ') : "";
						}
						var furniture_type_text = "";
						if ($('[name="property_type"]').val() == '3' || $('[name="property_type"]').val() == '1' || $('[name="property_type"]').val() == '2') {
							if (furniture_type != "" && furniture_type != null && furniture_type != "none") {
								if (furniture_type == "full") {
									furniture_type_text = "Fully Furnished ";
								} else if (furniture_type == "semi") {
									furniture_type_text = "Semi Furnished ";
								}
							}
						}
						var tenure = "";
						if ($('[name="property_type"]').val() == '7') {
							tenure = $.trim($('[name="tenure"]:checked').attr('data-text'));
						}

						var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + 'Property for ' + listing_purpose + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + ' ' + (locality != "" && locality != null ? ' ' + locality : '') + ' ' + type + ' ' + house_type + ' ' + size + ' of ' + project_price;
						var additional_info = (pre_lease != "" && pre_lease != null ? pre_lease + ' ' : '') + (furniture_type_text != "" && furniture_type_text != null ? furniture_type_text : '') + 'Property for ' + listing_purpose + (tenure != "" && tenure != null ? ' ' + tenure : '') + ' ' + property_type + ' in' + (scheme_name != "" && scheme_name != null ? ' ' + scheme_name : '') + (locality != "" && locality != null ? ' ' + locality : '') + (city != "" && city != null ? ' ' + city : '') + (state != "" && state != null ? ' ' + state : '') + (type != "" && type != null ? ' ' + type : '') + (house_type != "" && house_type != null ? ' ' + house_type : '') + (size != "" && size != null ? ' ' + size : '') + (construction_size != "" && construction_size != null ? ' ' + ' and Construction Size ' + construction_size : '') + (project_price != "" && project_price != null ? ' Price of ' + project_price : '');

						$('[name="additional_info"]').val(additional_info);
					}


					$.validator.addMethod("validateUniqueAgentDatabaseMobile", function(value, element) {
						var result = true;
						ajaxResponse = $.ajax({
							type: "POST",
							async: false,
							url: 'https://www.propertyincity.com/demo/agent_database/' + 'checkUniqueAgentMobile',
							dataType: "json",
							data: {
								'agent_mobile': ($.trim($("[name='database_agent_mobile']").val()) != null && $.trim($("[name='database_agent_mobile']").val()) != '') ? $.trim($("[name='database_agent_mobile']").val()) : '',
								'checkUniqueName': 'yes',
								'agent_record_id': ($.trim($("[name='agent_record_id']").val()) != '' ? $.trim($("[name='agent_record_id']").val()) : null)
							},
							beforeSend: function() {

							},
							success: function(response) {
								if (response.status_code == 1) {
									return false;
								} else {
									result = false;
									return true;
								}
							}
						});
						return result;
					}, 'Mobile already exist. Please enter another Mobile.');



					function checkDuplicatePropertyDatabase() {

						var result = false;
						var record_id = $.trim($("[name='record_id']").val());
						var agent_mobile = $.trim($("[name='agent_mobile']").val());
						var agent_name = $.trim($("[name='agent_name']").val());
						var customer_mobile = $.trim($("[name=customer_mobile]").val());
						var customer_name = $.trim($("[name='customer_name']").val());
						var listing_purpose = $.trim($("[name='listing_purpose']").val());
						var property_type = $.trim($("[name='property_type']").val());
						var scheme_name = $.trim($("[name='scheme_name']").val());
						var state_id = $.trim($("[name='state_id']").val());
						var city_id = $.trim($("[name='city_id']").val());
						var locality = $.trim($("[name='locality']").val());

						var type = $.trim($("[name='type']").val());

						var size = "";
						var plot_size = "";

						if ($('[name="property_type"]').val() == '2' || $('[name="property_type"]').val() == '5') {
							plot_size = $.trim($("[name='plot_size']").val());
						} else {
							size = $.trim($("[name='size']").val());
						}

						$.ajax({

							type: "POST",
							dataType: "json",
							async: false,
							url: property_database_url + 'checkDuplicatePropertyDatabase',
							data: {
								'record_id': record_id,
								'agent_mobile': agent_mobile,
								'agent_name': agent_name,
								'customer_mobile': customer_mobile,
								'customer_name': customer_name,
								'listing_purpose': listing_purpose,
								'property_type': property_type,
								'scheme_name': scheme_name,
								'state_id': state_id,
								'city_id': city_id,
								'locality': locality,
								'type': type,
								'size': size,
								'plot_size': plot_size,
							},
							beforeSend: function() {

							},
							success: function(response) {

								if (response.status_code == 1) {
									$(".duplicate-database-entry-div").show();
								} else {
									$(".duplicate-database-entry-div").hide();
								}

							},
							error: function() {

							}
						});

						return result;
					}
				</script>


				<div class="radio-boxes row p-1 bg-white rounded mb-3">
					<div class="radio-box col-md-6 col-6 mb-2">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="login_type" id="admin" value="admin" checked>
							<label class="form-check-label custom-type-label" for="admin">Admin</label>
						</div>
					</div>
					<div class="radio-box col-md-6 col-6 mb-2">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="login_type" id="user" value="user">
							<label class="form-check-label custom-type-label" for="user">User</label>
						</div>
					</div>
				</div>

				$('[name="login_type"]').on('click', function() {
				if ($(this).val() == 'user') {
				$('.email-label').html('User Name:');
				$('[name="login_email"]').attr('placeholder', 'User Name');
				$('[name="login_email"]').focus();
				} else {
				$('.email-label').html('Email:');
				$('[name="login_email"]').attr('placeholder', 'Email');
				$('[name="login_email"]').focus();
				}
				});