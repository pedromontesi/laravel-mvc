@extends('admin.layouts.app')

@section('title', 'Listagem dos Usuários')

<h1>Novo Usuário</h1>
@if(session()->has('success'))
    {{ session('success') }}

@endif

@section('content')

    <button><a href="{{ route("users.create") }}">Criar Novo Usuário</a></button>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $users as $user )
                <tr>
                    <td>{{{ $user->name }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td>-</td>
                </tr>
                @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}

@endsection
