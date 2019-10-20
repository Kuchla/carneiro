<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['gallery_id', 'name'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
