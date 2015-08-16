@extends('app')

@section('content')
<H1>SOY CREAR</H1>
{!! Form::open(['url'=>'option']) !!}
@include('options._form',['submitButtonText'=>'Agregar Opción'])
{!! Form::close() !!}
@include('errors.list')
@stop