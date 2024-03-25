<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->role=='admin')
            {
                return view('admin.home');
            }

            else if(Auth::user()->role=='medecin')
            {
                return view('medecin.home');
            }

            else if(Auth::user()->role=='dentiste')
            {
                return view('dentiste.home');
            }

            else if(Auth::user()->role=='sagefemme')
            {
                return view('sagefemme.home');
            }

            else if(Auth::user()->role=='secretaire')
            {
                return view('secretaire.home');
            }

            else if(Auth::user()->role=='patient')
            {
                return view('patient.home');
            }

            else
            {
                return view('login');
            }

        }

        else
        {
            return redirect()->back();
        }
    }

}
