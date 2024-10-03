<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vendedor</title>
</head>
<body>
<form class="cadastro" action="/editar_vendedor/{{$vendedor->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$vendedor->name}}>

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" value="{{$vendedor->matricula}}>

        <label for="comissao">Comissão</label>
        <input type="text" name="comissao" value="{{$vendedor->comissao}}>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>