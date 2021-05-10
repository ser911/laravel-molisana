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
    <footer class="wrapper my_flex">
        <div class="f-left">
            <img class="logo-brand" src="{{asset('images/marchio-sito-test.png')}}" alt="Molisana Logo">
            <ul>
                <li>Ragione Sociale: La Molisana S.P.A.</li>
                <li>Sede legale: Contrada Colle delle Alpi, 100/A</li>
                <li>86100 - Campobasso (CB)</li>
                <li>Pec: lamolisana@pec.it</li>
                <li>Tel: +39 0874 4981</li>
                <li>Fax: +39 0874 629584</li>
                <li>info@lamolisana.it(per segnalazioni degli utenti)</li>
                <li>commerciale@lamolisana.it</li>
                <li>export@lamolisana.it</li>
                <li>numero verde 800818081</li>
                <li>telefono 3801292455</li>
                </ul>       
        </div>
        <div class="f-center">
            <ul>
               <li>PASTIFICIO</li>
               <li>Il Pastificio</li>
               <li>Grano decorticato a pietra</li>
               <li>Il Molise c'è</li>
               <li>Filiera integrata</li>
               <li>100 anni di pasta</li>
               <li>Sartoria della pasta</li>
               <li>Spaghetto Quadrato</li>
               <li>Le Persone</li>
               <li>PRODOTTI</li>
               <li>Le Classiche </li>
               <li>Le integrali</li>
               <li>Le Biologiche</li>
               <li>Le Gluten-Free</li>
               <li>Le Semole</li>
               <li>Le Extra di Lusso</li>
               
            </ul>

        </div>
            <div class="f-right">
                <ul>
                    <li>COLLEZIONE DA CHEF</li>
                    <li>Collezione da Chef</li>
                    <li>Grandi Cucine</li>
                    <li>Biologiche</li>
                    <li>Quadrate</li>
                </ul>

            </div>

    </footer>
</body>
</html>