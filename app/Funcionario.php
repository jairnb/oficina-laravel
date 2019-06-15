<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'telefone', 'nif', 'email', 'cargo', 'estado', 'foto'];
}


// public function setEstadoAttribute(Type $var = null)
// {
//     # code...
// }