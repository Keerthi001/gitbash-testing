@extends('layouts.student.studentsidebar')

@section('header_scripts')

@stop

@section('content')
<style>
.social_wrapper
{
display:flex;
align-items:center;
justify-content:center;
}
.social a
{
padding-left:10px;
}
 footer
{
position: fixed;
bottom: 0;
}
body {
    color: white;
    overflow: hidden;
}   
    .panel-body
    {
       margin-top:60px;
    }
</style>

<div id="page-wrapper">

			<div class="container-fluid">

				<!-- Page Heading -->

				<div class="row">

					<div class="col-lg-12">

						<!-- <ol class="breadcrumb">

							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

							<li> <a href="{{URL_STUDENT_EXAM_CATEGORIES}}"> {{ getPhrase('exams') }} </a></li>

							<li class="active"> {{$title}} </li>

						</ol> -->

					</div>

				</div>

				<!-- /.row -->

				<div class="panel panel-custom">

					<!-- <div class="panel-heading">

						<h1>{{getPhrase('result_for'). ' '.$title}}</h1></div> -->

					<div class="panel-body">

							<div class="profile-details text-center">

							<div class="profile-img"><img src="{{ getProfilePath($user->image,'thumbnail')}}" alt=""></div>

							<div class="aouther-school">

								<h2>Thank You {{ $user->username}}</h2>
                                
			         <!--  <h2 style="text-align:center;font-size:30px">Hope to see you soon at IndiVillage</h2> -->


<div class="social_wrapper">
<h3>Follow us:</h3>
<div class="social">
<a href="https://twitter.com/Indivillage" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="https://www.facebook.com/IndiVillage" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="http://instagram.com/indivillage_" target="_blank">	<i class="fa fa-instagram"></i></a>
<a href="https://in.linkedin.com/company/indivillage-tech-solutions-pvt.-ltd." target="_blank">	<i class="fa fa-linkedin"></i></a>
<a href="https://www.youtube.com/channel/UCX-xx_Gayyw_CiNFWGMJ_gw" target="_blank">	<i class="fa fa-youtube"></i></a>
</div>
</div>
							</div>



						</div>
                        
					

						<div class="panel-body">

						<ul class="library-statistic">

							<li class="total-books">

								<!-- {{getPhrase('score') }} <span>{{$record->marks_obtained}} / {{$record->total_marks}}</span> -->


							</li>

							<li class="total-journals">

								<!-- {{getPhrase('percentage')}} <span><?php echo sprintf('%0.2f', $record->percentage); ?></span> -->

							</li>

							<li class="digital-items">

							<?php $grade_system = getSettings('general')->gradeSystem; ?>

								<!-- {{ getPhrase('result')}} <span>{{  ucfirst($record->exam_status) }}</span> -->

							</li>

						</ul>



					<!-- <div class="row" >

					<div class="col-md-6">


						 @if(isset($marks_data))

	 						<div class="row">



							<?php $ids=[];?>

							@for($i=0; $i<count($marks_data); $i++)

							<?php

							$newid = 'myMarksChart'.$i;

							$mark_ids[] = $newid; ?>





								<canvas id="{{$newid}}" width="100" height="60"></canvas>





							@endfor

							</div>

						@endif



					</div>

					<div class="col-md-6">



					@if(isset($time_data))

	 						<div class="row">



							<?php $ids=[];?>

							@for($i=0; $i<count($time_data); $i++)

							<?php

							$newid = 'myTimeChart'.$i;

							$time_ids[] = $newid; ?>

								<canvas id="{{$newid}}" width="100" height="60"></canvas>

							@endfor

							</div>

						@endif



					</div>

					</div> -->

					<br/>

					<!-- <div class="row">

						<div class="col-lg-12 text-center">

							<a onClick="setLocalItem('{{URL_RESULTS_VIEW_ANSWERS.$quiz->slug.'/'.$record->slug}}')" href="javascript:void(0);" class="btn t btn-primary">{{ getPhrase('view_key') }}</a>

						</div>

					</div> -->

					</div>





					</div>



				</div>

			</div>

			<!-- /.container-fluid -->

		</div>

		<!-- /#page-wrapper -->

	</div>

	<!-- /#wrapper -->



@stop



@section('footer_scripts')

   <script src="{{JS}}chart-vue.js"></script>



@if(isset($marks_data))

	@include('common.chart', array('chart_data'=>$marks_data,'ids' => $mark_ids));

@endif

@if(isset($time_data))

	@include('common.chart', array('chart_data'=>$time_data,'ids' => $time_ids));

@endif

<script>
function setLocalItem(url) {
	localStorage.setItem('redirect_url',url);
	window.close();
}
</script>

@stop
