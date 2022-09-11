<?php

namespace App\Http\Controllers;

use App\Models\TV;
use App\Http\Requests\StoreTVRequest;
use App\Http\Requests\UpdateTVRequest;

class TVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTVRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTVRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TV  $tV
     * @return \Illuminate\Http\Response
     */
    public function show(TV $tV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TV  $tV
     * @return \Illuminate\Http\Response
     */
    public function edit(TV $tV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTVRequest  $request
     * @param  \App\Models\TV  $tV
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTVRequest $request, TV $tV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TV  $tV
     * @return \Illuminate\Http\Response
     */
    public function destroy(TV $tV)
    {
        //
    }
}
