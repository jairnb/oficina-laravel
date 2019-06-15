<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $fillable = ['nome', 'preco', 'quantidade'];
}
