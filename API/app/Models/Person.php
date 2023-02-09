<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $guarded = [];
    public $timestamps = false;

    public function rules() {
        return [

            'nome' => 'required|max:40'
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres'
        ];
    }
}
