
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{IMAGE_PATH_SETTINGS.getSetting('site_favicon', 'site_settings')}}" type="image/x-icon" />
    <title>IndiVillage | Online Exam</title>

    @yield('header_scripts')
    <link href="{{CSS}}plugins/morris.css" rel="stylesheet">
    <link href="{{CSS}}sweetalert.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{CSS}}bootstrap-datepicker.min.css">
    <!-- Bootstrap -->
    <link href="{{CSS}}bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{FONTAWSOME}}font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="{{CSS}}style/nprogress.css" rel="stylesheet">

    <link href="{{CSS}}sb-admin.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{CSS}}style/custom.min.css" rel="stylesheet">
    <link href="{{CSS}}materialdesignicons.css" rel="stylesheet" type="text/css">

    <link href="{{CSS}}style/jquery.mCustomScrollbar.min.css" rel="stylesheet">

 <style>
 @media screen and (min-width: 1000px) {
  table {
  width: 80%;}
}

   @media only screen and (max-width: 800px) {

    /* Force table to not be like tables anymore */
  #no-more-tables table,
  #no-more-tables thead,
  #no-more-tables tbody,
  #no-more-tables th,
  #no-more-tables td,
  #no-more-tables tr {
    display: block;
  }

  /* Hide table headers (but not display: none;, for accessibility) */
  #no-more-tables thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  #no-more-tables{
    margin-left:30px;
  }

 </style>
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



        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav-menu">
            <div class="nav navbar-nav navbar-left">
              <a href="https://www.indivillage.com"><img src="{{asset('images/Group1.png')}}" width="100vw" ><a>
            </div>
            <nav>
            <ul class="nav navbar-nav navbar-right">
                <li class="navuser">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                    @if(Auth::check())

              {{Auth::user()->username}}
                       @endif
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li> -->
                    <li>

              <a href="{{URL_USERS_SETTINGS.Auth::user()->slug}}">

                <sapn>{{ getPhrase('settings') }}</sapn>
                <i class="fa fa-gear pull-right"></i>
                </a>

            </li>
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="{{URL_USERS_LOGOUT}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <!-- <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Multilevel Menu <small> Page to demonstrate multilevel menu</small></h3>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /page content -->

        @yield('content')
        <!-- footer content -->
        <footer class="footer">
          <div class="pull-right" style="color:#fff !important;">
            &copy; 2019 All Right Reserved | Powered by: <a href="https://www.indivillage.com">Indivillage Tech Solutions LLP</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

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
    </div>

    <!-- jQuery -->
    <script src="{{JS}}jquery-1.12.1.min.js"></script>
    <!-- Bootstrap -->
  <script src="{{JS}}bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="{{CSS}}style/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{CSS}}style/nprogress.js"></script>
    <script src="{{JS}}main.js"></script>
    <script src="{{JS}}sweetalert-dev.js"></script>
    <script src="{{CSS}}style/fastclick.js"></script>
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

  </script>
  </body>
</html>
