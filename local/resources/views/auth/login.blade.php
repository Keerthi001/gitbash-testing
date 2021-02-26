
@extends('layouts.site')

 @section('content')
<div class="main_wrapper">
<h1>Indivillage Tech Solutions LLP</h1>
<img src="images/newlogo.png" alt="logo" style="width:40%">
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
<p class="footer">© <?php echo date("Y"); ?> All Right Reserved | Powered by: <a href="http://indivillage.com/" target="_blank"> Indivillage Tech Solutions LLP </a></p>
</div>
<div class="login-content">

		<!-- <div class="logo text-center"><img src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="" height="99" width="211" ></div> -->

		  @include('layouts.site-navigation')
      <div class="login_wrapper flex_custom_wrapper">
              <div class="animate form login_form flex_custom">
                <section class="login_content">
                  <!-- <form> -->
                    <h1>Login Form</h1>
		{!! Form::open(array('url' => URL_USERS_LOGIN, 'method' => 'POST', 'name'=>'formLanguage ', 'novalidate'=>'', 'class'=>"loginform", 'name'=>"loginForm")) !!}
	  @include('errors.errors')

			<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-user"></i></span> -->
  		{{ Form::text('email', $value = null , $attributes = array('class'=>'form-control',

			'ng-model'=>'email',

			'required'=> 'true',
			'id'=> 'email',

		  'placeholder' => getPhrase('email'),

			'ng-class'=>'{"has-error": loginForm.email.$touched && loginForm.email.$invalid}',

		)) }}

	<!-- <div class="validation-error" ng-messages="loginForm.email.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('email')!!}

	</div> -->
			</div>
		<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->

	    		{{ Form::password('password', $attributes = array('class'=>'form-control instruction-call',

			'placeholder' => getPhrase("password"),

			'ng-model'=>'registration.password',

			'required'=> 'true',
			'id'=> 'password',

			'ng-class'=>'{"has-error": loginForm.password.$touched && loginForm.password.$invalid}',

			'ng-minlength' => 5

		)) }}

	<!-- <div class="validation-error" ng-messages="loginForm.password.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

	</div> -->
			</div>

			<div class="text-center buttons">

				<button type="submit" class="btn btn-default submit custom-login" ng-disabled='!loginForm.$valid'>{{getPhrase('login')}}</button>

			</div>

		{!! Form::close() !!}
             <div class="separator">
              </div>

		<div class="footer">

			<a href="javascript:void(0);" class="pull-left" data-toggle="modal" data-target="#myModal" ><i class="icon icon-question"></i> {{getPhrase('forgot_password')}}</a>
		<a href="{{URL_USERS_REGISTER}}" class="pull-right"><i class="icon icon-add-user"></i> {{ getPhrase('register') }}</a>

		</div>

	</div>
	<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

	{!! Form::open(array('url' => URL_FORGOT_PASSWORD, 'method' => 'POST', 'name'=>'formLanguage ', 'novalidate'=>'', 'class'=>"loginform", 'name'=>"passwordForm")) !!}

    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">{{getPhrase('forgot_password')}}</h4>

      </div>

      <div class="modal-body">

        <div class="input-group">

				<span class="input-group-addon" id="basic-addon1"><i class="icon icon-email-resend"></i></span>
		{{ Form::email('email', $value = null , $attributes = array('class'=>'form-control',

			'ng-model'=>'email',

			'required'=> 'true',

			'placeholder' => getPhrase('email'),

			'ng-class'=>'{"has-error": passwordForm.email.$touched && passwordForm.email.$invalid}',

		)) }}

	<div class="validation-error" ng-messages="passwordForm.email.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('email')!!}

	</div>
	</div>

      </div>

      <div class="modal-footer">

      <div class="pull-right">

        <button type="button" class="btn btn-default" data-dismiss="modal">{{getPhrase('close')}}</button>

        <button type="submit" class="btn btn-primary" ng-disabled='!passwordForm.$valid'>{{getPhrase('submit')}}</button>

        </div>

      </div>

    </div>

	{!! Form::close() !!}

  </div>

</div>

 @stop


@section('footer_scripts')

	@include('common.validations')

@stop
