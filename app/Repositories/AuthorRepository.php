<?php

namespace App\Repositories;

use App\Interfaces\AuthorRepositoryInterface;
use App\Models\Author;

class AuthorRepository implements AuthorRepositoryInterface 
{

    public function getAllPostsOfAuthor($id) 
    {
        return Author::findOrFail($id);
    }

    
   

   
}