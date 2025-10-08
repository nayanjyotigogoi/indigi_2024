<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f6f6f6; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
        <h2 style="text-align: center; color: #333;">New Contact Form Submission</h2>
        <hr style="border: 0; height: 1px; background: #eee; margin: 20px 0;">

        <table style="width: 100%; font-size: 16px; color: #333;">
            <tr>
                <td style="padding: 8px 0; font-weight: bold;">Name:</td>
                <td style="padding: 8px 0;">{{ $data->name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: bold;">Email:</td>
                <td style="padding: 8px 0;">{{ $data->email }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: bold;">Phone:</td>
                <td style="padding: 8px 0;">{{ $data->phone_number }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: bold; vertical-align: top;">Message:</td>
                <td style="padding: 8px 0;">{{ $data->message }}</td>
            </tr>
        </table>

        <hr style="border: 0; height: 1px; background: #eee; margin: 20px 0;">
        <p style="text-align: center; font-size: 12px; color: #999;">This message was sent via  Indigi Consulting and Solutions Pvt Ltd  website contact form.</p>
    </div>

</body>
</html>
