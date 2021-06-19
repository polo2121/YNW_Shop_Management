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

    <div class="selection selection_BgColor_st">
        <div class="pill pill_BgColor_st">
            <a href="{{route('sm.st.home')}}">
                <button type="button"  class="submitBtn btnBgColor selectionActive"  id="stBtn">
                    Stationary
                </button>
            </a>

            <a href="{{route('sm.print.home')}}">
                <button typee="button" class="submitBtn btnBgColor"  id="printBtn">
                    Print
                </button>
            </a>

            <a href="{{route('sm.pb.home')}}">
                <button type="button"  class="submitBtn btnBgColor"  id="comBtn">
                    Phone Bill
                </button>        
            </a>

        </div>
    </div>

    <section id="stationarySection" class="">

        <div class="form_panel hide animate__animated animate__fadeInUp" id="stInesrtForm">
            <h2 class="title">
                Stationary Management
            </h2>
            <div class="form_header">
                <h3 for="" class="form_title st_BgColor">
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

                    <div class="input_groups st_input">
                        <label for="" id="changeFont" >Select Date</label>               
                        <input type="date" name="date" value="Card" id="date" required>

                    </div>

                    <div class="input_groups st_input">
                        <label for="">Stationary</label>
                        <input type="text" name="stName" required>
                    </div>

                    <div class="input_groups st_input">
                        <label for="" class="d_b">Total Purchased Price</label>
                        <input type="text" name="total_purchased_price" required>
                    </div>

                    <div class="input_groups st_input">
                        <label for="" class="d_b">Amount</label>
                        <input type="number" name="amount" required>
                    </div>

                    <div class="input_groups st_input">
                        <label for="" class="d_b" style="display: block !important">Sale Price</label>
                        <input type="number" name="sale_price" required>
                    </div>

                    <div class="buttons-group">
                        <button class="subBtn stSubBtn">
                            <img class="mr-1" src="{{asset('../images/submit.svg')}}" alt="" width="25" height="25" >
                                Submit
                        </button>
                        <button type="button" class="subBtn stSubBtn" onclick="clearInputs()">
                            <img class="mr-1 svg-primary" src="{{ asset('../images/clear.svg')}}" alt="" width="25" height="25" >
                                Clear
                        </button>
                    </div>
                    
                </div>
            </form>
        </div>
        
        <div class="table_panel mb2" id = "">
            <div class="show_info">
                <div class="disFlex_sb">
                    <div class="disFlex">
                        <h2 class="table_title">Stationary Storage</h2>
                        <button class="insertButton" type="button" onclick="form_showHide('stInesrtForm')">
                            <svg class="ml-2 svgHover" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" fill="#293241" data-original="#000000" style="" class=""/>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>

                    
                    <div class="search disFlex_sb st_BgColor">          
                        <input class="print_BgColor" type="search" id="st_search" onkeyup="searching(id,'stationaries')" placeholder="Click to search..." title="Type in a name">
                        <svg class="searchSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g><g xmlns="http://www.w3.org/2000/svg">
                            <path d="m498.237 366.527-114.499-114.527c21.484-48.774 12.291-107.913-27.594-147.808-51.966-51.978-136.081-51.985-188.053 0-51.844 51.856-51.844 136.232 0 188.088 41.198 41.207 101.574 49.053 149.773 26.771l113.914 113.941c18.366 18.37 48.097 18.372 66.463-.004 18.316-18.324 18.314-48.138-.004-66.461zm-308.931-95.458c-40.151-40.16-40.151-105.505 0-145.666 40.24-40.25 105.375-40.257 145.622 0 40.151 40.161 40.151 105.506 0 145.666-40.241 40.251-105.376 40.257-145.622 0zm287.717 140.711c-6.64 6.643-17.388 6.646-24.03.001l-108.834-108.86c8.946-7.042 16.919-15.128 23.842-24.23l109.02 109.046c6.627 6.629 6.628 17.414.002 24.043z" fill="#ffffff" data-original="#000000" style=""/>
                            <path d="m15 244.947h63.962c8.284 0 15-6.716 15-15s-6.716-15-15-15h-63.962c-8.284 0-15 6.716-15 15s6.716 15 15 15z" fill="#ffffff" data-original="#000000" style=""/>
                            <path d="m15 308.947h87.948c8.284 0 15-6.716 15-15s-6.716-15-15-15h-87.948c-8.284 0-15 6.716-15 15s6.716 15 15 15z" fill="#ffffff" data-original="#000000" style=""/>
                            <path d="m15 372.947h151.911c8.284 0 15-6.716 15-15s-6.716-15-15-15h-151.911c-8.284 0-15 6.716-15 15s6.716 15 15 15z" fill="#ffffff" data-original="#000000" style=""/>
                            <path d="m342.809 406.947h-327.809c-8.284 0-15 6.716-15 15s6.716 15 15 15h327.809c8.284 0 15-6.716 15-15s-6.716-15-15-15z" fill="#ffffff" data-original="#000000" style=""/>
                            </g></g>
                        </svg>
                    </div>

                </div>

                <div class="tables">
                    <div class="tbl-header st_BgColor">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Stationary</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    <!-- <th>Total Price</th> -->
                                    <th>Sale Price</th>
                                    <th>Revenue</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="tbl-content">
                        <table id="stationaries">
                            <tbody>
                            @foreach ($stationareis_infos as $stationareis_info)
                                <tr>
                                    <input type="hidden" id="stid">
                                    <td>{{$stationareis_info->stName}}</td>
                                    <td>{{$stationareis_info->purchased_price_per_unit}}</td>
                                    <td>{{$stationareis_info->amount}}</td>
                                    <!-- <td>{{$stationareis_info->total_purchased_price}}</td> -->
                                    <td>{{$stationareis_info->sale_price}}</td>
                                    <td>{{$stationareis_info->benefit}}</td>
                                    <td>
                                        <a href="{{route('sm.st.edit',['id'=>$stationareis_info->stid])}}">
                                            <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                        </a>

                                        <a class="del_or_not" href="{{route('sm.st.toDel',['id'=>$stationareis_info->stid])}}">
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

@push('scripts')
    <!-- <script type="text/javascript" src="{{ asset('../js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('../js/jquery-ui.min.js')}}"></script> -->
    <script src="{{ asset('../js/storeManagement.js')}}"></script>
@endpush