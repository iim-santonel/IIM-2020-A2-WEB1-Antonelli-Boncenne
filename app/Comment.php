<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'article_id'];

    public static function create($array)
    {
    }

    public static function orderBy($string, $string1)
    {
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
