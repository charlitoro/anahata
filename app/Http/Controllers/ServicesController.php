<?php

namespace App\Http\Controllers;

use App\Models\Service;
use NumberFormatter;

setlocale(LC_MONETARY, 'es_CO');

class ServicesController extends Controller{
    public function getServices(){
        // $money = new NumberFormatter( 'es_CO', NumberFormatter::CURRENCY );
        $data = Service::all();
        // foreach( $data as $row ){
        //     $row->price = $money->formatCurrency($row->price, "COP");
        // }
        return view('services',array('arrayServicios' => $data));
    }
}
