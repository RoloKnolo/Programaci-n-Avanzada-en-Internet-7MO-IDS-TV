<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="post" action="{{  url('/users')}}">
        @csrf <!-- Genera un token -->
        @method('PUT') <!-- Se pone el metodo put para darle a entender que se quiere actualizar ek registro -->
        <input type="hidden" value="{{ $user->id}}" name="id"/> <!-- Mandamos el i del user por un input hidden -->
        <label>Nombre</label>
        <input type="text" value="{{$user->name}}" name="name">
        <br>
        <label>Email</label>
        <input type="email" value="{{$user->email}}" name="email">
        <br>

        <button>
          Editar
        </button>
      </form>
</body>
</html>
