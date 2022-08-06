@extends('layouts.main')

@section('title', 'CRUD PHP')

@section('content')
      
      <h1>Algum titulo</h1>
        @if(10 > 15)
         <p>A condição é true</p>
         @endif

         <p>{{$nome}}</p>

         @if($nome == "Pedro")
            <p>O nome é Pedro</p>
         @elseif($nome == "Marcelo")
            <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
         @else
            <p>O nome não é pedro</p>
         @endif

         @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
         @endfor  

@endsection