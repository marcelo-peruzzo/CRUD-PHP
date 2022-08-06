@extends('layouts.main')

@section('title', 'Lista de produtos')

@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
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
        <td >
          <button class="btn btn-outline-danger" id="type="button">DELETAR</button>
          <button class="btn btn-outline-info" id="type="button">EDITAR</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

</div>

  @endsection