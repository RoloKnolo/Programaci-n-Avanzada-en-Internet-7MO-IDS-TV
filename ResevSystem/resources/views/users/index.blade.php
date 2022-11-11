<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
<body>
    <h1>Usuarios del sistema</h1>
    <a href="{{url('users/create')}}">Crear</a>
    <table style="width:60%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{url('users/'.$user->id)}}">Editar</a></td>
            </tr>
        @endforeach



    </table>
</body>
</html>
