<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\AppelSortant;
use App\Client;
use App\Http\Controllers\Controller;
use App\Preinscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppelSortantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.session.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $key = $request->get('id');
//        dd($key);
//        $key= 0;
//        dd($key);
        $ins=Preinscription::find($request->get('id'));
//dd($ins);
            $clei=Client::all();
//        dd($ins);
        return view('admin.appel_sortant.create')->with('id_ins',$key)->with('ins',$ins)->with('clinet',$clei);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,AppelSortant $appelSortant)
    {
//        dd($request->all());
        $appelSortant->subject=$request->subject;
        $appelSortant->corp=$request->corp;
        $appelSortant->id_admin=Auth::guard('admin')->id();
        $appelSortant->id_client=$request->client;
        $appelSortant->id_preinscription=$request->id_preinscription;
        $adm =  Admin::find(Auth::guard('admin')->id());
        $clit=Client::find($request->client);
        $insc=Preinscription::find($request->id_preinscription);

        $appelSortant->admin()->associate($adm);
        $appelSortant->client()->associate($clit);

        $appelSortant->inscription()->associate($insc);

        $appelSortant->save();
return view('admin.appel_sortant.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
