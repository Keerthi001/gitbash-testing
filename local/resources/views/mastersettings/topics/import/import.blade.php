@extends('layouts.admin.sidebar')

@section('content')
<div class="right_col" role="main" style="min-height: 1714px;">
<div id="page-wrapper">
			<div class="container-fluid">
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<!-- <li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>
							@if(checkRole(getUserGrade(2)))
							<li><a href="{{URL_TOPICS}}">{{ getPhrase('topics')}}</a> </li>
							<li class="active">{{isset($title) ? $title : ''}}</li>
							@else
							<li class="active">{{$title}}</li>
							@endif -->
						</ol>
					</div>
				</div>
					@include('errors.errors')
				<!-- /.row -->
              <div class="x_panel">
							<!-- <div class="panel panel-custom"> -->
					<div class="panel-heading">
					@if(checkRole(getUserGrade(2)))
						<div class="pull-right messages-buttons">

							<a href="{{URL_TOPICS}}" class="btn btn-default" >{{ getPhrase('list')}}</a>

						</div>
						@endif
					<h1>{{ $title }}  </h1>
					</div>

					<div class="panel-body text-center">

					<a href="{{DOWNLOAD_LINK_TOPICS_IMPORT_EXCEL}}" class="btn btn-info">{{getPhrase('download_template')}}
					</a>

					<?php $button_name = getPhrase('upload'); ?>

						{!! Form::open(array('url' => URL_TOPICS_IMPORT, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}


						<div class="row">

					<fieldset class='col-sm-4 col-sm-offset-4 form-group margintop30'>
						{{ Form::label('excel', getphrase('upload').' Excel') }}


					{!! Form::file('excel', array('class'=>'form-control','id'=>'excel_input', 'accept'=>'.xls,.xlsx')) !!}



					</fieldset>
					  </div>

						<div class="buttons text-center">
							<button class="btn btn-default"
							ng-disabled='!formUsers.$valid'>{{ $button_name }}</button>
						</div>


					{!! Form::close() !!}
					</div>
				<!-- </div> -->
			</div>
			</div>
			<!-- /.container-fluid -->
		</div>
	</div>
		<!-- /#page-wrapper -->
@endsection

@section('footer_scripts')
 @include('common.validations')
  @include('common.alertify')
 <script>
 	var file = document.getElementById('excel_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'xls':
        case 'xlsx':

            break;
        default:
             alertify.error("{{getPhrase('file_type_not_allowed')}}");
            this.value='';
    }
};
 </script>
@stop
