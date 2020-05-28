<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Tema;
use App\Respuesta;

class DatabaseSeeder extends Seeder
{
	public $idUser = 1;
	//public $usuario = User::findOrFail($idUser);
    public $arrayTemas = array(
		array(
			'titulo' => 'Mount and Blade',
			'user_id' => '1', 
			'texto' => 'Pues eso alguien sabe hasta que punto lo peta mount and blade 2?', 
			'fecha' => '13-05-2020'
        ),
		array(
			'titulo' => 'Mount and Blade 2 lo peta22',
			'user_id' => '1', 
			'texto' => 'Pues eso alguien sabe hasta que punto lo peta mount and blade 2?', 
			'fecha' => '13-05-2020'
		),
		array(
			'titulo' => 'House4124 flipper lo peta22',
			'user_id' => '2', 
			'texto' => 'Pues eso alguien sabe hasta que punto lo peta mount and blade 2?', 
			'fecha' => '13-05-2020'
		),
		array(
			'titulo' => 'Nuevo4123124 DLC House Flipper',
			'user_id' => '2', 
			'texto' => 'Es la hostia no? que opinais?', 
			'fecha' => '13-05-2020'
		),
		array(
			'titulo' => 'Nuevo4124124 DLC House Flipper',
			'user_id' => '4', 
			'texto' => 'Es la hostia no? que opinais?', 
			'fecha' => '13-05-2020'
		),
		array(
			'titulo' => 'Viejo DLC House Flipper',
			'user_id' => '3', 
			'texto' => 'Es la hostia no? que opinais?', 
			'fecha' => '13-05-2020'
		),
		array(
			'titulo' => 'Que paisha peña',
			'user_id' => '4', 
			'texto' => 'JEJEEEEEEEEEEEEEEEEEEEE', 
			'fecha' => '13-05-2020'
		)
	);

	public $arrayRespuestas = array(
		array(
			'tema_id' => '1',
			'user_id' => '1',
			'respuesta' => 'Pos esta fino fino filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '1',
			'user_id' => '1',
			'respuesta' => 'Pos EQUISDE DE LA HOSTIA LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '2',
			'user_id' => '1',
			'respuesta' => 'Este esta mucho mejor que el otro enserio DE LA HOSTIA LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '2',
			'user_id' => '2',
			'respuesta' => 'Pero que muchisimo mejor LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '3',
			'user_id' => '2',
			'respuesta' => 'Pero que muchisimo mejor LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '3',
			'user_id' => '4',
			'respuesta' => 'Pero que muchisimo mejor LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '4',
			'user_id' => '3',
			'respuesta' => 'Pero que muchisimo mejor LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '2',
			'user_id' => '3',
			'respuesta' => 'Pero que muchisimo mejor LOCO filipino loco',
			'fecha' => '13-05-2020'
		),
		array(
			'tema_id' => '1',
			'user_id' => '4',
			'respuesta' => 'Pero que muchisimo mejor LOCO filipino loco',
			'fecha' => '13-05-2020'
		)
	);

	public function seedRespuestas() {
		DB::table('respuestas')->delete();
		foreach( $this->arrayRespuestas as $respuesta ) {
            $r = new Respuesta;
            $r->tema_id = $respuesta['tema_id'];
            $r->user_id = $respuesta['user_id'];
            $r->respuesta = $respuesta['respuesta'];
            $r->fecha = $respuesta['fecha'];
            $r->save();
		}
	}

   public function seedTemas() {
        DB::table('temas')->delete();
        foreach( $this->arrayTemas as $tema ) {
            $t = new Tema;
            $t->titulo = $tema['titulo'];
            $t->user_id = $tema['user_id'];
            $t->texto = $tema['texto'];
            $t->fecha = $tema['fecha'];
            $t->save();
		}
	}

	public function seedTemasEliminados() {
		DB::table('control_elimnados')->delete();
	}

	public function seedControlTaula() {
		DB::table('control_taula')->delete();
	}

    private function seedUsers() {
		DB::table('users')->delete();
		$u = new User;
        $u->nombre = "Arnaldo";
        $u->nombreUsuario = "xErxAresx";
		$u->email = "arnaulopez26@gmail.com";
		$u->imagen = "https://i1.wp.com/impulsogeek.com/wp-content/uploads/2019/09/ver-la-segunda-temporada-de-one-punch-man-dd.jpg?resize=759%2C500&ssl=1";
		$u->password = bcrypt("dawmola2");
		$u->lvlAdmin = "2";
		$u->save();

		DB::table('users')->delete();
		$u = new User;
        $u->nombre = "admin";
        $u->nombreUsuario = "admin";
		$u->email = "admin@admin.com";
		$u->password = bcrypt("admin1234");
		$u->lvlAdmin = "2";
		$u->save();

		$u = new User;
        $u->nombre = "Noa";
        $u->nombreUsuario = "SuishBish";
		$u->email = "noavinyales@gmail.com";
		$u->password = bcrypt("04112018");
		$u->lvlAdmin = "1";
		$u->save();

		$u = new User;
        $u->nombre = "Dima";
        $u->nombreUsuario = "LemonBF";
		$u->email = "dmeters@gmail.com";
		$u->password = bcrypt("dawmola2");
		$u->lvlAdmin = "1";
		$u->save();

		$u = new User;
        $u->nombre = "Hahaha";
        $u->nombreUsuario = "Jejeje";
		$u->email = "jajajas@gmail.com";
		$u->password = bcrypt("dawmola2");
		$u->lvlAdmin = "2";
		$u->save();
	}
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		self::seedUsers();
		$this->command->info('Tabla usuarios inicilizada con datos!');

		self::seedTemas();
		$this->command->info('Tabla temas inicializada con datos!');

		self::seedRespuestas();
		$this->command->info('Tabla respuestas inicializada con datos!');

		self::seedControlTaula();
    }
}
