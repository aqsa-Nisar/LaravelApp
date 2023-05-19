<?php

namespace App\Http\Controllers;

use App\Models\Author;

use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    // CRUD Books
    public function createPost($author_id, Request $request)
    {
        $author = Author::find($author_id);
        $book = Post::create([
            'title' => $request->title,
            'author_id' => $author->id
        ]);
        return response()->json($book, 201);
    }
    public function showAllPostsFromAuthor($author_id)
    {
        $author = Author::find($author_id);
        $posts = $author->posts;
        return response()->json($posts, 200);
    }
    public function showOnePost($author_id, $post_id)
    {
        $author = Author::find($author_id);
        $book = $author->books
                       ->where('id', '=', $post_id)
                       ->first();
        return response()->json($book, 200);
    }
}