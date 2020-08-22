<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<h1>Desejo mesmo excluir a pessoa '{{ $pessoa->nome }}'?</h1>

<form action="/pessoas/{{ $pessoa->id }}" method="post">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Sim">
</form>

<a class="btn btn-primary" href="/pessoas">Não</a>