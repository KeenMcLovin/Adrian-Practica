<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Materias extends Model{

    use Notificable;

	protected $fillable = (
        'nombre'
    );
}

?>