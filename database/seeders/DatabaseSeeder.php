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
  public function run(){
    // \App\Models\User::factory(10)->create();
    self::seedUsers();
    $this->command->info('Tabla usuarios inicializada con datos!');

    self::seedService();
    $this->command->info('Tabla servicios inicializada con datos!');
    
    self::seedSchedules();
    $this->command->info('Tabla schedules inicializada con datos!');

    self::seedScheduleService();
    $this->command->info('Tabla scheduleService inicializada con datos!');
  }

  private function seedUsers(){
    // Borramos los datos de la tabla
    DB::table('users')->delete();
    
    // Creamos nuevos usuario de prueba address
    $user = new User;
    $user->id = 1;
    $user->name = 'Erika Orbes';
    $user->email = 'erika.ax.18@gmail.com';
    $user->role = 'ADMIN';
    $user->address = 'cra 36 b 5a-27 Anganoy';
    $user->phone = '3155270969';
    $user->password = bcrypt('@ErikaOrbes24');
    $user->save();

    $user2 = new User;
    $user2->id = 2;
    $user2->name = 'Ana Rodriguez';
    $user2->email = 'anitaro@gmail.com';
    $user2->role = 'CLIENT';
    $user2->address = 'Mz e cs 10 Lorenzo';
    $user2->phone = '3116634808';
    $user2->password = bcrypt('AnitaRodriguez123');
    $user2->save();

    $user3 = new User;
    $user3->id = 3;
    $user3->name = 'Andres Toro';
    $user3->email = 'charlitoro@gmail.com';
    $user3->role = 'CLIENT';
    $user3->address = 'CD 16 #46-34 Barrio Figueroa';
    $user3->phone = '3136657237';
    $user3->password = bcrypt('charlitoro12');
    $user3->save();
  }
  
  private function seedService(){
      // Borramos los datos de la tabla
      DB::table('services')->delete();

      // Añadimos la entrada de la tabla
      foreach( $this->arrayServicios as $servicio ) {
        $service = new Service;
        $service->image = $servicio['image'];
        $service->text = $servicio['text'];
        $service->price = $servicio['price'];
        $service->time = $servicio['time'];
        $service->save();
      }
  }

  private function seedSchedules(){
    DB::table('schedules')->delete();

    foreach( $this->arraySchedules as $schedule ) {
      $newSchedule = new Schedule();
      $newSchedule->id = $schedule['id'];
      $newSchedule->user_id = $schedule['user_id'];
      $newSchedule->state = $schedule['state'];
      $newSchedule->start_time = $schedule['start_time'];
      $newSchedule->end_time = $schedule['end_time'];
      $newSchedule->save();
    }
  }

  private function seedScheduleService(){
    DB::table('schedule_services')->delete();

    foreach( $this->arrayScheduleService as $row ){
      $relation = new ScheduleService();
      $relation->schedule_id = $row['schedule_id'];
      $relation->service_id = $row['service_id'];
      $relation->save();
    }
  }

  private $arrayServicios = array(
    array(
      'id' => 1, 
      'image' => 'https://drive.google.com/uc?export=view&id=1ukS_4cDPz9S4iPP49Avtut0QY3u2LVhz',
      'text' => 'Manicure general', 
      'price' => '8000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 2,
      'image' => 'https://drive.google.com/uc?export=view&id=1p2MspO7a1_oJtqU-AM_1H-cwo_rhKe3t',
      'text' => 'Pedicure', 
      'price' => '10000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 3,
      'image' => 'https://drive.google.com/uc?export=view&id=1vsvy7CyEpgYpfaOw7Sb5uk8NWMp8IclK',
      'text' => 'Lipieza facial profunda', 
      'price' => '30000', 
      'time' => '01:30:00', 
    ),
    array(
      'id' => 4,
      'image' => 'https://drive.google.com/uc?export=view&id=1tL_4t6rhISt1XEB4oklaDgztW4aCaNBm',
      'text' => 'Manicure mate', 
      'price' => '8000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 5,
      'image' => 'https://drive.google.com/uc?export=view&id=1WAfs4_eSclzsOQho2dpRfXeLYe8qqsjR',
      'text' => 'Manicure degradé', 
      'price' => '10000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 6,
      'image' => 'https://drive.google.com/uc?export=view&id=1yINhKM6TrHtRuJercKNM5sIiHxe_cSLO',
      'text' => 'Manicure decorado en agua', 
      'price' => '12000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 7,
      'image' => 'https://drive.google.com/uc?export=view&id=1TGkIHmqJnC9HAXsh0c_kEmcSbqIilP3h',
      'text' => 'Manicure con accesorios', 
      'price' => '12000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 8,
      'image' => 'https://drive.google.com/uc?export=view&id=1iP0hk8AwPaqKXBZ4tY_dAEH6U2GVmvCD',
      'text' => 'Cambio de esmalte', 
      'price' => '6000', 
      'time' => '00:30:00', 
    ),
    array(
      'id' => 9,
      'image' => 'https://drive.google.com/uc?export=view&id=1iDOAV_ObDr-6-lvbhUyQWH8ukyPp1FyN',
      'text' => 'Depilación en cera de axilas', 
      'price' => '7000', 
      'time' => '00:15:00', 
    ),
    array(
      'id' => 10,
      'image' => 'https://drive.google.com/uc?export=view&id=1M1zLeybHmTfaEvzgx8hRKwNbCo_wgD_1',
      'text' => 'Depilación en cera de bozo', 
      'price' => '4000', 
      'time' => '00:15:00', 
    ),
    array(
      'id' => 11,
      'image' => 'https://drive.google.com/uc?export=view&id=1F85VPlXF_ukQCfRe4nCH51q_cyetNHuB',
      'text' => 'Depilación en cera de cejas', 
      'price' => '4000', 
      'time' => '00:15:00', 
    ),
    array(
      'id' => 12,
      'image' => 'https://drive.google.com/uc?export=view&id=1UzFpIGoXLtcw0P404WiRiBw9heHREr2x',
      'text' => 'Depilación en cera de piernas', 
      'price' => '25000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 13,
      'image' => 'https://drive.google.com/uc?export=view&id=19YxW1ZiMEv6lZml94MZYx7Psd8Xrbf-e',
      'text' => 'Manicure de barbería', 
      'price' => '8000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 14,
      'image' => 'https://drive.google.com/uc?export=view&id=1Ym4vZqsPQ-c7GDMqiGUBhZcwp9n3JMk7',
      'text' => 'Manicure con sticker', 
      'price' => '10000', 
      'time' => '01:00:00', 
    ),
    array(
      'id' => 15,
      'image' => 'https://drive.google.com/uc?export=view&id=1-83fCmWDRx_Anh0jsDCycBYx3gg-4rIa',
      'text' => 'Alisado permanente con keratina', 
      'price' => '150000', 
      'time' => '03:00:00', 
    ),
    array(
      'id' => 16,
      'image' => 'https://drive.google.com/uc?export=view&id=1eHKL_r0NZ4dyZoCGRJMJJ2nSgaYrB0pN',
      'text' => 'Repolarización capilar', 
      'price' => '30000', 
      'time' => '01:30:00', 
    ),
    array(
      'id' => 17,
      'image' => 'https://drive.google.com/uc?export=view&id=1mHvxdMe8p-7u0c5Rrwvp3ELyjV7yiAvU',
      'text' => 'Tintes capilares', 
      'price' => '30000', 
      'time' => '01:30:00', 
    ),
    array(
      'id' => 18,
      'image' => 'https://drive.google.com/uc?export=view&id=1RQP37ZzVis6Okoc1xGk3sMoQQNz_TUM7',
      'text' => 'Tratamientos capilares', 
      'price' => '30000', 
      'time' => '01:30:00', 
    )
  );

  private $arraySchedules = array(
    array(
      'id' => 1,
      'user_id' => 1,
      'state' => 'PENDING',
      'observation' => 'Some...',
      'start_time' => '2021-02-22 09:00:00',
      'end_time' => '2021-02-22 11:00:00'
    ),
    array(
      'id' => 2,
      'user_id' => 1,
      'state' => 'HECHO',
      'observation' => 'Some...',
      'start_time' => '2021-02-15 16:00:00',
      'end_time' => '2021-02-15 17:30:00'
    ),
    array(
      'id' => 3,
      'user_id' => 1,
      'state' => 'PENDING',
      'observation' => 'Some...',
      'start_time' => '2021-02-19 14:00:00',
      'end_time' => '2021-02-19 15:30:00'
    ),
    array(
      'id' => 4,
      'user_id' => 1,
      'state' => 'CANCEL',
      'observation' => 'Some...',
      'start_time' => '2021-02-23 10:30:00',
      'end_time' => '2021-02-23 11:30'
    ),
    array(
      'id' => 5,
      'user_id' => 2,
      'state' => 'PENDING',
      'observation' => 'Some...',
      'start_time' => '2021-02-22 14:00:00',
      'end_time' => '2021-02-22 16:00:00'
    ),
    array(
      'id' => 6,
      'user_id' => 1,
      'state' => 'PENDING',
      'observation' => 'Some...',
      'start_time' => '2021-02-23 10:00:00',
      'end_time' => '2021-02-23 10:30:00'
    )
  );

  private $arrayScheduleService = array(
    array(
      'schedule_id' => 1,
      'service_id' => 1,
    ),
    array(
      'schedule_id' => 1,
      'service_id' => 2,
    ),
    array(
      'schedule_id' => 2,
      'service_id' => 3,
    ),
    array(
      'schedule_id' => 3,
      'service_id' => 10,
    ),
    array(
      'schedule_id' => 3,
      'service_id' => 11,
    ),
    array(
      'schedule_id' => 3,
      'service_id' => 12,
    ),
    array(
      'schedule_id' => 4,
      'service_id' => 4,
    ),
    array(
      'schedule_id' => 5,
      'service_id' => 1,
    ),
    array(
      'schedule_id' => 5,
      'service_id' => 2,
    ),
    array(
      'schedule_id' => 6,
      'service_id' => 10,
    ),
    array(
      'schedule_id' => 6,
      'service_id' => 11,
    ),
  );
}
