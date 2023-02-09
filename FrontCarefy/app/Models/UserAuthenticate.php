<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAuthenticate extends Authenticatable
{
    use HasFactory;

    public function createUser($githubUser){
        $customer_data = array(
            "name"=> $githubUser['name'],
            "email"=>$githubUser['email'],
            "github_id"=> $githubUser['github_id'],
            "github_token"=> $githubUser['github_token'],
            "github_refresh_token" => $githubUser['github_refresh_token']
        );

        $data_string = json_encode($customer_data);

        $url =  "http://localhost:8000/api/user";
        $ch = curl_init($url);
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data_string,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => ['Accept: application/json', 'Content-Type: application/json']
            )
        );
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $user = json_decode($result);

        return $user;
    }

    public static function logar(Request $request){
        /*$customer_data = array(
            "email" => $request->email,
            "password" => $request->password
        );
        $data_string = json_encode($customer_data);

        $url =  "http://localhost:8000/api/user/login";
        $ch = curl_init($url);
        curl_setopt_array(
            $ch,
            array(
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data_string,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => ['Accept: application/json', 'Content-Type: application/json']
            )
        );
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $response = json_decode($result);*/

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
