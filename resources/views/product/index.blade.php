<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>
<body>
    <h1>Shop stranica</h1>

    @for ($i = 0; $i < count($products); $i++)
    <a href={{'../shop/' . $products[$i]['id']}}>
      {{ $products[$i]['title'] }} --- {{$products[$i]['price']}}
    </a>
    <br>
     @endfor


</body>
</html>