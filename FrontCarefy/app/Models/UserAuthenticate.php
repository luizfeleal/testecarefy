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
}
