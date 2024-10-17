<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
<form class="cadastro" action="/editar_produto/{{$produto->id}}" method="post">
        @csrf
        {{method_field("PUT")}}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$produto->name}}">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" value="{{$produto->descricao}}">

        <label for="preco">Preço</label>
        <input type="text" name="preco" value="{{$produto->preco}}">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>