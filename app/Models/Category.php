<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        $posts = $this->hasMany(Post::class);
        return $posts;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
