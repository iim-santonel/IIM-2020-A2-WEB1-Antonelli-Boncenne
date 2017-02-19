<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table= "contact";
    protected $fillable = ['content', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}