@extends('_master')

@section('title')
	Edit an event
@stop

@section('head')

@stop

@section('content')

	<h1>Edit</h1>
	<h2><?php echo $party['name_of_event'] ?></h2>

	

	{{ Form::open(array('url' => '/party_edit', )) }}
	{{ Form::hidden('id',$party['id']); }}


		{{ Form::label('name_of_event','Name of Event') }}
		{{ Form::text('name_of_event'); }} <br/>

		{{ Form::label('type_of_event','Type of Event') }}<br/>
		{{ Form::radio('type_of_event', 'Engagement Party') }}  Engagement Party  
		{{ Form::radio('type_of_event', 'Rehearsal Dinner') }}  Rehearsal Dinner  
		{{ Form::radio('type_of_event', 'Wedding') }}  Wedding  
		{{ Form::radio('type_of_event', 'Anniversary Party') }}  Anniversary Party  <br/>
		{{ Form::radio('type_of_event', 'Birthday Party') }}  Birthday Party  
		{{ Form::radio('type_of_event', 'Bar Mitzvah/Bat Mitzvah') }}  Bar Mitzvah/Bat Mitzvah  
		{{ Form::radio('type_of_event', 'Retirement Party') }}  Retirement Party  
		{{ Form::radio('type_of_event', 'Corporate Function') }}  Corporate Function  <br/>


		{{ Form::label('date','Date') }}
		{{ Form::selectMonth('month'); }}
		{{ Form::selectRange('day', 1, 31);}}
		{{ Form::selectRange('year', 2014, 2020);}}<br/>

		{{ Form::label('location','Location/Venue') }}
		{{ Form::text('location'); }}<br/>

		{{ Form::label('number_of_guests','Number of Guests') }}
		{{ Form::text('number_of_guests'); }}<br/>

		{{ Form::submit('Add'); }}



	{{ Form::close() }}
	


@stop