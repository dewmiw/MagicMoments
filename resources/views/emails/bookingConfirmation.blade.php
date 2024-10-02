<!DOCTYPE html>
<html>
<head>
    <title>Event Booking Confirmation</title>
</head>
<body>
<h1>Event Booking Details</h1>
<p>Dear {{ $bookingData['name'] }},</p>
<p>Thank you for booking your event with us! Here are the details of your booking:</p>
<ul>
    <li><strong>Name:</strong> {{ $bookingData['name'] }}</li>
    <li><strong>Email:</strong> {{ $bookingData['email'] }}</li>
    <li><strong>Phone:</strong> {{ $bookingData['phone'] }}</li>
    <li><strong>Event Type:</strong> {{ $bookingData['event_type'] }}</li>
    <li><strong>Event Date:</strong> {{ $bookingData['event_date'] }}</li>
    <li><strong>Location:</strong> {{ $bookingData['location'] }}</li>

</ul>
<p>We look forward to making your event unforgettable!</p>
</body>
</html>
