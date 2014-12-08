@extends('_master')

@section('title')
	Add a new event
@stop

@section('content')

	<h1>Add a new event</h1>

	{{ Form::open(array('url' => '/party_create')) }}

		{{ Form::label('name_of_event','Name of Event') }}
		{{ Form::text('name_of_event'); }}

		{{ Form::label('type_of_event','Type of Event') }}
		{{ Form::radio('type_of_event', 'Engagement Party') }}Engagement Party
		{{ Form::radio('type_of_event', 'Rehearsal Dinner') }}Rehearsal Dinner
		{{ Form::radio('type_of_event', 'Wedding') }}Wedding
		{{ Form::radio('type_of_event', 'Anniversary Party') }}Anniversary Party
		{{ Form::radio('type_of_event', 'Birthday Party') }}Birthday Party
		{{ Form::radio('type_of_event', 'Bar Mitzvah/Bat Mitzvah') }}Bar Mitzvah/Bat Mitzvah
		{{ Form::radio('type_of_event', 'Retirement Party') }}Retirement Party
		{{ Form::radio('type_of_event', 'Corporate Function') }}Corporate Function


		{{ Form::label('date','Date') }}
		{{ Form::selectMonth('month'); }}
		{{ Form::selectRange('day', 1, 31);}}
		{{ Form::selectRange('year', 2014, 2020);}}

		{{ Form::label('location','Location/Venue') }}
		{{ Form::text('location'); }}

		{{ Form::label('number_of_guests','Number of Guests') }}
		{{ Form::text('number_of_guests'); }}

		{{ Form::submit('Add'); }}



	{{ Form::close() }}

@stop
