<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class benefitManagement extends Controller
{
    public function  benefit(){


        // $users = DB::table('stationaries_sale_records')->where('name','Files')->sum('price');

        // echo $users;
        return view('benefits/home');
        
    }
    public function dummy(){
        return view('benefits/total_sale');

    }
    public function calculate_benefit(Request $req){
        $startDate = $req->stDate;
        $endDate   = $req->edDate;

        $benefit=0;
        $results  = DB::table('stationaries_sale_records')
           ->whereDate('date', '>=',$startDate)
           ->whereDate('date', '<=',$endDate)
           ->get();

        foreach($results as $result){
            $benefit+=$result->{'price'};
        }
        
        return Response::json(array('benefit'=>$benefit));

    }
    public function generate_mostSaleItems(Request $req){
        $startDate = $req->stDate;
        $endDate   = $req->edDate;

        $msi = DB::table('stationaries_sale_records')
        ->whereDate('date', '>=',$startDate)
        ->whereDate('date', '<=',$endDate)   
        ->select(DB::raw('sum(amount) as total,name'))
        ->groupBy('name')
        ->orderBy('total','desc')
        ->get();

        return Response::json(array('msi'=>$msi));

    }
}
