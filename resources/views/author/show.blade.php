@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Count</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $author->id }}</th>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->books->count() }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
