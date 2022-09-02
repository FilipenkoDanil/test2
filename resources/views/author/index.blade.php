@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('authors.create') }}" class="btn btn-success">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Count</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($authors as $author)
                        <tr>
                            <th scope="row">{{ $author->id }}</th>
                            <td>
                                <a href="{{ route('authors.show', $author->id) }}">
                                    {{ $author->name }}
                                </a>
                            </td>
                            <td>{{ $author->books->count() }}</td>
                            <td>

                                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Edit</a>
                                <form class="d-inline-flex" method="POST" action="{{ route('authors.destroy', $author->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
