<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - Primi passi</title>
</head>
<body>
    <h1>Homepage</h1>

    <p>Hello World!</p>

    <p>Benvenuto {{ $name }}  {{ $lastname }},</p>

    @if($age >= 18)
    <p>sei maggiorenne</p>
    @else
    <p>sei minorenne</p>
    @endif
</body>
</html>