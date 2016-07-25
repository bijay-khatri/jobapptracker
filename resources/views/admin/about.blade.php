<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
</head>
<body>
<ul>
	@unless(empty($members))
		@foreach ($members as $m)
			<li>{{$m}}</li>
		@endforeach
	@endunless
</ul>
	
</body>
</html>