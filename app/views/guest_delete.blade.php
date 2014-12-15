@extends('_master')

@section('title')
	Delete a guest
@stop

@section('head')

@stop

@section('content')

	<h2>Are you sure you want to delete  <?php echo $guest['name'] ?>?</h2>

	{{ Form::open(array('url' => '/guest_delete')) }}
			{{ Form::hidden('id',$guest['id']); }}
			<button onClick='parentNode.submit();return false;'>Yes, please delete</button>
		{{ Form::close() }}
		<p>
		<p>
		<a href='/party/'>No, please take me back to my events</a>
    

	





	


@stop