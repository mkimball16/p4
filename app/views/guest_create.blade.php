@extends('_master')

@section('title')
	Add a new guest
@stop

@section('content')

	<h1>Add a new guest</h1>

	{{ Form::open(array('url' => '/guest_create')) }}
    {{ Form::hidden('id',$party['id']); }}


      {{ Form::label('name','Name') }}
        {{ Form::text('name'); }}

        {{ Form::label('address', 'Address') }}
        {{ Form::text('address'); }} <br/>

        {{ Form::label('email','Email') }}
        {{ Form::text('email'); }}

         {{ Form::label('event','Event') }}
        {{ Form::text('event'); }} <br/>

        {{Form::label ('rsvp', 'RSVP') }}
        {{ Form::radio('rsvp','Yes') }}  Yes  
        {{ Form::radio('rsvp','No') }}  No  <br/>

        {{ Form::submit('Add'); }}

    {{ Form::close() }}


@stop
