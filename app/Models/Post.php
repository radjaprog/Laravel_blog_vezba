<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable =  ['title', 'body', 'user_id'];

    // protected $guarded = ['published'];      
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function published()
    {

        return self::where('published', true)->paginate(10);
    }

    public function addComment()
    {
        $this->comments()->create([
            'body' => request('body')
        ]);
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->