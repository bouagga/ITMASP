<?php

namespace App\Http\Controllers\Admin;

use App\Creneau;
use App\Formation;
use App\Http\Controllers\Controller;
use App\Preinscription;
use App\Session;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions=Session::all();
        return view('admin.session.index')->with('sessions',$sessions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $formations= Formation::all();
        return view('admin.session.create')->with('formations',$formations);
    }

    public function addMorePost(Request $request)
    {
        $rules = [];
        foreach ($request->input('jour') as $key => $value) {
            $rules["jour.{$key}"] = 'required';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {
            foreach ($request->input('jour') as $key => $value) {
                MCChoice::create(['jour' => $value]);
            }
            return response()->json(['success' => 'done']);
        }
        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Session $session)
    {
        $d=$request->date_lancement;
        $d= new DateTime($d);
////        dd($dd);
        $session->date_lancement=$d;
        $dpd=$request->date_debut_p;
        $dpd= new DateTime($dpd);
        $session->date_debut_p=$dpd;
        $dpf=$request->date_fin_p;
        $dpf= new DateTime($dpf);
        $session->date_fin_p=$dpf;
        $session->etat='on hold ';
        $session->pourcentage_p=$request->pourcentage_p;
        $session->id_formation=$request->formation;
        $f=Formation::find($request->formation);
        $session->prix_p=($f->prix)-(($f->prix)*($request->pourcentage_p)/100);
        $session->id_admin=Auth::guard('admin')->id();
//        dd($request->jour);
        $session->save();
//
//        $creneau->jour=$request->jour[0];
//        $creneau->debut=$request->debut[0];
//        $creneau->fin=$request->fin[0];
//        $creneau->id_session=$session->id_session;
//        $creneau->save();
//dd($creneau);
//
//
//        $creneau->jour=$request->jour[1];
//        $creneau->debut=$request->debut[1];
//        $creneau->fin=$request->fin[1];
//        $creneau->id_session=$session->id_session;
//        $creneau->save();

        for ($i=0 ; $i<(count($request->jour)) ; $i++){
            $creneau=new  Creneau();
            $creneau->jour=$request->jour[$i];
            $creneau->debut=$request->debut[$i];
            $creneau->fin=$request->fin[$i];
            $creneau->id_session=$session->id_session;
            $creneau->save();

            $creneau->session()->associate($session);

        }
//        for ($i=0 ; $i<(count($request->jour)) ; $i++){
//            echo $request->jour[$i];
//
//        }
        $co =0 ;
//        dd($request->jour);
//        foreach ($request->jour as $j ){
//            $cc= new Creneau();
//            $cc->jour=$request->jour[$co];
//            $cc->debut=$request->debut[$co];
//            $cc->fin=$request->fin[$co];
//            $cc->id_session=$session->id_session;
//            $cc->save();
//
//            $cc->session()->associate($session);
//        }
        return redirect('admin/session');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function show(Session $session)
    {
        $periode=0;
        foreach ($session->creneau()->get() as $creneau){
            $time_debut= (int)$creneau->debut;
            $time_fin=(int)$creneau->fin;
            $differece=$time_fin-$time_debut;
            $periode=$periode+$differece;
        }
        foreach ($session->formation()->get() as $formation){
            $duree=$formation->duree;
        }
        $nbr_sem=round($duree/$periode);
        $coo=0;
        foreach ($session->creneau()->get() as $jj){
            $arry[] =$jj->jour;
        }
        $nbr_col=round(12/count($arry));

//        dd($arry);
        $date= strtotime($session->date_lancement);
        $yhn= date('Y-m-d', $date);
//        dd($yhn);

//        $arday[]=date("M,d,Y h:i:s A", $date);
//        dd($arday);
        $po= strtotime(date('Y-m-d', strtotime($yhn. ' + 0 days')));

        for ($io=0; $io<=6 ;$io++){
//            echo $yhn." c'est jour : ";
            $in= date('l', $po);
//            echo $in."///";
//            echo date("M,d,Y h:i:s A", $po);
            if (in_array($in,$arry)){
//                echo "1slam1";
                $arday[]=date("M,d,Y h:i:s A", $po);
            }
            $po= strtotime(date('Y-m-d', strtotime($yhn. ' + 1 days')));

            $yhn= date('Y-m-d', $po);
        }
//dd($arday);
//        $po= strtotime(date('Y-m-d', strtotime($yhn. ' + 2 days')));
//        dd($po);
//        echo date('l', $po);
//      for ($coo=0;$coo<=$arry;$coo++){
//          echo $coo;
////          echo $arry->jour;
////          echo $arry[$coo] ;
//
//
////        dd($yhn);
//
////          echo $date;
////          $date->add(new DateInterval('P1D')); // P1D means a period of 1 day
////          $day2 = date('l', $date);
////          echo $day2;
//      }
        if ($nbr_sem!=1){
            $date= strtotime($session->date_lancement);
            $day = date('l', $date);


        }


//        $Date1 = '2020-02-23';
//        $date = new DateTime($Date1);
//        $date->add(new DateInterval('P6D')); // P1D means a period of 1 day
//        $Date2 = $date->format('Y-m-d');
//        $timestamp = strtotime($Date2);
//        $day = date('l', $timestamp);
//        dd($day);

//       $date= strtotime($session->date_lancement);
//        $day = date('l', $date);
//        $i=1;
//        foreach ($session->creneau()->get() as $cr){
//           $dday= $cr->jour;
//           echo $i;
//           if ($day == $dday){
////               dd("jhf");
//           }
//            $tr=$cr->debut;
//            $tttttttt= strtotime($cr->debut);
//            $rrr= date("M,d,Y h:i:s A",$tttttttt);
//            $time1= (int)$cr->debut;
//            $time=(int)$cr->fin;
//            $tt=$time-$time1;
////            $er=$er+$tt;
//            $i++;
//        }
//        $az= round(9/$er);

//        dd($arday);
        return view('admin.session.show')->with('session',$session)->with('az',$nbr_sem)->with('time',$arday)->with('col',$nbr_col);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function edit(Session $session)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session $session)
    {
//        dd($request->all());
//        dd(Preinscription::w  here('id_client',2));
//        $i=0;
//        foreach ($session->preinscriptios()->get() as $inscr){
//            $inscr->calle1=$request->calle1[$i];
//            $inscr->calle2=$request->calle2[$i];
//            $inscr->calle3=$request->calle3[$i];
//           $inscr->save();
//            $i++;
//
//        }
        $sessions=Session::all();
        return view('admin.session.index')->with('sessions',$sessions);
//      for ($i=0 ; $i<count($request->id_client);$i++){
//            $inscr =  );
//            dd($inscr->calle1);
//
//      }
//        dd(Preinscription::where('id_client',$request->id_client[0]));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session $session)
    {
        //
    }
}
