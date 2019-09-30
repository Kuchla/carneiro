<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'duration', 'logo', 'schedule_integrated', 'schedule_subsequent', 'description', 'user_id'
    ];

    public function setLogoCourseAttribute($value)
    {
        $this->attributes['logo'] = is_null($value) ? $this->logo :  $value;
    }
}
