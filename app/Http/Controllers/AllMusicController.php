<?php

namespace App\Http\Controllers;

use App\ListCollections;
use App\Playlist;
use App\Track;
use App\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllMusicController extends Controller
{

    public function index()
    {
        $allmusics = Track::with('artist')->paginate(10);

        return view('allmusic', compact('allmusics'));
    }

    protected function trackInList($list_id)
    {

        $list = ListCollections::find($list_id);
        $playlist = Playlist::where('list_id', '=', $list_id)->get()->toArray();


        $tmp = [];
        foreach ($playlist as $k => $v) {
            array_push($tmp, $v['track_id']);
        }

        $tracks = Track::find($tmp);

        $list = [
            'id' => $list_id,
            'name' => $list->name
        ];

        return view('playlist.track_in_list', compact(['list', 'tracks']));
    }

    protected function availableLists()
    {
        $lists = ListCollections::with('user')->where('public', '=', '1')->get();

        return view('playlist.availableLists', compact('lists'));
    }
}
