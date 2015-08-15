@extends('app')

@section('content')
	<H1>SOY CREAR</H1>
	{!! Form::open(['url'=>'option']) !!}
	<div class="form-group">
		{!! Form::label('codigo','Codigo:') !!}
		{!! Form::text('codigo',null,['class'=>'form-control', 'foo'=>'bar']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('cuerpo','Cuerpo:') !!}
		{!! Form::textarea('cuerpo',null,['class'=>'form-control', 'foo'=>'bar']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('correcta','Es la opcion Correcta:') !!}<br/>
		{!! Form::label('correcta','SI:') !!}
		{!! Form::radio('correcta', 'true') !!}
		{!! Form::label('correcta','NO:') !!}					
		{!! Form::radio('correcta', 'false', true) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Agregar Opcion',['class'=>'btn btn-primary form-control']) !!}		
	</div>
	
	{!! Form::close() !!}
@stop