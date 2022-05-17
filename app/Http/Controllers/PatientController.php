<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index (){


        return view('patients.index');
    }

    public function info(){
        return view ('patient.information');
    }
}
