<?php

namespace App\Http\Controllers\Admin;

use App\Creneau;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreneauController extends Controller
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
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.creneau.create');
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
     * @param  \App\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function show(Creneau $creneau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function edit(Creneau $creneau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creneau $creneau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Creneau  $creneau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creneau $creneau)
    {
        //
    }
}
