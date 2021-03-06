@extends('layouts.admin.sidebar')
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
@stop
@section('content')

<div class="right_col" role="main" style="min-height: 1714px;">
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<!-- <ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li>{{ $title }}</li>
						</ol> -->
					</div>
				</div>

				<!-- /.row -->
				<div class="row tile_count">
				<div class="x_panel">
				<!-- <div class="panel panel-custom"> -->
					<div class="panel-heading">

						<div class="pull-right messages-buttons">
							<a href="{{URL_EXAM_SERIES_ADD}}" class="btn btn-default" >{{ getPhrase('create')}}</a>
						</div>
						<h3>{{ $title }}</h3>
					</div>
					<div class="panel-body packages">
						<div class="x_title">
						</div>
					<div>
							<div class="x_content xs-col-12">
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>{{ getPhrase('title')}}</th>
									<th>{{ getPhrase('image')}}</th>
									<th>{{ getPhrase('is_paid')}}</th>
									<th>{{ getPhrase('cost')}}</th>
									<th>{{ getPhrase('validity')}}</th>
									<th>{{ getPhrase('total_exams')}}</th>
									<th>{{ getPhrase('total_questions')}}</th>

									<th>{{ getPhrase('action')}}</th>

								</tr>
							</thead>

						</table>
						</div>

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

<!-- <script>
	$.fn.dataTable.ext.errMode = 'throw';
.fn.dataTable.ext.errMode = 'none';
</script>
 -->

@section('footer_scripts')

 @include('common.datatables', array('route'=>URL_EXAM_SERIES_AJAXLIST, 'route_as_url' => TRUE))
 @include('common.deletescript', array('route'=>URL_EXAM_SERIES_DELETE))

@stop
