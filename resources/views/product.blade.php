@extends("layouts.main");

@section("main")

<div class="prod"> 

<h2> {{$pasta['titolo']}}</h2>
<img src="{{$pasta['src-h']}}" alt="">
<img src="{{$pasta['src-p']}}" alt="">

<p>"{!! $pasta['descrizione']!!}"</p>

</div>

@endsection