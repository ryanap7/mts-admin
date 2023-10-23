<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
            font-family: 'Inter', sans-serif;
        }

        .text-gray {
            color: rgb(167, 167, 167)
        }
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <td width="100px">Name</td>
                <td>:</td>
                <td>{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td>Company</td>
                <td>:</td>
                <td>{{ $data['company'] }}</td>
            </tr>
        </table>
        <hr style="margin-bottom: 15px; color: gray; background: gray">
        <small style="margin-bottom: 0px; color: rgb(167, 167, 167)">Message</small>
        <p style="margin-top: 5px;">{{ $data['message'] }}</p>
    </div>
</body>
</html>