<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PrintManagementController extends Controller
{
    //
    public function print()
    {
        $print_items = DB::table('print_items')->orderBy('category')->get();
        return view('StoreManagement/Print/print',['print_items'=> $print_items]);
    }
    public function insert_printItems(Request $req){
        $date                       = $req->input('date');
        $category                   = $req->input('category');
        $items                     = $req->input('items');
        $tpp                        = intval(str_replace(",","",$req->input('total_purchased_price')));;
        $amount                     = intval(str_replace(",","",$req->input('amount')));
        $sp                         = intval(str_replace(",","",$req->input('sale_price')));
            
        $purchased_price_per_unit   = ceil($tpp/$amount);
        $benefit                    = $sp - $purchased_price_per_unit;
    
        DB::table('print_items')->insert([
            'date'                        => $date,
            'category'                    => $category,
            'items'                       => $items,
            'price'                       => $purchased_price_per_unit,
            'amount'                      => $amount,
            'total_price'                 => $tpp,
            'sale_price'                  => $sp,
            'benefit'                     => $benefit,
    
        ]);
        return redirect('store-management/print')->with('success', 'Data is successfully inserted to Print Items Storage'); 
    }
    public function edit_printItems(Request $req){
    
        $results         = DB::select('select * from print_items where printId = :id', ['id' => $req->id]);
        return view('StoreManagement/print/edit', ['results'=> $results]);
    }
    public function update_printItems(Request $req){

        $printId                    = (int)$req->input('printId');
        $date                       = $req->input('date');
        $category                   = $req->input('category');
        $items                      = $req->input('items');
        $tpp                        = (int)$req->input('total_purchased_price');
        $amount                     = (int)$req->input('amount');
        $sp                         = (int)$req->input('sale_price');
        $price                      = (int)$req->input('price');
        $benefit                    = $sp - $price;
    
        DB::table('print_items')->where('printId', $printId)
            ->update(['date' => $date,'category'=>$category,'items'=>$items,'total_price'=>$tpp,
                        'amount'=>$amount,'sale_price'=>$sp,
                        'price'=>$price,'benefit'=>$benefit]);
                                
        return redirect('/store-management/print')->with('success', 'Data is successfully Updated in Print Items Storage');
    }
    public function del_printItems(Request $req){
        $results         =DB::table('print_items')->where('printId',  $req->id)->delete();
        return redirect('store-management/print')->with('success', 'Data is successfully Deleted from Print Items Storage');
    }
}
