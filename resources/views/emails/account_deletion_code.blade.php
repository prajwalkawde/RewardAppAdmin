<!DOCTYPE html>
<html>
<head>
    <title>Account Deletion Code</title>
</head>
<body>
    <p>Dear User,</p>
    <p>Your account deletion verification code is:</p>
    <h2>{{ $code }}</h2>
    <p>Please use this code to verify your account deletion request. This code is valid for 30 minutes.</p>
    <p>Thank you,</p>
    <p>The {{ env('APP_NAME') }} Team.</p>
</body>
</html>
