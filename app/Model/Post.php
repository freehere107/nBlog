<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'user_id', 'content'];


    public function user()
    {
        return $this->belongsTo('App\Model\User', 'foreign_key');
    }
}
