<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class ServicesController extends Controller
{
    public function getServices()
    {
        return view('services',array('arrayServicios'=>Service::all()));
    }
}
