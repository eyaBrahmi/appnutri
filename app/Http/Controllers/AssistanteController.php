<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RendezVous;

class AssistanteController extends Controller
{


    public function index(){

        
        return view ('assistantes.index');
       }
   

   


}
