<?php

namespace App\Http\Controllers;

use App\AllMusic;
use App\Artist;
use Illuminate\Http\Request;

class AllMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allmusics = AllMusic::with('artist')->get();

        return view('allmusic', compact('allmusics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AllMusic  $allMusic
     * @return \Illuminate\Http\Response
     */
    public function show(AllMusic $allMusic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AllMusic  $allMusic
     * @return \Illuminate\Http\Response
     */
    public function edit(AllMusic $allMusic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AllMusic  $allMusic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllMusic $allMusic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AllMusic  $allMusic
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllMusic $allMusic)
    {
        //
    }
}
