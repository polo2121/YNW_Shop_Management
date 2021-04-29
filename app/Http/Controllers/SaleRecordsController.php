<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreSaleRecordsController extends Controller
{

    public function  storeSaleRecords() {

        $copySaleRecords = DB::table('copy')->where('date', date("Y-m-d"))->get();
        return view('storeSaleRecords', ['copySaleRecords'=> $copySaleRecords]);
    }
    
    //queries for copy
    public function insertCopySaleRecords(Request $req) {

        DB::table('copy')->insert([
            'date'       => $req->input('date'),
            'paper_type' => $req->input('paperType'),
            'amount'     => $req->input('amount'),
            'price'      => $req->input('paper_price')
        ]);
        return redirect('/storeSaleRecords')->with('success', 'Data is successfully inserted to Copyer Sale Record');
    }
    public function updateCopy($value) {

    }

    public function deleteCopy() {

    }

    //queries for computer
    public function insert_query_computer($value) {

    }
    
    public function update_query_computer($value) {

    }

    //queries for stationary
    public function insertStationary(Request $req) {
        DB::table('copyer')->insert([
            'date' => $req->input('date'),
            'paper_type' => $req->input('paperType'),
            'amount' => $req->input('amount'),
            'price' => $req->input('paper_price')
        ]);
        return redirect('/storeSaleRecords')->with('success', 'Data is successfully inserted to Stationary Record');

    }

    public function update_query_stationary($value) {

    }

    //queries for phone bill
    public function insertPhoneBillSaleRecords(Request $req) {
        
        DB::table('copyer')->insert([
            'date' => $req->input('date'),
            'paper_type' => $req->input('paperType'),
            'amount' => $req->input('amount'),
            'price' => $req->input('paper_price')
        ]);
        return redirect('/storeSaleRecords')->with('success', 'Data is successfully inserted to Phone Billing Sale Record');
    }
    
    public function update_query_phoneBill($value) {

    }


    
}
