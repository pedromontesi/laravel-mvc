<h1>novo usuário</h1>

<form action="{{ route("users.store") }}" method="POST">
    @csrf()
    <input type="text" name="" id="Nome">
    <input type="text" name="email" id="E-Mail">
    <input type="password" name="password" id="Senha">
    <button type="submit">Enviar</button>
</form>