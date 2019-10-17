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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setNewsImageAttribute($value)
    {
        $this->attributes['image'] = is_null($value) ? $this->image :  $value;
    }
}
