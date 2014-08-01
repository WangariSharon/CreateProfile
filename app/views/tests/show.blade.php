@extends('layouts.master')

@section('content')
	</div>
	<h2>Show Profile</h2>
	<a href="/tests">Back to Profiles</a>
</div>
<!-- Info goes in here -->
<?php $path = "/uploads/"; ?>
<p><img src="/uploads/{{$test->image}}"></p>
<p class="lead">Profile:{{ $test->profile }}</p>


@stop