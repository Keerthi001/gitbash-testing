@extends('layouts.student.studentsidebar')
@section('content')
<div class="right_col">
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<!-- <ol class="breadcrumb">

<li>{{ $title}}</li>
</ol> -->
</div>
</div>
<div class="row">
<!-- <div class="col-md-4">
<div class="card card-blue text-xs-center">
<div class="card-block">
<h4 class="card-title">{{ App\QuizCategory::get()->count()}}</h4>
<p class="card-text">{{ getPhrase('quiz_categories')}}</p>
</div>
<a class="card-footer text-muted" href="{{URL_STUDENT_EXAM_CATEGORIES}}">
{{ getPhrase('view_all')}}
</a>
</div>
</div> -->

<!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\QuizCategory::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('quiz_categories')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_STUDENT_EXAM_CATEGORIES}}">
								{{ getPhrase('view_all')}}
				  </a></p>
                </div>
              </div> -->


<!-- <div class="col-md-4">
<div class="card card-yellow text-xs-center">
<div class="card-block">
<h4 class="card-title">{{ App\Quiz::get()->count()}}</h4>
<p class="card-text">{{ getPhrase('quizzes')}}</p>
</div>
<a class="card-footer text-muted" href="{{URL_STUDENT_EXAM_ALL}}">
{{ getPhrase('view_all')}}
</a>
</div>
</div> -->

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\Quiz::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('exams')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_STUDENT_EXAM_CATEGORIES}}">
								{{ getPhrase('view_all')}}
				  </a></p>
                </div>
              </div>

<!-- <div class="col-md-4">
<div class="card card-green text-xs-center">
<div class="card-block">
<h4 class="card-title">{{ App\Subject::get()->count()}}</h4>
<p class="card-text">{{ getPhrase('subjects')}}</p>
</div>
<a class="card-footer text-muted" href="{{URL_STUDENT_ANALYSIS_SUBJECT.Auth::user()->slug}}">
{{ getPhrase('view_analysis')}}
</a>
</div>
</div> -->

<!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\Subject::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('subjects')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_STUDENT_ANALYSIS_SUBJECT.Auth::user()->slug}}">
								{{ getPhrase('view_all')}}
				  </a></p>
                </div>
              </div> -->



</div>
</div>
<div class="luckimage"><img src="images/da9e0fd2a38613e623f186780c2d3b98.gif"></div>
<div class="row"><?php $ids=[];?>
@for($i=0; $i<count($chart_data); $i++)
<?php
$newid = 'myChart'.$i;
$ids[] = $newid; ?>

@endfor

</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@stop
