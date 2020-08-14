<?php

namespace App\Http\Controllers;

use App\Track;
use App\Playlist;
use App\ListCollections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $userId = Auth::id();

        $userLists = null;

        if(ListCollections::where('user_id', '=', $userId)->count() > 0) {
            $userLists = ListCollections::where('user_id', '=', $userId)->get();
        }


        return view('playlist.playlists', compact('userLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tracks = Track::with('artist')->get();
        return view('playlist.create', compact('tracks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $list = new ListCollections();
        $list->name = $request->input()['name'];
        $list->public = $request->has('public');
        $list->user_id = $request->input()['user_id'];
        $list->save();

        $list_id = $list->id;
        foreach ($request->input()['tracks'] as $k => $track_id) {
            $playlist = new Playlist();
            $playlist->list_id = $list_id;
            $playlist->track_id = $track_id;
            $playlist->save();

        }

        return redirect()->route('user_lists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function show(UserList $userList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function edit(UserList $userList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserList  $userList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserList $userList)
    {
        //
    }


    public function destroy( $list_id)
    {
        $playlist = Playlist::where('list_id', '=', $list_id)->delete();

        $list = ListCollections::find($list_id);

        $list->delete();

        return redirect()->route('user_lists.index');

    }
}
