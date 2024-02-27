<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
</head>
<body>
    <h2>Halaman Product</h2><br>    
    <h3>List Category</h3>

    <ul type="disc">
        <li><a href="{{url('/category/foodBaverage')}}">Food Baverage</a></li>
        <li><a href="{{url('/category/beautyHealth')}}">Beauty Health</a></li>
        <li><a href="{{url('/category/homeCare')}}">Home Care</a></li>
        <li><a href="{{url('/category/babyKid')}}">Baby Kid</a></li>
    </ul>
    <br><br>
    <a href="{{ url('/') }}">HOME</a>
</body>
</html>