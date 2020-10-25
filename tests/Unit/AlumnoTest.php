<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabases;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;
use DB;
use App\Alumno;

class AlumnoTest extends TestCase{

	public function testTruncaTablaAlumnos(){
		$pdo = BD::conection('sqlite')->getPod();
		$s   = $pdo->prepare('delete from alumno');
		$s 	 -> execute();
		$this->assertTrue(true);
	}

	public function testInsertAlumnos(){
		$villa = AlumnoTest::Insert([
			'nombre'	=> 'Adrián',
			'apellido'	=> 'Villa',
			'correo'	=> 'al221911456@gmail.com',
			'edad'		=> 19
		]);
		$this->assertTrue(null != $villa);
	}

	public function testVerificaExistenciasRegistrosViaModelo(){
		$villa = Alumno::find(1);
		$this->assertTrue(null !=$villa && 'Adrián' == $villa->apellido);
	}

	public function testVerificaExistenciaRegistroViaBd (){
		$this->assertDAtabaseHas('alumno',['apellido' => 'Villa']);
	}

	public function testVerificaNoExistenciaRegistroViaBd (){
		$this->assertDatabaseMissing('alumno', ['apellido' => 'Enriquez']);
	}
}

?>