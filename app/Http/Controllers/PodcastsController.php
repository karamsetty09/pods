<?php

namespace App\Http\Controllers;

use App\Models\Podcasts;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class PodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Podcasts::all()->where('status', 'review');
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
        return $request['name'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Podcasts  $podcasts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pods = Podcasts::find($id);

        if ($pods) {
            return $pods;
        } else {
            return 'No pods available by id';
        }
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
    public function destroy($id)
    {
        $pod = Podcasts::find($id);
        return $pod->delete();
    }
}
