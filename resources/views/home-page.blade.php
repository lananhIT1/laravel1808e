<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>demo Laravel</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<li>
			<!-- <a href="{{route('homePage')}}">Home</a> -->
			<a href="{{url('home-page')}}">Home</a>
		</li>
		<li>
			<!-- <a href="{{route('contactPage')}}">Contact</a> -->
			<a href="{{url('contact-page')}}">Contact</a>
		</li>
	</ul>
</body>
</html>