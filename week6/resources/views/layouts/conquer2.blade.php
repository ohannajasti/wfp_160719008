<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Conquer | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Cassetsompatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{ asset('conquer2/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('conquer2/assets/css/style-conquer.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/css/pages/tasks.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('conquer2/assets/css/themes/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('conquer2/assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
            <a href="index.html">
                <img src="{{ asset('conquer2/assets/img/logo.png')}}" alt="logo"/>
            </a>
        </div>
        <form class="search-form search-form-header" role="form" action="index.html">
            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
            </div>
        </form>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="{{ asset('conquer2/assets/img/menu-toggler.png')}}" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-bell"></i>
				<span class="badge badge-success">
				6 </span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							 You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-success">
								<i class="fa fa-plus"></i>
								</span>
								New user registered. <span class="time">
								Just now </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Server #12 overloaded. <span class="time">
								15 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
								<i class="fa fa-bell"></i>
								</span>
								Server #2 not responding. <span class="time">
								22 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
								<i class="fa fa-bullhorn"></i>
								</span>
								Application error. <span class="time">
								40 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Database overloaded 68%. <span class="time">
								2 hrs </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								2 user IP blocked. <span class="time">
								5 hrs </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
								<i class="fa fa-bell"></i>
								</span>
								Storage Server #4 not responding. <span class="time">
								45 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
								<i class="fa fa-bullhorn"></i>
								</span>
								System Error. <span class="time">
								55 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Database overloaded 68%. <span class="time">
								2 hrs </span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all notifications <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-envelope-open"></i>
				<span class="badge badge-info">
				5 </span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							 You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('conquer2/assets/img/avatar2.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Lisa Wong </span>
								<span class="time">
								Just Now </span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('conquer2/assets/img/avatar3.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Richard Doe </span>
								<span class="time">
								16 mins </span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('conquer2/assets/img/avatar1.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Bob Nilson </span>
								<span class="time">
								2 hrs </span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('conquer2/assets/img/avatar2.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Lisa Wong </span>
								<span class="time">
								40 mins </span>
								</span>
								<span class="message">
								Vivamus sed auctor 40% nibh congue nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('conquer2/assets/img/avatar3.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Richard Doe </span>
								<span class="time">
								46 mins </span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">See all messages <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			<li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-calendar"></i>
				<span class="badge badge-warning">
				5 </span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								New release v1.2 </span>
								<span class="percent">
								30% </span>
								</span>
								<span class="progress">
								<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								40% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Application deployment </span>
								<span class="percent">
								65% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								65% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Mobile app release </span>
								<span class="percent">
								98% </span>
								</span>
								<span class="progress">
								<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								98% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Database migration </span>
								<span class="percent">
								10% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								10% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Web server upgrade </span>
								<span class="percent">
								58% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								58% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Mobile development </span>
								<span class="percent">
								85% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								85% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								New UI release </span>
								<span class="percent">
								18% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								18% Complete </span>
								</span>
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END TODO DROPDOWN -->
			<li class="devider">
				 &nbsp;
			</li>
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<img alt="" src="{{ asset('conquer2/assets/img/avatar3_small.jpg')}}"/>
				<span class="username username-hide-on-mobile">Nick </span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="page_inbox.html"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
						3 </span>
						</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
						7 </span>
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="login.html"><i class="fa fa-key"></i> Log Out</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<form class="search-form" role="form" action="index.html" method="get">
						<div class="input-icon right">
							<i class="icon-magnifier"></i>
							<input type="text" class="form-control" name="query" placeholder="Search...">
						</div>
					</form>
				</li>
				<li class="start active ">
					<a href="{{url('/')}}">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">Master</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('supplier.index')}}">
							<i class="icon-anchor"></i>
							Supplier</a>
						</li>
						<li>
							<a href="{{route('category.index')}}">
							<i class="icon-book-open"></i>
							Category</a>
						</li>
						<li>
							<a href="{{url('/product')}}">
							<i class="icon-pin"></i>
							Product</a>
						</li>
						<li>
							<a href="layout_session_timeout.html">
							<i class="icon-vector"></i>
							<span class="badge badge-warning">new</span>Session Timeout</a>
						</li>
						<li>
							<a href="layout_idle_timeout.html">
							<i class="icon-cursor"></i>
							User Idle Timeout</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
							<i class="icon-rocket"></i>
							Language Bar</a>
						</li>
						<li>
							<a href="layout_disabled_menu.html">
							<i class="icon-link"></i>
							Disabled Menu Links</a>
						</li>
						<li>
							<a href="layout_sidebar_reversed.html">
							<i class="icon-settings"></i>
							<span class="badge badge-success">new</span>Reversed Sidebar</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
							<i class="icon-paper-clip"></i>
							Blank Page</a>
						</li>
						<li>
							<a href="layout_ajax.html">
							<i class="icon-bubble"></i>
							Content Loading via Ajax</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-present"></i>
					<span class="title">Report</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							Jumlah Stok Per Kategori</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Jumlah Stok Per Supplier</a>
						</li>
						<li>
							<a href="ui_icons.html">
							Icons</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-present"></i>
					<span class="title">UI Features</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							General</a>
						</li>
						<li>
							<a href="ui_buttons.html">
							Buttons</a>
						</li>
						<li>
							<a href="ui_icons.html">
							Icons</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Typography</a>
						</li>
						<li>
							<a href="ui_modals.html">
							Modals</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
							Extended Modals</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
							Tabs, Accordions & Navs</a>
						</li>
						<li>
							<a href="ui_toastr.html">
							<span class="badge badge-warning">new</span>Toastr Notifications</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
							<span class="badge badge-success">new</span>Date Paginator</a>
						</li>
						<li>
							<a href="ui_tree.html">
							Tree View</a>
						</li>
						<li>
							<a href="ui_nestable.html">
							Nestable List</a>
						</li>
						<li>
							<a href="ui_ion_sliders.html">
							<span class="badge badge-important">new</span>Ion Range Sliders</a>
						</li>
						<li>
							<a href="ui_jqueryui_sliders.html">
							jQuery UI Sliders</a>
						</li>
						<li>
							<a href="ui_knob.html">
							Knob Circle Dials</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-calendar"></i>
					<span class="title">Form Stuff</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
							Form Controls</a>
						</li>
						<li>
							<a href="form_layouts.html">
							Form Layouts</a>
						</li>
						<li>
							<a href="form_component.html">
							Form Components</a>
						</li>
						<li>
							<a href="form_editable.html">
							<span class="badge badge-warning">new</span>Form X-editable</a>
						</li>
						<li>
							<a href="form_wizard.html">
							Form Wizard</a>
						</li>
						<li>
							<a href="form_validation.html">
							Form Validation</a>
						</li>
						<li>
							<a href="form_image_crop.html">
							<span class="badge badge-important">new</span>Image Cropping</a>
						</li>
						<li>
							<a href="form_fileupload.html">
							Multiple File Upload</a>
						</li>
						<li>
							<a href="form_dropzone.html">
							Dropzone File Upload</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">Pages</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_inbox.html">
							<span class="badge badge-important">4</span>Inbox</a>
						</li>
						<li>
							<a href="page_locked.html">
							User Locked</a>
						</li>
						<li>
							<a href="page_portfolio.html">
							<span class="badge badge-warning badge-roundless">new</span>Portfolio</a>
						</li>
						<li>
							<a href="page_blog.html">
							Blog</a>
						</li>
						<li>
							<a href="page_blog_item.html">
							Blog Post</a>
						</li>
						<li>
							<a href="page_about.html">
							About Us</a>
						</li>
						<li>
							<a href="page_contact.html">
							Contact Us</a>
						</li>
						<li>
							<a href="page_calendar.html">
							<span class="badge badge-important">14</span>Calendar</a>
						</li>
						<li>
							<a href="page_profile.html">
							User Profile</a>
						</li>
						<li>
							<a href="page_faq.html">
							FAQ</a>
						</li>
						<li>
							<a href="page_invoice.html">
							Invoice</a>
						</li>
						<li>
							<a href="page_pricing_table.html">
							Pricing Tables</a>
						</li>
						<li>
							<a href="page_404_option1.html">
							404 Page Option 1</a>
						</li>
						<li>
							<a href="page_404_option2.html">
							404 Page Option 2</a>
						</li>
						<li>
							<a href="page_500_option1.html">
							500 Page Option 1</a>
						</li>
						<li>
							<a href="page_500_option2.html">
							500 Page Option 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-share"></i>
					<span class="title">4 Level Menu</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-settings"></i> Item 1 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									<i class="icon-user"></i>
									Sample Link 1 <span class="arrow"></span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#"><i class="icon-wrench"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-ban"></i> Sample Link 1</a>
										</li>
										<li>
											<a href="#"><i class="icon-check"></i> Sample Link 1</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="icon-question"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-rocket"></i> Sample Link 2</a>
								</li>
								<li>
									<a href="#"><i class="icon-tag"></i> Sample Link 3</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="icon-globe"></i> Item 2 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="icon-graph"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-share"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-settings"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							<i class="icon-note"></i>
							Item 3 </a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Data Tables</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Basic Tables</a>
						</li>
						<li>
							<a href="table_responsive.html">
							Responsive Tables</a>
						</li>
						<li>
							<a href="table_managed.html">
							Managed Tables</a>
						</li>
						<li>
							<a href="table_editable.html">
							Editable Tables</a>
						</li>
						<li>
							<a href="table_advanced.html">
							Advanced Tables</a>
						</li>
						<li>
							<a href="table_ajax.html">
							Ajax Datatables</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-layers"></i>
					<span class="title">Portlets</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
							General Portlets</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
							Draggable Portlets</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-drop"></i>
					<span class="title">Maps</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							Google Maps</a>
						</li>
						<li>
							<a href="maps_vector.html">
							Vector Maps</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="charts.html">
					<i class="icon-bar-chart"></i>
					<span class="title">Visual Charts</span>
					</a>
				</li>
				<li class="last ">
					<a href="login.html">
					<i class="icon-user"></i>
					<span class="title">Login</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">
                Category <small>statistics and more</small>
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            
            <table class="table">
        @yield('content');
            </div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2013 &copy; Conquer by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('conquer2/assets/plugins/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('conquer2/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery.peity.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery-knob/js/jquery.knob.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/flot/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/gritter/js/jquery.gritter.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="{{ asset('conquer2/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('conquer2/assets/scripts/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/scripts/index.js')}}" type="text/javascript"></script>
<script src="{{ asset('conquer2/assets/scripts/tasks.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initPeityElements();
   Index.initKnowElements();
   Index.initDashboardDaterange();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>