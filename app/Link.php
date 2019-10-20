<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Link extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'url', 'user_id', 'image'
    ];

    public function setLinkImageAttribute($value)
    {
        $this->attributes['image'] = is_null($value) ? $this->image :  $value;
    }
}
