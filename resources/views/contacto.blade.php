<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vista contacto </h1>
    @foreach ($products as $p)
         <h2>{{$p->name_product}}</h2>
    <h2>{{$p->stock}}</h2>
    @endforeach
</body>
</html>

