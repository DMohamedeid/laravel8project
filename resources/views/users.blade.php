<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
<h1>Hello From View Blade</h1>
<p>here we are passing single value from controller the value {{$user}}</p>
<p>here we are passing array value from controller the value {{$person['name']}}</p>
<p>here we are passing array value from controller the value {{$person['email']}}</p>
<p>here we are passing array value from controller the value {{$person['password']}}</p>

<!-- to read the data from array we use it like this $person['password']  because it doesn't read like this $person->password -->
</body>
</html>
