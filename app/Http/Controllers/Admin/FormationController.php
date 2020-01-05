<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Category;
use App\Department;
use App\Formation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation  =  Formation::all();
            return view('admin.formation.index')->with('formations',$formation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats= Category::all();
        $deps =  Department::all();
        $admins = Admin::all();
        return view('admin.formation.create')->with('cats',$cats)->with('deps',$deps)
            ->with('admins',$admins);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Formation $formation)
    {

        $formation->code=$request->code;
        $formation->Intitule=$request->Intitule;
        $formation->duree=$request->duree;
        $formation->objectif=$request->objectif;
        $formation->prerequis=$request->prerequis;
        $formation->program=$request->program;
        $formation->payment=$request->payment;
        $formation->prix=$request->prix;
        $formation->id_admin=Auth::guard('admin')->id();

        $formation->id_category=$request->category;
        $formation->save();

        $cat = Category::find($request->category);
        $cat->formations()->save($formation);
        $dep = Department::find($request->department);
        $dep->formations()->attach($formation);
        return redirect('admin/formation/create');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        return view('admin.formation.show')->with('formation',$formation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        $deps =  Department::all();
        $cats= Category::all();
        return view('admin.formation.edit')->with('formation',$formation)->with('cats',$cats)->with('deps',$deps);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {

        $formation->code=$request->code;
        $formation->Intitule=$request->Intitule;
        $formation->duree=$request->duree;
        $formation->objectif=$request->objectif;
        $formation->prerequis=$request->prerequis;
        $formation->program=$request->program;
        $formation->payment=$request->payment;
        $formation->prix=$request->prix;
        $formation->id_admin=Auth::guard('admin')->id();

        $formation->id_category=$request->category;
        $formation->save();

        $cat = Category::find($request->category);
        $cat->formations()->save($formation);
        $dep = Department::find($request->department);
        $dep->formations()->attach($formation);
        return redirect('admin/formation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        foreach ($formation->departments()->get() as $d){
            $formation->departments()->detach([$d->id_department]);
        }
        $formation->delete();
        return redirect('admin/formation');
    }
}
