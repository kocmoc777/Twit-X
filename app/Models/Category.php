<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categories';
    //Від помилки при якихось змін в таблиці
    protected $guarded = false;

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
    public function likedUser()
    {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id' , 'user_id');
    }
}
