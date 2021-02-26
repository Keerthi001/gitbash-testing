<div class="customer-form">

{!! Form::open(array('url'=>"example")) !!}
{!! Form::label("Customer Name: ") !!}
{!! Form::text('name', null, array('class'=>'form-control','placeholder'=>"Your name")) !!}
{!! Form::label("Age: ") !!}
{!! Form::number('age', null, array('class'=>'form-control','placeholder'=>"Age")) !!}
{!! Form::submit('submit', array('class'=>'form-control')) !!}
{!! Form::close() !!}

</div>
