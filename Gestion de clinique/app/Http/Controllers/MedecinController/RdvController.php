<?php

namespace App\Http\Controllers\MedecinController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\RendezVous;

class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addRdv()
    {
        return view('medecin.rdv.addRendezvous');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRvMed()
    {
        $current_date = Carbon::today();
        $rvConfMed = RendezVous::where('etat','confirmer')->whereDate('dateRV', $current_date)->get();
        return view('medecin.rdv.rdvToday')->with('rvConfMed',$rvConfMed);
    }

    public function showRdvAll()
    {
        $rvConfMed = RendezVous::where('etat','confirmer')->get();
        return view('medecin.rdv.rdvAll')->with('rvConfMed',$rvConfMed);
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
