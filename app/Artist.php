<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AllMusic;

class Artist extends Model
{
    public function allmusics()
    {
        return $this->hasMany(AllMusic::class);
    }
}
