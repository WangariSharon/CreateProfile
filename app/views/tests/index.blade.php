@extends('layouts.master')

@section('content')

		<div class="create_container">
		{{--{{ $tests->image }}
		{{ $tests->profile }}--}}
		<table id="first_profile">
		<thead>
		    <tr>
		    	<th>Image</th>
		    	<th>Profile</th>
			</tr>
		</thead>
		<tbody>
		  @foreach($tests as $test)
		    <tr>
		      <td><img src="/uploads/{{$test->image}}" style="width:100px; height:100px;"></td>
		      <td>{{$test->profile}}</td>
		    </tr>
		  @endforeach
		</table>
		<!-- Create Profile -->
		<div id="New_Profile_Link"><a href="/tests/create"><img src="/assets/images/create_small.png" width="100" height="60">Your Profile</a></div>
		</div>
@stop