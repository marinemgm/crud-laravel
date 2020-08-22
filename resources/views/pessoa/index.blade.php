@extends('layouts.app')

{{-- @section('titulo', 'Lista de Pessoas')   --}}

@section('content')
<h1>Pessoas Cadastradas</h1>

<a class="btn btn-primary" href="/pessoas/create">Cadastrar Nova</a>

<hr>

<table class="table table-bordered">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>email</th>
        <th>Açoes</th>
    </tr>
    @foreach($pessoas as $p)
    <tr>
        <td>{{$p->nome}}</td>
        <td>{{$p->telefone}}</td>
        <td>{{$p->email}}</td>
        <td>
            <a href="/pessoas/{{ $p->id }}/edit">Editar</a>
            <a href="/pessoas/{{ $p->id }}">Excluir</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
