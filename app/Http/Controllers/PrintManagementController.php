<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PrintManagementController extends Controller
{
    //
    public function print()
    {
        // $print_items = DB::table('print_items')->get();
        return view('StoreManagement/Print/print',[]);
    }
}
