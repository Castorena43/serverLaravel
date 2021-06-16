<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Persona;

class PersonaController extends Controller
{
    //
    public function all(){
        $people = Persona::all();
        return response()->json($people, 200);
    }

    public function create(Request $request){
        if ($request->has(['name','email'])){
            $people = new Persona;

            $people->name = $request->name;
            $people->email = $request->email;

            if($people->save()){
                return response()->json($people, 200);
            }
            return response()->json($people, 400);
        }
    }
}
