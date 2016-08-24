<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <p><strong>Nombre:</strong> {{ $request->get('name') }}</p>
    <p><strong>Correo electrónico:</strong> {{ $request->get('email') }}</p>
    <p><strong>Asunto:</strong> {{ $request->get('subject') }}</p>
    <p><strong>Fecha:</strong> {{ date('d-m-Y H:i:s') }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $request->get('message') }}</p>

</body>
</html>