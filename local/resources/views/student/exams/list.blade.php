@extends('layouts.student.studentsidebar')
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
@stop
@section('content')
<style>
footer
{
position: fixed;
bottom: 0;
}
body {
    color: white;
    overflow: hidden;
}

</style>
<div class="right_col">
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<!-- <ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="fa fa-home"></i></a> </li>
							
							<li><a href="{{URL_STUDENT_EXAM_CATEGORIES}}"> {{getPhrase('exam_categories')}} </a> </li>

							<li>{{ $title }}</li>
						</ol> -->
					</div>
				</div>
								
				<!-- /.row -->
				<div class="x_panel">
				<!-- <div class="panel panel-custom"> -->
					<div class="panel-heading">
						
					 
						<h1>{{ $title }}</h1>
					</div>
					<div class="panel-body packages">
						<div> 
						  <?php   
						  		$user = Auth::user(); 
						  		 $interested_categories      = null;
						        if($user->settings)
						        {
						          $interested_categories =  json_decode($user->settings)->user_preferences;
						        }

						  ?>
						  @if($interested_categories->quiz_categories)
						  <div class="responsive">
						<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>{{ getPhrase('title')}}</th>
									<th>{{ getPhrase('duration')}}</th>
									<th>{{ getPhrase('category')}}</th>
									<th>{{ getPhrase('total_questions')}}</th>
									<th>{{ getPhrase('action')}}</th>
								  
								</tr>
							</thead>
							 
						</table>
						</div>
						@else
							Ooops...! {{getPhrase('no_exams_available')}}
						
						<a href="{{URL_USERS_SETTINGS.Auth::user()->slug}}" >{{getPhrase('click_here_to_change_your_preferences')}}</a>
						@endif
						</div>

					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		</div>
@endsection
 

@section('footer_scripts')
@if($interested_categories)
  @if($category)
	 @include('common.datatables', array('route'=>URL_STUDENT_QUIZ_GETLIST.$category->slug, 'route_as_url' => TRUE))
	 @else
	 @include('common.datatables', array('route'=>URL_STUDENT_QUIZ_GETLIST_ALL, 'route_as_url' => TRUE))
	 @endif
	 @include('common.deletescript', array('route'=>URL_QUIZ_DELETE))
 @endif
<script>
function showInstructions(url) {
	window.open(url,'_blank',"width=1366,height=800, toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, requestFullscreen");
	runner();
}

function runner()
{
	url = localStorage.getItem('redirect_url');
    if(url) {
      localStorage.clear();
       window.location = url;
    }
    setTimeout(function() {
          runner();
    }, 500);

}
</script>
@stop
