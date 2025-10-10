<!DOCTYPE html>
<html>

<head>
    <title>New Free Call Booking</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0a0a0a;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .email-container {
            max-width: 650px;
            background: #ffffff;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #2881ed40;
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #021B79, #0575E6);
            text-align: center;
            padding: 25px 15px;
            color: #fff;
        }

        .header img {
            max-width: 180px;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 24px;
            margin: 10px 0 0;
            color: #00e6ff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .content {
            padding: 25px;
        }

        .content h2 {
            text-align: center;
            color: #102A2C;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }

        .details-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        .details-table td strong {
            color: #0575E6;
            display: inline-block;
            width: 180px;
        }

        .footer {
            text-align: center;
            background: #102A2C;
            color: #fff;
            padding: 20px;
            font-size: 14px;
        }

        .footer a {
            color: #00e6ff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <img src="https://yuvmedia.in/assets/websiteAssets/images/logo.png" alt="YuvMedia Logo">
            <h1>Book Your Free Call Now</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <h2>Lead Inquiry Details</h2>
            <table class="details-table">
                <tr>
                    <td><strong>Full Name:</strong></td>
                    <td>{{ $details['username'] }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $details['email'] }}</td>
                </tr>
                <tr>
                    <td><strong>Phone Number:</strong></td>
                    <td>{{ $details['phone'] }}</td>
                </tr>
                <tr>
                    <td><strong>City:</strong></td>
                    <td>{{ $details['city'] }}</td>
                </tr>
                <tr>
                    <td><strong>Business Name:</strong></td>
                    <td>{{ $details['business'] }}</td>
                </tr>
                <tr>
                    <td><strong>Selected Service:</strong></td>
                    <td>{{ $details['service'] }}</td>
                </tr>
                <tr>
                    <td><strong>Business Industry:</strong></td>
                    <td>{{ $details['Industry'] }}</td>
                </tr>
                <tr>
                    <td><strong>Monthly Budget:</strong></td>
                    <td>{{ $details['Budget'] }}</td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} YuvMedia. All rights reserved.<br>
            <a href="https://yuvmedia.in" target="_blank">Visit our website</a>
        </div>
    </div>
</body>

</html>
