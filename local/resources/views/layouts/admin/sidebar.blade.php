
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="{{IMAGE_PATH_SETTINGS.getSetting('site_favicon', 'site_settings')}}" type="image/x-icon" />
    <title>IndiVillage | Online Exam</title>

    @yield('header_scripts')

    <!-- Bootstrap -->
    <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{CSS}}bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{CSS}}bootstrap-datepicker.min.css">
    <link href="{{CSS}}sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="{{FONTAWSOME}}font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- NProgress -->
    <link href="{{CSS}}style/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{CSS}}style/custom.min.css" rel="stylesheet">
    <!-- <link href="{{CSS}}sb-admin.css" rel="stylesheet"> -->
    <link href="{{CSS}}materialdesignicons.css" rel="stylesheet" type="text/css">
    <!-- <link href="{{CSS}}sb-admin.css" rel="stylesheet"> -->
    <link href="{{CSS}}style/jquery.mCustomScrollbar.min.css" rel="stylesheet">


 <style>
 .profile_pic{
     margin-top:-1%!important;
 }
 .profile_info{
      margin-top:-23%;
      margin-left:30%;
 }
 .profile_info h2{
         margin-top:0px;
         margin-right:64%;
 }
 .site_title span{
 /* text-shadow: 0px 3px rgba(0, 0, 0, 0.5); */
 text-shadow: 0px 3px #000000;
 }
 @media screen and (min-width: 1000px) {
  table {
  width: 80%;}
}

   @media only screen and (max-width: 800px) {

    /* Force table to not be like tables anymore */
  /* #no-more-tables table,
  #no-more-tables thead,
  #no-more-tables tbody,
  #no-more-tables th,
  #no-more-tables td,
  #no-more-tables tr {
    display: block;
  } */

  /* Hide table headers (but not display: none;, for accessibility) */
  #no-more-tables thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  /* #no-more-tables{
    margin-left:30px;
  } */
  /* .header{
    position: fixed;
 width: 100%;
 height: 100px;
 font-weight: bold;
 text-align: center;
 background: #7F6FF0;
 -webkit-transition: .3s;
 transition: .3s;
 color: #fff;
  } */

 </style>
  </head>

  <body class="nav-md footer_fixed" ng-app="academia" class="ng-scope" cz-shortcut-listen="true">
  @yield('custom_div')

  <!-- <?php
 $class = '';
 if(!isset($right_bar))
  $class = 'no-right-sidebar';

 ?> -->
 <div class="no-right-sidebar">
    <div class="container body ">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="https://www.indivillage.com" class="site_title"><img src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="logo" class="img-circle" width="43px" height="43px" style="background:white;padding:4px"> <span>IndiVillage</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix"  >
              <div class="profile_pic">
               <img src="{{asset('images/img.jpg')}}" alt="profile" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                @if(Auth::check())
              <h2>{{Auth::user()->username}}</h2>
            @endif
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <!--  <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li {{ isActive($active_class, 'dashboard') }}><a href="{{PREFIX}}"><i class="fa fa-th-large"></i> Dashboard </a></li>
                  <li {{ isActive($active_class, 'users') }}><a href="{{URL_USERS}}"><i class="fa fa-users"></i> Users </a>

                  </li>
                  <li {{ isActive($active_class, 'exams') }}><a><i class="fa fa-edit"></i> Exams <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL_QUIZ_CATEGORIES}}"> <i class="fa fa-random"></i>{{ getPhrase('categories') }}</a></li>
              <li><a href="{{URL_QUIZ_QUESTIONBANK}}"> <i class="fa fa-question"></i>{{ getPhrase('question_bank') }}</a></li>

              <li><a href="{{URL_QUIZZES}}"> <i class="fa fa-clock-o"></i> {{ getPhrase('exams list')}}</a></li>
              <!-- <li><a href="{{URL_EXAM_SERIES}}"> <i class="fa fa-list-ol"></i> {{ getPhrase('exam_series')}}</a></li>
 -->              <li><a href="{{URL_INSTRUCTIONS}}"> <i class="fa fa-hand-o-right"></i> {{ getPhrase('instructions')}}</a></li>
              <li><a href="{{URL_MASTERSETTINGS_SUBJECTS}}"> <i class="fa fa-book"></i> {{ getPhrase('subjects_master')}}</a></li>

              <li><a href="{{URL_MASTERSETTINGS_TOPICS}}"> <i class="fa fa-database"></i> {{ getPhrase('subject_topics')}}</a></li>

                    </ul>
                  </li>
                  <li {{ isActive($active_class, 'results') }}><a href="{{URL_ADMIN_RESULTS}}"><i class="fa fa-envelope-o"></i> Results</a>

                  </li>
                  <li {{ isActive($active_class, 'feedback') }}><a href="{{URL_FEEDBACKS}}"><i class="fa fa-exclamation-circle"></i> Feedback</a>

                  </li>


                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{URL_USERS_LOGOUT}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav header">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/img.jpg')}}" alt="">
                    @if(Auth::check())

              {{Auth::user()->name}}
                       @endif
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li> -->
<li>
              <a href="{{URL_USERS_CHANGE_PASSWORD}}{{Auth::user()->slug}}">
                <sapn>{{ getPhrase('change_password') }}</sapn>
                <i class="fa fa-key pull-right"></i>
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
        </div><!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
        <footer class="">
          <div class="pull-right" style="color:#fff !important">
            &copy; 2019 All Right Reserved | Powered by: <a style="color:#fff !important" href="https://www.indivillage.com">Indivillage Tech Solutions LLP</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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

    <!-- Custom Theme Scripts -->
    <script src="{{CSS}}style/custom.min.js"></script>

    <script src="{{CSS}}style/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="{{CSS}}style/jquery.dataTables.min.js"></script>

    <script src="{{CSS}}style/dataTables.bootstrap.min.js"></script>

    <script src="{{JS}}main.js"></script>
  <script src="{{JS}}sweetalert-dev.js"></script>
    <script src="{{JS}}datepicker.min.js"></script>
  @yield('footer_scripts')

  @include('errors.formMessages')





  <script type="text/javascript" class="init">

$(document).ready(function() {
  $('#example').DataTable();
} );

  </script>

  @yield('custom_div_end')
  {!!getSetting('google_analytics', 'seo_settings')!!}
  <div class="ajax-loader" style="display:none;" id="ajax_loader"><img src="{{AJAXLOADER}}"> {{getPhrase('please_wait')}}...</div>
  </body>
</html>
