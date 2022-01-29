@extends('layouts.app')
@section('content')

    <h1>welcome</h1>
    @foreach ($posts as $post)
        {{ $post->title }}
    @endforeach

@endsection
