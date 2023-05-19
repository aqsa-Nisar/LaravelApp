<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create(Request $request)
    {
        $post = Post::create($request->all());

        return response()->json($post, 201);


    }
}