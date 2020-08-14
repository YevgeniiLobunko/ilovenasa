<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
