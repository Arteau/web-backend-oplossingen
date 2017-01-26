<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //public $timestamps = false;

    protected $fillable =[
        'title',
        'url',
        'created_by',
        'date',
        
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
