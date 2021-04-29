@extends('layout')
@push('styles')
        
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/calculation_grid_layout.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select_box.css') }}">
@endpush

@push('scripts')
    <script src="./js/calculation.js"></script>
@endpush

@section('content')

    <div class="dashboard ">
        <div class="amount_filling">
            <div id="grid-1" class="title" >
                Items' Amount
            </div>
            <div id="grid-2" class="mb2">
                    <label> A4 အရေအတွက် </label>
                    <input type="search" name="A4" placeholder="e.g. 21" id="A4" class="mb" onchange="getValue(id)"> 
                    <label for="" class="selected_price">Select Price</label>

                    <input type="button" id="25" class="price_tab bg1 " value=25 onclick="changePrice(id,'A4')">
                    <input type="button" id="50" class="price_tab bg2" value=50 onclick="changePrice(id,'A4')">
                    <input type="button" id="75" class="price_tab bg3" value=75 onclick="changePrice(id,'A4')">
                    <input type="button" id="100" class="price_tab bg4" value=100 onclick="changePrice(id,'A4')">

                </div>

                <div id="grid-3" class="mb2">
                    <label> A4 ကျောကပ် အရေအတွက် </label>
                    <input type="number" name="A4" placeholder="e.g. 21" id="A4_back" onchange="getValue(id)">

                    <label for="" class="selected_price">Select Price</label>
                    <input type="button" id="25" class="price_tab bg1 " value=25 onclick="changePrice(id,'A4_back')">
                    <input type="button" id="50" class="price_tab bg2" value=50 onclick="changePrice(id,'A4_back')">
                    <input type="button" id="75" class="price_tab bg3" value=75 onclick="changePrice(id,'A4_back')">
                    <input type="button" id="100" class="price_tab bg4" value=100 onclick="changePrice(id,'A4_back')">
                </div>


                <div id="grid-4" class="mb2">
                    <label> Legal အရေအတွက်</label>
                    <input type="number" name="legal" placeholder="e.g. 21" id="legal" onchange="getValue(id)">

                    <label for="" class="selected_price">Select Price</label>
                    <input type="button" id="30" class="price_tab bg1 " value=30 onclick="changePrice(id,'legal')">
                    <input type="button" id="50" class="price_tab bg2" value=50 onclick="changePrice(id,'legal')">
                    <input type="button" id="75" class="price_tab bg3" value=75 onclick="changePrice(id,'legal')">
                    <input type="button" id="100" class="price_tab bg4" value=100 onclick="changePrice(id,'legal')">                   
                </div>

                <div id="grid-5" class="mb2">
                    <label> Legal ကျောကပ် အရေအတွက် </label>
                    <input type="number" name="legal" placeholder="e.g. 21" id="legal_back" onchange="getValue(id)">
                    
                    <label for="" class="selected_price">Select Price</label>
                    <input type="button" id="40" class="price_tab bg1 " value=40 onclick="changePrice(id,'legal_back')">
                    <input type="button" id="50" class="price_tab bg2" value=50 onclick="changePrice(id,'legal_back')">
                    <input type="button" id="75" class="price_tab bg3" value=75 onclick="changePrice(id,'legal_back')">
                    <input type="button" id="100" class="price_tab bg4" value=100 onclick="changePrice(id,'legal_back')">
                </div>

                <div id="grid-6" class="mb2">
                    <label> A3 အရေအတွက်</label>
                    <input type="number" name="A3" placeholder="e.g. 21" id="A3" onchange="getValue(id)">

                    <label for="" class="selected_price">Select Price</label>
                    <input type="button" id="60" class="price_tab bg1 " value=60 onclick="changePrice(id,'A3')">
                    <input type="button" id="70" class="price_tab bg2" value=70 onclick="changePrice(id,'A3')">
                    <input type="button" id="100" class="price_tab bg3" value=100 onclick="changePrice(id,'A3')">
                    <input type="button" id="160" class="price_tab bg4" value=160 onclick="changePrice(id,'A3')">
                </div>

                <div id="grid-7" class="mb2">
                    <label> A3 ကျောကပ် အရေအတွက်</label>
                    <input type="number" name="A3" placeholder="e.g. 21" id="A3_back" onchange="getValue(id)">

                    <label for="" class="selected_price">Select Price</label>
                    <input type="button" id="120" class="price_tab bg1 " value=120 onclick="changePrice(id,'A3_back')">
                    <input type="button" id="75" class="price_tab bg2" value=75 onclick="changePrice(id,'A3_back')">
                    <input type="button" id="50" class="price_tab bg3" value=50 onclick="changePrice(id,'A3_back')">
                    <input type="button" id="100" class="price_tab bg4" value=100 onclick="changePrice(id,'A3_back')">                    
                </div>


                <div id="grid-8" class="mb2">
                    <label> A4 မှတ်ပုံတင်</label>
                    <input type="number" name="A4_pass" placeholder="e.g. 21" id="A4_pass" onchange="getValue(id)">

                    <label for="" class="selected_price">Select Price</label>
                    <input type="button" id="120" class="price_tab bg1 " value=120 onclick="changePrice(id,'A4_pass')">
                    <input type="button" id="75" class="price_tab bg2" value=75 onclick="changePrice(id,'A4_pass')">
                    <input type="button" id="50" class="price_tab bg3" value=50 onclick="changePrice(id,'A4_pass')">
                    <input type="button" id="100" class="price_tab bg4" value=100 onclick="changePrice(id,'A4_pass')">                    
                </div>
        </div>

        <div class="calculation">
                
           
                    <div id="item-a" class="title" >
                        <p>Total Price</p>
                    </div>


                    <div id="item-b" class="sub_title" >
                      
                        <p>Name</p>
                        <p class="ml">Amount</p>
                        <p class="ml">total</p>
                        
                    </div>

                    <div id="A4_item">
                        <p>A4</p>
                        <p id="A4_amount" class="ml">0</p>
                        <input type="number" id="A4_total_price" class="total" disabled>
                    
                    </div>

                    <div id="A4_back_item">

                        <p>A4 ကျောကပ်</p>
                        <p id="A4_back_amount" class="ml">0</p>
                        <input type="number" id="A4_back_total_price" disabled>
                        
                    </div>

                    <div id="legal_item">
                        <p>Legal</p>
                        <p id="legal_amount" class="ml">0</p>
                        <input type="number" id="legal_total_price" disabled>

                    </div>
             
                    <div id="legal_back_item">
                        <p>Legal ကျောကပ်</p>
                        <p id="legal_back_amount" class="ml">0</p>
                        <input type="number" id="legal_back_total_price" disabled>
                        
                    </div>       
                    
                    <div id="A3_item">         
                        <p>A3</p>
                        <p id="A3_amount" class="ml">0</p>
                        <input type="number" id="A3_total_price" disabled>
                    </div>

                    <div id="A3_back_item">         
                        <p>A3 ကျောကပ်</p>
                        <p id="A3_back_amount" class="ml">0</p>
                        <input type="number" id="A3_back_total_price" disabled>
                    </div>

                    <div id="A4_pass_item">         
                        <p>A4 မှတ်ပုံတင်</p>
                        <p id="A4_pass_amount" class="ml">0</p>
                        <input type="number" id="A4_pass_total_price" disabled>
                    </div>
         
                    <div id="total_price" class="sub_title pt bb">
                        <p>Total Price</p>
                        <input type="number" id="total_price_all"  value=0 disabled>
                        
                    </div>

                    

          
            </div>
    
        </div>   
    </div>

@endsection