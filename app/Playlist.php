<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function list()
    {
        return $this->belongsTo(ListCollections::class);
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}
