<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "post";

    protected $fillable = [
        "author_id",

        'title',
        'postbody',
        'slug'
    ];
    public function post(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}