@extends('layouts.admin')

@section('content')
    @if (session('messaggio'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Congratulazioni!</strong> {{ session('messaggio') }}
        </div>
    @endif

    <div class="table-responsive mt-5">
        <table class="table table-primary">
            <thead>

                <form class="mx-2" action="{{ route('project.create') }}">
                    <button class="btn btn-success mb-3" type="submit">Aggiungi un nuovo progetto</button>
                </form>

                <tr>
                    <th scope="col">TITOLO</th>
                    <th scope="col">DESCRIZIONE</th>
                    <th scope="col">AUTORI</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td scope="row">{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->authors }}</td>
                        <td class="d-flex">

                            <form action="{{ route('project.show', [$project->id]) }}">

                                <button class="btn btn-primary mb-3" type="submit">Show</button>
                            </form>

                            <form class="mx-2" action="{{ route('project.edit', [$project->id]) }}">

                                <button class="btn btn-info mb-3" type="submit">Edit</button>
                            </form>

                            <form action="{{ route('project.destroy', [$project->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-3" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
