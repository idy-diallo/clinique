<?php

namespace App\Http\Controllers\MedecinController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Prescription;
use App\Consultation;
use App\User;
use App\ModelDossier\Radio;
use App\ModelDossier\Analyse;
use App\ModelDossier\Vaccin;
use App\ModelDossier\Traitement;
use App\ModelDossier\Medicament;
use App\ModelDossier\Antecedent;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addDossier($id)
    {
        $trait = Traitement::join('prescription', 'prescription.idPres', '=', 'pres_id')->join('consultation', 'consultation.numConsult', '=','consul_id')->get();
        foreach($trait as $tr){
            $numTrait = $tr->numTrait;
        }
        $pres = Prescription::join('consultation', 'consultation.numConsult', '=', 'consul_id')->get();
        foreach($pres as $pr){
            $idPres = $pr->idPres;
        }
        return view('medecin/dossierMedical/addDossier',compact('idPres', $idPres))->with('numTrait', $numTrait);
    }

    public function addMed(Request $request){
        $med = new Medicament;
        $med->trait_id = $request->numTrait;
        $med->nomMed = $request->medicament;
        $med->quantite = $request->quant;
        $med->posologie = $request->posologie;

        $med->save();
        return redirect()->back();
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAnt(Request $request)
    {
        $pr = Prescription::find($request->idPres)->get();
        foreach($pr as $p){
            $con = $p->consul_id;
        }
        $co = Consultation::find($con)->get();
        foreach($co as $c){
            $pa = $c->patient_id;
        }
        $ant = new Antecedent;
        $ant->patient_id = $pa;
        $ant->catAnt = $request->cat;
        $ant->description = $request->descrip;
        $ant->save();
        return redirect()->back();
    }
    public function storeRadio(Request $request)
    {
        $radio = new Radio;
        $radio->pres_id = $request->idPres;
        $radio->typeRadio = $request->radio;
        $radio->resultat = $request->resultat;
        $radio->save();
        return redirect()->back();
    }
    public function storeAnalyse(Request $request)
    {
        $analyse = new Analyse;
        $analyse->pres_id = $request->idPres;
        $analyse->typeAnalyse = $request->analyse;
        $analyse->resultat = $request->resultat;
        $analyse->save();
        return redirect()->back();
    }
    public function storeVaccin(Request $request)
    {
        $vaccin = new Vaccin;
        $vaccin->pres_id = $request->idPres;
        $vaccin->dateVaccin = $request->dateVac;
        $vaccin->description = $request->desc;
        $vaccin->save();
        return redirect()->back();
    }

    public function storeTraitement(Request $request)
    {
        $trait = new Traitement;
        $trait->pres_id = $request->idPres;
        $trait->date = $request->dateTrait;
        $trait->nomMed = $request->medicament;
        $trait->quant = $request->quant;
        $trait->posol = $request->posologie;
        $trait->save();
        return redirect()->back();
    }

    public function listDossier(){
        $users = User::where('role', 'patient')->get();
        return view('medecin/dossierMedical/listDossier',compact('users', $users));
    }

    public function detailDossier($id)
    {
        $idUs = $id;
        $consult = Consultation::where('patient_id',$id)->get();
        foreach($consult as $c){
            $c_id = $c->numConsult;
            $c_pat = $c->patient_id;
        }
        $pr = Prescription::where('consul_id', $c_id)->get();

        $ant = Antecedent::where('pat_id',$c_pat)->get();
        foreach($pr as $p){
            $pres_id = $p->idPres;
        }
        $trait = Traitement::where('pres_id', $pres_id)->get();
        foreach($trait as $t){
            $med_id = $t->numTrait;
        }
        $med = Medicament::where('trait_id',$med_id)->get();
        $ana = Analyse::where('pres_id',$pres_id)->get();
        $rad = Radio::where('pres_id',$pres_id)->get();
        $vacc = Vaccin::where('pres_id',$pres_id)->get();

        return view('medecin/dossierMedical/detailDossier',compact('consult',$consult))->with('pr',$pr)->with('ant',$ant)->with('trait',$trait)->with('med',$med)->with('ana',$ana)->with('rad',$rad)->with('vacc',$vacc);
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
