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

    public function setCourseLogoAttribute($value)
    {
        $this->attributes['logo'] = is_null($value) ? $this->logo :  $value;
    }

    public function setSubsequentScheduleAttribute($value)
    {
        $this->attributes['schedule_subsequent'] = is_null($value) ? $this->schedule_subsequent :  $value;
    }

    public function setIntegratedScheduleAttribute($value)
    {
        $this->attributes['schedule_integrated'] = is_null($value) ? $this->schedule_integrated :  $value;
    }
}
