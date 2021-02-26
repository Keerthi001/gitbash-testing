@extends('layouts.admin.sidebar')

 @section('custom_div')

 <div ng-controller="prepareQuestions">

 @stop

@section('content')
<div class="right_col">
<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->

				<div class="row">

					<div class="col-lg-12">

						<ol class="breadcrumb">

							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

							<li><a href="{{URL_EXAM_SERIES}}">{{ getPhrase('exam_series')}}</a></li>

							<li class="active">{{isset($title) ? $title : ''}}</li>

						</ol>

					</div>

				</div>

					@include('errors.errors')

				<?php $settings = ($record) ? $settings : ''; ?>

				<div class="panel panel-custom col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0" ng-init="initAngData({{$settings}});" >

					<div class="panel-heading">

						<div class="pull-right messages-buttons">

							<a href="{{URL_EXAM_SERIES}}" class="btn btn-default" >{{ getPhrase('list')}}</a>

						</div>

					<h3>{{ $title }}  </h3>

					</div>

					<div class="panel-body" >

					<?php $button_name = getPhrase('create'); ?>

					 		<div class="row">

							<fieldset class="form-group col-md-6">

								{{ Form::label('exam_categories', getphrase('exam_categories')) }}

								<span class="text-red">*</span>

								{{Form::select('exam_categories', $exam_categories, null, ['class'=>'form-control', 'ng-model' => 'category_id',

								'placeholder' => 'Select', 'ng-change'=>'categoryChanged(category_id)' ])}}

							</fieldset>





								<div class="col-md-12">

							<div ng-if="examSeries!=''" class="vertical-scroll" >



								<h4 ng-if="categoryExams.length>0" class="text-success">{{getPhrase('total_exams')}}: @{{ categoryExams.length}} </h4>



								<table

								  class="table table-hover">



									<th>{{getPhrase('exam_name')}}</th>

									<th>{{getPhrase('duration')}}</th>

									<th>{{getPhrase('marks')}}</th>

									<th>{{getPhrase('questions')}}</th>

									<th>{{getPhrase('action')}}</th>


									<tr ng-repeat="exam in categoryExams  track by $index">



										<td

										title="@{{exam.title}}" >

										@{{exam.title}}

										</td>

										<td>@{{exam.dueration}}</td>

										<td>@{{exam.total_marks}}</td>

										<td>@{{exam.total_questions}}</td>

										<td><a



										ng-click="addQuestion(exam);" class="btn btn-default" >{{getPhrase('add')}}</a>



										  </td>



									</tr>

								</table>

								</div>





					 			</div>





					 		</div>



					</div>



				</div>



			<!-- /.container-fluid -->



		<!-- /#page-wrapper -->
<div class="panel panel-custom col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0">
<div class="panel-heading">
		<h2>{{getPhrase('saved_exams')}}</h2>
	<div ng-if="savedSeries.length>0" class="crearfix selected-questions-details">
		<span class="pull-left">{{getPhrase('saved_exams')}} (@{{savedSeries.length}})</span>
		<span class="pull-right">{{getPhrase('total_questions')}}: @{{ totalQuestions }}</span>
	</div>
	 <div ng-if="savedSeries.length==0"  class="crearfix selected-questions-details">
		<span class="pull-left">{{getPhrase('no_data_available')}}</span>
	</div>
	</div>
	{!! Form::open(array('url' => URL_EXAM_SERIES_UPDATE_SERIES.$record->slug, 'method' => 'POST')) !!}
					 	<input type="hidden" name="saved_series" value="@{{savedSeries}}">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12 clearfix">
				<div ng-if="savedSeries!=''" class="vertical-scroll" >

					 				<a class="remove-all-questions text-red" ng-click="removeAll()">{{ getPhrase('remove_all')}}</a>
					 				<table
								  class="table table-hover">
								  <thead>
								  <tr>
									<th>{{getPhrase('title')}}</th>
									<th>{{getPhrase('questions')}}</th>
									<th>{{getPhrase('marks')}}</th>
									<th></th>
									</tr>
									</thead>
									<tbody>
										<tr ng-repeat="i in savedSeries track by $index">
										<td>@{{ savedSeries[$index].title}}</td>
										<td title="@{{ savedSeries[$index].question}}">@{{ savedSeries[$index].total_questions  }}</td>
										<td>@{{ savedSeries[$index].total_marks}}</td>
										<td><a ng-click="removeQuestion(i)" class="btn-outline btn-close text-red"><i class="fa fa-close"></i></a></td>
										</tr>
									</tbody>
									</table>
					 			</div>

					 			<div class="buttons text-center" >
							<button class="btn btn-lg btn-default button">{{getPhrase('update')}}</button>
						</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

	 </div>
	 </div>

@stop

@section('footer_scripts')

@include('exams.examseries.scripts.js-scripts')

@stop



@section('custom_div_end')

 </div>
</div>
@stop
