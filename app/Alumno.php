<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model{
	public function findByEmail($email){
		return static::where(compact('email'))->first();
	}

	public function materia(){
		return $this->belongsTo();
	}
}