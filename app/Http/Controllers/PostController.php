<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Interfaces\PostRepositoryInterface;


class PostController extends Controller
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function createPost(Request $request)
    {

        $post = $this->postRepository->createPost($request->all());

        return response()->json($post, 201);


    }

}