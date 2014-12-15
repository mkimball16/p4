@extends('_master')

@section('title')
	Add a new guest
@stop

@section('content')

	<h1>Add a new guest</h1>

	{{ Form::open(array('url' => '/guest_create')) }}
   


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

        {{ Form::submit('Add'); }}

    {{ Form::close() }}

@stop
