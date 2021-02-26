
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

							<a href="{{URL_USERS_IMPORT}}" class="btn btn-default">{{ getPhrase('import_excel')}}</a>
							<a href="{{URL_USERS_ADD}}" class="btn btn-default" >{{ getPhrase('add_user')}}</a>

						</div>
						<h3>{{ $title }}</h3>
					</div>
					<div class="panel-body packages">
						<div class="x_title">
						</div>
						<div class="x_content xs-col-12">
						<table id="example" class="table table-striped table-bordered datatable w-auto" cellspacing="0" width="100%">
							<thead>
								<tr>
								 	<th class="numeric">{{ getPhrase('username')}}</th>
									<th class="numeric">{{ getPhrase('email')}}</th>
									<th class="numeric">{{ getPhrase('phone')}}</th>
									<th class="numeric">{{ getPhrase('role')}}</th>
									<th class="numeric">{{ getPhrase('image')}}</th>
									<th class="numeric">{{ getPhrase('action')}}</th>
								</tr>
							</thead>
							<!-- {{-- <tbody>
									 @foreach($records as $record)
									 <tr>
									 <td>{{$record->username}}</td>
									 <td>{{$record->email}} </td>
									 <td>{{$record->phone}}</td>
									 <td>{{$record->role}}</td>
									 <td>{{$record->image}}</td>
							  	 <td>{{$record->image}}</td>

									 </tr>
							@endforeach
						 </tbody> --}} -->

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
<!--
<script>
	$.fn.dataTable.ext.errMode = 'throw';
.fn.dataTable.ext.errMode = 'none';
</script>
 -->
@section('footer_scripts')
 @include('common.datatables', array('route'=>'users.dataTable'))
 @include('common.deletescript', array('route'=>URL_USERS_DELETE))
@stop
