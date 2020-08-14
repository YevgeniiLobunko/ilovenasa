<?php

namespace App\Http\Controllers;

use App\Track;
use App\Artist;
use App\TrackInList;
use Illuminate\Http\Request;

class AllMusicController extends Controller
{

    public function index()
    {
        $allmusics = Track::with('artist')->get();

        return view('allmusic', compact('allmusics'));
    }
}
