@extends('layouts.main')
@section('main')
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
      @endsection
