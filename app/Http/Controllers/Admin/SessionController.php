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
        $session->save();

        for ($i=0 ; $i<(count($request->jour)) ; $i++){
            $creneau=new  Creneau();
            $creneau->jour=$request->jour[$i];
            $creneau->debut=$request->debut[$i];
            $creneau->fin=$request->fin[$i];
            $creneau->id_session=$session->id_session;
            $creneau->save();

            $creneau->session()->associate($session);

        }
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

        $date= strtotime($session->date_lancement);
        $yhn= date('Y-m-d', $date);

        $po= strtotime(date('Y-m-d', strtotime($yhn. ' + 0 days')));

        for ($io=0; $io<=6 ;$io++){
            $in= date('l', $po);
            if (in_array($in,$arry)){
                $arday[]=date("M,d,Y h:i:s A", $po);
            }
            $po= strtotime(date('Y-m-d', strtotime($yhn. ' + 1 days')));

            $yhn= date('Y-m-d', $po);
        }

        if ($nbr_sem!=1){
            $date= strtotime($session->date_lancement);
            $day = date('l', $date);
        }
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
        $sessions=Session::all();
        return view('admin.session.index')->with('sessions',$sessions);
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
