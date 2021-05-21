<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class saleRecordsManagement extends Controller
{
    public function  storeSaleRecords() {

        $St_Infos       = DB::table('stationaries_sale_records')->get();
        $Print_Infos    = DB::table('print_sale_records')->get();
        $Com_Infos      = DB::table('com_sale_records')->get();
        $PB_Infos       = DB::table('pb_sale_records')->get();

        // $copySaleRecords = DB::table('copy')->where('date', date("Y-m-d"))->get();
        return view('saleRecords/storeSaleRecords', ['St_Infos'=> $St_Infos,'Print_Infos'=> $Print_Infos,
        'Com_Infos'=> $Com_Infos,'PB_Infos'=> $PB_Infos]);
    }
    
    //Print Management Queries
    public function insert_print(Request $req) {
        
        $pdate                       = $req->input('pdate');
        $ptype                       = $req->input('ptype');
        $pamount                     = (int)$req->input('pamount');
        $pprice                      = (int)$req->input('pprice');

        DB::table('print_sale_records')->insert([
            'date'       => $pdate,
            'paper'      => $ptype,
            'amount'     => $pamount,
            'price'      => $pprice
        ]);
        return redirect('/sale-records')->with('success', 'Data is successfully inserted to Print Sale Record');
    }
    public function edit_print(Request $req) {
        $results         = DB::select('select * from print_sale_records where pid = :id', ['id' => $req->id]);
        return view('SaleRecords/print/edit', ['results' => $results]);
    }

    public function update_print(Request $req) {

        $pid                       = (int)$req->input('pid');
        $paper                     = $req->input('paper');
        $amount                    = (int)$req->input('amount');
        $price                     = (int)$req->input('price');

       
        DB::table('print_sale_records')->where('pid', $pid)
            ->update(['paper' => $paper,'amount'=>$amount,'price'=>$amount]);
        
        return redirect('/sale-records')->with('success', 'Data is successfully Updated in Print Sale Record');
    }
    public function delete_print(Resquest $req){
        echo "Hell Yeah";
        // $results         =DB::table('print_sale_records')->where('pid',  $req->id)->delete();
        // return redirect('sale-records')->with('success', 'Data is successfully Deleted from Print Sale Record');
    }

    //Stationary Management Queries

    public function insert_st(Request $req) {
        
        $date                       = $req->input('stDate');
        $name                       = $req->input('stName');
        $amount                     = (int)$req->input('stAmount');
        $price                      = (int)$req->input('stPrice');

        DB::table('stationaries_sale_records')->insert([
            'date'       => $date,
            'name'       => $name,
            'amount'     => $amount,
            'price'      => $price
        ]);
        return redirect('/sale-records')->with('success', 'Data is successfully inserted to Stationary Sale Record');
    }
    public function edit_st(Request $req) {
        // echo "Hell Yeah";
        $results         = DB::select('select * from stationaries_sale_records where ssrid = :id', ['id' => $req->id]);
        return view('SaleRecords/stationary/edit', ['results' => $results]);

    }
    
    public function update_st(Request $req) {
        echo "Hell Yeah";
        // $ssrid                       = (int)$req->input('ssrid');
        // DB::table('stationaries_sale_records')->where('ssrid', $ssrid)
        //     ->update(['date' => $date,'name'=>$name,'amount'=>$amount,'price'=>$price]);
    
    }
    public function delete_st(Resquest $req){
        echo "Hell Yeah";
        // $results         =DB::table('print')->where('cpid',  $req->id)->delete();
        // return redirect('sale-records')->with('success', 'Data is successfully Deleted from Print Sale Record');
    }

    // Phone Management Queries
    public function insert_pb(Request $req){
        $date           = $req->input('phDate');
        $operator       = $req->input('operator');
        $bill           = (int)$req->input('bill');
        $amount         = (int)$req->input('phAmount');

        DB::table('pb_sale_records')->insert([
            'date'        => $date,
            'operator'    => $operator,
            'bill'        => $bill,
            'amount'      => $amount
        ]);

        return redirect('/sale-records')->with('success', 'Data is successfully inserted to Phone Bill Sale Record');
    }
    public function edit_pb(Request $req) {
        // echo "Hell Yeah";
        $results         = DB::select('select * from pb_sale_records where pbsrid = :id', ['id' => $req->id]);
        return view('SaleRecords/phone/edit', ['results' => $results]);

    }
    
    // Computer Mangement Queries
    public function insert_com(Request $req){
        $date           = $req->input('cmDate');
        $task           = $req->input('task');
        $amount         = (int)$req->input('tkAmount');
        $price          = (int)$req->input('cmPrice');

        DB::table('com_sale_records')->insert([
            'date'        => $date,
            'task'    => $task,
            'amount'        => $amount,   
            'price'      => $price
        ]);

        return redirect('/sale-records')->with('success', 'Data is successfully inserted to Computer Sale Record');
    }
    public function edit_com(Request $req) {
        // echo "Hell Yeah";
        $results         = DB::select('select * from com_sale_records where csrid = :id', ['id' => $req->id]);
        return view('SaleRecords/computer/edit', ['results' => $results]);

    }

}
