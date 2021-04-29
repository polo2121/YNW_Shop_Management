<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class StoreManagementController extends Controller
{



    public function StoreManagement(){
        
        $stationareis_infos = DB::table('stationaries')->get();
        $phone_bills = DB::table('phonebill')->get();
        echo ($phone_bills);         
        // $ooredoos = DB::table('phoneBill')->where('operator', 'ooredoo')->get();
        return view('StoreManagement/storeManagement', ['stationareis_infos'=> $stationareis_infos,'phone_bills'=>$phone_bills]);
    }

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
                        'amount'=>$amount,'sale_price'=>$sp,'purchased_price_per_unit'=>$purchased_price_per_unit,'benefit'=>$benefit]);
                            
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
