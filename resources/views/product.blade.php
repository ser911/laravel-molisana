@extends("layouts.main");

@section("main")

    @section('css')
        
    @endsection
    <style>
main{
    background-image: none;
    background-color: #b8dae4;
    padding-bottom: 20px;
    color: #002d73;
}
.prod{
    text-align: center;
}

    </style>
    

<div class="prod"> 

<h2> {{$pasta['titolo']}}</h2>
<img src="{{$pasta['src-h']}}" alt="">
<img src="{{$pasta['src-p']}}" alt="">

<p>"{!! $pasta['descrizione']!!}"</p>

</div>

@endsection