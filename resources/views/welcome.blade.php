<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="login">Login</a></button>
    <button><a href="register">Resister</a></button>

<h1>This is My Home Page</h1>
    <ul class="list">
     <li class="list-item"> <a href="{{route('about.us') }}">About</a> </li>   
     <li class="list-item"> <a href="{{route('contact.us')}}">Contact</a> </li>
     <li class="list-item"> <a href="{{route('laravel')}}">Laravel</a> </li>
    </ul>
</body>
</html>