<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class stationaryManagement extends Controller
{
    // Stationary Management (CRUD Funcationality)
    public function stationary()
    {
        $stationareis_infos = DB::table('stationaries')->get();
        return view('StoreManagement/Stationary/stationary',['stationareis_infos'=> $stationareis_infos]);
    }
    public function InsertStationary(Request $req){
        $date                       = $req->input('date');
        $stName                     = $req->input('stName');
        $tpp                        = (int)$req->input('total_purchased_price');
        $amount                     = (int)$req->input('amount');
        $sp                         = (int)$req->input('sale_price');
            
        $purchased_price_per_unit   = floor($tpp/$amount);
        $benefit                    = $sp - $purchased_price_per_unit;
    
        DB::table('stationaries')->insert([
            'date'                        => $date,
            'stName'                      => $stName,
            'total_purchased_price'       => $tpp,
            'amount'                      => $amount,
            'purchased_price_per_unit'    => $purchased_price_per_unit,
            'sale_price'                  => $sp,
            'benefit'                     => $benefit,
    
        ]);
        return redirect('StoreManagement/Stationary/stationary')->with('success', 'Data is successfully inserted to Stationary Storage');  
    }
    public function stationary_edit(Request $req){
    
        $results         = DB::select('select * from stationaries where stid = :id', ['id' => $req->id]);
        return view('StoreManagement/stationary/edit', ['results'=> $results]);
    }
    public function edit_stationary(Request $req){
    
        $stid                       = (int)$req->input('stid');
        $date                       = $req->input('date');
        $stName                     = $req->input('stName');
        $tpp                        = (int)$req->input('total_purchased_price');
        $amount                     = (int)$req->input('amount');
        $sp                         = (int)$req->input('sale_price');
        $purchased_price_per_unit   = floor($tpp/$amount);
        $benefit                    = $sp - $purchased_price_per_unit;
    
        DB::table('stationaries')->where('stid', $stid)
            ->update(['date' => $date,'stName'=>$stName,'total_purchased_price'=>$tpp,
                        'amount'=>$amount,'sale_price'=>$sp,
                        'purchased_price_per_unit'=>$purchased_price_per_unit,'benefit'=>$benefit]);
                                
        return redirect('/store-management/stationary')->with('success', 'Data is successfully Updated in Stationary Storage');
    }
    public function del_stationary(Request $req){
        $results         =DB::table('stationaries')->where('stid',  $req->id)->delete();
        return redirect('store-management/stationary')->with('success', 'Data is successfully Deleted from Phone Bill Record');
    }
    public function DelStationary(Request $req){
        echo "Hello";
        // $deleted = DB::delete('delete from stationaries');
    }   
    // End of Stataionary Management
    
}
