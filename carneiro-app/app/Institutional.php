<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institutional extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'about', 'user_id',
    ];
}
