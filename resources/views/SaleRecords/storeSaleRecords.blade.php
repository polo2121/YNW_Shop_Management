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

            <div>
                <h1>Sale Records</h1>
                <div class="date_price">
                    <div class="date">
                    
                    </div>
                    <div class="price">

                    </div>
                </div>
            </div>

            <div class="sale_records">
                <!-- Print  -->
                <div class="table_panel">
                    <div class="whole_table_container">
                        <div class="table-title print-label">
                            <p class="print-label">
                                Print
                            </p>

                            <svg id="Layer_1" enable-background="new 0 0 510 510" height="50" viewBox="0 0 510 510" width="50" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_2324_"><path id="XMLID_2403_" d="m420.289 29.452c-2.301-10.236-4.278-19.033-6.578-29.27-48.701 11.336-256.211 59.635-256.211 59.635h-105.993s-48.012 80.021-51.507 85.845v79.155h420c0-21.368 0-83.587 0-105-76.515 0-140.179 0-217.5 0-4.346-5.794-22.53-30.04-25.333-33.777 8.974-2.089 235.152-54.733 243.122-56.588zm-90.289 135.365h30v30c-10.492 0-19.508 0-30 0 0-10.492 0-19.507 0-30zm-60 0h30v30c-10.492 0-19.508 0-30 0 0-10.492 0-19.507 0-30z"/><path id="XMLID_2463_" d="m300 314.817h-180v-60h-120v105h420c0-28.278 0-88.527 0-105h-120zm-210 15c-10.492 0-19.508 0-30 0 0-10.492 0-19.508 0-30h30zm240-30h30v30c-10.492 0-19.508 0-30 0 0 0 0-19.507 0-30z"/><path id="XMLID_2478_" d="m150 254.817h120v30h-120z"/><path id="XMLID_2509_" d="m300 449.817h-180v-60h-120v120h420c0-24.866 0-94.76 0-120h-120zm-210 0c-10.492 0-19.508 0-30 0 0-10.492 0-19.508 0-30h30zm240-30h30v30c-10.492 0-19.508 0-30 0 0 0 0-19.507 0-30z"/><path id="XMLID_2511_" d="m150 389.817h120v30h-120z"/><path id="XMLID_2512_" d="m450 254.817v54.27l60-30c0-14.748 0-15.657 0-24.27z"/><path id="XMLID_2513_" d="m450 444.088c20.002-10.001 39.958-19.979 60-30 0-14.748 0-15.657 0-24.27h-60z"/></g></svg>
                        </div>

                            <div class="table-header print-header">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column1">Print</th>
                                            <th class="cell100 column2">Amount</th>
                                            <th class="cell100 column3">Price</th>
                                            <th class="cell100 column3">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="table-body print-body js-pscroll ps ps--active-y">
                                <table >
                                    <tbody>
                                        @foreach ($Print_Infos as $pifs)
                                        <tr class="row100 body">
                                            <!-- <td class="cell100 column1">{{$pifs->date}}</td> -->
                                            <td class="cell100 column2" contenteditable='true'>{{$pifs->paper}}</td>
                                            <td class="cell100 column3">{{$pifs->amount}}</td>
                                            <td class="cell100 column3">{{$pifs->price}}</td>
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
                                        				
                                    </tbody>
                                    

                                </table>
                                <form class="table-input">
                                    <label class="input">   
                                        <input name="date" class="input__field" type="text" placeholder=" " value="" />
                                        <span class="input__label">Print</span>
                                    </label>
                                    
                                    <label class="input">   
                                        <input name="date" class="input__field" type="number" placeholder=" " value="" />
                                        <span class="input__label">Price</span>
                                    </label>

                                    <label class="input">   
                                        <input name="date" class="input__field" type="number" placeholder=" " value="" />
                                        <span class="input__label">Amount</span>
                                    </label>

                                    <button type="submit">Submit</button>
                                </form>
                                
                            </div>
                    </div>
                </div>

                <!-- Stationary  -->
                <div class="table_panel">
                    
                    <div class="whole_table_container">
                        <div class="table-title st-label">
                            <p class="">
                                Stationary
                            </p>
                            <svg id="Layer_5" enable-background="new 0 0 64 64" height="50" viewBox="0 0 64 64" width="50" xmlns="http://www.w3.org/2000/svg"><g><path d="m59 6c-1.105 0-2 .895-2 2v-1c0-2.206-1.794-4-4-4s-4 1.794-4 4v8h8v1c0 1.105.895 2 2 2s2-.895 2-2v-8c0-1.105-.895-2-2-2z"/><path d="m36.111 35.611h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -15.801 38.854)"/><path d="m30.611 41.111h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -21.301 36.576)"/><path d="m25.111 46.611h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -26.801 34.297)"/><path d="m25.111 35.611h5.778v5.779h-5.778z" transform="matrix(.707 -.707 .707 .707 -19.023 31.076)"/><path d="m47.111 46.611h5.778v5.778h-5.778z" transform="matrix(.707 -.707 .707 .707 -20.357 49.854)"/><path d="m47.111 35.611h5.779v5.779h-5.779z" transform="matrix(.707 -.707 .707 .707 -12.579 46.632)"/><path d="m36.111 46.611h5.778v5.779h-5.778z" transform="matrix(.707 -.707 .707 .707 -23.579 42.075)"/><path d="m41.611 41.111h5.778v5.779h-5.778z" transform="matrix(.707 -.707 .707 .707 -18.079 44.354)"/><path d="m19 49.382v-2.764c0-.764.424-1.449 1.106-1.789l.894-.447v-8.382c0-.552-.449-1-1-1h-16c-.551 0-1 .448-1 1v8.382l.895.447c.681.34 1.105 1.025 1.105 1.789v2.764c0 .764-.424 1.449-1.106 1.789l-.894.447v8.382c0 .552.449 1 1 1h3v-24h8v10.184c1.161.414 2 1.514 2 2.816s-.839 2.402-2 2.816v8.184h5c.551 0 1-.448 1-1v-8.382l-.895-.447c-.681-.34-1.105-1.025-1.105-1.789z"/><path d="m49 17h8v4h-8z"/><path d="m39 11h4v10h-4z"/><path d="m38.576 3.208c-.081-.13-.222-.208-.376-.208h-.4c-.154 0-.294.078-.375.208l-3.621 5.792h8.391z"/><path d="m33 11h4v10h-4z"/><path d="m21 11h6v10h-6z"/><path d="m9 61h4v-8.184c-1.161-.414-2-1.514-2-2.816s.839-2.402 2-2.816v-8.184h-4z"/><path d="m24.415 3.288c-.129-.346-.7-.345-.829-.001l-2.143 5.713h5.114z"/><path d="m33.414 29-4 4 4.086 4.086 4.086-4.086-4-4z"/><path d="m51.414 44 6.197 6.197.48-7.692-2.591-2.591z"/><path d="m36.414 59h5.172l-2.586-2.586z"/><path d="m51.414 55 3.979 3.979c.956-.103 1.723-.875 1.784-1.854l.267-4.267-1.944-1.944z"/><path d="m44.5 50.914-4.086 4.086 4 4h.172l4-4z"/><path d="m47.414 59h5.172l-2.586-2.586z"/><path d="m60 23h-42c-.551 0-1 .448-1 1v2c0 .552.449 1 1 1h42c.551 0 1-.448 1-1v-2c0-.552-.449-1-1-1z"/><path d="m51.414 33 4.086 4.086 3.125-3.125.311-4.961h-3.522z"/><path d="m58.258 39.843.179-2.865-1.523 1.522z"/><path d="m25.414 59h5.172l-2.586-2.586z"/><path d="m28 31.586 2.586-2.586h-5.172z"/><path d="m39 31.586 2.586-2.586h-5.172z"/><path d="m44.414 29-4 4 4.086 4.086 4.086-4.086-4-4z"/><path d="m19.064 29 .25 4h.686c1.654 0 3 1.346 3 3v.586l3.586-3.586-4-4z"/><path d="m23 51.414v7.172l3.586-3.586z"/><path d="m23 40.414v5.204l-2 1v2.764l.136.068 5.45-5.45z"/><path d="m47.414 29 2.586 2.586 2.586-2.586z"/><path d="m33.5 50.914-4.086 4.086 4 4h.172l4-4z"/></g></svg> 
                            
                        </div>

                        <div class="table-header st-header">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">Name</th>
                                        <th class="cell100 column2">Amount</th>
                                        <th class="cell100 column3">Price</th>
                                        <th class="cell100 column3">Action</th>
                                                    
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table-body st-body js-pscroll ps ps--active-y">
                            <table >
                                <tbody>
                                    @foreach ($St_Infos as $stifs)
                                    <tr class="row100 body">
                                        <td class="cell100 column1">{{$stifs->name}}</td>
                                        <td class="cell100 column2">{{$stifs->amount}}</td>
                                        <td class="cell100 column3">{{$stifs->price}}</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Computer  -->
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

                        <div class="table-header com-header">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">Print</th>
                                        <th class="cell100 column2">Amount</th>
                                        <th class="cell100 column3">Price</th>
                                        <th class="cell100 column3">Action</th>
                                        
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table-body com-body js-pscroll ps ps--active-y">
                            <table >
                                <tbody>
                                    @foreach($Com_Infos as $cinfs)
                                    <tr class="row100 body">
                                        <td class="cell100 column1">{{$cinfs->task}}</td>
                                        <td class="cell100 column2">{{$cinfs->amount}}</td>
                                        <td class="cell100 column3">{{$cinfs->price}}</td>
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
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <!-- Phone Bill  -->
                <div class="table_panel">
                    <div class="whole_table_container">
                        <div class="table-title pb-label">
                            <p class="">Phone Bill</p>
                            <svg id="Layer_1" enable-background="new 0 0 480 480" height="50" viewBox="0 0 480 480" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m320.015 59c-57.9 0-105 47.1-105 105s47.1 105 105 105 105-47.1 105-105-47.1-105-105-105zm-2.386 95.873 9.544 2.982c10.074 3.148 16.842 12.354 16.842 22.907v3.238c0 11.519-8.159 21.166-19 23.473v2.527c0 4.418-3.582 8-8 8s-8-3.582-8-8v-4.68c-7.714-3.996-13-12.05-13-21.32 0-4.418 3.582-8 8-8s8 3.582 8 8c0 4.411 3.589 8 8 8s8-3.589 8-8v-3.237c0-3.518-2.256-6.586-5.614-7.636l-9.544-2.982c-10.074-3.148-16.842-12.354-16.842-22.907v-3.238c0-10.429 6.689-19.321 16-22.624v-3.376c0-4.418 3.582-8 8-8s8 3.582 8 8v3.376c9.311 3.303 16 12.195 16 22.624 0 4.418-3.582 8-8 8s-8-3.582-8-8c0-4.411-3.589-8-8-8s-8 3.589-8 8v3.237c0 3.518 2.256 6.586 5.614 7.636zm76.112 309.126c-21.934-.148-39.726-18.03-39.726-39.999v-133.634c0-5.059-4.642-8.864-9.595-7.832-74.27 15.484-145.405-41.592-145.405-118.534 0-76.921 71.112-134.025 145.405-118.535 4.953 1.033 9.595-2.773 9.595-7.832v-5.633c0-17.673-14.327-32-32-32h-260c-17.673 0-32 14.327-32 32v392c0 30.928 25.072 56 56 56h308c4.632 0 8.341-3.932 7.975-8.641-.327-4.209-4.027-7.331-8.249-7.36zm-285.726-346.999h68c4.418 0 8 3.582 8 8s-3.582 8-8 8h-68c-4.418 0-8-3.582-8-8s3.582-8 8-8zm0 90h68c4.418 0 8 3.582 8 8s-3.582 8-8 8h-68c-4.418 0-8-3.582-8-8s3.582-8 8-8zm168 190h-168c-4.418 0-8-3.582-8-8s3.582-8 8-8h168c4.418 0 8 3.582 8 8s-3.582 8-8 8zm0-84h-168c-4.418 0-8-3.582-8-8s3.582-8 8-8h168c4.418 0 8 3.582 8 8s-3.582 8-8 8zm173.97 98.98c.03 22.11-17.89 40.03-39.97 40.03-22.065 0-39.97-17.88-39.97-39.97 0-73.893-.053-102.683-.005-114.082.019-4.405 3.595-7.958 8-7.958h39.975c16.6 0 30.25 12.64 31.84 28.82z"/></svg>                    </div>

                        <div class="table-header pb-header">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">Print</th>
                                        <th class="cell100 column2">Amount</th>
                                        <th class="cell100 column3">Price</th>
                                        <th class="cell100 column3">Action</th>
                                
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table-body ph-body js-pscroll ps ps--active-y">
                            <table >
                                <tbody>
                                    @foreach($PB_Infos as $pbifs)
                                    <tr class="row100 body">
                                        <td class="cell100 column1">{{$pbifs->operator}}</td>
                                        <td class="cell100 column2">{{$pbifs->bill}}</td>
                                        <td class="cell100 column3">{{$pbifs->amount}}</td>
                                        <td>
                                            <a href="{{route('sa.ph.toEdit',['id'=>$pbifs->pbsrid])}}">
                                                <img class="svgHover" src="../images/edit.svg" alt="" width="23" height="20">
                                            </a>

                                            <a href="{{route('sa.ph.toDelete',['id'=>$pbifs->pbsrid])}}">
                                                <img onclick="removeStationaryData" class="" src="../images/remove.svg" alt="" width="23" height="20">
                                            </a>
                                        </td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end Show Info Section -->


    <section>
        <h2 class="title">Sale Records Management</h2>
        <div class="form-entry-buttons">
            <div class="form-entry">
                <img class="form_entry_icon" src="../images/form_entry.svg" alt="" width="40" height="40">
                <label for="" class="form_name">စာရင်းသွင်းမည်</label>
            </div>
            <div class="btn-groups">
                <div class="btn-frame">
                    <div class="btn">  
                        <button type="button" id="print" class="" onclick="hide_show('print-form',id)">
                            Print
                        </button>
                    </div>
                    <div class="svg-group">
                        <svg width="45px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M392.533,0h-307.2C38.228,0.056,0.056,38.228,0,85.333v307.2c0.056,47.105,38.228,85.277,85.333,85.333h307.2
                                        c47.105-0.056,85.277-38.228,85.333-85.333v-307.2C477.81,38.228,439.638,0.056,392.533,0z M443.733,392.533
                                        c0,28.277-22.923,51.2-51.2,51.2h-307.2c-28.277,0-51.2-22.923-51.2-51.2v-307.2c0-28.277,22.923-51.2,51.2-51.2h307.2
                                        c28.277,0,51.2,22.923,51.2,51.2V392.533z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M324.267,221.867H256V153.6c0-9.426-7.641-17.067-17.067-17.067s-17.067,7.641-17.067,17.067v68.267H153.6
                                        c-9.426,0-17.067,7.641-17.067,17.067S144.174,256,153.6,256h68.267v68.267c0,9.426,7.641,17.067,17.067,17.067
                                        S256,333.692,256,324.267V256h68.267c9.426,0,17.067-7.641,17.067-17.067S333.692,221.867,324.267,221.867z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="btn">
                    <button type="button" id="computer"   class="" onclick="hide_show('computer-form',id)">
                        Computer
                    </button>
                </div>
                <div class="btn">
                    <button type="button" id="stationary" class="" onclick="hide_show('stationary-form',id)">
                        Stationary
                    </button>
                </div>
                <div class="btn">
                    <button type="button" id="phone" class="" onclick="hide_show('phone-bill-form',id)">
                        Phone Bill
                    </button>
                </div>

            </div>
        </div>

        <div class="form hide" id="print-form">   
            <!-- print Form -->
            <form class="tc animate__animated" action="{{route('sa.print.toInsert')}}" method="POST">
                @csrf
                @method('POST')
                
                <div class="form_header">
                    <i class="fas fa-times close " onclick="close_form('print-form')"></i>
                    <h3 for="" class="form_title ">
                        <i class="far fa-file-powerpoint fa-2x"></i>
                        Print Sale Record Form
                    </h3>
                </div>

                <div class="form_inputs_group">
                    <div class="input_groups">
                        <label for="" class="">
                            <i class="far fa-calendar-alt pd-r-8"></i>
                            Date
                        </label>
                        <input required class="" type="date" name="pdate" id="print-input" placeholder="e.g 20/12/2021" onChange="highlight_Input(name)">
                    </div>

                    <div class="input_groups">
                        <label for="" class=""><i class="far fa-file pd-r-8"></i>Paper</label>
                        <input required type="hidden" name="ptype" id="paper">
                        <div class="">
                            <button type="button" class="A4 paperBtn" id="A4"    onclick="getPaperType(id)">A4</button>
                            <button type="button" class="legal paperBtn" id="legal" onclick="getPaperType(id)">Legal</button>
                            <button type="button" class="A3 paperBtn" id="A3"    onclick="getPaperType(id)">A3</button>
                        </div>
                    </div>

                    <div class="input_groups">
                        <label for="" class=""><i class="fas fa-calculator pd-r-8"></i>
                            Amount
                        </label>
                        <input required class=""type="text" name="pamount" id="print-input" placeholder="e.g 12" onChange="highlight_Input(name,id)">
                    </div>

                    <div class="input_groups">
                        <label for="" class="">
                            <i class="fas fa-money-bill-wave pd-r-8"></i>
                            Price
                        </label>
                        <input required class="print-input" type="text" name="pprice" id="print-input" placeholder="e.g 1000 or 2000" onChange="highlight_Input(name)">
                    </div>

                    <div></div>

                    <div class="input_groups">
                        <button type="submit" class="">
                            <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                            Submit
                        </button>
                    </div>
                </div>

                
            </form>

        </div>

        <div class="form hide" id="computer-form">
            <!-- Stationary Form -->
            <form class="animate__animated" action="{{route('sa.com.toInsert')}}" method="POST" >
                @csrf
                @method('POST')
                
                <div class="form_header">
                    <h3 for="" class="form_title">
                        <i class="fas fa-desktop fa-lg"></i>
                        Computer Record Form
                    </h3>
                    <i class="fas fa-times close" onclick="close_form('computer-form')"></i>
                </div>

                <div class="form_inputs_group">             
                    <div class="input_groups mb2 tc" id="select_date">
                        <label for="" class="">Date</label>
                        <div>
                            <input class="" type="date" name="cmDate" value="Card" id="com-input" onChange="highlight_Input(name)">
                        </div>
                    </div>


                    <div class="input_groups mb2 ">
                        <label for="" class="">Task</label>
                        <div>
                            <input class="" type="text" placeholder="e.g. pencil/books" name="task" id="com-input" onChange="highlight_Input(name)">
                        </div>
                    </div>
                            
                    <div class="input_groups mb2 ">
                        <label for="" class="" >Amount</label>
                        <input class="" type="text" placeholder="e.g. 3" name="tkAmount" id="com-input"  onChange="highlight_Input(name)">
                    </div>

                    <div class="input_groups mb2 ">
                        <label for="" class="">Price</label>
                        <input class="" type="text" placeholder="e.g. 1000" name="cmPrice" id="com-input" onChange="highlight_Input(name)">
                    </div>

                    <div class="input_groups">

                        <button type="submit" class="">
                        <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                            Submit</button>
                    </div>

                </div>
            </form>

        </div>

        <div class="form hide" id="stationary-form">
            <!-- Copyer Form -->
            <form class="tc animate__animated" action="{{route('sa.st.toInsert')}}" method="POST">
                @csrf
                @method('POST')

                <div class="form_header">
                    <h3 for="" class="form_title">
                        <i class="fas fa-pencil-alt fa-lg"></i>
                        Stationary Record Form
                    </h3>
                    <i class="fas fa-times close" onclick="close_form('stationary-form')"></i>
                </div>
                
                <div class="form_inputs_group">
                    <div class="input_groups">
                        <label for="" class="">
                            <i class="far fa-calendar-alt pd-r-8"></i>
                            Date
                        </label>
                        <input class="" type="date" name="stDate" id="st-input" placeholder="e.g 20/12/2021" onChange="highlight_Input(name)">
                    </div>

                    <div class="input_groups" style="position:relative;">
                        <label for="" class=""><i class="fas fa-drafting-compass fa-lg pd-r-8"></i>Stationary</label>
                        <!-- <input class="" type="text" name="stName" id="stationary" placeholder="e.g 12" onChange=""> -->
                        <div class="">
                                <p id="stNotFound" class="hide"><span id="stationaryName"></span> is not found in Stationary Table</p>
                            </div>
                        <input type="text" id="search_input" name="stName" autocomplete="off" onkeyup="filterMe()" onclick="search_stationary()">
                        <div class="dropbox hide" id="ss">
                            <ul id="list">
                                @foreach($stat_names as $sn)
                                    <script>
                                        st_array.push('{{$sn}}')
                                    </script>
                                    <li><a onclick="getStName('{{$sn}}')">{{$sn}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="input_groups">
                        <label for="" class=""><i class="fas fa-calculator pd-r-8"></i>
                            Amount
                        </label>
                        <input class="" type="text" name="stAmount" id="st_amount" placeholder="e.g 12" onChange="highlight_Input(name)">
                    </div>

                    <div class="input_groups">
                        <label for="" class="">
                            <i class="fas fa-money-bill-wave pd-r-8"></i>
                            Price
                        </label>
                        <input class="" type="text" name="stPrice" id="st-input" placeholder="e.g 1000 or 2000" onChange="highlight_Input(name)">
                    </div>

                    <div></div>

                    <div class="input_groups form_submit blue">
                        <button type="submit" class="" id="search_submit">
                            <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                            Submit
                        </button>
                    </div>
                </div>

                
            </form>
        </div>

        <div class="form hide" id="phone-bill-form">
            <form class="animate__animated" action="{{route('sa.ph.toInsert')}}" method="POST" >
                @csrf
                @method('POST')
                
                <div class="form_header">
                    <h3 for="" class="form_title">
                        <i class="fas fa-mobile-alt fa-lg"></i>
                        Phone Bill Record Form
                    </h3>
                    <i class="fas fa-times close" onclick="close_form('phone-bill-form')"></i>
                </div>

                <div class="form_inputs_group">   
                    <div class="input_groups" id="select_date">
                        <label for="" class="ph-color">Select Date</label>
                        <input type="date" name="phDate" value="Card" id="pb-input" onChange="highlight_Input(name)">
                    </div>
                    
                    <div class="input_groups">
                        <label for="" class="">Operator</label>
                        <div class="operator_groups">
                            <input type="hidden" name="operator" id="operator">
                            <div class="circle" id="telenor">
                                <img src="../images/telenor.svg" width="25px" onclick="getOperator('telenor')">   
                            </div>

                            <div class="circle" id="mpt">
                                <img src="../images/mpt.svg" width="25px" onclick="getOperator('mpt')">
                            </div>

                            <div class="circle" id="ooredoo">
                                <img src="../images/ooredoo.svg" width="25px" onclick="getOperator('ooredoo')">
                            </div>
                        </div>                  
                    </div>

                    <div class="input_groups">
                        <label for="" class="">Bill</label>
                        <input type="hidden" name="bill" id="bill">
                        <div class="prebill_Btn_group">
                            <button type="button" class="" id="1000"    onclick="getPreDefinedBill(id)">1000</button>
                            <button type="button" class="" id="3000"    onclick="getPreDefinedBill(id)">3000</button>
                            <button type="button" class="" id="5000"    onclick="getPreDefinedBill(id)">5000</button>
                        </div>
                    </div>

                    <div class="input_groups">
                        <label for="" class="">Amount</label>
                        <input type="text" name="phAmount" placeholder="e.g. 10" id="pb-input" onChange="highlight_Input(name)">
                    </div>
                    
                    <div></div>
                    <div class="input_groups">
                        <button type="submit" class="">
                            <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                            Submit
                        </button>
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
    </section>


    <script>

        let search_input = document.getElementById("search_input")
        let dropbox = document.getElementById("ss")
        let search_Submit = document.getElementById('search_submit')

        search_Submit.addEventListener("click", event => {
            if(!st_array.includes(search_input.value)){
               
                document.getElementById("stationaryName").innerHTML = search_input.value
                document.getElementById("stNotFound").classList.remove("hide")
                event.preventDefault();
                // if(target === null || target === ""){
                //     document.getElementById("stNotFound").classList.add("hide")

                // }
                // else{
                //     document.getElementById("stationaryName").innerHTML = target
                //     document.getElementById("stNotFound").classList.remove("hide")
                // }
            }
            
        })
        // console.log(but)
        const search_stationary = () => {
            console.log(dropbox)
            dropbox.classList.remove("hide")
            
        }

        document.addEventListener("click", evt => {
            if(evt.target !== search_input )
            {
                dropbox.classList.add("hide")

            }
        })

        const getStName = stationary =>{
            document.getElementById("stNotFound").classList.add("hide")
            search_input.value = stationary
        }
        const filterMe = () =>  {
            var filter, ul, li, a, i, txtValue;

            filter = search_input.value.toUpperCase();

            ul = document.getElementById("list");

            li = ul.getElementsByTagName("li");
            
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {               
                    li[i].style.display = "";

                } else {
                    li[i].style.display = "none";
                    ul.style.height ="auto";
                }
            }
        }

        // When ready.
    </script>

@endsection



