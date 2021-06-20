<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Persona;

class PersonaController extends Controller
{
    //
    public function all(){
        // $people = Persona::all();
        $people = [
            [
                "id"=> 10001,
                "name"=> "Jose",
                "email"=> "jose@gmail.com",
                "created_at"=> "2021-05-13T22:36:49.000000Z",
                "updated_at"=> "2021-05-13T22:36:49.000000Z"
            ],
            [
                "id"=> 10002,
                "name"=> "Hector",
                "email"=> "cosa@gmail.com",
                "created_at"=> "2021-05-13T17:37:16.000000Z",
                "updated_at"=> "2021-05-13T17:37:16.000000Z"
            ]
        ];
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
