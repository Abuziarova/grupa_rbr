@extends('layouts.app')
@section('content')

@section('content')
    <div class="card mt-3">
        <div class="card">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Gry</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tytuł</th>
                                <th>Treść</th>
                                <th>Autor</th>
                                <th>Opcje</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tytuł</th>
                                <th>Treść</th>
                                <th>Autor</th>
                                <th>Opcje</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($posts ?? [] as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>
                                        {{-- <a href="{{ route('games.show', ['game' => $game->id]) }}">Szczegóły</a> --}}
                                        <a href="#">Szczegóły</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection


@endsection
