<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Institution extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'description', 'user_id',
    ];
}
