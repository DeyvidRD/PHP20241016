

@foreach ($clientes as $cliente)
  <div>
    {{$cliente->name}} 
    {{$cliente->cpf}} 
    {{$cliente->email}}
  </div>
@endforeach