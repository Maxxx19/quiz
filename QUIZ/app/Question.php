<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'question'];

    public function answers()
    {
        return $this->morphMany('App\Answer', 'answerable');
    }
}
