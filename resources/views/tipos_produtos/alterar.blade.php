@extends('template')

@section('title', 'Cadastrar Tipo De Produtos')
            
@section('subtitle')
    Página de cadastro de tipo de produto. Por favor, preencha os campos conforme orientações individuais.<br>
@endsection
                        
@section('content')
    <form method="POST" action="{{ route('alterar_tipo_produtos_efetua', ['id' => $t->id]) }}">
        @csrf
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" maxlength="100" name="nome" placeholder="Nome" value="{{ $t->nome }}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="descricao" class="col-sm-2 col-form-label">Descrição:</label>
            <div class="col-sm-10">
                <textarea name="descricao" class="form-control" required>{{ $t->descricao }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary btn-block">Alterar</button>
            </div>
            
        </div>
    </form>
@endsection