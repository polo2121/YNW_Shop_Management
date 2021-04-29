<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //
    public function calculation() {
        return view('index', ['name'=>'John Sena']);
    }
}
