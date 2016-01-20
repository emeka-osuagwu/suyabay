<?php


namespace Suyabay\Http\Controllers;

use Suyabay\Episode;
use Suyabay\Http\Requests;
use Illuminate\Http\Request;
use Suyabay\Http\Controllers\Controller;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episode::paginate(5);

        return view('app.pages.index', compact('episodes'));
    }
}
