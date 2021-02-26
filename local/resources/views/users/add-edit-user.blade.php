@extends('layouts.admin.sidebar')
@section('content')
<div class="right_col" role="main">
<div id="page-wrapper">
<div class="container-fluid">
<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<!-- <li><a href="{{PREFIX}}"><i class="fa fa-home"></i></a> </li>
@if(checkRole(getUserGrade(2)))
<li><a href="{{URL_USERS}}">{{ getPhrase('users')}}</a> </li>
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
<div class="panel panel-custom col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0">
<div class="panel-heading">
@if(checkRole(getUserGrade(2)))
<div class="pull-right messages-buttons"><a href="{{URL_USERS}}" class="btn btn-default" >{{ getPhrase('list')}}</a></div>
@endif
<h3>{{ $title }}</h3>
</div>

<div class="panel-body form-auth-style">
<?php $button_name = getPhrase('create'); ?>
@if ($record)
<?php $button_name = getPhrase('update'); ?>
{{ Form::model($record,
array('url' => URL_USERS_EDIT.$record->slug,
'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' )) }}
@else
{!! Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
@endif

@include('users.form_elements', array('button_name'=> $button_name, 'record' => $record))

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
 	var file = document.getElementById('image_input');

file.onchange = function(e){
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch(ext)
    {
        case 'jpg':
        case 'jpeg':
        case 'png':


            break;
        default:
               alertify.error("{{getPhrase('file_type_not_allowed')}}");
            this.value='';
    }
};
 </script>
@stop
