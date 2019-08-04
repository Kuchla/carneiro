<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'duration', 'logo', 'schedules', 'description', 'user_id'
    ];

    public function setLogoCourseAttribute($value)
    {
        $this->attributes['logo'] = is_null($value) ? $this->logo :  $value;
    }

    public function setSchedulesCourseAttribute($value)
    {
        $this->attributes['schedules'] = is_null($value) ? $this->schedules :  $value;
    }
}
