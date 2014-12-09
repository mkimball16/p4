@extends('_master')

@section('title')
	Edit guest information
@stop

@section('head')

@stop

@section('content')

	<h1>Edit</h1>
	<h2>{{{ $guest['name'] }}}</h2>

	{{ Form::open(array('url' => '/guest_edit')) }}

		{{ Form::hidden('id',$guest['id']); }}

		{{ Form::label('name','Name') }}
        {{ Form::text('name'); }}

        {{ Form::label('address', 'Address') }}
        {{ Form::text('address'); }}

        {{ Form::label('email','Email') }}
        {{ Form::text('email'); }}

         {{ Form::label('event','Event') }}
        {{ Form::text('event'); }}

        {{Form::label ('rsvp', 'RSVP') }}
        {{ Form::radio('rsvp','Yes') }}Yes
        {{ Form::radio('rsvp','No') }}No

		{{ Form::submit('Save'); }}

	{{ Form::close() }}

@stop