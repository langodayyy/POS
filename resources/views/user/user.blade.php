<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
</head>
<body>
    <h2>Halaman User</h2>
    <h3>Nama :   {{ $name }}</h3>
    <h3>ID   :   {{ $id }}</h3>
    <br><br><a href="{{ url('/') }}">HOME</a>
</body>
</html>