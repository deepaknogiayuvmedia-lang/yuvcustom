<!DOCTYPE html>
<html>

<head>
    <title>New Inquiry Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #2881ed;
            overflow: hidden;
        }

        .header {
            text-align: center;
            padding: 15px;
            background-color: #2981ed38;
        }

        .header img {
            max-width: 180px;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            text-align: center;
            color: #222;
            margin-bottom: 20px;
        }

        .inquiry-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
        }

        .inquiry-table th, 
        .inquiry-table td {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 16px;
            text-align: left;
        }

        .inquiry-table th {
            background-color: #2881ed;
            color: #ffffff;
            font-weight: bold;
        }

        .inquiry-table td a {
            color: #2881ed;
            text-decoration: none;
        }

        .footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            background: #222;
            color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .footer a {
            color: #fdbb2d;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <!-- Logo Section -->
        <div class="header">
            <img src="https://yuvmedia.in/assets/websiteAssets/images/logo.png" alt="YuvMedia Logo">
        </div>

        <!-- Email Content -->
        <div class="content">
            <h2>New Inquiry Details</h2>
            <table class="inquiry-table">
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{ $details['name'] }}</td>
                </tr>
                <tr>
                    <td><strong>Brand Name:</strong></td>
                    <td>{{ $details['brandname'] }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $details['email'] }}</td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td>
                    <td>{{ $details['phone'] }}</td>
                </tr>
                <tr>
                    <td><strong>Website:</strong></td>
                    <td><a href="{{ $details['website'] }}" target="_blank">{{ $details['website'] }}</a></td>
                </tr>
                <tr>
                    <td><strong>Industry:</strong></td>
                    <td>{{ $details['industry'] }}</td>
                </tr>
                <tr>
                    <td><strong>Service:</strong></td>
                    <td>{{ $details['servicedropdown'] }}</td>
                </tr>
                <tr>
                    <td><strong>Message:</strong></td>
                    <td>{{ $details['message'] }}</td>
                </tr>
            </table>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            &copy; {{ date('Y') }} YuvMedia. All rights reserved. <br>
            <a href="https://yuvmedia.in" target="_blank">Visit our website</a>
        </div>
    </div>

</body>

</html>
