<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class saleRecordsManagement extends Controller
{
    public function  storeSaleRecords() {

        // $copySaleRecords = DB::table('copy')->where('date', date("Y-m-d"))->get();
        return view('saleRecords/storeSaleRecords');
    }
    
    //Print Management Queries
    public function insert_print(Request $req) {
        
        echo "Hell Yeah";
        // DB::table('print_sale_records')->insert([
        //     'date'       => $req->input('pdate'),
        //     'paper_type' => $req->input('ptype'),
        //     'amount'     => $req->input('pamount'),
        //     'price'      => $req->input('pp')
        // ]);
        // return redirect('/sale-records')->with('success', 'Data is successfully inserted to Print Sale Record');
    }
    public function edit_print(Request $req) {
        echo "Hell Yeah";
        // $results         = DB::select('select * from print_sale_records where pid = :id', ['id' => $req->id]);
        // return view('sale-records/print/edit', ['results'=> $results]);
    }

    public function update_print(Request $req) {
        echo "Hell Yeah";
        // $pid                       = (int)$req->input('pid');
        // DB::table('copy')->where('pid', $pid)
        //     ->update(['pDate' => $date,'paper'=>$paperType,'amount'=>$amount,'price'=>$price]);

    }
    public function delete_print(Resquest $req){
        echo "Hell Yeah";
        // $results         =DB::table('print_sale_records')->where('pid',  $req->id)->delete();
        // return redirect('sale-records')->with('success', 'Data is successfully Deleted from Print Sale Record');
    }

    //Stationary Management Queries
    public function insert_st(Request $req) {
        
        echo "Hell Yeah";
        // DB::table('copy')->insert([
        //     'date'       => $req->input('pdate'),
        //     'paper_type' => $req->input('ptype'),
        //     'amount'     => $req->input('pamount'),
        //     'price'      => $req->input('pp')
        // ]);
        // return redirect('/sale-records')->with('success', 'Data is successfully inserted to Print Sale Record');
    }
    public function edit_st(Request $req) {
        echo "Hell Yeah";
        // $results         = DB::select('select * from print where cpid = :id', ['id' => $req->id]);
        // return view('sale-records/stationary/edit', ['results'=> $results]);
    }
    
    public function update_st(Request $req) {
        echo "Hell Yeah";
        // $cpid                       = (int)$req->input('cpid');
        // DB::table('copy')->where('cpid', $cpid)
        //     ->update(['date' => $date,'paper_type'=>$stName,'amount'=>$tpp,'price'=>$amount]);
    
    }
    public function delete_st(Resquest $req){
        echo "Hell Yeah";
        // $results         =DB::table('print')->where('cpid',  $req->id)->delete();
        // return redirect('sale-records')->with('success', 'Data is successfully Deleted from Print Sale Record');
    }

}
