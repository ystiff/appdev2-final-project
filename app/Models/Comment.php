<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'content'];

    // Reverse relation in User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Reverse relation in post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}