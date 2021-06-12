<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;

class benefitManagement extends Controller
{
    public function  benefit(){
        
        return view('benefits/home');
        
    }
    public function calculate_benefit(Request $req){
        $startDate = $req->stDate;
        $endDate   = $req->edDate;

        // return Response::json(array('data'=>$req->stDate));

    }
}
