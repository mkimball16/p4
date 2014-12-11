@extends('_master')



@section('title')
	Events
@stop

@section('content')

	<h1>Events</h1>
	<p> Below is a list of all your events. You have the option to edit these event(s), delete the event(s), and view the guests.</p>

		
<?php

$party = DB::table('party')->get();
foreach ($party as $p)
{
    if($p->user_id == Auth::user()->id){ ?>

    <h3><?php print_r($p->name_of_event); ?> </h3><p> 
    <strong>Type of event:</strong> <?php print_r($p->type_of_event); ?> <br/>
    <strong>Date of event:</strong> <?php print_r($p->month); ?>/<?php print_r($p->day); ?>/<?php print_r($p->year); ?><br/>
    <strong>Location:</strong> <?php print_r($p->location); ?> <br/>
    <strong>Number of guests:</strong> <?php print_r($p->number_of_guests); ?>

    <p><a href="party_edit/{party_id}">Edit event</a><br />
    <a href="party_delete">Delete event </a><br />
    <a href="guest">View guest list</a></p>

<?php
}
}



		
		
?>
@stop







