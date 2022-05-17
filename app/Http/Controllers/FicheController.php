<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use App\Aliment;
use App\Fiche;

use Auth;

use Illuminate\Support\Facades\DB;

class FicheController extends Controller
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
        // $request->validate([
        //     'aliment_id'=> Aliment::join('fiches', 'aliments.id', '=', 'fiches.aliment_id')->get(),
        //      'user_id' =>Users::join('fiches', 'users.id', '=', 'fiches.user_id')->get(),
 
        //  ]);
  
        // Fiche::create([
        //     'aliment_id' => $request->get('aliment_id') ,
        //     'user_id' => $request ->get('user_id'),
        // ]);

    
            // 'aliment_id' => Aliment::get(['aliment.id']),
            // 'user_id' => Users::get(['users.id']),
            // $aliment = DB::table('aliments')->get('id');
            // $aliment = $request->get('aliment_id');
            // $user = DB::table('users')->get('id');
            // $user = $request->get('user_id');
        //     $id = $request->get('id');
            
        //  $user = DB::table('users')->select($id);
        //  $aliment = DB::table('aliments')->select($id);

        // $aliment= Aliment::find('id');
        // $user = Users::find('id'); 

        $aliment = Aliment::find('id');
        $user = Users::find('id');
         

       
        $fiche =new Fiche();
        $fiche->aliment_id= $aliment;
        $fiche->aliment_id= $aliment->id;
        $fiche->user_id= $user;
        

        
        
         $fiche->save();
       
        return response()->json(['message' => 'ajouter'], 201); 
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
