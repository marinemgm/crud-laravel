<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
        </td>
    </tr>
    @endforeach
</table>