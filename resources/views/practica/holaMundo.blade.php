@php
    $nombre = 'Jhoan';
    $edad = 19;

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola mundo desde una vista con blade</title>
</head>

<body>

    <h1>Hola munndo desde blade</h1>
    suma de dos numeros {{ 5 + 5 }}
    El nombre es : {{ $nombre }}
    Su edad es : {{ $edad }}

    <h1>{{ mensaje }}</h1>
</body>

</html>
