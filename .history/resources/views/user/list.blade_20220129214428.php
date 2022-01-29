@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Lista użytkowników</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Id</th>
                            <th>Nazwa użytkownika</th>
                            <th>Email</th>
                            <th>Opcje</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Lp</th>
                            <th>Id</th>
                            <th>Nazwa użytkownika</th>
                            <th>Email</th>
                            <th>Opcje</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="{{ route('user.show', ['id' => $user->id]) }}">Szczegóły</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <a href="{{ route('posts') }}" class="btn btn-light">Wróć do listy postów</a>
        </div>
    </div>
@endsection
