<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact Message</title>
</head>

<body>
    <p>Dear Admin,</p>
    <p>
        You received a new message from {{$name}}!
    </p>
    <p>
        <b>Subject: </b> {{$subject}}
    </p>
    <p>
        <b>Message:</b>
    </p>
    <p>
        {{$msg}}
    </p>
    <p>
        You can reply to <a href="mailto:{{$email}}">{{$email}}</a> to contact back.
    </p>
    <p>
        Regards!
    </p>
    <p>
        Meet a need
    </p>
</body>

</html>