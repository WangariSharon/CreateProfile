<html>
	
	<head>
	</head>

	<body>
		{{--{{ $tests->image }}
		{{ $tests->profile }}--}}
		<table>
		<thead>
		    <tr>
		    <th>Image</th>
		    <th>Profile</th>
		</thead>
		<tbody>
		  @foreach($tests as $test)
		    <tr>
		      <td><img src="/uploads/{{$test->image}}" style="width:100px; height:100px;"></td>
		      <td>{{$test->profile}}</td>
		    </tr>
		  @endforeach
		</table>
		<div><a href="/tests/create">Create New Profile</a></div>
	</body>
</html>