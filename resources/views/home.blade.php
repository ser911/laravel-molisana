<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Molisana</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="wrapper center">
            <img class="logo-brand" src="{{asset('images/marchio-sito-test.png')}}" alt="Molisana Logo">
          <div class="nav">
              <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Prodotti</a></li>
                  <li><a href="">News</a></li>
              </ul>
          </div>
        </div>
    </header>
    <main>
<div class="l_pasta wrapper">
    <h3>Le lunghe</h3>
</div>
        <div class="long my_flex wrapper">
          
            @foreach ($lunghe as $pasta)
                        
                   
                <div class="l_product">
                   <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                 @endforeach
            
        </div>
        <div class="md_pasta wrapper">
    <h3>Le corte</h3>
</div>
         <div class="medium my_flex wrapper">
          
            @foreach ($corte as $pasta)
                        
                   
                <div class="md_product">
                   <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                 @endforeach
            
        </div>
        <div class="s_pasta wrapper">
    <h3>Le cortissime</h3>
</div>
         <div class="short my_flex wrapper">
          
            @foreach ($cortissime as $pasta)
                        
                   
                <div class="s_product">
                   <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                 @endforeach
            
        </div>

      

    </main>
    <footer>

    </footer>
</body>
</html>