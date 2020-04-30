<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Client;
use App\Contrat;
use App\Formation;
use App\Http\Controllers\Controller;
use App\Paiement;
use App\Preinscription;
use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $max = 0;
        $min = 0;
        $cc = [];
        $contrats=Contrat::all();
//        dd($contrats->TarifF);
//      foreach ($contrats as $c ){
//          if (  $c->TarifF>=$max ){
//              $max = $c->TarifF;
//              $cc[]=$max;
//          }else if(){
//
//          }
//
//          $max = $c->TarifF;
//          $min = $c->TarifF;
//
//      }
        return view('admin.contrat.index')->with('contrats',$contrats);
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
        $inscription=Preinscription::find($request->get('id'));
//        dd($inscription);
//        foreach ($inscription->session  as $s ){
//            dd($inscription->session->etat);
//        }
//        dd($inscription);

        return view('admin.contrat.create')->with('formations',Formation::all()->pluck('Intitule', 'id_formation'))
            ->with('id_insc',$key)->with('inscription',$inscription);
    }


    public function getsessions($id){
        $sessions = Session::where('id_formation',$id)->pluck('date_lancement','id_session');
        return json_encode($sessions);

    }

    public function getprice($id){

        $price= Formation::where('id_formation',$id)->pluck('prix');
        return json_encode($price);
    }

    public function getPourcentage($id){
        $p = Session::where('id_session',$id)->pluck('pourcentage_p');
        return json_encode($p);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Contrat $contrat,Client $client,Paiement $paiement)
    {

//        dd(($request->TarifF) - ($request->montant));
//        dd($request->all());
        if ($request->id_client!=null){
            $contrat->Reduction=$request->Reduction;
            $contrat->TarifF=($request->TarifF) - ($request->montant);
            $sess =  Session::find($request->id_session);
            $contrat->id_session=$request->id_session;
            $adm =  Admin::find(Auth::guard('admin')->id());
            $contrat->id_admin=Auth::guard('admin')->id();
            $client2=Client::find($request->id_client);
            $contrat->id_client=$request->id_client;
            $contrat->save();
            $contrat->admin()->associate($adm);
            $contrat->session()->associate($sess);
            $contrat->client()->associate($client2);
            $paiement->type=$request->type;
            $paiement->montant=$request->montant;
            $paiement->id_admin=Auth::guard('admin')->id();
            $paiement->id_contrat=$contrat->id_contrat;
            $paiement->save();
            $paiement->admin()->associate($adm);
            $paiement->contrat()->associate($contrat);


        }else{
            $adm =  Admin::find(Auth::guard('admin')->id());
            $client->statut=$request->statut;
            $client->nom=$request->nom;
            $client->prenom=$request->prenom;
            $client->Adresse=$request->Adresse;
            $client->fix=$request->fix;
//            $client->email=$request->email;
            $client->Mob1=$request->Mob1;
            $client->Mob2=$request->Mob2;
            $client->date_naissance=$request->date_naissance;
            $client->lieu_naissance=$request->lieu_naissance;
            $client->id_admin=Auth::guard('admin')->id();
            $client->save();
            $client->admin()->associate($adm);
            $contrat->Reduction=$request->Reduction;
            $contrat->TarifF=($request->TarifF) - ($request->montant);
            $sess =  Session::find($request->id_session);
            $contrat->id_session=$request->id_session;
            $contrat->id_admin=Auth::guard('admin')->id();
            $contrat->id_client=$client->id_client;
//            dd($contrat);
            $contrat->save();
            $contrat->admin()->associate($adm);
            $contrat->session()->associate($sess);
            $contrat->client()->associate($client);
            $paiement->type=$request->type;
            $paiement->montant=$request->montant;
            $paiement->id_admin=Auth::guard('admin')->id();
            $paiement->id_contrat=$contrat->id_contrat;
            $paiement->save();
            $paiement->admin()->associate($adm);
            $paiement->contrat()->associate($contrat);


        }
        return redirect('admin/contrat');

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
