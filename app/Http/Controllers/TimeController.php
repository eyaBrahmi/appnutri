<?php

namespace App\Http\Controllers;

use App\time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TimeController extends Controller
{
    public function index(){
        return view ('timing.index');
    }


    public function ajouter(Request $request){
        $this->validate($request, ['title' => 'required']);
        $time = new time();
        $time -> title = $request-> input('title');
        $time->save();

        return redirect ('index')->with('success', 'data saved');

    }
}
