<?php

namespace App\Http\Controllers\Admin;

use App\Formation;
use App\Http\Controllers\Controller;
use App\Preinscription;
use App\Session;
use Illuminate\Http\Request;

class PreinscriptionController extends Controller
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
        $formations=Formation::all()->pluck('Intitule', 'id_formation');
//        $sessions = Session::where('id_formation',1)->pluck('date_lancement','id_session');
//        dd(json_encode($sessions));
        return view('admin.inscription.create')->with('formations',$formations);
    }


    public function getsessions($id){
        $sessions = Session::where('id_formation',1)->pluck('date_lancement','id_session');
        return json_encode($sessions);

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
     * @param  \App\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function show(Preinscription $preinscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Preinscription $preinscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preinscription $preinscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preinscription  $preinscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preinscription $preinscription)
    {
        //
    }
}
