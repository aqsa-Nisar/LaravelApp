<?php

namespace App\Interfaces;

interface AuthorRepositoryInterface
{
    public function getAllPostsOfAuthor($id);

}