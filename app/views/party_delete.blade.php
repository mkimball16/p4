@extends('_master')

@section('title')
	Delete an event
@stop

@section('head')

@stop

@section('content')

	<h2>Are you sure you want to delete the <?php echo $party['name_of_event'] ?> party?</h2>

	{{ Form::open(array('url' => '/party_delete')) }}
			{{ Form::hidden('id',$party['id']); }}
			<button onClick='parentNode.submit();return false;'>Yes, please delete</button>
		{{ Form::close() }}
		<p>
		<p>
		<a href='/party/'>No, please take me back to my events</a>
    

	





	


@stop