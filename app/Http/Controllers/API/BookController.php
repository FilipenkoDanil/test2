<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return BookResource::collection(Book::all());
    }

    public function byId($id)
    {
        return BookResource::make(Book::findOrFail($id));
    }

    public function update(BookRequest $request, $id)
    {
        Book::findOrFail($id)->update($request->validated());

        return response()->json('', '204');

    }

    public function destroy($id)
    {
        Book::findOrFail($id)->delete();

        return response()->json('', '204');
    }
}
