@extends('layouts.admin.sidebar')
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
@stop
@section('content')

<div class="right_col">
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<!-- <ol class="breadcrumb">
							<li><a href="{{url('/')}}"><i class="mdi mdi-home"></i></a> </li>
							<li><a href="{{URL_QUIZ_QUESTIONBANK}}">{{ getPhrase('question_subjects') }}</a></li>
							<li><a href="{{URL_QUESTIONBAMK_IMPORT}}">{{ getPhrase('import_questions') }}</a></li>
							<li>{{ $title }}</li>
						</ol> -->
					</div>
				</div>

				<!-- /.row -->
				<div class="row tile_count">
				<div class="x_panel">
				<!-- <div class="panel panel-custom col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0"> -->
					<div class="panel-heading">

						<div class="pull-right messages-buttons">

							<a href="{{URL_QUESTIONBANK_ADD_QUESTION.$subject->slug}}" class="btn btn-default" >{{ getPhrase('create')}}</a>

						</div>
						<h3>{{ $title }}</h3>
					</div>
					<div class="panel-body packages">
						<div class="">
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>

									<th>{{ getPhrase('subject')}}</th>
									<th>{{ getPhrase('topic')}}</th>
									<th>{{ getPhrase('type')}}</th>
									<th>{{ getPhrase('question')}}</th>
									<th>{{ getPhrase('marks')}}</th>
									<th>{{ getPhrase('difficulty')}}</th>
									<th>{{ getPhrase('action')}}</th>

								</tr>
							</thead>

						</table>
						</div>

					</div>
						<!-- </div> -->
				</div>

		</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		</div>
@endsection


@section('footer_scripts')
  {{-- <script src="{{JS}}bootstrap-toggle.min.js"></script>
 	<script src="{{JS}}jquery.dataTables.min.js"></script>
	<script src="{{JS}}dataTables.bootstrap.min.js"></script> --}}
 @include('common.datatables', array('route'=>URL_QUESTIONBANK_GETQUESTION_LIST.$subject->slug, 'route_as_url' => 'TRUE'))
 @include('common.deletescript', array('route'=>URL_QUESTIONBANK_DELETE))



@stop
