<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Track;

class Artist extends Model
{
    public function allmusics()
    {
        return $this->hasMany(Track::class);
    }
}
