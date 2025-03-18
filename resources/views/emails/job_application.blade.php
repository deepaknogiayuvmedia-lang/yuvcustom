<!DOCTYPE html>
<html>
<head>
    <title>New Job Application</title>
</head>
<body>
    <h2>New Job Application Received</h2>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Job Role:</strong> {{ $details['job_role'] }}</p>
    <p><strong>Message:</strong> {{ $details['message'] ?? 'No message provided' }}</p>
    <p>The applicant's resume is attached to this email.</p>
</body>
</html>
