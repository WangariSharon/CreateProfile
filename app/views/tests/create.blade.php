@extends('layouts.master')

@section('content')

{{ Form::open(array('route' => 'tests.store', 'files' => true, 'enctype' => 'multipart/form-data')) }}
	<div class="form-group">
		{{ Form::label('Image') }}
		{{ Form::file('image', null, array('class' => 'form-control')) }}
	</div>
	
	<div class="form-group">
		{{ Form::label('Profile') }}
		{{ Form::textarea('profile' ,null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::submit('Create my Profile', array('class' => 'btn btn-primary')) }}
	</div>
{{ Form::close() }}

@stop