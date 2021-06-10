<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class benefitManagement extends Controller
{
    public function  benefit(){
        
        return view('benefits/home');
        
    }
}
