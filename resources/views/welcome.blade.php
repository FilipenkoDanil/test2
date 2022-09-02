@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @foreach($authors as $author)
                <ul style="border: #0a58ca; border-style: solid; padding: 15px">
                    <h4>
                        <b>{{ $author->name }}</b>
                    </h4>
                    @foreach($author->books as $book)
                        <li style="margin-left: 20px">{{ $book->title }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
@endsection
