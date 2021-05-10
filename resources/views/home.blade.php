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
    
 @include('parts.header')
    
 <main>
<div class="l_pasta wrapper">
    <h3>LE LUNGHE</h3>
</div>
        <div class="long my_flex wrapper">
          
            @foreach ($lunghe as $pasta)
                        
                   
                <div class="l_product">
                   <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                 @endforeach
            
        </div>
        <div class="md_pasta wrapper">
    <h3>LE CORTE</h3>
</div>
         <div class="medium my_flex wrapper">
          
            @foreach ($corte as $pasta)
                        
                   
                <div class="md_product">
                   <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                 @endforeach
            
        </div>
        <div class="s_pasta wrapper">
    <h3>LE CORTISSIME</h3>
</div>
         <div class="short my_flex wrapper">
          
            @foreach ($cortissime as $pasta)
                        
                   
                <div class="s_product">
                   <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                 @endforeach
            
        </div>

      

    </main>

 @include('parts.footer')

    
</body>
</html>