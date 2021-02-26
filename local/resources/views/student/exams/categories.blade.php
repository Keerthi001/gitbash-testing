@extends('layouts.student.studentsidebar')
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
					<!-- <div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							<li class="active"> {{ $title }} </li>
						</ol>
					</div>
				 -->
				 	
				 </div>
				<!-- /.row -->
				<!-- <div class="row tile_count"> -->
				<!-- <div class="x_panel"> -->

				<div class="panel panel-custom">
					<!-- <div class="panel-heading">
						<h1>{{$title}}</h1>
					</div> -->
					<div class="panel-body packages">
						 
						<div class="row library-items">
					<?php $settings = getExamSettings(); ?>
					@if(count($categories))
						@foreach($categories as $c)
							<div class="col-md-3">
								<div class="library-item mouseover-box-shadow">
								<a href="{{URL_STUDENT_EXAMS.$c->slug}}">
									<div class="item-image">
									<?php $image = $settings->defaultCategoryImage;
									if(isset($c->image) && $c->image!='')
										$image = $c->image;
									?>
										<img src="{{ PREFIX.$settings->categoryImagepath.$image}}" alt="" width="100%" height="100%">
									</div>
									<div class="item-details">
										<h3>{{ $c->category }}</h3>
										<div>
											<ul>
											<li><i class="fa fa-bookmark"></i> {{ count($c->quizzes()).' '.getPhrase('exams')}}</li>
											<li><i class="fa  fa-eye"></i> {{getPhrase('view')}}</li>
											</ul>



											<!-- <h5 class="card-text"><i class="icon-bookmark"></i>{{ count($c->quizzes()).' '.getPhrase('quizzes')}}</h5>
                                            <p><i class="icon-eye"></i>
								             {{ getPhrase('view')}}
				                                 </p> -->
										</div>
									
									</div>
								</a>
								</div>
							</div>
							 @endforeach
							@else
						Ooops...! {{getPhrase('No_Categories_available')}}
						
						<a href="{{URL_USERS_SETTINGS.Auth::user()->slug}}" >{{getPhrase('click_here_to_change_your_preferences')}}</a>
						@endif 
						</div>
						@if(count($categories))
						{!! $categories->links() !!}
						@endif
					</div>
				</div>
			<!-- </div> -->
			<div class="luckimage" style="float: left;margin-top: -33%;margin-left: 50%">
			<img src="../../images/da9e0fd2a38613e623f186780c2d3b98.gif">
			</div>
			</div>
			</div>
			
</div>
		<!-- /#page-wrapper -->
</div>
@stop