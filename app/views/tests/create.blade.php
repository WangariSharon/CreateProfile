@extends('layouts.master')

@section('content')
		
<div class="create_container">
	<div id="New_Profile_Link_Two">
		<a href="/tests">Back to Profiles</a>
	</div><hr>
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
</div>
</div>
	<!-- 	<h2>Show Profile</h2>
		<a href="/tests">Back to Profiles</a>
	</div -->>

@stop