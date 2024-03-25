<?php

namespace App\Http\Controllers\PatientController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\RendezVous;
use App\User;
use Auth;

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
    public function addRv()
    {
        //$user = User::all();
        $user = User::find(Auth::user()->id);
        return view('patient/rdv.add_rdv')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRvPat(Request $request)
    {
        $rv = new RendezVous;

        $rv->motifRv = $request->motifRv;
        $rv->heureRv = $request->heureRv;
        $rv->dateRv = $request->dateRv;
        $rv->typeAgent = $request->typeAgent;
        $rv->user_id = $request->user_id;
        
        $rv->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRvList()
    {
        $rvList = RendezVous::where('user_id', Auth::user()->id)->get();
        return view('patient.rdv.showRvList')->with('rvList',$rvList);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id == numRDV
     * @return \Illuminate\Http\Response
     */
    public function destroyRvDem($numRDV)
    {
        $data = RendezVous::find($numRDV);
        
        $data->delete();

        return redirect()->back();
    }
    public function consultDossier()
    {
        return view('patient.consulterDossier');
    }
    
}
