@extends('layouts.main')

@section('title', 'Lista de produtos')

@section('content')

<div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Voltagem</th>
        <th scope="col">Fabricante</th>
      </tr>
    </thead>
    <tbody>
        @foreach($produtos as $key => $val)
      <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$val->nome}}</td>
        <td>{{$val->quantidade}}</td>
        <td>{{$val->tensao}}</td>
        <td>{{$val->marca}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

  @endsection