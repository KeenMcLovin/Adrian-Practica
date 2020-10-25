<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model{
	public static function validationRules(){
		return[
			'nombre' 	=> 'requeried| min:5 |max:50',
			'apellido' 	=> 'nullable| min:5 |max:50',
			'correo' 	=> 'requeried| min:5 |max:50',
			'edad' 		=> 'requeried|integer | min:1 |max:12',
		];
	}
}

?>