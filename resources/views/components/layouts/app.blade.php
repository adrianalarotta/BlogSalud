<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Espacio Publico{{$title ?? ''}} </title>
</head>
<body>

{{--@include('partials.navigation')--}}
<x-layouts.navegation/>
{{$slot}}
<br>
<br>
<br>

<x-layouts.footer/>
</body>
</html>
