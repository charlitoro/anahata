<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;

class ScheduleAdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function postAction( Request $request ){

        if( $request->doneAction ){
            $state = "HECHO";
            $id = $request->doneAction;
        } elseif( $request->cancelAction ){
            $state = "CANCEL";
            $id = $request->cancelAction;
        }

        $response = DB::table("schedules")->where('id', $id)->update(['state' => $state]);
        \Debugbar::info($response);
        return redirect('/admin');
    }

    public function getSchedules(Request $request){

        $user = Auth::User();
        if( $user && $user->role != "ADMIN" ){
            return redirect('/schedule');
        }

        if( $request->ajax() ){
            // TODO: traer la data completa
            $data = DB::table('schedules')
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->select(
                    'schedules.id', 
                    'users.name', 
                    'users.phone', 
                    'schedules.start_time', 
                    'schedules.end_time', 
                    'schedules.state'
                )->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<button name="doneAction" value='.$row->id.' type="submit" class="btn btn-success">Hecho</button> <button name="cancelAction" value='.$row->id.' type="submit" class="btn btn-danger">Cancelar</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
