@extends('layouts.admin.sidebar')

 @section('custom_div')

 <div ng-controller="prepareQuestions">

 @stop

@section('content')
<div class="right_col">
<div id="page-wrapper">
				<div class="container-fluid">

				<div class="row">

					<div class="col-lg-12">

						<!-- <ol class="breadcrumb">

							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

							<li><a href="{{URL_QUIZZES}}">{{ getPhrase('quizzes')}}</a></li>

							<li class="active">{{isset($title) ? $title : ''}}</li>

						</ol> -->

					</div>

				</div>

					@include('errors.errors')

				<?php $settings = ($record) ? $settings : ''; ?>

				 <div class="panel panel-custom col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0" ng-init="initAngData({{$settings}});" > 
        <div class="row tile_count">
        <div class="x_panel">
					<div class="panel-heading">

						<div class="pull-right messages-buttons">

							<a href="{{URL_QUIZZES}}" class="btn btn-default" >{{ getPhrase('list')}}</a>

						</div>

					<h1>{{ $title }}  </h1>

					</div>

					<div class="panel-body" >

					<?php $button_name = getPhrase('create'); ?>

					 		<div class="row">

							<fieldset class="form-group col-md-6">

								{{ Form::label('subject', getphrase('subjects')) }}

								<span class="text-red">*</span>

								{{Form::select('subject', $subjects, null, ['class'=>'form-control', 'ng-model' => 'subject_id',

								'placeholder' => 'Select', 'ng-change'=>'subjectChanged(subject_id)' ])}}

							</fieldset>

								<fieldset class="form-group col-md-6">

								{{ Form::label('difficulty', getphrase('difficulty')) }}


								<select ng-model="difficulty" class="form-control" >

								<option value="">{{getPhrase('select')}}</option>

								<option value="easy">{{getPhrase('easy')}}</option>

								<option value="medium">{{getPhrase('medium')}}</option>

								<option value="hard">{{getPhrase('hard')}}</option>

								</select>

								</fieldset>


								<fieldset class="form-group col-md-6">

								{{ Form::label('question_type', getphrase('question_type')) }}

								<select ng-model="question_type" class="form-control" >

									<option selected="selected" value="">{{getPhrase('select')}}</option>

									<option value="radio">{{getPhrase('single_answer')}}</option>

									<option value="checkbox">{{getPhrase('multi_answer')}}</option>

									{{-- <option value="descriptive">Discriptive</option> --}}

									<option value="blanks">{{getPhrase('fill_in_the_blanks')}}</option>

									<option value="match">{{getPhrase('match_the_following')}}</option>

									<option value="para">{{getPhrase('paragraph')}}</option>

									<option value="video">{{getPhrase('video')}}</option>
									<option value="audio">{{getPhrase('audio')}}</option>

								</select>

								</fieldset>

								<fieldset class="form-group col-md-6">

								{{ Form::label('searchTerm', getphrase('search_term')) }}

								{{ Form::text('searchTerm', $value = null , $attributes = array('class'=>'form-control',

						'placeholder' => getPhrase('enter_search_term'),

						'ng-model'=>'searchTerm')) }}

								</fieldset>

								<div class="col-md-12" ng-show="contentAvailable">


							<div ng-if="subjectQuestions!=''" class="vertical-scroll" >


								<h4 class="text-success">Questions @{{ subjectQuestions.length }} </h4>

								<table

								  class="table table-hover">


									<th >{{getPhrase('subject')}}</th>

									<th>{{getPhrase('question')}}</th>

									<th>{{getPhrase('difficulty')}}</th>

									<th>{{getPhrase('type')}}</th>

									<th>{{getPhrase('marks')}}</th>

									<th>{{getPhrase('action')}}</th>

									{{-- <tr ng-repeat="i in subjectQuestions  |  searchTopic:topic| filter: difficulty track by $index"> --}}

									<tr ng-repeat="question in subjectQuestions | filter: { difficulty_level:difficulty, question_type:question_type} | filter: searchTerm track by $index ">

										<td>@{{subject.subject_title}}</td>

										<td

										title="@{{subjectQuestions[$index].question}}" >

										@{{question.question}}

										</td>

										<td>@{{question.difficulty_level | uppercase}}</td>

										<td>@{{question.question_type | uppercase}}</td>

										<td>@{{question.marks}}</td>

										<td><a ng-click="addQuestion(question, subject);" class="btn btn-default">{{getPhrase('add')}}</a>


										  </td>

									</tr>

								</table>

								</div>

					 			</div>

					 		</div>

					</div>
        </div>
      </div>
                    </div>

				<!-- </div> -->
	<!-- /#page-wrapper -->
  <div class="row tile_count">
  <div class="x_panel">
	<!-- <div class="panel panel-custom col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0"> -->
<div class="panel-heading" >

		<h2>{{getPhrase('saved_questions')}}</h2>

	<div class="crearfix selected-questions-details">

		<span class="pull-left">{{getPhrase('saved_questions')}} (@{{savedQuestions.length}})</span>

		<span class="pull-right">{{getPhrase('total_marks')}}: @{{ totalMarks }}</span>

	</div>

	</div>

	{!! Form::open(array('url' => URL_QUIZ_UPDATE_QUESTIONS.$record->slug, 'method' => 'POST')) !!}

					 	<input type="hidden" name="saved_questions" value="@{{savedQuestions}}">

	<div class="panel-body">

		<div class="row">

			<div class="col-md-12 clearfix">

				<div ng-if="savedQuestions!=''" class="vertical-scroll" >

					 				<a class="remove-all-questions text-red" style="cursor: pointer;" ng-click="removeAll()">{{getPhrase('remove_all')}}</a>

					 				<table

								  class="table table-hover">

								  <thead>

								  <tr>

									<th>{{getPhrase('subject')}}</th>

									<th>{{getPhrase('question')}}</th>

									<th>{{getPhrase('marks')}}</th>

									<th></th>

									</tr>

									</thead>

									<tbody>

										<tr ng-repeat="i in savedQuestions track by $index">

										<td>@{{ savedQuestions[$index].subject_title}}</td>

										<td title="@{{ savedQuestions[$index].question}}">@{{ savedQuestions[$index].question  }}</td>

										<td>@{{ savedQuestions[$index].marks}}</td>

										<td><a ng-click="removeQuestion(i)" style="cursor: pointer;" class="btn-outline btn-close text-red"><i class="fa fa-close"></i></a></td>

										</tr>

									</tbody>

									</table>

					 			</div>

					 			<div class="buttons text-center" >

							<button class="btn btn-default">{{getPhrase('update')}}</button>

						</div>

			</div>

		</div>

	</div>

{!! Form::close() !!}
<!-- </div> -->
</div>
</div>
			</div>

		</div>

@stop

@section('footer_scripts')

@include('exams.quiz.scripts.js-scripts')

@stop

@section('custom_div_end')

 </div>

@stop
