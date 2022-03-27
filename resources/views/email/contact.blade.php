<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
@if(!isset($details['phone']))
<h1>Customer Message</h1>
@else
<h1>Guest Message</h1>
@endif


	<p>Subject : {{$details['subject']}}</p>
	@if(isset($details['name']))
	<p>Name : {{$details['name']}}</p>
	@endif
	@if(isset($details['email']))
	<p>Email : {{$details['email']}}</p>
	@endif
	@if(isset($details['phone']))
	<p>Phone : {{$details['phone']}}</p>
	@endif
	<p>Message : {{$details['message']}}</p>
</body>
</html>