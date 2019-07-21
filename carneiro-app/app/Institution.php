<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'description', 'user_id',
    ];
}
