<?php

namespace App\Http\Controllers\SecretaireController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\RendezVous;
use App\User;

class RdvController extends Controller
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
    public function addRv($id)
    {
        $idd = $id;
        return view('secretaire/rdv.add_rdv', compact('idd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRv(Request $request)
    {
        $rv = new RendezVous;

        $rv->motifRv = $request->motifRv;
        $rv->heureRv = $request->heureRv;
        $rv->dateRv = $request->dateRv;
        $rv->user_id = $request->user_id;
        $rv->etat = 'confirmer';
        
        $rv->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRvConfirmer()
    {
        $rvConf = RendezVous::where('etat','confirmer')->get();
        return view('secretaire.rdv.showRvConfirmer')->with('rvConf',$rvConf);
    }

    public function showRvDemander()
    {
        $rvDem = User::where('role', 'patient')->join('rendezvous', 'rendezvous.user_id', '=', 'users.id')->where('rendezvous.etat','en cours...')->get();
        return view('secretaire.rdv.showRvDemander')->with('rvDem',$rvDem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $+id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.(ConfirmRv)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmeRv(Request $request, $numRDV)
    {
        $rvConf = RendezVous::find($numRDV);

        $rvConf->etat = 'confirmer';
        
        $rvConf->save();

        return redirect()->back();
    }

    public function rejetRv(Request $request, $numRDV)
    {
        $rvConf = RendezVous::find($numRDV);

        $rvConf->etat = 'Rejeter';
        
        $rvConf->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id == numRDV
     * @return \Illuminate\Http\Response
     */
    public function destroyRvConf($numRDV)
    {
        $data = RendezVous::find($numRDV);
        
        $data->delete();

        return redirect()->back();
    }
    
}
