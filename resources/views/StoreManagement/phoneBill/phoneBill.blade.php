@extends('../layout')

@push('styles')
    <link href="{{ asset('../css/storeManagement.css')}}" rel="stylesheet" type="text/css" >
@endpush

@section('location')
    <div class="location">
        <a href="">Application</a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a href="">Store Management</a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a href="{{route('sm.pb.home')}}"><span>Phone Bills</span></a>
    </div>
  
@endsection

@section('content')
    <div class="selection">
        <div class="pill">
            <a href="{{route('sm.st.home')}}">
                <button type="button"  class="submitBtn btnBgColor "  id="stBtn">
                    Stationary
                </button>
            </a>

            <a href="{{route('sm.pb.home')}}">
                <button type="button"  class="submitBtn btnBgColor selectionActive"  id="comBtn">
                    Phone Bill
                </button>        
            </a>

            <a href="">
                <button typee="button" class="submitBtn btnBgColor"  id="phBtn">
                    Computer
                </button>
            </a>
        </div>
    </div>

    <section id="phone_bill_section">

            <div class="table_panel mb2" id = "">
                <div class="show_info">
                    <div class="disFlex">
                        <h2 class="table_title">Phone Bill</h2>
                        <button class="insertButton" type="button" onclick="form_showHide('pbInsertForm')">
                            <img class="svgHover" src="{{ asset('../images/add.svg')}}" alt="" width="60" height="30">
                        </button>
                    </div>

                    <div class="phoneBill_storage">
                        <div>
                            <div class="operator_titles ooredooBg">
                                <p class="operator_name"><i class="fas fa-sim-card fa-lg pd-r-1"></i>Ooredoo</p>
                            </div>
                            <table class="styled-table ooredoo-table">
                                <thead>
                                    <tr>
                                        <th>price</th>
                                        <th>amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($ooredoos as $ooredoo)
                                    <tr>
                                        <td>{{$ooredoo->bill}}</td>
                                        <td>{{$ooredoo->amount}}</td>
                                        <td>
                                            <a href="{{route('sm.pb.edit', ['id'=> $ooredoo->pbId])}}">
                                                <img class="svgHover" src="{{ asset('../images/edit.svg')}}" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sm.pb.toDel', ['id'=> $ooredoo->pbId])}}">
                                                <img  src="{{ asset('../images/remove.svg')}}" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <div class="operator_titles telenorBg">
                                <p class="operator_name"><i class="fas fa-sim-card fa-lg pd-r-1"></i>Telenor</p>
                            </div>
                            <table class="styled-table telenor-table">
                                <thead>
                                    <tr>
                                        <th>price</th>
                                        <th>amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($telenors as $telenor)
                                    <tr>
                                        <td>{{$telenor->bill}}</td>
                                        <td>{{$telenor->amount}}</td>
                                        <td>
                                            <a href="{{route('sm.pb.edit', ['id'=> $telenor->pbId])}}">
                                                <img class="svgHover" src="{{ asset('../images/edit.svg')}}" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sm.pb.toDel', ['id'=> $telenor->pbId])}}">
                                                <img  src="{{ asset('../images/remove.svg')}}" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <div class="operator_titles mptBg">
                                <p class="operator_name"><i class="fas fa-sim-card fa-lg pd-r-1"></i>MPT</p>
                            </div>
                            <table class="styled-table mpt-table">
                                <thead>
                                    <tr>
                                        <th>price</th>
                                        <th>amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($mpts as $mpt)
                                    <tr>
                                        <td>{{$mpt->bill}}</td>
                                        <td>{{$mpt->amount}}</td>
                                        <td>
                                            <a href="{{route('sm.pb.edit', ['id'=> $mpt ->pbId])}}">
                                                <img class="svgHover" src="{{ asset('../images/edit.svg')}}" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sm.pb.toDel', ['id'=> $mpt ->pbId])}}">
                                                <img  src="{{ asset('../images/remove.svg')}}" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- end show_info -->
            </div>
            
            <div class="form_panel " id="pbInsertForm">
                    <div class="form_header">
                        <h3 for="" class="form_title"><i class="fas fa-file-alt fa-2x"></i>Phone Bill Entry Form</h3>
                    </div>
                    
                    <form class="store_management_form" id="bill-insert-form" action="{{route('sm.pb.toInsert')}}" method="POST">
                        @csrf
                        @method('POST')
                        
                        <div class="form_input_panel">
                        <div class="form_header_icon"><i class="far fa-times-circle fa-lg" onclick="form_showHide('pbInsertForm')"></i></div>
                            <div class="input_groups">
                                <label for="" id="changeFont" >Select Date</label>               
                                <input type="date" name="date" value="Card" id="date">

                            </div>

                            <div class="input_groups">
                                <label for="" class="d_b">Operator</label>
                                <div class="operator_groups">
                                    <input type="hidden" name="operator">
                                    <div class="circle" onclick="getOperator('telenor')">
                                        <img src="../images/telenor.svg" id="telenor" width="25px" onclick="getOperator(id)">   
                                    </div>

                                    <div class="circle" onclick="getOperator('mpt')">
                                        <img src="../images/mpt.svg"     id="mpt"     width="25px" onclick="getOperator(id)">
                                    </div>

                                    <div class="circle" onclick="getOperator('ooredoo')">
                                        <img src="../images/ooredoo.svg" id="ooredoo" width="25px" onclick="getOperator(id)">
                                    </div>
                                </div>                  
                            </div>
                            <!-- end of input_groups -->

                            <div class="input_groups">
                                <label for="" class="d_b">Bill</label>
                                <input type="number" name="bill">
                            </div>

                            <div class="input_groups">
                                <label for="" class="d_b">Amount</label>
                                <input type="number" name="amount">
                            </div>

                            <div class="input_groups">
                                <label for="" class="d_b">Percentage</label>
                                <input type="number" name="percentage">
                            </div>
                            
                            <div class="buttons-group">
                                <button class="subBtn">
                                    <img class="mr-1" src="{{ asset('../images/submit.svg')}}" alt="" width="25" height="25" >
                                    Submit
                                </button>
                                <button type="button" class="subBtn" onclick="clearInputs()">
                                    <img class="mr-1 svg-primary" src="{{ asset('../images/clear.svg')}}" alt="" width="25" height="25" >
                                    Clear
                                </button>
                            </div>
                        </div>
                    </form>
            </div>  

            <div class="table_panel mb2" id = "">
                <div class="show_info">
                    <div>
                        <h2 class="table_title">
                            Phone Bill Collection (detailed)
                        </h2>
                    </div>

                    <div class="">
                        <div>
                            <div class="operator_table_titles ooredooBg mt-1">
                                <label><i class="fas fa-sd-card pd-r-1 fa-lg"></i>Ooredoo</label>
                            </div>
                            <table class="styled-table ooredoo-table">
                               
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>bill</th>
                                        <th>price</th>
                                        <th>amount</th>
                                        <th>total price</th>
                                        <th>percentage</th>
                                        <th>benefits</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($ooredoos as $ooredoo)
                                    <tr>
                                        <td>{{$ooredoo->date}}</td>
                                        <td>{{$ooredoo->bill}}</td>
                                        <td>{{$ooredoo->purchased_price}}</td>
                                        <td>{{$ooredoo->amount}}</td>
                                        <td>{{$ooredoo->total_purchased_price}}</td>
                                        <td>{{$ooredoo->percentage}}</td>
                                        <td>{{$ooredoo->benefits}}</td>
                                        <td>
                                            <a href="{{route('sm.pb.edit', ['id'=> $ooredoo->pbId])}}">
                                                <img class="svgHover" src="{{ asset('../images/edit.svg')}}" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sm.pb.toDel', ['id'=> $ooredoo->pbId])}}">
                                                <img  src="{{ asset('../images/remove.svg')}}" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            <div class="operator_table_titles telenorBg mt-1">
                                <label><i class="fas fa-sd-card pd-r-1 fa-lg"></i>telenor</label>
                            </div>
                            <table class="styled-table telenor-table">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>bill</th>
                                        <th>price</th>
                                        <th>amount</th>
                                        <th>total price</th>
                                        <th>percentage</th>
                                        <th>benefits</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($telenors as $telenor)
                                    <tr>
                                        <td>{{$telenor->date}}</td>
                                        <td>{{$telenor->bill}}</td>
                                        <td>{{$telenor->purchased_price}}</td>
                                        <td>{{$telenor->amount}}</td>
                                        <td>{{$telenor->total_purchased_price}}</td>
                                        <td>{{$telenor->percentage}}</td>
                                        <td>{{$telenor->benefits}}</td>
                                        <td>
                                            <a href="{{route('sm.pb.edit', ['id'=> $telenor->pbId])}}">
                                                <img class="svgHover" src="{{ asset('../images/edit.svg')}}" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sm.pb.toDel', ['id'=> $telenor->pbId])}}">
                                                <img  src="{{ asset('../images/remove.svg')}}" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            <div class="operator_table_titles mptBg mt-1">
                                <label><i class="fas fa-sd-card pd-r-1 fa-lg"></i>mpt</label>
                            </div>
                            <table class="styled-table mpt-table">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>bill</th>
                                        <th>price</th>
                                        <th>amount</th>
                                        <th>total price</th>
                                        <th>percentage</th>
                                        <th>benefits</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($mpts as $mpt)
                                    <tr>
                                        <td>{{$mpt->date}}</td>
                                        <td>{{$mpt->bill}}</td>
                                        <td>{{$mpt->purchased_price}}</td>
                                        <td>{{$mpt->amount}}</td>
                                        <td>{{$mpt->total_purchased_price}}</td>
                                        <td>{{$mpt->percentage}}</td>
                                        <td>{{$mpt->benefits}}</td>
                                        <td>
                                            <a href="{{route('sm.pb.edit', ['id'=> $mpt ->pbId])}}">
                                                <img class="svgHover" src="{{ asset('../images/edit.svg')}}" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sm.pb.toDel', ['id'=> $mpt ->pbId])}}">
                                                <img  src="{{ asset('../images/remove.svg')}}" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- end show_info -->
            </div>

    </section>
@endsection