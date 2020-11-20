<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    protected $table = 'practicas';
    /*public $fillable = ['nombre', 'tipo', 'materia'];
    public static function validationRules(){
        return[
            'nombre' => 'requiried| min:5 |max:50',
            'tipo' => 'requiried| min:5 |max:50',
            'materia' => 'requiried| min:5 |max:50',
        ];
    }*/
}