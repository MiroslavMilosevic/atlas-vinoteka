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

    @for ($i = 0; $i < count($blogs); $i++)
   <a href={{'../blog/' . $blogs[$i]['id']}}>
     {{ $blogs[$i]['title'] }} --- {{$blogs[$i]['should_end_at']}}
   </a>
   <br>
    @endfor

  <br>
  @if(!$isLimitSet)
  <a href="../blog?limit=999">show all blogs</a>
  <br>
  @endif
  @if($isLimitSet)
  <a href="../blog">show less</a>
  @endif
  <br>

  

  @if(!$isLimitSet)
  <span id="previous-page">previous</span>
  <span id="next-page">next</span>
  @endif
  
  <script>
      const urlParams = new URLSearchParams(window.location.search);
      let page = urlParams.get('page');

      if(!isNaN(page)){
          document.getElementById('next-page').addEventListener('click',()=>{
              if(page <= 0){
                page++;
              }  
              page++;
              window.location.href =`../blog/?page=${page}`
          })
      }
      if(!isNaN(page)){
          document.getElementById('previous-page').addEventListener('click',()=>{
              if(page>1)
                page--;
                window.location.href =`../blog/?page=${page}`
          })
      }
  </script>
</body>
</html>