<?php

namespace App\Http\Controllers;

use App\Interfaces\AuthorRepositoryInterface;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    private AuthorRepositoryInterface $authorRepository;

    public function __construct(AuthorRepositoryInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }
    public function createAuthor(Request $request)
    {

        $author = $this->authorRepository->createAuthor($request->all());

        return response()->json($author, 201);


    }
    public function GetPostByauthor($authorId)
    {
        $author = $this->authorRepository->getAllPostsOfAuthor($authorId);

        return response()->json($author, 201);

    }
}