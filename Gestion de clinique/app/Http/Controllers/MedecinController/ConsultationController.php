<?php

namespace App\Http\Controllers\MedecinController;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\User;
use App\RendezVous;
use App\Consultation;
use App\Prescription;
use App\ModelDossier\Traitement;
use Auth;

class ConsultationController extends Controller
{   
    public function list_consult(){
        $lists = Consultation::all(); 
        return view('medecin/consultation/list_consult', compact('lists',$lists));
    }

    public function addConsultation($id){
        $current_date = Carbon::today();
        $user = User::find($id); 
        $prenom = $user->prenom; 
        $rv = RendezVous::where('user_id',$id)->whereDate('dateRV',$current_date)->get();
        //$motif = $rv->motifRV;
        return view('medecin/consultation/addConsultation')->with('id', $id)->with('prenom',$prenom)->with('rv',$rv);
    }

    public function storeConsult(Request $request){
        $user = User::find(Auth::user()->id);
        $id = $user->id;
        $current_date = Carbon::today();
        $consult = new Consultation;
        $consult->patient_id = $request->idPat;
        $consult->agent_id = $id;
        $consult->motifCons = $request->motifRv;
        //$consult->histoireMal = $request->histMal;
        $consult->taille = $request->taille;
        $consult->poids = $request->poids;
        $consult->tension = $request->tens;
        $consult->temperature = $request->temp;
        $consult->diagnostique = $request->diag;
        $consult->evolution = $request->evol;
        $consult->dateConsult = Carbon::today();
        $consult->save();

        $consul = Consultation::where('patient_id', $request->idPat)->whereDate('dateConsult', $current_date)->get();
        foreach($consul as $c){
            $idCons = $c->numConsult;
        }

        $pres = new Prescription;
        $pres->consul_id = $idCons;
        $pres->datePres = Carbon::today();
        $pres->save();

        $prescri = Prescription::where('consul_id',$idCons)->get();
        $idPres = $pres->idPres;

        $trait = new Traitement;
        $trait->pres_id = $idPres;
        $trait->save();

        return redirect('list_consult');
    }   

    public function detailConsultation($id){
        $listCons = Consultation::find($id)/*->join('users', 'users.id', '=', 'patient_id')->orWhere('users.id','agent_id')->get()*/;
        return view('medecin/consultation/detailConsultation')->with('listCons',$listCons);
    }


    //pour gerer le certificat
    public function addCertificat(){
        return view('medecin/certificat/addCertificat');
    }

    public function listCertificat(){
        return view('medecin/certificat/listCertificat');
    }
}
