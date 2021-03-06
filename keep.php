<?php

namespace Suyabay\Http\Controllers;

use AWS;
use Storage;
use Session;
use Cloudder;
use Validator;
use Suyabay\Episode;
use Suyabay\Channel;
use Suyabay\Http\Requests;
use Illuminate\Http\Request;
use Suyabay\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Filesystem;

class EpisodeManager extends Controller
{
    /**
    * Display a listing of the resource to view_episodes
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $episodes = Episode::all();

        return view('dashboard/pages/view_episodes', compact('episodes'));
    }

    /**
    * Show create episode view
    */
    public function showIndex()
    {
        return view('dashboard.pages.create_episode');
    }

    /*
    * return channels list to create_episode view
    */
    public function showChannels()
    {
        $channels = Channel::all();

        return view('dashboard/pages/create_episode', compact('channels'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $bytes = filesize($request->podcast);

        $v = Validator::make($request->all(), [
            'title'         => 'required|min:3',
            'description'   => 'required|min:10',
            'channel'       => 'required',
            'cover'         => 'required',
            'podcast'       => 'required|size_format'
        ]);

        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        $cover = $this->getImageFileUrl($request->cover);
        $podcast = $this->uploadFileToS3($request);

        Episode::create([
            'episode_name'         => $request->title,
            'episode_description'  => $request->description,
            'image'                => $cover,
            'audio_mp3'            => $podcast,
            'view_count'           => 0,
            'channel_id'           => $request->channel
        ]);

        return redirect('dashboard/episode/create')->with('status', 'Nice Job!');
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $episode = Episode::find($id);

        return view('dashboard/pages/edit_episode')->with('episode', $episode);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }

    /*
    * Uploads cover image to cloudinary
    * returns the url
    */
    protected function getImageFileUrl($cover)
    {
        Cloudder::upload($cover, null);
        $coverUrl = Cloudder::getResult()['url'];

        return $coverUrl;
    }

    /*
    * uploads audio to amazon s3
    * returns the url
    */
    public function uploadFileToS3(Request $request)
    {
        $fileName = time() . '.' . $request->podcast->getClientOriginalExtension();
        $s3 = Storage::disk('s3');
        //large files
        $s3->put($fileName, fopen($request->podcast, 'r+'));

        return $s3->getDriver()->getAdapter()->getClient()->getObjectUrl('suyabay', $fileName);
    }
}
