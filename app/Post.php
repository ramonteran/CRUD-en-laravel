<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'author',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->morphMany(Comment::class,'commentable');
    }
}
