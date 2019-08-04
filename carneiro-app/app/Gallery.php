<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gallery extends Model
{
    use Notifiable;

    protected $fillable = [
        'description', 'image', 'category', 'user_id'
    ];

    public function setGalleryImageAttribute($value)
    {
        $this->attributes['image'] = is_null($value) ? $this->image :  $value;
    }
}
