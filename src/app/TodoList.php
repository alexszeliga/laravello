<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    //
    protected $fillable = ['title'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function cards() {
        return $this-hasMany(Card::class);
    }
}
