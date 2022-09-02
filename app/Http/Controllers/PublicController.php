<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
        $authors = Author::all();

        return view('welcome', compact('authors'));
    }
}
