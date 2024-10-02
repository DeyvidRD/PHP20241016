@foreach ($vendedores as $vendedor)
  <div>
    {{$vendedor->name}} 
    {{$vendedor->matricula}} 
    {{$vendedor->comissao}}
  </div>
@endforeach