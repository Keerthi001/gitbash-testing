@extends('layouts.student.studentlayout')
@section('header_scripts')

@stop
@section('content')
<style>
    .guide
    {
        display:none;
    }
   footer
    {
        display:none;
    }
</style>
<div class="right_col">
<div id="page-wrapper" ng-model="academia" ng-controller="instructions">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<!-- <ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_STUDENT_EXAM_CATEGORIES}}"> {{getPhrase('quiz_categories')}} </a> </li>
							<li><a href="{{URL_STUDENT_EXAMS.$record->category->slug}}"> {{$record->category->category}} </a> </li>
							<li>{{ $title }}</li>
						</ol> -->
					</div>
				</div>
				<!-- /.row -->
				<div class="x_panel">


	<!-- <div class="panel panel-custom col-lg-12" > -->
					<div class="panel-heading">
						<h1>{{getPhrase('Instructions')}} <span class="pull-right text-italic">{{getPhrase('please_read_the_instructions_carefully')}}</span></h1>

					</div>
					<div class="panel-body instruction no-arrow">

						<div class="row">
							<div class="col-md-12">
								<h2>{{getPhrase('exam_name')}}:   {{$record->title}} </h2>
								@if($instruction_data=='')	
								<h3>{{getPhrase('general_instructions')}}:</h3>
								@else
								<h3>{{$instruction_title}}:</h3>
                                <ul>
<li>This online exam is to test the candidate's skills in English, Quantitative Aptitude and Computer Science Programming Languages.</li>

<li>This section consists of a total of 50 MCQ questions & each question carries 1 mark and 5 blanks & each carries 2 marks.</li>

<li>The duration of this test is 60 minutes. No extra time for whatsoever reason would be allowed to attempt question paper after the stipulated time is over.</li>

<li>There will be no negative marks, So candidates need not to worry about attempting all the questions.</li>

<li>Candidates must follow instructions of the "Test Administrator/Invigilator". If any candidate does not obey instructions or rules, it would be treated as a case of misconduct and adoption of unfair practice and such candidate would be liable for punishment as per rules of the examination.</li>

<li>Candidates are not permitted to bring Mobile phones/ Digital watches/Calculators into the examination hall.</li>

<li>Candidates should ensure that they do not indulge in any unfair means and shall also not to talk to each other after commencement of the exam and during its entire duration.</li>

<li>Before starting the test, candidates should select  " I've read all the Instructions & ready to go for test " option from the drop down at the bottom of this page.</li>

<li>The candidates choose correct choice for each question. After mouse-clicking, the chosen option gets selected and shall be treated as the answer given by the candidate for the question.</li>

<li>Candidate have only option of moving to next question by clicking on Next button. There is NO Previous Option / Button for going back to previous questions. So be careful while answering and clicking on Next button.</li>

<li>After completion of the test, candidates need to click on " Finish Button" to submit the Test. In case of timeout the answers for the test will get automatically submitted.</li>

                                </ul>

								@endif
								@if($instruction_data=='')			
								<ol>
									<li>Total of {{$record->dueration}} minutes duration will be given to attempt all the questions.</li>
									<li>The clock has been set at the server and the countdown timer at the top right corner of your screen will display the time remaining for you to complete the exam. When the clock runs out the exam ends by default - you are not required to end or submit your exam.</li>
									<li>The question palette at the right of screen shows one of the following statuses of each of the questions numbered:</li>
								</ol>
								@else 
								{!! $instruction_data !!}
								@endif

								<ul class="guide">
									<li>
										<span class="answer"><i class="mdi mdi-check"></i></span> You have answered the question.
									</li>
									<li>
										<span class="notanswer"><i class="mdi mdi-close"></i></span> You have not answered the question.
									</li>
									<li>
										<span class="marked"><i class="mdi mdi-eye"></i></span> You have answered the question but have marked the question for review.
									</li>
									<li>
										<span class="notvisited"><i class="mdi mdi-eye-off"></i></span> You have not visited the question yet.
									</li>
								</ul>

							</div>

						</div>


						<hr>
						<?php
						$paid_type =  false;
						if($record->is_paid && !isItemPurchased($record->id, 'exam'))	
						$paid_type = true;
						?>
						<div class="form-group row">
						{!! Form::open(array('url' => 'exams/student/start-exam/'.$record->slug, 'method' => 'POST')) !!}
							<div class="col-md-12">
							@if(!$paid_type)	
								<input type="checkbox" name="option" id="free" checked="" ng-model="agreeTerms">
								<label for="free" > <span class="fa-stack checkbox-button"> <i class="mdi mdi-check active"></i> </span> The computer provided to me is in proper working condition. I have read and understood the instructions given above. </label>
								
								<br><span class="text-danger" ng-show="!agreeTerms">{{ getPhrase('please_accept_terms_and_conditions')}}</span> 

								@endif
								<div class="text-center">
									@if($paid_type)	
									<a href="{{URL_PAYMENTS_CHECKOUT.'exam/'.$record->slug}}" class="btn button btn-lg btn-success"><i class="icon-credit-card"></i> {{getPhrase('buy_now')}}</a>	
									@else

									<button ng-if="agreeTerms" class="btn btn-success">{{getPhrase('start_exam')}}</button>
									@endif
								</div>

							</div>
					{!! Form::close() !!}

						</div>


					</div>
				</div>
			</div>

		</div>
		</div>
@endsection
 

@section('footer_scripts')
  <script src="{{JS}}angular.js"></script>
//   <script>
//  var app = angular.module('academia', []);
// app.controller('instructions', function($scope, $http) {
	
// });
// </script>


@stop
