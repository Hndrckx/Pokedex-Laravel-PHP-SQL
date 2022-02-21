<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    function create(){
        return view('pages.admin');
    }

    function store(Request $request){
        $store = new Pokemon();
        $store->name = $request->name;
        $store->type = $request->type;
        $store->level = $request->level;
        $store->save();
        return redirect('/');
    }
}
