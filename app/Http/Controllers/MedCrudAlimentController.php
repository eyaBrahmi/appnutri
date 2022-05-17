<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aliment;

class MedCrudAlimentController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliment = Aliment::all();
        return view('medecincrud.alimentcrudmed.index', compact('aliment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medecincrud.alimentcrudmed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_aliment' => 'required',    
        ]);

        Aliment::create($request->all());
        return redirect()->route('alimentcrudmed.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param   \App\Aliment $aliment
     * @return \Illuminate\Http\Response
     */
    public function show(Aliment $aliment)
    {
        return view('medecincrud.alimentcrudmed.show',compact('aliment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aliment $aliment
     * @return \Illuminate\Http\Response
     */
    public function edit(Aliment $aliment)
    {
        return view('medecincrud.alimentcrudmed.edit', compact('aliment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Aliment $aliment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aliment $aliment)
    {
        $request->validate([
            'nom_aliment' => 'required',
        ]);

        $aliment->update($request->all());

        return redirect()->route('alimentcrudmed.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Aliment $aliment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aliment $aliment)
    {
        $aliment->delete();
      
            return redirect()->route('alimentcrudmed.index')
                            ->with('success','Users deleted successfully');
    }



    public function search(){

        $search_text = $_GET['query'];
        $aliment = Aliment::where('nom_aliment', 'like', '%'.$search_text.'%')->get();
        return view ('medecincrud.alimentcrudmed.index')->with('aliment', $aliment);
    }
}