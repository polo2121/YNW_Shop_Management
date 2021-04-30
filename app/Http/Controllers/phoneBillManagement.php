<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class phoneBillManagement extends Controller
{
    // Phone Bill Management (CRUD Functinoality)
    public function calculatePercentage($bill,$amount,$percentage){
        $price         = $bill - $bill * ($percentage/100);
        $total_price   = $price * $amount;
        $benefit       = $bill * ($percentage/100);
        $data          = ['price'=>$price,'total_price'=>$total_price,'benefit'=>$benefit];
        return $data;
    }
    public function phone_bills()
    {
    
        $telenors = DB::table('phoneBill')->where('operator', 'telenor')->get();
        $mpts     = DB::table('phoneBill')->where('operator', 'mpt')->get();
        $ooredoos = DB::table('phoneBill')->where('operator', 'ooredoo')->get();
            
        return view('StoreManagement/phoneBill/phoneBill', 
                    ['telenors'=>$telenors,'mpts'=>$mpts,'ooredoos'=>$ooredoos]);
    }
    public function insertPhBill(Request $req){
            
        $date         = $req->input('date');
        $operator     = $req->input('operator');
        $bill         = $req->input('bill');
        $amount       = $req->input('amount');
        $percentage   = $req->input('percentage');
    
        $cp = $this->calculatePercentage($bill,$amount,$percentage);
        $price       = Arr::get($cp,'price');
        $total_price = Arr::get($cp,'total_price');
        $benefit     = Arr::get($cp,'benefit');
    
        DB::table('phonebill')->insert([
            'date'                  => $date,
            'operator'              => $operator,
            'bill'                  => $bill,
            'purchased_price'       => $price,
            'amount'                => $amount,
            'total_purchased_price' => $total_price,
            'percentage'            => $percentage,
            'benefits'               => $benefit,
    
        ]);
        return redirect('/store-management/phone-bills')->with('success', 'Data is successfully Inserted to Phone Bill Record');
    }
    
    public function phone_bills_edit(Request $req){
        $results         = DB::select('select * from phoneBill where pbId = :id', ['id' => $req->id]);
        return view('StoreManagement/phoneBill/edit', ['results'=> $results]);
    }

    public function edit_phone_bills(Request $req){
        $pdId         = (int)$req->pbId;
        $date         = $req->date;
        $bill         = (int)$req->bill;
        $amount       = (int)$req->amount;
        $percentage   = (int)$req->percentage;
    
        $cp = $this->calculatePercentage($bill,$amount,$percentage);    
        $price       = Arr::get($cp,'price');
        $total_price = Arr::get($cp,'total_price');
        $benefit     = Arr::get($cp,'benefit');
        DB::table('phoneBill')->where('pbId', $pdId)
            ->update(['date' => $date,'bill'=>$bill,'amount'=>$amount,
                        'percentage'=>$percentage,'purchased_price'=>$price,
                            'total_purchased_price'=>$total_price,'benefits'=>$benefit]);
        return redirect('/store-management/phone-bills')->with('success', 'Data is successfully Updated in Phone Bill Record');
                                
    }
    public function del_phoneBill(Request $req){
        $results         =DB::table('phoneBill')->where('pbId',  $req->id)->delete();
        return redirect('/store-management/phone-bills')->with('success', 'Data is successfully Deleted from Phone Bill Record');
            
    }
}
