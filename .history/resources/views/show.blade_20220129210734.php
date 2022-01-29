@extends('layout.main')

@section('content')
<div class="card">
    @if (!empty($post))
        <h5 class="card-header">{{ $post-> }}</h5>
        <div class="card-body">
            <ul>
                <li>Id: {{ $game->id }}</li>
                <li>Nazwa: {{ $game->title }}</li>
                <li>Treść: <div> {{ $game->content }} </div></li>
                <li>Autor: {{ $game->author }}</li>
                <li>
                    @if(!empty($comments))
                    Komentarze:
                    <ul>
                    @foreach($comments as $comment)
                        <li><strong>{{$comment->author}}: </strong>{{$comment->content}}</li>
                    @endforeach
                    </ul> 
                    @else
                    Nikt jeszcze nie skomentował tego postu    
                    @endif
                </li>
            </ul>
            {{-- <a href="{{ route('games.index') }}" class="btn btn-light">Lista gier</a> --}}
        </div>
    @else
        <h5 class="card-header">Brak danych do wyświetlenia</h5>
    @endif
</div>
@endsection

