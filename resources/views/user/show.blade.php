@extends('layouts.app')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
    <div>Lista użytkowników: <a href="{{ route('users.list') }}">Link</a></div>
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">{{ $user->name }}</h5>
        <div class="card-body">
            <ul>
                <li>Id: {{ $user->id }}</li>
                <li>Imię: {{ $user->name }}</li>
                <li>E-mail: {{ $user->email }}</li>
            </ul>

            <a href="{{ route('users.list') }}" class="btn btn-light">Lista użytkowników</a>
            <a href="{{ route('posts') }}" class="btn btn-light">Lista postów</a>
        </div>
    </div>
@endsection
