<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuthenticate extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded = [];
    public $timestamps = false;

    public function rules() {
        return [

            'email' => 'required|max:20',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres'
        ];
    }
}
