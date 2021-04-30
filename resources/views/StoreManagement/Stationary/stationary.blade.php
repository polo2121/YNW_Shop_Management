@extends('../layout')

@push('styles')
    <link href="{{ asset('../css/storeManagement.css')}}" rel="stylesheet" type="text/css" >
@endpush

@section('location')
    <div class="location">
        <a>Application</a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a>Store Management</a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a href="{{route('sm.st.home')}}"><span>Stationary</span></a>
    </div>
  
@endsection

@section('content')
    <div class="selection">
        <div class="pill">
            <a href="{{route('sm.st.home')}}">
                <button type="button"  class="submitBtn btnBgColor selectionActive"  id="stBtn">
                    Stationary
                </button>
            </a>

            <a href="{{route('sm.pb.home')}}">
                <button type="button"  class="submitBtn btnBgColor"  id="comBtn">
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

    <section id="stationarySection" class="">

        <div class="form_panel" id="stInesrtForm">
            <h2 class="title">
                Stationary Management
            </h2>
            <div class="form_header">
                <h3 for="" class="form_title">
                <i class="fas fa-file-alt fa-2x"></i>
                Stationary Entry Form
                </h3>
            </div>

            <form class="store_management_form" action="{{route('sm.st.toInsert')}}" method="POST" >
                @csrf
                @method('POST')
                
                <div class="form_input_panel">
                    <div class="form_header_icon">
                        <i class="far fa-times-circle fa-lg" onclick="form_showHide('stInesrtForm')"></i>
                    </div>

                    <div class="input_groups">
                        <label for="" id="changeFont" >Select Date</label>               
                        <input type="date" name="date" value="Card" id="date" required>

                    </div>

                    <div class="input_groups">
                        <label for="">Stationary</label>
                        <input type="text" name="stName" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b">Total Purchased Price</label>
                        <input type="text" name="total_purchased_price" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b">Amount</label>
                        <input type="number" name="amount" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b" style="display: block !important">Sale Price</label>
                        <input type="number" name="sale_price" required>
                    </div>

                    <div class="buttons-group">
                        <button class="subBtn">
                            <img class="mr-1" src="{{asset('../images/submit.svg')}}" alt="" width="25" height="25" >
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
                <div class="disFlex">
                        <h2 class="table_title">Stationary Storage</h2>
                        <button class="insertButton" type="button" onclick="form_showHide('stInesrtForm')">
                            <img class="svgHover" src="{{ asset('../images/add.svg')}}" alt="" width="60" height="30">
                        </button>
                </div>

                <div class="tables">
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th>Stationary</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <th>Total Price</th>
                                    <th>Sale Price</th>
                                    <th>Revenue</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="tbl-content">
                        <table>
                            <tbody>
                            @foreach ($stationareis_infos as $stationareis_info)
                                <tr>
                                    <input type="hidden" id="stid">
                                    <td>{{$stationareis_info->stName}}</td>
                                    <td>{{$stationareis_info->purchased_price_per_unit}}</td>
                                    <td>{{$stationareis_info->amount}}</td>
                                    <td>{{$stationareis_info->total_purchased_price}}</td>
                                    <td>{{$stationareis_info->sale_price}}</td>
                                    <td>{{$stationareis_info->benefit}}</td>
                                    <td>
                                        <a href="{{route('sm.st.edit',['id'=>$stationareis_info->stid])}}">
                                            <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                        </a>

                                        <a href="{{route('sm.st.toDel',['id'=>$stationareis_info->stid])}}">
                                            <img onclick="removeStationaryData" class="" src="../images/remove.svg" alt="" width="23" height="20">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach 
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </div>

    </section>
@endsection