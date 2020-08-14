<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCollections extends Model
{
    protected $fillable = [
        'name',
        'public',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trackPlaylist () {
        return $this->hasMany(Playlist::class);
    }
}
