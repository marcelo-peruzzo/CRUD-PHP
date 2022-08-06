@extends('layouts.main')

@section('title', 'Cadastrar produtos')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
<form action="/cadastrar_produto" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" id="quantidade" min="0" required>
      </div>
    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea id="descricao" name="descricao" rows="5" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label for="tensao" class="form-label">Tensão</label>
        <select class="form-control" name="tensao" id="tensao" required>
            <option value="110" selected>110V</option>
            <option value="220">220V</option>
            <option value="bv">BiVolt</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marcas</label>
        <select class="form-control" name="marca" id="marca" required>
            <option value="">Selecione uma marca</option>
            <option value="Electrolux">Electrolux</option>
            <option value="Brastemp">Brastemp</option>
            <option value="Fischer">Fischer</option>
            <option value="Samsung">Samsung</option>
            <option value="LG">LG</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
        </div>
    </div>
</div>

@endsection
