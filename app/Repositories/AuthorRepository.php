<?php

namespace App\Repositories;

use App\Interfaces\AuthorRepositoryInterface;
use App\Models\Author;
use App\Models\Post;

class AuthorRepository implements AuthorRepositoryInterface 
{

    // public function getAllPostsOfAuthor($id) 
    // {
    //     return Author::findOrFail($id);
    // }
    public function createAuthor(array $authorDetails) 
    {
        return Author::create($authorDetails);
    }
    public function GetPostByauthor( $authorId) 
    {
        return Post::where('author_id',$authorId)->get();
    }



    
   

   
}