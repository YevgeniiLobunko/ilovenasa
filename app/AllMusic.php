<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artist;

class AllMusic extends Model
{
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
