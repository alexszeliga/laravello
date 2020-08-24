<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'title'
    ];
    
    public function todoList() {
        return $this->belongsTo(TodoList::class);
    }
}
