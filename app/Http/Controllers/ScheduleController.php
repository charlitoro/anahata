<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\User;
use DateTime;

date_default_timezone_set('America/Bogota');

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
        $user = Auth::User();
        $userSchedules = User::find($user->id)->schedules->where('state', 'PENDING');
        $schedulesData = array();
        foreach( $userSchedules as $schedule ){
            $services = Schedule::find($schedule->id)->services;
            $servicesData = "";
            foreach( $services as $service ){ $servicesData .= $service->text.", "; }
            $date = new DateTime($schedule->start_time);
            array_push($schedulesData, array('services' => $servicesData, 'date' => $date->format('d F h:i a')));
        }
        return view('schedule', array( 
            'pendingSchedules' => $schedulesData, 
            'services' => Service::all()
         ));
    }

    public function postCreate( Request $request ){
        //TODO: Crear el registro del turno agendado teniendo en cuenta que los servicios selccionados
        //      tiene un tiempo en el cual se debeb realizar
        $schedule = new Schedule();
    }

}
