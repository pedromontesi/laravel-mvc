@extends('admin.layouts.app')
<h1>novo usuário</h1>

@if ($errors->any())
    <ul>
        @foreach ( $errors->all() as $error)

        <li>{{$error}}</li>

        @endforeach
    </ul>
@endif


@section('title', 'Criar Novo Usuário')

@section('content')
    <x-alert/>

<form action="{{ route("users.store") }}" method="POST">
    @csrf()
    <input type="text" name="" id="Nome" value="{{ old('name') }}">
    <input type="text" name="email" id="E-Mail" value="{{ old('name') }}">
    <input type="password" name="password" id="Senha">
    <button type="submit">Enviar</button>
</form>

@endsection
