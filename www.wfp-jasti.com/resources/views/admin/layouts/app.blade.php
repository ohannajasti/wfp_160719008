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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{asset('conquer2')}}/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{asset('conquer2')}}/assets/css/style-conquer.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="{{asset('conquer2')}}/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{asset('conquer2')}}/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- JS Editable TD -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
@include('admin.layouts.navbar')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
    @include('admin.layouts.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
        @yield('content')
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		2021  &copy; WFP by Jasti Ohanna.
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
<script src="{{asset('conquer2')}}/assets/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('conquer2')}}/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery.peity.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="{{asset('conquer2')}}/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('conquer2')}}/assets/scripts/app.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/scripts/index.js" type="text/javascript"></script>
<script src="{{asset('conquer2')}}/assets/scripts/tasks.js" type="text/javascript"></script>
<script src="{{asset('plugins')}}/jquery.editable.min.js" type="text/javascript"></script>
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
@yield('initialscript')
@yield('ajax')
</body>
<!-- END BODY -->
</html>