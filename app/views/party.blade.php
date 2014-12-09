@extends('_master')

@section('title')
	Events
@stop

@section('content')

	<h1>Events</h1>
	<p> Need to list all users parties here with an option to edit party, view guests, and edit the guests.</p>

		{{ $party = Party::all(); }}

		@foreach($party as $party)

			<section class='party'>

				<h2>{{ $party['name_of_event'] }}</h2>
				<p>
					<strong>Date of event:</strong> {{ $party['month']}}/{{ $party['day']}}/{{ $party['year'] }} <br>
					<strong>Type of event:</strong>  {{ $party['type_of_event'] }}<br>
					<strong>Location:</strong>  {{ $party['location'] }}<br>
					<strong>Number of guests:</strong>  {{ $party['number_of_guests'] }}<br>

				</p>
				<p>
					<a href='/party_edit'>Edit</a><br />
					<a href='/guest_create'>Add guests</a><br />
					<a href='/guest'>View guest list</a>
				</p>

			</section>
		@endforeach

@stop







