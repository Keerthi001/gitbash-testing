@extends('layouts.site')

@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
@media (max-width:767px)
{
    .dp_title
    {
        text-align:center;
        margin-bottom:20px;
    }
    .contact_pdf
    {
        text-align: right;
    margin-top: 20px;
    margin-bottom: 20px;
    }
    .img_divv
    {
        text-align:center;
    }
    	.custom-popup-text embed
    	{
    	    display:none !important;
    	}
 .custom_popup
 {
     overflow:scroll;
     width:85% !important;
     background-color:white !important;
 }
 #close-popup
 {
     color:black !important;
 }
  .download_jd h1
{  
  font-size: 25px;
  
}
.download_jd 
{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    padding:30px;
    color:black;
}

.custom_popup
{
    display:flex;
}
}

.download_jd
{
    display:none;
}
input[type="file"] 
{
    display:none;
}
.custom-file-upload {
display: flex;
    align-items: center;
    color:#777 !important;
    font-weight:light !important;
}
.custom-file-upload p
{
    margin-bottom:0px !important;
    margin-left:3px;
}
.custom_popup
{
    
    
	position:fixed;
	top:0;
	bottom:0;
	left:0;
	right:0;

width:100%;
height:100%;
background-color:rgba(0,0,0,0.8);
	margin:auto;
	z-index:1000;

	display:none;
	}
	#close-popup
	{
position:absolute;
right:-50px;
top:0px;
color:white;
font-size:30px;
cursor:pointer;
	}
	.custom-popup-text
	{
	    width:59%;
	    height:100%;
	    margin:auto;
	    position:relative;
	    
	}
	.custom-popup-text embed
	{
	    width:100%;
	    height:100%;
	    
	}
	#my_iframe{
	    
	}
	

@keyframes glowing {
  0% { background-color: #339DFF; box-shadow: 0 0 3px #339DFF; }
  50% { background-color: #339DFF; box-shadow: 0 0 15px #339DFF; }
  100% { background-color: #339DFF; box-shadow: 0 0 3px #339DFF; }
}

.button_jd {
  background-color: blue;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
  margin-bottom:10px;
}
</style>

<div class="custom_popup" id="custom_popup">
    <div class="download_jd">
        <div class="img_divv">
    <img src="images/newlogo.png" alt="logo" style="width:45%"> </div>   
       <p class="dp_title">DATA PROCESSING ANALYST</p>    
    <h1>JOB DESCRIPTION </h1>
    <h2>About IndiVillage:</h2>
    <p>IndiVillage TechSolutions is a 10 year old social enterprise focussed on providing the best in class outsourcing services to blue chip companies worldwide. Our IT & IT Enabled services are Data Projects, Digitization, E-Commerce, Website Design & Development, Natural Language Processing, and Machine Learning.You can read more here <a href="https://www.indivillage.com/services#it-iteservices">https://www.indivillage.com/services#it-iteservices</a>
We are in the process of scaling up across India and out latest centre in raichur will be working on Al related projects. If you are interested in working in Al and making a positive global impact, please apply now.
</p>
<h2>Brief description:</h2>
<p>The position of data processing analyst consists of inputting encoded data or information in computer databases and spreadsheets using a keyboard, a mouse, an optical scanner or voice recognition software.</p>
<h2>Tasks:</h2>
<ul>
<li>Compare data with source documents, or re-enter data in verification format to detect errors.</li>
<li>Compile, sort and verify the accuracy of data before it is entered.</li>
<li>Load machines with required input or output media such as paper, cards, disks, tape.</li>
<li>Locate and correct data entry errors, or report them to supervisors.</li>
<li>Maintain logs of activities and completed work.</li>
<li>Read source documents such as canceled checks, sales reports, or bills, and enter data in specific data fields or onto tapes or disks for subsequent entry, using keyboards or scanners.</li>
<li>Resolve garbled or indecipherable messages, using cryptographic procedures and equipment.</li>
<li>Select materials needed to complete work assignments.</li>
<li>Store completed documents in appropriate locations. </li>
</ul>
<h2>Qualifications and requirements</h2>
<ul>
    <li>Graduation</li>
    <li>Knowledge of Adobe Photoshop or any image editing software is a plus.</li>
    <li>Ability to monitor and assess the performance of other individuals, to give full attention to what other people are saying, and to use logic and reason to identify the strengths and weaknesses of alternative solutions.</li>
   
    
</ul>
<h2>Competencies</h2>
<ul>
    <li>Integrity — Job requires being honest and ethical.</li>
    <li>Attention to Detail — Job requires being careful about detail and thorough in completing work tasks.</li>
    <li>Dependability — Job requires being reliable, responsible, and dependable, and fulfilling obligations.</li>
    <li>Cooperation — Job requires being pleasant with others on the job and displaying a good-natured, cooperative attitude.</li>
    <li>Concern for Others — Job requires being sensitive to others’ needs and feelings and being understanding and helpful on the job.</li>
</ul>
<h2>Lines of communication</h2>
<p>Will be reporting to respective Team leader</p>
<h2>Working conditions</h2>
<ul>
    <li>This position is for full-time employment.</li>
    <li>
        Should be flexible to work in shifts
    </li>
    <li>Minimum 48 working hours per week.</li>
</ul>
<div class="contact_pdf">
    
    <h2>CONTACT US:</h2>
    <p>hr@indivillage.com</p>
    <a href="https://www.indivillage.com/" target="_blank">www.indivillage.com</a>
</div>
      </div>  
        
  <div class="custom-popup-text">
      <embed src="images/JD.pdf#toolbar=0&amp;navpanes=0&amp;scrollbar=0" ></embed>

<p id="close-popup">x</p>

</div>
</div>




<div class="main_wrapper">
<h1>Indivillage Tech Solutions LLP</h1>
<img src="images/newlogo.png" alt="logo" style="width:40%">
<a class="button_jd" id="job_description"  href="#">View Job Description</a>
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

		<!-- <div class="logo text-center"><img src="{{IMAGE_PATH_SETTINGS.getSetting('site_logo', 'site_settings')}}" alt="" height="59" width="211"></div> -->

		<a class="hiddenanchor" id="signup"></a>
	  <a class="hiddenanchor" id="signin"></a>

		  @include('layouts.site-navigation')
     		<!--@include('errors.errors')-->
		<div class="login_wrapper">
	         <div class="animate form login_form">
	           <section class="login_content">
							 <!-- <form> -->
               <h1>Registration Form</h1>
		{!! Form::open(array('url' => URL_USERS_REGISTER, 'method' => 'POST', 'name'=>'formLanguage ', 'novalidate'=>'', 'class'=>"loginform", 'name'=>"registrationForm", 'enctype'=>"multipart/form-data")) !!}

			<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-user"></i></span> -->
<!-- {{ Form::text('name', $value = null , $attributes = array('class'=>'form-control',

			'placeholder' => getPhrase("name"),

			'ng-model'=>'name',

			'ng-pattern' => getRegexPattern('name'),

			'required'=> 'true',

			'ng-class'=>'{"has-error": registrationForm.name.$touched && registrationForm.name.$invalid}',

			'ng-minlength' => '4',

		)) }} -->

	<!-- <div class="validation-error" ng-messages="registrationForm.name.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('minlength')!!}

		{!! getValidationMessage('pattern')!!}

	</div> -->
		</div>
		<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-user"></i></span> -->
			<span class="text-danger">{{ $errors->first('username') }}</span>
	{{ Form::text('username', $value = null , $attributes = array('class'=>'form-control',

			'placeholder' => getPhrase("full name"),

		
			'required'=> 'true',

			
			'ng-minlength' => '1',

		)) }}
		 

	<!-- <div class="validation-error" ng-messages="registrationForm.username.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('minlength')!!}

		{!! getValidationMessage('pattern')!!}

	</div> -->
		</div>
		<div>
		<span class="text-danger">{{ $errors->first('aadhar_number') }}</span>
	   	{{ Form::text('aadhar_number', $value = null , $attributes = array('class'=>'form-control formclass',

	     'placeholder' => "UID (Aadhaar)",



	     'required'=> 'true',

	     

	     'ng-minlength' => '12',

       )) }}
       
       
       </div>
       <div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->
   <span class="text-danger">{{ $errors->first('phone') }}</span>
				{{ Form::text('phone', $value = null , $attributes = array('class'=>'form-control',

			'placeholder' => getPhrase("phone"),

		

			'required'=> 'true',


			'ng-minlength' => '10',

		)) }}
		
		


	<!-- <div class="validation-error" ng-messages="registrationForm.password_confirmation.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('minlength')!!}

		{!! getValidationMessage('confirmPassword')!!}

	</div> -->

			</div>
				<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-email-resend"></i></span> -->
		<span class="text-danger">{{ $errors->first('email') }}</span>

			{{ Form::email('email', $value = null , $attributes = array('class'=>'form-control formclass',

			'placeholder' => getPhrase("email"),

		

			'required'=> 'true',

			'ng-class'=>'{"has-error": registrationForm.email.$touched && registrationForm.email.$invalid}',

		)) }}

	<!-- <div class="validation-error" ng-messages="registrationForm.email.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('email')!!}

	</div> -->
  </div>
										<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->
		<span class="text-danger">{{ $errors->first('password') }}</span>
	{{ Form::password('password', $attributes = array('class'=>'form-control formclass instruction-call',

			'placeholder' => getPhrase("password"),


			'required'=> 'true',

			'ng-class'=>'{"has-error": registrationForm.password.$touched && registrationForm.password.$invalid}',

			'ng-minlength' => 3

		)) }}

	<!-- <div class="validation-error" ng-messages="registrationForm.password.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

	</div> -->
		</div>
										<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->
    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
				{{ Form::password('password_confirmation', $attributes = array('class'=>'form-control formclass instruction-call',

			'placeholder' => getPhrase("password_confirmation"),

		

			'required'=> 'true',

			'ng-class'=>'{"has-error": registrationForm.password_confirmation.$touched && registrationForm.password_confirmation.$invalid}',

			'ng-minlength' => 3,

			'compare-to' =>"registration.password"

		)) }}



	<!-- <div class="validation-error" ng-messages="registrationForm.password_confirmation.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('minlength')!!}

		{!! getValidationMessage('confirmPassword')!!}

	</div> -->

			</div>
		
			<div class="clearfix"></div>

		              <div class="separator">
		                <p class="change_link">
		                  <a href="#signup" class="to_register next"> Next </a>
		                </p>

		                <div class="clearfix"></div>

		              </div>
	<br>

		<!-- <a href="{{URL_USERS_LOGIN}}"><p class="text-center">{{getPhrase('Already have an account? Login')}} </p></a> -->
	</div>
</section>



			<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-user"></i></span> -->

			<div id="register" class="animate form registration_form">
			          <section class="login_content">
			          	{!! Form::open(array('url' => URL_USERS_REGISTER, 'method' => 'POST', 'name'=>'formLanguage ', 'novalidate'=>'', 'class'=>"loginform", 'name'=>"registrationForm")) !!}
			            <!-- <form> -->
			            	<h1>Registration Form</h1>
			            	
			<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->
		<span class="text-danger">{{ $errors->first('college') }}</span>
	{{ Form::text('college', $value = null , $attributes = array('class'=>'form-control formclass',

			'placeholder' => getPhrase("college name"),


			'ng-minlength' => '1',

		)) }}
	

	<!-- <div class="validation-error" ng-messages="registrationForm.password.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

	</div> -->
		</div>
			     	<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->
		<span class="text-danger">{{ $errors->first('branch') }}</span>
	{{ Form::text('branch', $value = null , $attributes = array('class'=>'form-control formclass',

			'placeholder' => getPhrase("branch"),


			'ng-minlength' => '1',

		)) }}
		

	<!-- <div class="validation-error" ng-messages="registrationForm.password.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('password')!!}

	</div> -->
		</div>
		<div>

				<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-email-resend"></i></span> -->
		<span class="text-danger">{{ $errors->first('rollnumber') }}</span>
			{{ Form::text('rollnumber', $value = null , $attributes = array('class'=>'form-control formclass',

			'placeholder' => getPhrase("Registration number"),

			'ng-minlength' => '1',

		)) }}
		
	<!-- <div class="validation-error" ng-messages="registrationForm.email.$error" >

		{!! getValidationMessage()!!}

		{!! getValidationMessage('email')!!}

	</div> -->
  </div>
  			<div>
  			    <span class="text-danger">{{ $errors->first('image') }}</span>
  			                  
                          <fieldset class="form-group" >
           
<input type="file" class="form-control custom-file" name="image"
					 accept="" id="image" title="Image size should not be more than 120X120">
     <label for="image" class="custom-file-upload formclass">
    <i class="fa fa-cloud-upload"></i><P>Upload Your Photo (120x120)</P>
</label>

			             </fieldset>
			             
			             </div>
   <div >

					<!-- <span class="input-group-addon" id="basic-addon1"><i class="icon icon-lock"></i></span> -->
             <span class="text-danger">{{ $errors->first('place') }}</span>

					<select id="make" name="place" class="form-control">
	    		    	<option value="" disabled selected>Interested Work Place</option>
	    		        <option value="Yemmiganur">Yemmiganur</option>
	    		        <option value="Raichur">Raichur</option>
	    		         <option value="Both">Both</option>
	 		    </select>


           

		<!-- <div class="validation-error" ng-messages="registrationForm.password_confirmation.$error" >

			{!! getValidationMessage()!!}

			{!! getValidationMessage('minlength')!!}

			{!! getValidationMessage('confirmPassword')!!}

		</div> -->

				</div>
				<br>
		<span class="text-danger">{{ $errors->first('night_shift') }}</span>
						<div class="radio_wrapper">
					Flexible To Work At Night Shift:
				<input type="radio" name="night_shift" value="Yes" >Yes&nbsp;&nbsp;

       <input type="radio" name="night_shift" value="No">No
       
              </div>
             
	<br>
			
					<?php $parent_module = getSetting('parent', 'module'); ?>

							@if(!$parent_module)

						<input type="hidden" name="is_student" value="0">

					    	@else

						<div class="row">


						<!-- <div class="col-md-6">

						{{ Form::radio('is_student', 1, false, array('id'=>'paid' )) }}

						<label for="paid">

			 <span class="fa-stack radio-button"> <i class="mdi mdi-check active"></i> </span> {{getPhrase('i_am_an_owner')}} </label>

						</div> -->

						</div>

						@endif
<div class="button_wrapper">
					<div class="text-center buttons">

			<button type="submit"  class="btn btn-default submit" id="register_click" ng-disabled='!registrationForm.$valid'>{{getPhrase('register_now')}}</button>
</div>
			<div class="separator">
	 		 <!-- <p class="change_link"><a href="{{URL_USERS_LOGIN}}"><p class="text-center">{{getPhrase('Already have an account? Login')}} </p></a> -->
	 			 <a href="#signin" class="to_register previous"> Previous </a>
	 		 </p>

	 		 <div class="clearfix"></div>

	 	 </div>
						</div>

									{!! Form::close() !!}


            <div class="clearfix"></div>


						</section>
		</div>
	</div>
	
	<script>
	$(document).ready(function() {
		$('#job_description').click(function(){
				$('#custom_popup').show();
			
		})
$('#close-popup').click(function(){
	$('#custom_popup').hide();
})
	});
$(".custom-file").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-upload").addClass("selected").html(fileName);
});	
if ($(window).width() < 768) {
  	$('#job_description').click(function(){
				
				$('.download_jd').show();
		})  
}
	</script>	
	

@stop



@section('footer_scripts')

	@include('common.validations')

@stop
