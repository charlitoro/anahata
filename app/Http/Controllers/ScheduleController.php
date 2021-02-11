<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use App\Models\Service;

class ScheduleController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function getSchedule(){
        // TODO: llamar de nase de datos segun el calculo del usuuario en session
        $user = Auth::User();
        return view('schedule', array( 
            'pendingSchedules' => $this->schedulesDataSet, 
            'services' => Service::all()
         ));
    }

    public function postCreate( Request $request ){
        //TODO: Crear el registro del turno agendado teniendo en cuenta que los servicios selccionados
        //      tiene un tiempo en el cual se debeb realizar
        $schedule = new Schedule();
    }

    //TODO: eliminar una vez se llame haga el proceso y se llame a base de datos
    private $schedulesDataSet = array(
        array(
            'date' => 'Lunes 21 de Febrero - 09:00 am',
            'services' => 'Manicure y Pedicure | Limpieza Facial',
        ),
        array(
            'date' => 'Viernes 25 de Febrero - 14:30 am',
            'services' => 'Tratamiento Capilar',
        ),
        array(
            'date' => 'Miercoles 2 de Marzo - 09:00 am',
            'services' => 'Manicure y Pedicure',
        )
    );
}
