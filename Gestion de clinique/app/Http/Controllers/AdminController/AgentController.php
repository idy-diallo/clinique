<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Agent;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

                    /*------------------------------ Méthode pour ajouter un agent de santé ---------------------------------------*/ 

    public function createAgent(Request $request){
        return view('admin.add_agent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAgent(Request $request)
    {
        $agent = new Agent;

        $agent->prenom = $request->prenom;
        $agent->nom = $request->nom;
        $agent->role = $request->role;
        $agent->email = $request->email;
        $agent->password = $request->password;
        
        $agent->save();

        return redirect('showAgent')->with('message','Agent ajouté avec succés !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAgent()
    {
        $data = Agent::where('role','medecin')->orWhere('role','dentiste')->orWhere('role','sagefemme')->orWhere('role','secretaire')->get();
        return view('admin.showAgent',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAgent($id)
    {
        $agent = Agent::find($id);
        return view('admin.editAgent',compact('agent'));
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
        $agent = Agent::find($id);

        $agent->prenom = $request->prenom;
        $agent->nom = $request->nom;
        $agent->role = $request->role;
        $agent->email = $request->email;

        $agent->save();

        return redirect('showAgent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAgent($id)
    {
        $data = Agent::find($id);

        $data->delete();

        return redirect()->back();
    }
}
