@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('books.create') }}" class="btn btn-success">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}">
                                {{ $book->title }}
                            </a>
                        </td>
                        <td>{{ $book->author->name }}</td>
                        <td>

                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form class="d-inline-flex" method="POST" action="{{ route('books.destroy', $book->id) }}">
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
