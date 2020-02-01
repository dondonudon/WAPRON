<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WAPRON ID</title>
    <style>
        body
        {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc;">
    <tr>
        <td style="height: 6px; background-color: #000066"></td>
    </tr>
    <tr>
        <td style="text-align: center; margin-top: 1cm;">
            <img src="http://waveitsolution.com/wapronId/images/wapronLogo.jpg" height="150" alt="logo wapron">
        </td>
    </tr>
    <tr>
        <td style="padding: 40px 30px 40px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100%;">
                <tr>
                    <td style="padding: 20px 0 30px 0;" align="center">
                        <h1>Hello {{ $name }},</h1>
                        <p>Please verify your email by click the button below:</p>
                        <a target="_blank" class="button" href="{{ url('verify/'.$id) }}" style="color: #000000">CLICK HERE TO VERIFY ACCOUNT</a>
                        <p>If the above button doesn't work for you, please click on the below link or copy paste it on to your browser.</p>
                        <a target="_blank" href="{{ url('verify/'.$id) }}">{{ url('verify/'.$id) }}</a>
                        <p>
                            <small>This email has been generated automatically, please do not reply.</small>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="aqua" style="height: 10px"></td>
    </tr>
    <tr>
        <td align="center" bgcolor="#ccf5ff">
            <p>Follow us on:</p>
            <p>
                <a target="_blank" href="https://www.instagram.com/wapron.id/">
                    <img src="http://waveitsolution.com/wapronId/images/instagram-brands.png" alt="instagram-brands" height="50">
                </a>
            </p>
            <p>Have question on your order? <br> Feel free to contact us at :</p>
            <p>
                <a target="_blank" href="mailto:solusiku@waveitsolution.com?Subject=Hi%20I%20have%20question%20about%20wapronID">solusiku@waveitsolution.com</a>
            </p>
        </td>
    </tr>
</table>
</body>
</html>