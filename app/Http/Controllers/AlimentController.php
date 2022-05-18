<?php

namespace App\Http\Controllers;

use App\Aliment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlimentController extends Controller
{
    public function index (){
       
    
        return response()->json(Aliment::all(), 200);
            
    
    }

    public function store(Request $request){
       

        $this->validate($request,[ 'FAMILLES'=> 'required',
                'ALIMENTS'=> 'required',
                'CALORIES'=> 'required',
                'PROTEINES'=> 'required',
                'GLUCIDES'=> 'required',
                'LIPIDES'=> 'required',
                'QUANTITE'=> 'required',]);

              $aliment = new Aliment();
              $aliment -> FAMILLES = $request->input('FAMILLES');
              $aliment -> ALIMENTS = $request->input('ALIMENTS');
              $aliment -> CALORIES = $request->input('CALORIES');
              $aliment -> PROTEINES = $request->input('PROTEINES');
              $aliment -> GLUCIDES = $request->input('GLUCIDES');
              $aliment -> LIPIDES = $request->input('LIPIDES');
              $aliment -> QUANTITE = $request->input('QUANTITE');
              $aliment->save();


       return response()->json(['message' => 'ajouter'], 201); 
  }
  


  public function show(Aliment $aliment,$id)
    {
        $aliment = Aliment::find($id);
        if(is_null($aliment)) {
            return response()->json(['message' => 'aliment Not Found'], 404);
        }
        return response()->json($aliment::find($id), 200);
        
    }


public function update(Request $request, Aliment $aliment,$id)

    {

        $aliment = Aliment::find($id);
        $aliment -> FAMILLES = $request->input('FAMILLES');
        $aliment -> ALIMENTS = $request->input('ALIMENTS');
        $aliment -> CALORIES = $request->input('CALORIES');
        $aliment -> PROTEINES = $request->input('PROTEINES');
        $aliment -> GLUCIDES = $request->input('GLUCIDES');
        $aliment -> LIPIDES = $request->input('LIPIDES');
        $aliment -> QUANTITE = $request->input('QUANTITE');
        $aliment->update();


  
       
      
        return response($aliment, 200);

    }

    public function edit(Aliment $aliment,$id)
    {
        $aliment =  Aliment::find($id);

        return response()->json(['message' => 'edited'], 201);     
     }

        public function destroy(Aliment $aliment,$id)
    
        {
            $aliment = Aliment::find($id);
            $aliment->delete();
      
            return response()->json(['message' => 'supprimer'], 201);


                         
        }
}
