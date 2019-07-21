<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class News extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'description', 'category', 'image', 'user_id'
    ];
}
