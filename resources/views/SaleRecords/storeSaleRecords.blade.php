@extends('layout')
@push('styles')
    <!-- SHIFT + Tab -->
    <link rel="stylesheet" href="./css/storeSaleRecords.css">
    <link rel="stylesheet" href="./css/storeSaleRecords_grid.css">
    <script type="text/javascript" src="{{ asset('../js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('../css/jquery-ui.css')}}">
    <script type="text/javascript" src="{{ asset('../js/jquery-ui.min.js')}}"></script>
@endpush

@push('scripts')
    <script src="./js/storeSaleRecords.js"></script>
@endpush

@section('location')
    <div class="location">
        <a href="{{route('sa.home')}}">Application</a> 
            > 
        <a href="{{route('sa.home')}}">  
            <span>Sale Records</span> 
        </a>
    </div>
@endsection

@section('content')
    <script>
        const st_array = [];
    </script>

    <section>
        <div class="sale_record_management">

            <div class="data___and___price">
                <h1 style="">Sale Records</h1>
                <div class="date_price">
                    <div class="date">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 488.152 488.152" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66    c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66    c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66    c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653    c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653    c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653    c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142    h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05    C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82    c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588    c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921    h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128    C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z" fill="#ffffff" data-original="#000000" style=""/>
                                    <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162    c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z" fill="#ffffff" data-original="#000000" style=""/>
                                </g>
                            </g>
                        </svg>

                        <h3 id="tdyDate"></h3>

                    </div>
                    <div class="price">
                        <svg fill="#ffffff" width="30" height="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M416,288.01c-17.664,0-32,14.336-32,32s14.336,32,32,32h96v-64H416z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M416,256.01h64v-80c0-8.96-7.04-16-16-16h-32v-48c0-8.96-7.04-16-16-16h-38.08L350.4,40.97c-4.16-8-13.76-11.2-21.44-7.36
                                        l-37.12,18.56l-5.44-11.2c-4.16-8-13.76-11.2-21.44-7.36l-124.8,62.4H48c-26.56,0-48,21.44-48,48v288c0,26.56,21.44,48,48,48h416
                                        c8.96,0,16-7.04,16-16v-80h-64c-35.2,0-64-28.8-64-64C352,284.81,380.8,256.01,416,256.01z M400,128.01v12.16l-6.08-12.16H400z
                                        M32.96,149.45c-0.64-1.6-0.96-3.52-0.96-5.44c0-8.96,7.04-16,16-16h28.16L32.96,149.45z M83.84,160.01l181.12-90.56l45.12,90.56
                                        H83.84z M345.92,160.01l-39.68-79.36l22.72-11.2l45.12,90.56H345.92z"/>
                                </g>
                            </g>
                        </svg>
    
                        <h3 class="" id="total">{{$all_total}}</h3>
                        <script>
                            let total = document.getElementById("total")
                            let dollarUSLocale = Intl.NumberFormat('en-US');
                            price = dollarUSLocale.format(total.innerHTML)
                            total.innerHTML = price + " " + "MMK"
                        </script>
                    </div>
                </div>
            </div>

            <div class="sale_records">
                <!-- Print  -->
                <div class="table_panel">

                    <div class="whole_table_container print-table">
                        <div class="table-title print-label">
                            <p class="print-label">
                                Print
                            </p>

                            <svg id="Layer_1" enable-background="new 0 0 510 510" height="50" viewBox="0 0 510 510" width="50" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_2324_"><path id="XMLID_2403_" d="m420.289 29.452c-2.301-10.236-4.278-19.033-6.578-29.27-48.701 11.336-256.211 59.635-256.211 59.635h-105.993s-48.012 80.021-51.507 85.845v79.155h420c0-21.368 0-83.587 0-105-76.515 0-140.179 0-217.5 0-4.346-5.794-22.53-30.04-25.333-33.777 8.974-2.089 235.152-54.733 243.122-56.588zm-90.289 135.365h30v30c-10.492 0-19.508 0-30 0 0-10.492 0-19.507 0-30zm-60 0h30v30c-10.492 0-19.508 0-30 0 0-10.492 0-19.507 0-30z"/><path id="XMLID_2463_" d="m300 314.817h-180v-60h-120v105h420c0-28.278 0-88.527 0-105h-120zm-210 15c-10.492 0-19.508 0-30 0 0-10.492 0-19.508 0-30h30zm240-30h30v30c-10.492 0-19.508 0-30 0 0 0 0-19.507 0-30z"/><path id="XMLID_2478_" d="m150 254.817h120v30h-120z"/><path id="XMLID_2509_" d="m300 449.817h-180v-60h-120v120h420c0-24.866 0-94.76 0-120h-120zm-210 0c-10.492 0-19.508 0-30 0 0-10.492 0-19.508 0-30h30zm240-30h30v30c-10.492 0-19.508 0-30 0 0 0 0-19.507 0-30z"/><path id="XMLID_2511_" d="m150 389.817h120v30h-120z"/><path id="XMLID_2512_" d="m450 254.817v54.27l60-30c0-14.748 0-15.657 0-24.27z"/><path id="XMLID_2513_" d="m450 444.088c20.002-10.001 39.958-19.979 60-30 0-14.748 0-15.657 0-24.27h-60z"/></g></svg>
                        </div>
                        <!-- End of table-title -->
                    </div>

                    <div>
                        <table width="100%">
                            <thead class="print-header">
                                <tr>
                                    <th>Print</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                @foreach ($Print_Infos as $pifs)
                                    <tr class="row100 body" >
                                        <!-- <td class="cell100 column1">{{$pifs->date}}</td> -->
                                        <td contenteditable="true" class="cell100 column2">{{$pifs->items}}</td>
                                        <td contenteditable="true" class="cell100 column3">{{$pifs->amount}}</td>
                                        <td contenteditable="true" class="cell100 column3 formatMe">{{$pifs->price}}</td>
                                        <td>
                                            <a href="{{route('sa.print.toEdit',['id'=>$pifs->pid])}}">
                                                <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sa.print.toDelete',['id'=>$pifs->pid])}}">
                                                <img onclick="removeStationaryData" class="" src="../images/remove.svg" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <svg style="" class="insert-submit" id="print-insert-submit" onclick="rotationAni('print-insert-form',id)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" fill="#293241" data-original="#000000" style="" class=""/>
                                                </g>
                                            </g>
                                        </svg>
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>

                    <form style="" id="print-insert-form" class="hide table-input animate__animated animate__fadeInUp" action="{{route('sa.print.toInsert')}}" method="POST">
                        @csrf
                        @method('POST')
                        <input  class="tdy_date" type="hidden" id="" name="date">

                        <label class="input">   
                            <input name="items" class="input__field search_input" type="text" placeholder=" " value=""  id="" autocomplete="off" onkeyup="filterMe()"/>
                            <span class="input__label">Items</span>
                            <div class="dropbox" id="items_dropbox">
                                <ul id="list">
                                    @foreach($stat_names as $sn)
                                        <script>
                                            st_array.push('{{$sn}}')
                                        </script>
                                        <li><a>{{$sn}}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </label>
                        
                        <label class="input">   
                            <input id="amount" onkeyup="formatNumber(id)" name="amount" class="input__field" type="text" placeholder=" " value="" />
                            <span class="input__label">Amount</span>
                        </label>

                        <label class="input">   
                            <input id="print_price" name="price" onkeyup="formatNumber(id)" class="input__field" type="text" placeholder=" " value="" />
                            <span class="input__label">Price</span>
                        </label>

                        <button type="submit" class="print-header">Submit</button>
                        <div class="">
                                <p id="stNotFound" class="hide"><span id="stationaryName"></span> is not found in Stationary Table</p>
                        </div>
                    </form>

                </div>
                <!-- End of table_panel -->

                <!-- Stationary  -->
                <div class="table_panel">
                    
                    <div class="whole_table_container">
                        <div class="table-title st-label">
                            <p class="">
                                Stationary
                            </p>
                            <svg id="Layer_5" enable-background="new 0 0 64 64" height="50" viewBox="0 0 64 64" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m59 6c-1.105 0-2 .895-2 2v-1c0-2.206-1.794-4-4-4s-4 1.794-4 4v8h8v1c0 1.105.895 2 2 2s2-.895 2-2v-8c0-1.105-.895-2-2-2z"/><path d="m36.111 35.611h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -15.801 38.854)"/><path d="m30.611 41.111h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -21.301 36.576)"/><path d="m25.111 46.611h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -26.801 34.297)"/><path d="m25.111 35.611h5.778v5.779h-5.778z" transform="matrix(.707 -.707 .707 .707 -19.023 31.076)"/><path d="m47.111 46.611h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -20.357 49.854)"/><path d="m47.111 35.611h5.779v5.779h-5.779z" transform="matrix(.707 -.707 .707 .707 -12.579 46.632)"/><path d="m36.111 46.611h5.778v5.779h-5.778z" transform="matrix(.707 -.707 .707 .707 -23.579 42.075)"/><path d="m41.611 41.111h5.778v5.779h-5.778z" transform="matrix(.707 -.707 .707 .707 -18.079 44.354)"/><path d="m19 49.382v-2.764c0-.764.424-1.449 1.106-1.789l.894-.447v-8.382c0-.552-.449-1-1-1h-16c-.551 0-1 .448-1 1v8.382l.895.447c.681.34 1.105 1.025 1.105 1.789v2.764c0 .764-.424 1.449-1.106 1.789l-.894.447v8.382c0 .552.449 1 1 1h3v-24h8v10.184c1.161.414 2 1.514 2 2.816s-.839 2.402-2 2.816v8.184h5c.551 0 1-.448 1-1v-8.382l-.895-.447c-.681-.34-1.105-1.025-1.105-1.789z"/><path d="m49 17h8v4h-8z"/><path d="m39 11h4v10h-4z"/><path d="m38.576 3.208c-.081-.13-.222-.208-.376-.208h-.4c-.154 0-.294.078-.375.208l-3.621 5.792h8.391z"/><path d="m33 11h4v10h-4z"/><path d="m21 11h6v10h-6z"/><path d="m9 61h4v-8.184c-1.161-.414-2-1.514-2-2.816s.839-2.402 2-2.816v-8.184h-4z"/><path d="m24.415 3.288c-.129-.346-.7-.345-.829-.001l-2.143 5.713h5.114z"/><path d="m33.414 29-4 4 4.086 4.086 4.086-4.086-4-4z"/><path d="m51.414 44 6.197 6.197.48-7.692-2.591-2.591z"/><path d="m36.414 59h5.172l-2.586-2.586z"/><path d="m51.414 55 3.979 3.979c.956-.103 1.723-.875 1.784-1.854l.267-4.267-1.944-1.944z"/><path d="m44.5 50.914-4.086 4.086 4 4h.172l4-4z"/><path d="m47.414 59h5.172l-2.586-2.586z"/><path d="m60 23h-42c-.551 0-1 .448-1 1v2c0 .552.449 1 1 1h42c.551 0 1-.448 1-1v-2c0-.552-.449-1-1-1z"/><path d="m51.414 33 4.086 4.086 3.125-3.125.311-4.961h-3.522z"/><path d="m58.258 39.843.179-2.865-1.523 1.522z"/><path d="m25.414 59h5.172l-2.586-2.586z"/><path d="m28 31.586 2.586-2.586h-5.172z"/><path d="m39 31.586 2.586-2.586h-5.172z"/><path d="m44.414 29-4 4 4.086 4.086 4.086-4.086-4-4z"/><path d="m19.064 29 .25 4h.686c1.654 0 3 1.346 3 3v.586l3.586-3.586-4-4z"/><path d="m23 51.414v7.172l3.586-3.586z"/><path d="m23 40.414v5.204l-2 1v2.764l.136.068 5.45-5.45z"/><path d="m47.414 29 2.586 2.586 2.586-2.586z"/><path d="m33.5 50.914-4.086 4.086 4 4h.172l4-4z"/></g></svg> 
                            
                        </div>
                    </div>
                    
                    <div>
                        <table width="100%">
                            <thead class='st-header'>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                @foreach ($St_Infos as $stifs)
                                    <tr class="row100 body">
                                        <td class="cell100 column1">{{$stifs->name}}</td>
                                        <td class="cell100 column2">{{$stifs->amount}}</td>
                                        <td class="cell100 column3 formatMe">{{$stifs->price}}</td>
                                        <td>
                                            <a href="{{route('sa.st.toEdit',['id'=>$stifs->ssrid])}}">
                                                <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sa.st.toDelete',['id'=>$stifs->ssrid])}}">
                                                <img onclick="removeStationaryData" class="" src="../images/remove.svg" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                        <svg id="stationary-insert-submit" onclick="rotationAni('stationary-insert-form',id)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" fill="#ee6c4d" data-original="#000000" style=""/>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <form style="" id="stationary-insert-form" class="hide table-input animate__animated animate__fadeInUp" action="{{route('sa.st.toInsert')}}" method="POST">
                        @csrf
                        @method('POST')
                        <input  class="tdy_date" type="hidden" id="" name="date" required>
                        
                        <label class="input">   
                            <input name="name" id="Instorage_st" class="input__field search_input" type="text" placeholder=" " value="" autocomplete="off" onkeyup="filterMe()" onclick="search_stationary()"/>
                            <span class="input__label">Name</span>
                            <div class="dropbox hide" id="name_dropbox">
                                <ul id="list">
                                    @foreach($stat_names as $sn)
                                        <script>
                                            st_array.push('{{$sn}}')
                                        </script>
                                        <li><a onclick="getItem('{{$sn}}','Instorage_st')">{{$sn}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </label>
                        
                        <label class="input">   
                            <input name="amount" class="input__field" type="number" placeholder=" " value="" />
                            <span class="input__label">Amount</span>
                        </label>

                        <label class="input">   
                            <input id="st_price" onkeyup="formatNumber(id)" name="price" class="input__field" type="text" placeholder=" " value=""/>
                            <span class="input__label">Price</span>

                        </label>

                        <button class="st-header" type="submit" id="search_submit">Submit</button>
                        <div class="">
                                <p id="stNotFound" class="hide"><span id="stationaryName"></span> is not found in Stationary Table</p>
                        </div>
                    </form>
                </div>
            </div>

                <div class="display_total">
                    <div class="wallet print-header">
                        <svg fill="#ffffff" width="40" height="40" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                    
                                    </g>
                                    </g>
                                    <g>
                                    <g>
                                        <path d="M416,256.01h64v-80c0-8.96-7.04-16-16-16h-32v-48c0-8.96-7.04-16-16-16h-38.08L350.4,40.97c-4.16-8-13.76-11.2-21.44-7.36
                                            l-37.12,18.56l-5.44-11.2c-4.16-8-13.76-11.2-21.44-7.36l-124.8,62.4H48c-26.56,0-48,21.44-48,48v288c0,26.56,21.44,48,48,48h416
                                            c8.96,0,16-7.04,16-16v-80h-64c-35.2,0-64-28.8-64-64C352,284.81,380.8,256.01,416,256.01z M400,128.01v12.16l-6.08-12.16H400z
                                            M32.96,149.45c-0.64-1.6-0.96-3.52-0.96-5.44c0-8.96,7.04-16,16-16h28.16L32.96,149.45z M83.84,160.01l181.12-90.56l45.12,90.56
                                            H83.84z M345.92,160.01l-39.68-79.36l22.72-11.2l45.12,90.56H345.92z"/>
                                    </g>
                                </g>
                        </svg>
                        <h3 class="formatMe">{{$ptp}}</h3><h3>MMK</h3>
                    </div>
                    <div class="wallet st-header">
                        <svg fill="#ffffff" width="40" height="40" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                    
                                    </g>
                                    </g>
                                    <g>
                                    <g>
                                        <path d="M416,256.01h64v-80c0-8.96-7.04-16-16-16h-32v-48c0-8.96-7.04-16-16-16h-38.08L350.4,40.97c-4.16-8-13.76-11.2-21.44-7.36
                                            l-37.12,18.56l-5.44-11.2c-4.16-8-13.76-11.2-21.44-7.36l-124.8,62.4H48c-26.56,0-48,21.44-48,48v288c0,26.56,21.44,48,48,48h416
                                            c8.96,0,16-7.04,16-16v-80h-64c-35.2,0-64-28.8-64-64C352,284.81,380.8,256.01,416,256.01z M400,128.01v12.16l-6.08-12.16H400z
                                            M32.96,149.45c-0.64-1.6-0.96-3.52-0.96-5.44c0-8.96,7.04-16,16-16h28.16L32.96,149.45z M83.84,160.01l181.12-90.56l45.12,90.56
                                            H83.84z M345.92,160.01l-39.68-79.36l22.72-11.2l45.12,90.56H345.92z"/>
                                    </g>
                                </g>
                        </svg>
                        <h3 class="formatMe">{{$stp}}</h3><h3>MMK</h3>
                    </div>
                </div>

            <div class="sale_records">

                <div class="table_panel">
                    <div class="whole_table_container">
                        <div class="table-title com-label">
                            <p class="">
                                Computer
                            </p>
                            <svg width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 204.232 204.232" style="enable-background:new 0 0 204.232 204.232;" xml:space="preserve">
                                <path d="M4.595,181.71h195.021c2.538,0,4.595-2.057,4.595-4.595v-4.136c0.003-0.069,0.021-0.133,0.021-0.203
                                c0-0.75-0.18-1.458-0.499-2.083l-19.942-50.2V27.116c0-2.538-2.057-4.595-4.595-4.595H25.016c-2.538,0-4.595,2.057-4.595,4.595
                                v93.377L0.324,171.08c-0.09,0.226-0.153,0.457-0.206,0.69c-0.013,0.059-0.023,0.118-0.034,0.178c-0.05,0.268-0.081,0.539-0.082,0.81
                                c0,0.006-0.002,0.012-0.002,0.018v4.339C0,179.653,2.057,181.71,4.595,181.71z M82.343,166.881l4.204-13h31.117l4.204,13H82.343z
                                M33.93,34.244h136.352v80H33.93V34.244z"/>
                            </svg>

                        </div>
                    </div>

                    <table width="100%">
                        <thead class="com-header">
                            <tr>
                                <th>Task</th>
                                <th>Amount</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($Com_Infos as $cinfs)
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{$cinfs->task}}</td>
                                    <td class="cell100 column2">{{$cinfs->amount}}</td>
                                    <td class="cell100 column3 formatMe">{{$cinfs->price}}</td>
                                    <td>
                                        <a href="{{route('sa.com.toEdit',['id'=>$cinfs->csrid])}}">
                                            <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                        </a>

                                        <a href="{{route('sa.com.toDelete',['id'=>$cinfs->csrid])}}">
                                            <img onclick="removeStationaryData" class="" src="../images/remove.svg" alt="" width="23" height="20">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td>
                                <svg id="com-insert-submit" onclick="rotationAni('com-insert-form',id)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" fill="#284b63" data-original="#000000" style=""/>
                                        </g>
                                    </g>
                                    </g>
                                </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <form style="" id="com-insert-form" class="hide table-input animate__animated animate__fadeInUp" action="{{route('sa.print.toInsert')}}" method="POST">
                        @csrf
                        @method('POST')
                        <input class="tdy_date" type="hidden" id="" name="date">
                        <label class="input">   
                            <input name="task" class="input__field" type="text" placeholder=" " value="" />
                            <span class="input__label">Task</span>
                        </label>
                        
                        <label class="input">   
                            <input name="price" class="input__field" type="text" placeholder=" " value="" />
                            <span class="input__label">Price</span>
                        </label>

                        <label class="input">   
                            <input name="amount" class="input__field" type="text" placeholder=" " value="" />
                            <span class="input__label">Amount</span>
                        </label>

                        <button class="com-header" type="submit">Submit</button>
                    </form>
                    
                </div>
                
                <div class="table_panel">
                    <div class="whole_table_container">
                        <div class="table-title pb-label">
                            <p class="">Phone Bill</p>
                            <svg id="Layer_1" enable-background="new 0 0 480 480" height="50" viewBox="0 0 480 480" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m320.015 59c-57.9 0-105 47.1-105 105s47.1 105 105 105 105-47.1 105-105-47.1-105-105-105zm-2.386 95.873 9.544 2.982c10.074 3.148 16.842 12.354 16.842 22.907v3.238c0 11.519-8.159 21.166-19 23.473v2.527c0 4.418-3.582 8-8 8s-8-3.582-8-8v-4.68c-7.714-3.996-13-12.05-13-21.32 0-4.418 3.582-8 8-8s8 3.582 8 8c0 4.411 3.589 8 8 8s8-3.589 8-8v-3.237c0-3.518-2.256-6.586-5.614-7.636l-9.544-2.982c-10.074-3.148-16.842-12.354-16.842-22.907v-3.238c0-10.429 6.689-19.321 16-22.624v-3.376c0-4.418 3.582-8 8-8s8 3.582 8 8v3.376c9.311 3.303 16 12.195 16 22.624 0 4.418-3.582 8-8 8s-8-3.582-8-8c0-4.411-3.589-8-8-8s-8 3.589-8 8v3.237c0 3.518 2.256 6.586 5.614 7.636zm76.112 309.126c-21.934-.148-39.726-18.03-39.726-39.999v-133.634c0-5.059-4.642-8.864-9.595-7.832-74.27 15.484-145.405-41.592-145.405-118.534 0-76.921 71.112-134.025 145.405-118.535 4.953 1.033 9.595-2.773 9.595-7.832v-5.633c0-17.673-14.327-32-32-32h-260c-17.673 0-32 14.327-32 32v392c0 30.928 25.072 56 56 56h308c4.632 0 8.341-3.932 7.975-8.641-.327-4.209-4.027-7.331-8.249-7.36zm-285.726-346.999h68c4.418 0 8 3.582 8 8s-3.582 8-8 8h-68c-4.418 0-8-3.582-8-8s3.582-8 8-8zm0 90h68c4.418 0 8 3.582 8 8s-3.582 8-8 8h-68c-4.418 0-8-3.582-8-8s3.582-8 8-8zm168 190h-168c-4.418 0-8-3.582-8-8s3.582-8 8-8h168c4.418 0 8 3.582 8 8s-3.582 8-8 8zm0-84h-168c-4.418 0-8-3.582-8-8s3.582-8 8-8h168c4.418 0 8 3.582 8 8s-3.582 8-8 8zm173.97 98.98c.03 22.11-17.89 40.03-39.97 40.03-22.065 0-39.97-17.88-39.97-39.97 0-73.893-.053-102.683-.005-114.082.019-4.405 3.595-7.958 8-7.958h39.975c16.6 0 30.25 12.64 31.84 28.82z"/>
                            </svg>             
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <thead class="pb-header">
                                <tr>
                                    <th>Operator</th>
                                    <th>Bill</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($PB_Infos as $pbifs)
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{$pbifs->operator}}</td>
                                    <td class="cell100 column2">{{$pbifs->bill}}</td>
                                    <td class="cell100 column3 formatMe">{{$pbifs->amount}}</td>
                                    <td>
                                        <a href="{{route('sa.ph.toEdit',['id'=>$pbifs->pbsrid])}}">
                                            <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                        </a>

                                        <a href="{{route('sa.ph.toDelete',['id'=>$pbifs->pbsrid])}}">
                                            <img onclick="removeStationaryData" class="" src="../images/remove.svg" alt="" width="23" height="20">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>
                                    <svg id="pb-insert-submit" onclick="rotationAni('pb-insert-form',id)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" fill="#3c6e71" data-original="#000000" style="" class=""/>
                                        </g>
                                        
                                    </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <form style="" id="pb-insert-form" class="hide table-input animate__animated animate__fadeInUp" action="{{route('sa.ph.toInsert')}}" method="POST">
                        @csrf
                        @method('POST')
                        <input class="tdy_date" type="hidden" id="" name="date">
                        <label class="input">   
                            <input name="operator" class="input__field" type="text" placeholder=" " value="" />
                            <span class="input__label">Operator</span>
                        </label>
                        
                        <label class="input">   
                            <input name="bill" class="input__field" type="number" placeholder=" " value="" />
                            <span class="input__label">Bill</span>
                        </label>

                        <label class="input">   
                            <input name="amount" class="input__field" type="number" placeholder=" " value="" />
                            <span class="input__label">Amount</span>
                        </label>

                        <button class="pb-header" type="submit">Submit</button>
                    </form>        
                </div>
            </div>

                <div class="display_total">
                    <div class="wallet com-header">
                        <svg fill="#ffffff" width="40" height="40" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                    
                                    </g>
                                    </g>
                                    <g>
                                    <g>
                                        <path d="M416,256.01h64v-80c0-8.96-7.04-16-16-16h-32v-48c0-8.96-7.04-16-16-16h-38.08L350.4,40.97c-4.16-8-13.76-11.2-21.44-7.36
                                            l-37.12,18.56l-5.44-11.2c-4.16-8-13.76-11.2-21.44-7.36l-124.8,62.4H48c-26.56,0-48,21.44-48,48v288c0,26.56,21.44,48,48,48h416
                                            c8.96,0,16-7.04,16-16v-80h-64c-35.2,0-64-28.8-64-64C352,284.81,380.8,256.01,416,256.01z M400,128.01v12.16l-6.08-12.16H400z
                                            M32.96,149.45c-0.64-1.6-0.96-3.52-0.96-5.44c0-8.96,7.04-16,16-16h28.16L32.96,149.45z M83.84,160.01l181.12-90.56l45.12,90.56
                                            H83.84z M345.92,160.01l-39.68-79.36l22.72-11.2l45.12,90.56H345.92z"/>
                                    </g>
                                </g>
                        </svg>
                        <h3 class="formatMe">{{$ctp}}</h3><h3>MMK</h3>
                    </div>
                    <div class="wallet pb-header">
                        <svg fill="#ffffff" width="40" height="40" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                    
                                    </g>
                                    </g>
                                    <g>
                                    <g>
                                        <path d="M416,256.01h64v-80c0-8.96-7.04-16-16-16h-32v-48c0-8.96-7.04-16-16-16h-38.08L350.4,40.97c-4.16-8-13.76-11.2-21.44-7.36
                                            l-37.12,18.56l-5.44-11.2c-4.16-8-13.76-11.2-21.44-7.36l-124.8,62.4H48c-26.56,0-48,21.44-48,48v288c0,26.56,21.44,48,48,48h416
                                            c8.96,0,16-7.04,16-16v-80h-64c-35.2,0-64-28.8-64-64C352,284.81,380.8,256.01,416,256.01z M400,128.01v12.16l-6.08-12.16H400z
                                            M32.96,149.45c-0.64-1.6-0.96-3.52-0.96-5.44c0-8.96,7.04-16,16-16h28.16L32.96,149.45z M83.84,160.01l181.12-90.56l45.12,90.56
                                            H83.84z M345.92,160.01l-39.68-79.36l22.72-11.2l45.12,90.56H345.92z"/>
                                    </g>
                                </g>
                        </svg>
                        <h3>{{$pbtp}} MMK</h3>
                    </div>
                </div>
        </div>

<input class="hide" type="text" id="hello">
<button onclick="dd()">ddd</button>
    </section>
    <!-- end Show Info Section -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </ul>
            </div>
        @endif

    <script>


        // When ready.
    </script>

@endsection



