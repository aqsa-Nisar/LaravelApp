<?php

namespace App\Http\Controllers;

use App\Models\Author;

use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function create(Request $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);


    }
}