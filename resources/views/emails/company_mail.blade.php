<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dan Garage Door Broken Spring Repair</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #DF1119;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            font-size: 20px;
            color: #DF1119;
        }
        .content p {
            line-height: 1.6;
            margin: 10px 0;
        }
        .footer {
            background-color: #f4f4f9;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #ddd;
        }
        .footer a {
            color: #DF1119;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="header">
            <h1>Dan Garage Door Broken Spring Repair</h1>
        </div>

        <!-- Content Section -->
        <div class="content">
            <h2>{{$details['subject']}}</h2>
			<p><strong>Name:</strong> {{$details['title']}}</p>
			<p><strong>Email:</strong> {{$details['email']}}</p>
			<p><strong>Phone Number:</strong> {{$details['phone_number']}}</p>
			<p><strong>Postal Code:</strong> {{$details['postal_code']}}</p>
			<p>
                Your service requested details:
                <ul>
					@if(isset($details['garage_door_repair']))
						<li>{{$details['garage_door_repair']}}</li>
					@endif
					@if(isset($details['garage_opener_installation']))
						<li>{{$details['garage_opener_installation']}}</li>
					@endif
					@if(isset($details['door_out_of_tracks']))
						<li>{{$details['door_out_of_tracks']}}</li>
					@endif
					@if(isset($details['garage_door_installation']))
						<li>{{$details['garage_door_installation']}}</li>
					@endif
					@if(isset($details['garage_door_panel']))
						<li>{{$details['garage_door_panel']}}</li>
					@endif
					@if(isset($details['other']))
						<li>{{$details['other']}}</li>
					@endif
					
                </ul>
            </p>
			@if(isset($details['body']))
				<p>
					<strong>Message:</strong> <br> {{$details['body']}}
				</p>
			@endif
			<hr>
            <p>Thank you for contacting us regarding <b>Dan Garage Door Broken Spring Repair</b>. We have received your request and our team will review it shortly.</p>
            <p>If you have additional questions, feel free to reply to this email.</p>
            <p>Thank you for choosing us!</p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>© {{ date('Y') }} Dan Garage Door Broken Spring Repair. All rights reserved.</p>
            <p>
                Need assistance? <a href="mailto:Support@customerdeskhelp.com">Contact Support</a>
            </p>
        </div>
    </div>
</body>
</html>
