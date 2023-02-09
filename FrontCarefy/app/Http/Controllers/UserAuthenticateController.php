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
    public function auth(Request $request)
    {
        if(!empty(get_object_vars($request))){

            session()->put('usuario_id', $request->id);

            $urlRedirect = '/platform';
            return redirect($urlRedirect);//->route('plataforma.page');
            //return response()->json(['message' => true, 'id' => $login->response->id_pessoa, 'status' => 200], 200);

        }else{
            return redirect()->back()->with('danger', 'E-mail ou senha inválida');//response()->json(['message' => 'E-mail ou senha inválido(s)', 'status' => 400], 400);//
        }

        if(session()->has('usuario_id')){
            return redirect()->route('plataforma.page');
        }
    }
}
