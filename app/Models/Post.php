<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'content'
    ];
    // RELATION IN USERS
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // RELATION IN LIKES
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Relation in comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}