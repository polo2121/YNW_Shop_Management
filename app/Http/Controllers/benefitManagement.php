<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class benefitManagement extends Controller
{
    public function  benefit(){


        // $users = DB::table('stationaries_sale_records')
        // ->whereDate('date', '>=','2021-6-6')
        // ->whereDate('date', '<=','2021-6-10') 
        // ->select(DB::raw('sum(amount) as total, sum(benefit) as something,name'))
        // ->groupBy('name')
        // ->orderBy('total','desc')
        // ->get();

        // echo $users;

        // $t = date_format(date_create("2021-6-6"),"F j, Y");
        // echo $t;
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
    public function getActual_benefit(Request $req){
        $startDate = $req->stDate;
        $endDate   = $req->edDate;

        $ab = DB::table('stationaries_sale_records')
        ->whereDate('date', '>=', $startDate)
        ->whereDate('date', '<=', $endDate)   
        ->select(DB::raw('sum(amount) as amount,sum(benefit) as benefit,name'))
        ->groupBy('name')
        ->orderBy('amount','desc')
        ->get();

        
        // return Response::json(array('benefit'=>$benefit));
        return view('benefits/actual_benefit',['abs'=>$ab,'st'=> date_format(date_create($startDate),"F j, Y"),
                        'ed'=> date_format(date_create($endDate),"F j, Y")]);

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
