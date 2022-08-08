@extends('layouts.main')

@section('title', 'Cadastrar produtos')

@section('content')


<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5">
    
            {{-- FORMULARIO INICIA AQUI --}}
<form action="/cadastrar_produto" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input 
      @if (isset($produtos))   
      value="{{$produtos->nome}}"    
      @endif   
       type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input
        @if (isset($produtos))   
      value="{{$produtos->quantidade}}"    
      @endif 
         type="number" class="form-control" name="quantidade" id="quantidade" min="0" required>
      </div>
    <div class="mb-3">
      <label for="descricao" class="form-label">Descrição</label>
      <textarea id="descricao" name="descricao" rows="5" class="form-control" required>@if (isset($produtos))@php echo($produtos->descricao); @endphp @endif</textarea>
    </div>
    <div class="mb-3">
        <label for="tensao" class="form-label">Tensão</label>
        <select class="form-control" name="tensao" id="tensao" required>
            <option value="110" selected>110V</option>
            <option value="220" @if (isset ($produtos) && $produtos->tensao == '220') selected @endif>220V</option>
            <option value="bv"  @if (isset ($produtos) && $produtos->tensao == 'bv') selected @endif>BiVolt</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marcas</label>
        <select class="form-control" name="marca" id="marca" required>
            <option value="">Selecione uma marca</option>
            <option value="Electrolux" @if (isset ($produtos) && $produtos->marca == "Electrolux") selected @endif>Electrolux</option>
            <option value="Brastemp" @if (isset ($produtos) && $produtos->marca == "Brastemp") selected @endif>Brastemp</option>
            <option value="Fischer" @if (isset ($produtos) && $produtos->marca == "Fischer") selected @endif>Fischer</option>
            <option value="Samsung" @if (isset ($produtos) && $produtos->marca == "Samsung") selected @endif>Samsung</option>
            <option value="LG" @if (isset ($produtos) && $produtos->marca == "LG") selected @endif>LG</option>
        </select>
    </div>
    @if (isset ($produtos))
    <input class="editar-produtos" value="{{$produtos->id}}" name="id" type="text">
    <button name="submit" value="edit" type="submit" class="btn btn-primary">Editar</button>
    @else
    <button name="submit" valu="cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
    @endif

  </form> {{-- FORMULARIO ACABA AQUI --}}
        </div>
    </div>
</div>

@endsection
