<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAuthenticate;

class UserAuthenticateController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = UserAuthenticate::updateOrCreate(['github_id' => $request->github_id],$request->all());

        return response()->json($user, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request){
        $user = UserAuthenticate::where("email", "like", $request->email)->where("password", "like", $request->password)->first();

        if(!empty(get_object_vars($user))){
            return response()->json(array(
                "authenticated"=>true,
                "user_id"=>$user->id
            ), 200);
        }
        return response()->json(array(
            "authenticated"=>false,
            "user_id"=>null
        ), 200);
    }
}
