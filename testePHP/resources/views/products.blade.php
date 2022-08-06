@extends('layouts.main')

@section('title', 'produtos')

@section('content')
<h1>Pagina de produtos</h1>

@if($busca != '')
<p>O usuario está buscando por: {{$busca}}</p>
@endif
@endsection
