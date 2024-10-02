
@foreach ($users as $user)
  <div>
    {{$user->name}} 
    {{$user->cpf}} 
    {{$user->email}}
  </div>
@endforeach