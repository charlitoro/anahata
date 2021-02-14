<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use App\Models\ScheduleService;
use App\Models\Service;
use App\Models\User;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\DB;

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

        return view('schedule', $this->getPendingSchedules( $user->id ));
    }

    public function postCreate( Request $request ){
        //TODO: Crear el registro del turno agendado teniendo en cuenta que los servicios selccionados
        //      tiene un tiempo en el cual se debeb realizar
        $user = Auth::User();
        $data = $this->getPendingSchedules( $user->id );

        $date = $request->input('date');
        $time = $request->input('time');
        $services = $request->input('services');
        $observation = $request->input('observation');
        if( !isset($date) || !isset($time) || !isset($services) ){
            $alert = array('alert' => array(
                'type' => 'alert-danger',
                'reason' => 'Atributos no proporcionados',
                'message' => 'Los datos del los servicios, fecha y hora son requeridos para realizar la cita'
            ));
            return view('schedule', array_merge($data, $alert));
        };

        $services = DB::table('services')->whereIn('id', $services)->get();
        $totalHours = 0; $totalMinuts = 0;
        foreach( $services as $service ){
            $timeService = new DateTime($service->time);
            $totalHours += intval($timeService->format('H'));
            $totalMinuts += intval($timeService->format('i'));
        }
        $totalSeconds = ($totalHours*3600) + ($totalMinuts*60);

        $startTime = new DateTime("{$date} {$time}");
        $endTime = new DateTime("{$date} {$time}");
        $endTime->add( new DateInterval("PT{$totalSeconds}S"));

        if( $startTime < new DateTime() ){
            $alert = array('alert' => array(
                'type' => 'alert-danger',
                'reason' => 'Fecha incorrecta',
                'message' => 'No es posible agendar citas en fecha pasadas'
            ));
            return view('schedule', array_merge($this->getPendingSchedules( $user->id ), $alert));
        }

        if( $this->validateSchedule( $startTime, $endTime ) == false ){
            $alert = array('alert' => array(
                'type' => 'alert-danger',
                'reason' => 'Horario no disopinble',
                'message' => 'La fecha que trata de agendar no se encuentra disponible'
            ));
            return view('schedule', array_merge($this->getPendingSchedules( $user->id ), $alert));
        }

        // Creation schedule
        $newSchedule = new Schedule();
        $newSchedule->user_id = $user->id;
        $newSchedule->state = 'PENDING';
        $newSchedule->start_time = $startTime;
        $newSchedule->end_time = $endTime;
        $newSchedule->save();

        // Creation ScheduleServices
        foreach( $services as $service ){
            $new = new ScheduleService();
            $new->schedule_id = $newSchedule->id;
            $new->service_id = $service->id;
            $new->save();
        }
        $alert = array('alert' => array(
            'type' => 'alert-success',
            'reason' => 'Cita Registrada con exito',
            'message' => 'Te estaremos visitando para atenderte con todo el gusto'
        ));
        return view('schedule', array_merge($this->getPendingSchedules( $user->id ), $alert));
    }

    private function getPendingSchedules( $userId ){
        $userSchedules = User::find($userId)->schedules->where('state', 'PENDING');
        $schedulesData = array();
        foreach( $userSchedules as $schedule ){
            $services = Schedule::find($schedule->id)->services;
            $servicesData = "";
            foreach( $services as $service ){ $servicesData .= $service->text.", "; }
            $date = new DateTime($schedule->start_time);
            array_push($schedulesData, array('services' => $servicesData, 'date' => $date->format('d F h:i a')));
        }
        return array( 
            'pendingSchedules' => $schedulesData, 
            'services' => Service::all()
        );
    }

    private function validateSchedule( $startTime, $endTime ){

        $allPendingSchedules = DB::table('schedules')
            ->where('state', 'PENDING')
            ->where('end_time', '>', new DateTime())
            ->get();

        if( $allPendingSchedules ){
            foreach( $allPendingSchedules as $row ){
                $rowStartTime = new DateTime($row->start_time);
                $rowEndTime = new DateTime($row->end_time);
                if( 
                    ($rowStartTime < $startTime && $rowEndTime > $startTime) ||
                    ($rowStartTime < $endTime && $rowEndTime > $endTime) ||
                    ($rowStartTime > $startTime && $rowEndTime < $endTime)
                 ){
                    return false;
                }
            }
        }
        return true;
    }

}
