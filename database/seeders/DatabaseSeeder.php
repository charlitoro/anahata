<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Galery;
use App\Models\Income;
use App\Models\Schedule;
use App\Models\ScheduleService;
use App\Models\Service;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedUsers();
	    $this->command->info('Tabla usuarios inicializada con datos!');
    }

    private function seedUsers()
		{
				//Borramos los datos de la tabla
				DB::table('users')->delete();
				
				//Creamos nuevos usuario de prueba address
                

				$user = new User;
				$user->name = 'Erika Orbes';
				$user->email = 'erika.ax.18@gmail.com';
                $user->address = 'cra 36 b 5a-27 Anganoy';
                $user->phone = '3155270969';
				$user->password = bcrypt('@ErikaOrbes24');
				$user->save();

				$user2 = new User;
				$user2->name = 'Ana Rodriguez';
				$user2->email = 'anitaro@gmail.com';
                $user->address = 'Mz e cs 10 Lorenzo';
                $user->phone = '3116634808';
				$user2->password = bcrypt('AnitaRodriguez123');
				$user2->save();
				
		}
}
