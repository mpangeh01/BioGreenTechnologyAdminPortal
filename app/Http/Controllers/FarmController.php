<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    //

    public function index(){

        $farms = Farm::all();
        return view('farms', compact('farms'));
    }

    public function update(Request $request, $id){

        $farm = Farm::findOrFail($id);

        $farm->name = $request->name;
        $farm->save();
        return redirect()->back()->with('status', 'Farm Updated Successfully');
    }

    public function read($id){

        $farm = Farm::findOrFail($id);
        return view('details', compact('farm'));
    }
}
