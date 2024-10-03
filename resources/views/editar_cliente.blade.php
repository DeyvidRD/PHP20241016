<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="cadastro" action="/editar_cliente/{{$cliente->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$cliente->name}}">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" value="{{$cliente->cpf}}">

        <label for="email">Email</label>
        <input type="text" name="email" value="{{$cliente->email}}">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>