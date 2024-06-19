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
     <li class="list-item"> <a href="{{ url('about') }}">About</a> </li>   
     <li class="list-item"> <a href="{{ url('contact')}}">Contact</a> </li>
    </ul>
</body>
</html>