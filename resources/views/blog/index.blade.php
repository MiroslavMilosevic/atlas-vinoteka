<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    

    <h1>Blog Page</h1>

    @for ($i = 0; $i < 10; $i++)
    {{-- {{print_r($blogs[$i])}} --}}
   <a href={{'blog/' . $blogs[$i]['id']}}>
     {{ $blogs[$i]['title'] }} --- {{$blogs[$i]['id']}}
   </a>

   <br>
    @endfor

</body>
</html>