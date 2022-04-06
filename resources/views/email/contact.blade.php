<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
@if(!isset($details['phone']))
<h3>Customer Message</h3>
@else
<h3>Guest Message</h3>
@endif

	<p>Subject: {{$details['subject']}}</p>
	@if(isset($details['name']))
	<p>Name: {{$details['name']}}</p>
	@endif
	@if(isset($details['email']))
	<p>Email: {{$details['email']}}</p>
	@endif
	@if(isset($details['phone']))
	<p>Phone: {{$details['phone']}}</p>
	@endif
	<p>Message: {{$details['message']}}</p>

</body>
</html>