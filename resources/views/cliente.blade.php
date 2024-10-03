<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>
    @foreach ($clientes as $cliente)
  <tr>
    <td>{{$cliente->name}}</td> 
    <td>{{$cliente->cpf}}</td> 
    <td>{{$cliente->email}}</td>
    <td>
    <form method="POST" action="/deletar_cliente/{{$cliente->id}}">
      @csrf
      {{method_field("DELETE")}}
      <input type="submit" value="delete cliente">
    </form>

    <a href="/editar_cliente/{{$cliente->id}}">Editar</a>
    </td>
    </tr>
@endforeach
  </table>
  
</body>
</html>