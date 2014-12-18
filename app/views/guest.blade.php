@extends('_master')

@section('title')
	Guests
@stop

@section('content')

	<h1>Guests</h1>
	<p> Below is a list of your guest for the party. You have the option to edit guest information and delete a guest.</p>
	
<?php


$party = DB::table('party')->get();

$guest = DB::table('guests')->get();
foreach ($guest as $g)
{
    if($g->party_id == $id) 
    { ?>
    <div class="guest">	

    <h3><?php print_r($g->name); ?> </h3><p> 
    <strong>Address:</strong> <?php print_r($g->address); ?> <br/>
    <strong>Email:</strong> <?php print_r($g->email); ?><br/>
    <strong>Event:</strong> <?php print_r($g->event); ?> <br/>
    <strong>RSVP:</strong> <?php print_r($g->rsvp); ?>

    <p><a href="{{ action('GuestController@getEdit', $g->id) }}">Edit guest</a><br />
    	<a href="{{ action('GuestController@getDelete', $g->id) }}"> Delete guest</a>
</div>

<?php
}
}
?>


@stop







