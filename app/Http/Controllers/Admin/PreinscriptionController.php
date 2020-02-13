<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Client;
use App\Formation;
use App\Http\Controllers\Controller;
use App\Jour;
use App\Preinscription;
use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreinscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inscription.index');
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
    public function store(Request $request,Preinscription $preinscription,Client $client)
    {
//        dd($request->all());
        $client->statut=$request->statut;
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->Adresse=$request->Adresse;
        $client->fix=$request->fix;
        $client->Mob1=$request->Mob1;
        $client->Mob2=$request->Mob2;
        $client->date_naissance=$request->date_naissance;
        $client->lieu_naissance=$request->lieu_naissance;
        $client->id_admin=Auth::guard('admin')->id();
        $client->save();
        $preinscription->TarifG=$request->TarifG;
        $preinscription->Reduction=$request->Reduction;
        $preinscription->TarifF=$request->TarifF;
        $preinscription->id_admin=Auth::guard('admin')->id();
        $preinscription->id_client=$client->id_client;
        $sess =  Session::find($request->id_session);
//        dd($preinscription->id_session=$sess->id_session);
        $preinscription->id_session=$sess->id_session ;
        $adm =  Admin::find(Auth::guard('admin')->id());
        $preinscription->save();
        $preinscription->admin()->associate($adm);
        $preinscription->client()->associate($client);
        $preinscription->session()->associate($sess);


        $co = 1;
        $coidc = 0;
        $jour = new Jour();
        $jour->jour="Vendredi";
        $jour->id_preinscription=$preinscription->id_preinscription;
        while ($coidc<count($request->Vendredi)){
            $vend= $request->Vendredi[$coidc];
            if ($co==1){
                $jour->slot1=$vend;
            }
            if ($co==2){
                $jour->slot2=$vend;

            }
            if ($co==3){
                $jour->slot3=$vend;
            }

            if ($vend==1){
                $coidc++;
            }
            $coidc++;
            $co++;
        }

        $jour->save();
//        $preinscription->jours()->save($jour);
        $jour->inscription()->associate($preinscription);

        $co1 = 1;
        $coidc1 = 0;
        $jour1 = new Jour();
        $jour1->jour="Samedi";
        $jour1->id_preinscription=$preinscription->id_preinscription;
        while ($coidc1<count($request->Samedi)){
            $vend1= $request->Samedi[$coidc1];
            if ($co1==1){
                $jour1->slot1=$vend1;
            }
            if ($co1==2){
                $jour1->slot2=$vend1;

            }
            if ($co1==3){
                $jour1->slot3=$vend1;

            }
            if ($vend1==1){
                $coidc1++;
            }
            $coidc1++;
            $co1++;
        }
        $jour1->save();
//        $preinscription->jours()->save($jour1);
        $jour1->inscription()->associate($preinscription);



        $co2 = 1;
        $coidc2 = 0;
        $jour2 = new Jour();
        $jour2->jour="Dimanche";
        $jour2->id_preinscription=$preinscription->id_preinscription;
        while ($coidc2<count($request->Dimanche)){
            $vend2= $request->Dimanche[$coidc2];
            if ($co2==1){
                $jour2->slot1=$vend2;
            }
            if ($co2==2){
                $jour2->slot2=$vend2;

            }
            if ($co2==3){
                $jour2->slot3=$vend2;

            }
            if ($vend2==1){
                $coidc2++;
            }
            $coidc2++;
            $co2++;
        }
        $jour2->save();
//        $preinscription->jours()->save($jour2);
        $jour2->inscription()->associate($preinscription);


        $co3 = 1;
        $coidc3 = 0;
        $jour3 = new Jour();
        $jour3->jour="Lundi";
        $jour3->id_preinscription=$preinscription->id_preinscription;
        while ($coidc3<count($request->Lundi)){
            $vend3= $request->Lundi[$coidc3];
            if ($co3==1){
                $jour3->slot1=$vend3;
            }
            if ($co3==2){
                $jour3->slot2=$vend3;

            }
            if ($co3==3){
                $jour3->slot3=$vend3;

            }
            if ($vend3==1){
                $coidc3++;
            }
            $coidc3++;
            $co3++;
        }
        $jour3->save();
//        $preinscription->jours()->save($jour3);
        $jour3->inscription()->associate($preinscription);



        $co4 = 1;
        $coidc4 = 0;
        $jour4 = new Jour();
        $jour4->jour="Mardi";
        $jour4->id_preinscription=$preinscription->id_preinscription;
        while ($coidc4<count($request->Mardi)){
            $vend4= $request->Mardi[$coidc4];
            if ($co4==1){
                $jour4->slot1=$vend4;
            }
            if ($co4==2){
                $jour4->slot2=$vend4;

            }
            if ($co4==3){
                $jour4->slot3=$vend4;

            }
            if ($vend4==1){
                $coidc4++;
            }
            $coidc4++;
            $co4++;
        }
        $jour4->save();
//        $preinscription->jours()->save($jour4);
        $jour4->inscription()->associate($preinscription);



        $co5 = 1;
        $coidc5 = 0;
        $jour5 = new Jour();
        $jour5->jour="Mercredi";
        $jour->id_preinscription=$preinscription->id_preinscription;
        while ($coidc5<count($request->Mercredi)){
            $vend5= $request->Mercredi[$coidc5];
            if ($co5==1){
                $jour5->slot1=$vend5;
            }
            if ($co5==2){
                $jour5->slot2=$vend5;

            }
            if ($co5==3){
                $jour5->slot3=$vend5;

            }
            if ($vend5==1){
                $coidc5++;
            }
            $coidc5++;
            $co5++;
        }
        $jour5->save();
//        $preinscription->jours()->save($jour5);
        $jour5->inscription()->associate($preinscription);


        $co6 = 1;
        $coidc6 = 0;
        $jour6 = new Jour();
        $jour6->jour="Jeudi";
        $jour->id_preinscription=$preinscription->id_preinscription;
        while ($coidc6<count($request->Jeudi)){
            $vend6= $request->Jeudi[$coidc6];
            if ($co6==1){
                $jour6->slot1=$vend6;
            }
            if ($co6==2){
                $jour6->slot2=$vend6;

            }
            if ($co6==3){
                $jour6->slot3=$vend6;

            }
            if ($vend6==1){
                $coidc6++;
            }
            $coidc6++;
            $co6++;
        }
        $jour6->save();
//        $preinscription->jours()->save($jour6);
        $jour6->inscription()->associate($preinscription);


        return redirect('admin/inscription');
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
