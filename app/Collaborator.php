<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Collaborator extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'role', 'category', 'image', 'active', 'user_id'
    ];

    public function setCollaboratorImageAttribute($value)
    {
        $this->attributes['image'] = is_null($value) ? $this->image :  $value;
    }
}
