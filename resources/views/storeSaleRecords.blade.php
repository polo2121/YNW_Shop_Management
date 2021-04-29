@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./css/storeSaleRecords.css">
    <link rel="stylesheet" href="./css/storeSaleRecords_grid.css">
    <link rel="stylesheet" href="./animate.css/animate.css">
@endpush

@push('scripts')
    <script src="./js/storeSaleRecords.js"></script>
    <script src="./js/hightlight.js"></script>

@endpush
@section('location')
    <div class="location">
        <a>Application</a> 
            > 
        <a herf="{{route('ssr')}}">  
            <span>Sale Records</span> 
        </a>
    </div>
@endsection
@section('content')
    <h2 class="title">
        Sale Records Management
    </h2>

    <div class="form_panel">
        <div class="form_btn_panel" >
            <!-- <h3>စာရင်းသွင်းမည်</h3> -->
            <div class="icon_fname">
                <img class="form_entry_icon" src="../images/form_entry.svg" alt="" width="40" height="40">
                <label for="" class="form_name">စာရင်းသွင်းမည်</label>
            </div>

            <div class="form_selection_btn">
                <button id="copy"       class="selectBtn">Copy</button>
                <button id="computer"   class="selectBtn js-s">Computer</button>
                <button id="stationary" class="selectBtn">Stationary</button>
                <button id="phone"      class="selectBtn js-s">Phone Bill</button>
            </div>
        </div>

        <!-- Copyer Form -->
        <form  id="copyer" class="hide tc animate__animated" action="{{route('ssr.copy.insert')}}" method="POST">
            @csrf
            @method('POST')
            
            <div class="form_header"><h3 for="" class="form_title">Copyer Sale Record Form</h3></div>
            <div class="form_header_icon"></div>
            
            <div class="form_input_panel">
                <div class="input_groups">
                    <label for="">Date</label>
                    <input type="date" name="date" id="date" placeholder="e.g 20/12/2021">
                </div>

                <div class="input_groups">
                    <label for="">Paper</label>
                    <div class="paperBtn_group">
                        <button type="button" class="paperBtn" id="A4"    onclick="getPaperType(id)">A4</button>
                        <button type="button" class="paperBtn" id="legal" onclick="getPaperType(id)">Legal</button>
                        <button type="button" class="paperBtn" id="A3"    onclick="getPaperType(id)">A3</button>
                    </div>
                </div>

                <div class="input_groups">
                    <label for="">Amount</label>
                    <input type="text" name="amount" id="amount" placeholder="e.g 12">
                </div>

                <div class="input_groups">
                    <label for="">Price</label>
                    <input type="text" name="paper_price" id="paper_price" placeholder="e.g 1000 or 2000">
                </div>
                <div class="input_groups">
                    <button class="subBtn">Submit</button>
                </div>
            </div>

            
        </form>

        <form class="hide animate__animated" id="stationaryItems" action="{{route('ssr.billing.insert')}}" method="POST" >
            @csrf
            @method('POST')
            
            <div class="form_header"><h3 for="" class="form_title">Stationary Sale Record Form</h3></div>
            <div class="form_header_icon"></div>

            <div class="form_input_panel">   
                <div class="input_groups" id="select_date">
                    <label for="">Select Date</label>
                    <input type="date" name="date" value="Card" id="date">
                </div>
                
                <div class="input_groups mb2 ">
                    <label for="">Select Operator</label>
                    <input type="hidden" name="operator">
                    <div class="operator_btn_groups mt2" style="display: flex;">
                        <div class="frame" id="telenor_frame" >
                            <img src="./images/telenor.svg" id="telenor" width="30px" onclick="getOperator(id)">
                        </div>

                        <!-- <div class="frame" id="mytel_frame">
                            <img src="./images/mytel.png" id="mytel" width="30px" onclick="getOperator(id)">
                        </div> -->

                        <div class="frame" id="mpt_frame">
                            <img src="./images/mpt.svg" id="mpt" width="30px" onclick="getOperator(id)">
                        </div>
                            
                        <div class="frame" id="ooredoo_frame">
                            <img src="./images/ooredoo.svg" id="ooredoo" width="30px" onclick="getOperator(id)">
                        </div>
                    </div>    
                </div>

                <div class="input_groups">
                    <label for="">Paper</label>
                    <div class="prebill_Btn_group">
                        <button type="button" class="paperBtn" id="1000"    onclick="getPredefinedBill(id)">1000</button>
                        <button type="button" class="paperBtn" id="3000"    onclick="getPredefinedBill(id)">3000</button>
                        <button type="button" class="paperBtn" id="5000"    onclick="getPredefinedBill(id)">5000</button>
                    </div>
                </div>

                <div class="input_groups">
                    <label for="">Amount</label>
                    <input type="text" name="amount" placeholder="e.g. 10">
                </div>
                
                <div></div>
                <div class="input_groups">
                    <button class="subBtn">Submit</button>
                </div>

            </div>

            
        </form>

        <!-- Stationary Form -->
        <form class="hide animate__animated" id="stationaryItems" action="{{route('ssr.stationary.insert')}}" method="POST" >
            @csrf
            @method('POST')
            
            <div class="form_header"><h3 for="" class="form_title">Stationary Sale Record Form</h3></div>
            <div class="form_header_icon"></div>

            <div class="form_input_panel">             
                <div class="input_groups mb2 tc" id="select_date">
                    <label for="">Select Date</label>
                    <div>
                        <input type="date" name="date" value="Card" id="date" onchange="choose_route(id)">
                    </div>
                </div>


                <div class="input_groups mb2 ">
                    <label for="">Select Stationary</label>
                    <div>
                        <input type="text" placeholder="e.g. pencil/books" value="">
                    </div>
                </div>
                        
                <div class="input_groups mb2 ">
                    <label for="" class="d_b">Amount</label>
                    <input type="text" placeholder="e.g. 3">
                </div>

                <div class="input_groups mb2 ">
                    <label for="" class="d_b">Price</label>
                    <input type="text" placeholder="e.g. 1000">
                </div>

                <div class="input_groups">
                    <button class="subBtn">Submit</button>
                </div>

            </div>
        </form>


    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="table_panel mb2" id = "">
        <div class="show_info">
            <div class="date_And_price">
                <h2 class="sale_record_title">
                    Sale Records Table
                </h2>
                <div class="today_date">
                    <img class="date_icon" src="../images/date.svg" alt="" width="23" height="20">
                    <p for="" id="tdyDate"></p>
                </div>

                <div class="today_total">
                    <!-- <img class="shop_icon" src="../images/date.svg" alt="" width="15" height="15"> -->
                    <p for="" id="tdyPrice">Total Price</p>
                    <p class="total_price"> 100,000</p>
                </div>
            </div>

            <div class="tables">
                <h3 class="pl-2">Copyer Records</h3>
                <table id="copyerTable">
                    <tr>
                        <th>Paper Type</th>
                        <th>Amount</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($copySaleRecords as $copySaleRecord)
                        <tr>
                            <td>{{$copySaleRecord->paperType}}</td>
                            <td>{{$copySaleRecord->amount}}</td>
                            <td>{{$copySaleRecord->price}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>

            <div class="tables">
                <h3 class="pl-2">Computer Records</h3>
                <table id="computerTable">
                    <tr>
                        <th>Services</th>
                        <th></th>
                        <th>Price</th>
                    </tr>
                    @foreach ($copySaleRecords as $copySaleRecord)
                        <tr>
                            <td>{{$copySaleRecord->paperType}}</td>
                            <td>{{$copySaleRecord->amount}}</td>
                            <td>{{$copySaleRecord->price}}</td>
                        </tr>

                    @endforeach

                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                    </tr>
                </table>
            </div>

            <div class="tables">
                <h3 class="pl-2">Stationary Records</h3>
                <table id="stationaryTable" class="mb2">
                    <tr>
                        <th>Stationary Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($copySaleRecords as $copySaleRecord)
                        <tr>
                            <td>{{$copySaleRecord->paperType}}</td>
                            <td>{{$copySaleRecord->amount}}</td>
                            <td>{{$copySaleRecord->price}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>

            



        </div>
        <!-- end Show Info Section -->


    </div> 
    <!-- end Info Dashboard Section -->

    @if(session('success'))
    <div class="alert animate__animated animate__slideInUp tc" id="alertMessage">
        {{ session('success')}}
    </div>
    @endif
</div>
@endsection



