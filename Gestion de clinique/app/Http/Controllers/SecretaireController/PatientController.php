<?php

namespace App\Http\Controllers\SecretaireController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

class PatientController extends Controller
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
    public function createPatient(Request $request)
    {
        return view('secretaire.add_patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePatient(Request $request)
    {
        $patient = new User;

        $patient->prenom = $request->prenom;
        $patient->nom = $request->nom;
        $patient->email = $request->email;
        $patient->password = $request->password;
        $patient->dateNais = $request->dateNais;
        $patient->adresse = $request->adresse;
        $patient->tel = $request->phone;
        $patient->sexe = $request->sexe;
        
        $patient->save();

        return redirect('showPatient')->with('message','Patient ajouté avec succés !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = User::where('role','patient')->get();
        return view('secretaire.showPatient', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPatient($id)
    {
        $patient = User::find($id);
        return view('secretaire.editPatient',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePatient(Request $request, $id)
    {
        $patient = User::find($id);

        $patient->prenom = $request->prenom;
        $patient->nom = $request->nom;
        $patient->email = $request->email;
        $patient->dateNais = $request->dateNais;
        $patient->adresse = $request->adresse;
        $patient->tel = $request->phone;
        $patient->sexe = $request->sexe;
        
        $patient->save();

        return redirect('showPatient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPatient($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->back();
    
    }
}
