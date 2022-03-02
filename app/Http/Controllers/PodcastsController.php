<?php

namespace App\Http\Controllers;

use App\Models\Podcasts;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hello World';
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
     * @param  \App\Models\Podcasts  $podcasts
     * @return \Illuminate\Http\Response
     */
    public function show(Podcasts $podcasts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Podcasts  $podcasts
     * @return \Illuminate\Http\Response
     */
    public function edit(Podcasts $podcasts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Podcasts  $podcasts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Podcasts $podcasts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Podcasts  $podcasts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Podcasts $podcasts)
    {
        //
    }
}
