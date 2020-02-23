<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Particulier;
use Illuminate\Http\Request;

class ParticulierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
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
     * @param  \App\Particulier  $particulier
     * @return \Illuminate\Http\Response
     */
    public function show(Particulier $particulier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Particulier  $particulier
     * @return \Illuminate\Http\Response
     */
    public function edit(Particulier $particulier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Particulier  $particulier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Particulier $particulier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Particulier  $particulier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Particulier $particulier)
    {
        //
    }
}
