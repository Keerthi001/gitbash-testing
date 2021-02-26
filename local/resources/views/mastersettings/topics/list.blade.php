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

							<a href="{{URL_TOPICS_IMPORT}}" class="btn btn-default" >{{ getPhrase('import')}}</a>
							<a href="{{URL_TOPICS_ADD}}" class="btn btn-default" >{{ getPhrase('create')}}</a>

						</div>
						<h3>{{ $title }}</h3>
					</div>
					<div class="panel-body packages">
            <div class="x_title">
					 </div>
					 <div class="x_content xs-col-12">
						<div>
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>


									<th>{{ getPhrase('subject')}}</th>
									<th>{{ getPhrase('parent')}}</th>
									<th>{{ getPhrase('topic (id)')}}</th>
									<th>{{ getPhrase('description')}}</th>
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
			<!-- /.container-fluid -->
		</div>
	</div>
@endsection
<!-- 
<script>
	$.fn.dataTable.ext.errMode = 'throw';
.fn.dataTable.ext.errMode = 'none';
</script>
 -->

@section('footer_scripts')

 @include('common.datatables', array('route'=>'topics.dataTable'))
 @include('common.deletescript', array('route'=>URL_TOPICS_DELETE))

@stop
