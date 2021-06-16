<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class benefitManagement extends Controller
{
    public function  benefit(){


        // $users = DB::table('stationaries_sale_records')->where('name','Files')->sum('price');

        $users = DB::table('stationaries_sale_records')
        ->select(DB::raw('sum(amount) as total,name,price'))
        ->groupBy('name')
        ->orderBy('total','desc')
        ->get();


        echo $users;
        // $users = DB::table('stationaries_sale_records')
        //    ->whereDate('date', '>=','2021-6-6')
        //    ->whereDate('date', '<=','2021-6-10')
        //    ->get();

        // foreach($users as $user){
        //     $benefit+=$user->{'price'};
        // }
        // echo $benefit;
        // return view('benefits/home');
        
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
}
