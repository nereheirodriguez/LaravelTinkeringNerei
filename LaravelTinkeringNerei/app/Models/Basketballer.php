<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basketballer extends Model
{
    /** @use HasFactory<\Database\Factories\BasketballerFactory> */
    use HasFactory;

    protected $fillable = ['nombasketballer', 'equipbasketballer', 'edatbasketballer', 'posiciobasketballer', 'dorsalbasketballer'];

}
