<h1>Formulario de Pessoa</h1>

<form action="/pessoas" method="post">
    @csrf
    <input type="text" name="nome" required>
    <input type="text" name="telefone"required>
    <input type="text" name="email" required>
    <button type="submit">Salvar</button>
</form>

    <br>

    <a href="/pessoa">Voltar</a>

