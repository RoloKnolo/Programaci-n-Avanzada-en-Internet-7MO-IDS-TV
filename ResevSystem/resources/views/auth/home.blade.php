@extends('layouts.app')

@section('contenido')

    <h1>Hola {{Auth::user()->name}}</h1>
    <a href="{{url('users')}}">Ir a users</a>
    <form method="post" action="{{  url('logout')}}">
        @csrf
        <button type="submit" name="logout">Logout</button>
    </form>

@endsection
