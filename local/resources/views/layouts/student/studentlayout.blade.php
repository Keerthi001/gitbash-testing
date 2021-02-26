<!DOCTYPE html>

<html lang="en" dir="{{ (App\Language::isDefaultLanuageRtl()) ? 'rtl' : 'ltr' }}">
<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="{{getSetting('meta_description', 'seo_settings')}}">

	<meta name="keywords" content="{{getSetting('meta_keywords', 'seo_settings')}}">
	<link rel="icon" href="{{IMAGE_PATH_SETTINGS.getSetting('site_favicon', 'site_settings')}}" type="image/x-icon" />

	<title>@yield('title') {{ isset($title) ? $title : getSetting('site_title','site_settings') }}</title>

	<!-- Bootstrap Core CSS -->

 @yield('header_scripts')

	<link href="{{CSS}}bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="{{CSS}}bootstrap-datepicker.min.css">

	<link href="{{CSS}}sweetalert.css" rel="stylesheet" type="text/css">
	<!-- Morris Charts CSS -->

	<link href="{{CSS}}plugins/morris.css" rel="stylesheet">

	<!-- Custom CSS -->

	<link href="{{CSS}}sb-admin.css" rel="stylesheet">

	<!-- Custom Fonts -->

	<link href="{{CSS}}custom-fonts.css" rel="stylesheet" type="text/css">

	<link href="{{CSS}}materialdesignicons.css" rel="stylesheet" type="text/css">

	<link href="{{FONTAWSOME}}font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="{{CSS}}bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{FONTAWSOME}}font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="{{CSS}}style/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{CSS}}style/custom.min.css" rel="stylesheet">
    <!-- <link href="{{CSS}}materialdesignicons.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{CSS}}sb-admin.css" rel="stylesheet"> -->
    <link href="{{CSS}}style/jquery.mCustomScrollbar.min.css" rel="stylesheet">

<!-- Mouse Right click disable functionality-->

    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> -->


</head>
<body class="nav-md" ng-app="academia" class="ng-scope" cz-shortcut-listen="true">

 @yield('custom_div')

 <?php

 $class = '';

 if(!isset($right_bar))

 	$class = 'no-right-sidebar';

$block_class = '';

if(isset($block_navigation))

	$block_class = 'non-clickable';

 ?>

<div class="no-right-sidebar">
    <div class="container body ">
      <div class="main_container">

            <br />


          </div>
        </div>

        <!-- top navigation -->


        <!-- /top navigation -->
  @if(isset($right_bar))

    <!-- <aside class="right-sidebar" id="rightSidebar">
      <button class="sidebat-toggle" id="sidebarToggle" href='javascript:'><i class="fa fa-list"></i></button>
      <div class="panel panel-right-sidebar">
        <?php $data = '';
      if(isset($right_bar_data))
        $data = $right_bar_data;
      ?>
        @include($right_bar_path, array('data' => $data))
      </div>
    </aside> -->

  @endif

        @yield('content')
        <!-- footer content -->
        </div>

        <footer>
          <div class="pull-right">
         &copy; 2019 All Right Reserved | Powered by: <a href="https://www.indivillage.com">Indivillage Tech Solutions LLP</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

		@if(isset($right_bar))



		<aside class="right-sidebar" id="rightSidebar">

			<!-- <button class="sidebat-toggle" id="sidebarToggle" href='javascript:'><i class="mdi mdi-menu"></i></button> -->

			<?php $right_bar_class_value = '';

			if(isset($right_bar_class))

				$right_bar_class_value = $right_bar_class;

			?>

			<div class="panel panel-right-sidebar {{$right_bar_class_value}}">

			<?php $data = '';

			if(isset($right_bar_data))

				$data = $right_bar_data;

			?>

				@include($right_bar_path, array('data' => $data))

			</div>

		</aside>



	@endif



	</div>

	<!-- /#wrapper -->

	<!-- jQuery -->
	<script type="text/javascript">
   $(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return false;
    });
  });
</script>

<!-- Disable Cut Copy & Paste -->

<script type="text/javascript">
$(document).ready(function () {
    //Disable full page
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    //Disable part of page
    $('#id').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});
</script>

	<script src="{{JS}}jquery-1.12.1.min.js"></script>

	<!-- Bootstrap Core JavaScript -->

	<script src="{{JS}}bootstrap.min.js"></script>
	<!--JS Control-->

	<script src="{{JS}}main.js"></script>

	<script src="{{JS}}sweetalert-dev.js"></script>

	<!-- <script src="{{JS}}jquery-1.12.1.min.js"></script> -->
    <!-- Bootstrap -->
  <!-- <script src="{{JS}}bootstrap.min.js"></script> -->

    <!-- FastClick -->
    <script src="{{CSS}}style/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{CSS}}style/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{CSS}}style/custom.min.js"></script>

    <script src="{{CSS}}style/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="{{CSS}}style/jquery.dataTables.min.js"></script>

    <script src="{{CSS}}style/dataTables.bootstrap.min.js"></script>

	@include('common.alertify')



	@yield('footer_scripts')

	@include('errors.formMessages')

	@yield('custom_div_end')
	{!!getSetting('google_analytics', 'seo_settings')!!}
</body>



</html>
