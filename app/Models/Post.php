<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function category()
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(): string
    {
        if ($var = 0){
            if ($var2 = 2){

            }
        }

        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
