<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class saleRecordsManagement extends Controller
{
    // public function ajaxAutocomplete(){
    //     $titles = DB::table('stationaries')->pluck('stName');
    //     return array('msg'=> $titles);
    // }
    public function  storeSaleRecords() {

        $getToday = date("Y-m-d");
        // echo gettype($getToday);

        $St_Infos       = DB::table('stationaries_sale_records')->whereDate('date',$getToday)->get();
        $stp            = DB::table('stationaries_sale_records')->whereDate('date',$getToday)->sum('price');


        $Print_Infos    = DB::table('print_sale_records')->whereDate('date',$getToday)->get();
        $ptp            = DB::table('print_sale_records')->whereDate('date',$getToday)->sum('price');

        $Com_Infos      = DB::table('com_sale_records')->whereDate('date',$getToday)->get();
        $ctp            = DB::table('com_sale_records')->whereDate('date',$getToday)->sum('price');

        $PB_Infos       = DB::table('pb_sale_records')->whereDate('date',$getToday)->get();
        $pbtp           = DB::table('pb_sale_records')->whereDate('date',$getToday)->sum('bill');

        $stat_name      = DB::table('stationaries')->pluck('stName');

        $all_total = $stp + $ptp + $ctp + $pbtp;
        // $copySaleRecords = DB::table('copy')->where('date', date("Y-m-d"))->get();
        return view('saleRecords/storeSaleRecords', [
            'St_Infos'=> $St_Infos,'Print_Infos'=> $Print_Infos,
            'Com_Infos'=> $Com_Infos,'PB_Infos'=> $PB_Infos,'stat_names' => $stat_name,
            'stp'=>$stp,'ptp'=>$ptp,'ctp'=>$ctp,'pbtp'=>$pbtp,'all_total'=> $all_total
        ]);
    }
    
    //Print Management Queries
    public function insert_print(Request $req) {
        
        $date                       = $req->input('date');
        $items                      = $req->input('items');

        $amount                     = $req->input('amount');
        $price                      = intval(str_replace(",","",$amount));

        $price                      = $req->input('price');
        $price                      = intval(str_replace(",","",$price));

        echo $price;
        $print_infos       = DB::table('print_items')->select('amount','benefit')->where('items',$items)->get();
        
        $updated_amount = $print_infos[0]->{"amount"} - $amount;

        //This benefit is already calculated in stationary table
        $benefit        = $print_infos[0]->{"benefit"};

        $real_benefit   = $benefit * $amount;

        echo $items;
        DB::table('print_items')
              ->where('items',$items)
              ->update(['amount' => $updated_amount]);
    
        // $titles = DB::table('print_items')->pluck('items');
    
        DB::table('print_sale_records')->insert([
            'date'       => $date,
            'items'       => $items,
            'amount'     => $amount,
            'price'      => $price,
            'benefit'      => $real_benefit,
        ]);
        return redirect('/sale-records')->with('success', 'Data is successfully inserted to Print Sale Record');

    }
    public function edit_print(Request $req) {
        $results         = DB::select('select * from print_sale_records where pid = :id', ['id' => $req->id]);
        return view('SaleRecords/edit', ['results' => $results]);
    }

    public function update_print(Request $req) {

        $pid                       = (int)$req->input('pid');
        $paper                     = $req->input('paper');
        $amount                    = (int)$req->input('amount');
        $price                     = (int)$req->input('price');

       
        DB::table('print_sale_records')->where('pid', $pid)
            ->update(['paper' => $paper,'amount'=>$amount,'price'=>$price]);
        
        return redirect('/sale-records')->with('success', 'Data is successfully Updated in Print Sale Record');
    }
    public function delete_print(Resquest $req){
        $results         =DB::table('print_sale_records')->where('pid',  $req->id)->delete();
        return redirect('sale-records')->with('success', 'Data is successfully Deleted from Print Sale Record');
    }

    //Stationary Management Queries

    public function insert_st(Request $req) {
        
        $date                       = $req->input('date');
        $name                       = $req->input('name');
        $amount                     = (int)$req->input('amount');
        $amount                      = intval(str_replace(",","",$amount));
        $price                      = $req->input('price');
        $price                      = intval(str_replace(",","",$price));

        $st_infos       = DB::table('stationaries')->select('amount','benefit')->where('stName',$name)->get();
        
        $updated_amount = $st_infos[0]->{"amount"} - $amount;

        //This benefit is already calculated in stationary table
        $benefit        = $st_infos[0]->{"benefit"};

        $real_benefit   = $benefit * $amount;

        DB::table('stationaries')
              ->where('stName',$name)
              ->update(['amount' => $updated_amount]);
    
        $titles = DB::table('stationaries')->pluck('stName');
    
        DB::table('stationaries_sale_records')->insert([
            'date'       => $date,
            'name'       => $name,
            'amount'     => $amount,
            'price'      => $price,
            'benefit'      => $real_benefit,
        ]);
        return redirect('/sale-records')->with('success', 'Data is successfully inserted to Stationary Sale Record');
    }
    public function edit_st(Request $req) {
        // echo "Hell Yeah";
        $results         = DB::select('select * from stationaries_sale_records where ssrid = :id', ['id' => $req->id]);
        return view('SaleRecords/edit', ['results' => $results]);
    }
    
    public function update_st(Request $req) {
        $ssrid               = (int)$req->input('ssrid');
        $name                = $req->input('name');
        $amount              = (int)$req->input('amount');
        $price               = (int)$req->input('price');

       
        DB::table('stationaries_sale_records')->where('ssrid', $ssrid)
            ->update(['name' => $name,'price'=>$price,'amount'=>$amount]);
        
        return redirect('/sale-records')->with('success', 'Data is successfully Updated in Stationary Sale Record');
    
    }
    public function delete_st(Resquest $req){
        echo "Hell Yeah";
        // $results         =DB::table('print')->where('cpid',  $req->id)->delete();
        // return redirect('sale-records')->with('success', 'Data is successfully Deleted from Print Sale Record');
    }

    // Phone Management Queries
    public function insert_pb(Request $req){
        $date           = $req->input('date');
        $operator       = $req->input('operator');
        $bill           = (int)$req->input('bill');
        $amount         = (int)$req->input('amount');

        echo $date;

        // DB::table('pb_sale_records')->insert([
        //     'date'        => $date,
        //     'operator'    => $operator,
        //     'bill'        => $bill,
        //     'amount'      => $amount
        // ]);

        // return redirect('/sale-records')->with('success', 'Data is successfully inserted to Phone Bill Sale Record');
    }
    public function edit_pb(Request $req) {
        // echo "Hell Yeah";
        $results         = DB::select('select * from pb_sale_records where pbsrid = :id', ['id' => $req->id]);
        return view('SaleRecords/edit', ['results' => $results]);

    }
    public function update_pb(Request $req) {

        $pbsrid                  = (int)$req->input('pbsrid');
        $operator                = $req->input('operator');
        $bill                    = (int)$req->input('bill');
        $amount                   = (int)$req->input('amount');

       
        DB::table('pb_sale_records')->where('pbsrid', $pbsrid)
            ->update(['operator' => $operator,'bill'=>$bill,'amount'=>$amount]);
        
        return redirect('/sale-records')->with('success', 'Data is successfully Updated in Phone Bill Sale Record');
    }
    
    // Computer Mangement Queries
    public function insert_com(Request $req){
        $date           = $req->input('date');
        $task           = $req->input('task');
        $amount         = (int)$req->input('amount');
        $price          = (int)$req->input('price');

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
        return view('SaleRecords/edit', ['results' => $results]);

    }
    public function update_com(Request $req) {

        $csrid                     = (int)$req->input('csrid');
        $task                      = $req->input('task');
        $amount                    = (int)$req->input('amount');
        $price                     = (int)$req->input('price');

       
        DB::table('com_sale_records')->where('csrid', $csrid)
            ->update(['task' => $task,'amount'=>$amount,'price'=>$price]);
        
        return redirect('/sale-records')->with('success', 'Data is successfully Updated in Computer Sale Record');
    }

}


