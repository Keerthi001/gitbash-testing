



@extends('layouts.admin.sidebar')
@section('content')
<div class="right_col" role="main">
					<!-- <div class="col-md-3">
						<div class="card card-blue text-xs-center">
							<div class="card-block">
								<h4 class="card-title count">{{ App\User::get()->count()}}</h4>
								<p class="card-text">{{ getPhrase('users')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_USERS}}">
								{{ getPhrase('view_all')}}
							</a>
						</div>

					</div> -->
					<div class="row tile_count">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\User::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('users')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_USERS}}">
								{{ getPhrase('view_all')}}
				  </a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-random"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\QuizCategory::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('categories')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_QUIZ_CATEGORIES}}">
								{{ getPhrase('view_all')}}
							</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-clock-o"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\Quiz::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('exams')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_QUIZZES}}">
								{{ getPhrase('view_all')}}
							</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\Subject::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('subjects')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_SUBJECTS}}">
								{{ getPhrase('view_all')}}
							</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-database"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\Topic::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('topics')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_TOPICS}}">
								{{ getPhrase('view_all')}}
							</a></p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-question"></i></div>
                  <div class="count"><h4 class="card-title count">{{ App\QuestionBank::get()->count()}}</h4></div>
                  <h3 class="card-text">{{ getPhrase('questions')}}</h3>
                  <p><a class="card-footer text-muted" href="{{URL_QUIZ_QUESTIONBANK}}">
								{{ getPhrase('view_all')}}
							</a> </p>
                </div>
              </div>
					<!-- <div class="col-md-3">
						<div class="card card-black text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\QuizCategory::get()->count()}}</h4>
								<p class="card-text">{{ getPhrase('quiz_categories')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_QUIZ_CATEGORIES}}">
								{{ getPhrase('view_all')}}
							</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card card-yellow text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\Quiz::get()->count()}}</h4>
								<p class="card-text">{{ getPhrase('quizzes')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_QUIZZES}}">
								{{ getPhrase('view_all')}}
							</a>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card card-green text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\Subject::get()->count()}}</h4>
								<p class="card-text">{{ getPhrase('subjects')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_SUBJECTS}}">
								{{ getPhrase('view_all')}}
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-yellow text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\Topic::get()->count()}}</h4>
								<p class="card-text">{{ getPhrase('topics')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_TOPICS}}">
								{{ getPhrase('view_all')}}
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-green text-xs-center">
							<div class="card-block">
								<h4 class="card-title">{{ App\QuestionBank::get()->count()}}</h4>
								<p class="card-text">{{ getPhrase('questions')}}</p>
							</div>
							<a class="card-footer text-muted" href="{{URL_QUIZ_QUESTIONBANK}}">
								{{ getPhrase('view_all')}}
							</a>
						</div>
					</div> -->




		<!-- /#page-wrapper -->

</div>
</div>
@stop
