<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="{{ asset('css/main.css')}}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{ asset('../animate.css/animate.css')}}">
    <link href="{{ asset('../fontawesome/css/all.css')}}" rel="stylesheet" type="text/css" >
    @stack('styles')

</head>

<body>

    <div class="container">
        <div class="navigation">
            <div class="shop_name">
                <img class="shop_icon" src="{{asset('../images/store.svg')}}" alt="" width="50" height="50">
                <p>YNW</p>    
            </div>
            <div class="devider mb4"></div>

            
            <a href="{{route('sa.home')}}">
                <div class="nav_icons">
                    <img class="" src="{{asset('../images/record.svg')}}" alt="" width="25" height="25">
                </div>
                Sale Records
            </a>

            <a href="{{route('sm.st.home')}}">
                <div class="nav_icons">
                    <img src="{{asset('../images/management.svg')}}" alt="" width="25" height="25">
                </div>
                Store Management
            </a>

            <a href="/">
                <div class="nav_icons">
                    <img src="{{asset('../images/calculation.svg')}}" alt="" width="25" height="25">
                </div>
                Calculation
            
            </a>

            <a href="{{route('benefit.home')}}">
                <div class="nav_icons">
                    <svg fill="#ffffff" width="30" height="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M464,160c-17.648,0-32,14.352-32,32v89.28c0,7.016-3.056,13.656-8.384,18.224l-35.832,30.72
                                    c-4.352,3.728-9.896,5.776-15.616,5.776H344.04l30.952-34.824C380.8,294.64,384,286.224,384,277.48v-1.8
                                    C384,256,368,240,348.328,240c-10.096,0-19.76,4.304-26.512,11.808L278.6,299.832c-14.576,16.184-22.6,37.088-22.6,58.864V448h-16
                                    v-89.304c0-21.776-8.024-42.68-22.592-58.864l-43.216-48.024C167.44,244.304,157.776,240,147.672,240C128,240,112,256,112,275.672
                                    v1.8c0,8.744,3.2,17.168,9.008,23.704L151.96,336h-28.128c-5.72,0-11.272-2.048-15.616-5.776l-35.832-30.72
                                    C67.056,294.936,64,288.296,64,281.28V192c0-17.648-14.352-32-32-32S0,174.352,0,192v100.808c0,24.608,10.4,48.248,28.536,64.872
                                    l54.496,49.952C91.272,415.184,96,425.936,96,437.12V448H80v48h160h16h160v-48h-16v-10.88c0-11.184,4.728-21.928,12.976-29.488
                                    l54.496-49.952C485.6,341.056,496,317.416,496,292.808V192C496,174.352,481.648,160,464,160z M240,480H96v-16h96v-16h-80v-10.88
                                    c0-15.656-6.616-30.704-18.16-41.288L39.344,345.88C24.504,332.288,16,312.936,16,292.808V192c0-8.824,7.176-16,16-16
                                    s16,7.176,16,16v89.28c0,11.696,5.096,22.768,13.968,30.368l35.84,30.72c7.248,6.216,16.496,9.632,26.024,9.632h42.344
                                    l11.84,13.32l11.96-10.632l-57.008-64.136c-3.2-3.608-4.968-8.248-4.968-13.072v-1.8c0-10.848,8.832-19.68,19.672-19.68
                                    c5.568,0,10.896,2.376,14.624,6.512l43.216,48.024C217.44,323.776,224,340.88,224,358.696V448h-16v16h32V480z M480,292.808
                                    c0,20.128-8.504,39.48-23.344,53.072l-54.496,49.952C390.616,406.416,384,421.464,384,437.12V448h-80v16h96v16H256v-16h32v-16h-16
                                    v-89.304c0-17.816,6.56-34.92,18.48-48.168l43.216-48.024c3.728-4.128,9.056-6.504,14.632-6.504
                                    c10.84,0,19.672,8.832,19.672,19.672v1.8c0,4.824-1.768,9.464-4.976,13.072l-57.008,64.136l11.96,10.632L329.816,352h42.344
                                    c9.536,0,18.784-3.416,26.032-9.632l35.832-30.72c8.88-7.6,13.976-18.672,13.976-30.368V192c0-8.824,7.176-16,16-16
                                    c8.824,0,16,7.176,16,16V292.808z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M248,96c-8.824,0-16-7.176-16-16s7.176-16,16-16c8.824,0,16,7.176,16,16h16c0-14.864-10.24-27.288-24-30.864V32h-16
                                    v17.136c-13.76,3.576-24,16-24,30.864c0,17.648,14.352,32,32,32c8.824,0,16,7.176,16,16s-7.176,16-16,16c-8.824,0-16-7.176-16-16
                                    h-16c0,14.864,10.24,27.288,24,30.864V176h16v-17.136c13.76-3.576,24-16,24-30.864C280,110.352,265.648,96,248,96z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M248,0c-57.344,0-104,46.656-104,104s46.656,104,104,104s104-46.656,104-104S305.344,0,248,0z M248,192
                                    c-48.52,0-88-39.48-88-88s39.48-88,88-88s88,39.48,88,88S296.52,192,248,192z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M440,32c-30.88,0-56,25.12-56,56s25.12,56,56,56s56-25.12,56-56S470.88,32,440,32z M440,128c-22.056,0-40-17.944-40-40
                                    c0-22.056,17.944-40,40-40c22.056,0,40,17.944,40,40C480,110.056,462.056,128,440,128z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon points="448,80 448,64 432,64 432,80 416,80 416,96 432,96 432,112 448,112 448,96 464,96 464,80 		"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M56,32C25.12,32,0,57.12,0,88s25.12,56,56,56s56-25.12,56-56S86.88,32,56,32z M56,128c-22.056,0-40-17.944-40-40
                                    c0-22.056,17.944-40,40-40c22.056,0,40,17.944,40,40C96,110.056,78.056,128,56,128z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon points="64,80 64,64 48,64 48,80 32,80 32,96 48,96 48,112 64,112 64,96 80,96 80,80 		"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="304" y="96" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="176" y="96" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="120" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="120" y="32" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="136" y="16" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="104" y="16" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="368" y="160" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="368" y="192" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="384" y="176" width="16" height="16"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="352" y="176" width="16" height="16"/>
                            </g>
                        </g>
                    </svg>
                </div>
                Benefits
            
            </a>
        </div>
        
        <div class="dashboard">
            @yield('location')
            <div class="devider devider_bg2" style="margin-bottom: 10px;"></div>
            @yield('section_name')

            <div class="hide outside" id="del_confirm">
                <div class="alertBox">
                    <div class="alertTile">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="80" height="80" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M503.479,391.66L302.065,58.86c-23.2-38.67-79.44-39.1-103.04,0.26L8.575,391.52c-23.88,40.04,4.95,90.75,51.53,90.75    h391.764C498.759,482.27,527.159,431.1,503.479,391.66z M250.624,422.27c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30    c16.53,0,30,13.46,30,30C280.624,408.81,267.154,422.27,250.624,422.27z M281.024,272.27c0,16.54-13.87,30-30.4,30    c-16.54,0-29.8-13.46-29.8-30v-120c0-16.54,13.26-30,29.8-30c16.53,0,30.4,13.46,30.4,30V272.27z" fill="#f15757" data-original="#000000" style="" class=""/>
                                </g>
                            </g>
                        </svg>

                        <h2>Are you sure?</h2>
                        <p>if you proceed, you will lose this data permentaly. Are you sure you want to delete this item?</p>
                    </div>
                    <div class="btn_panel">
                        <button class="cancel" id="cancel">Cancel</button>
                        <a href="" id="confirm"><button class="confirm">Confirm</button></a>
                    </div>
                </div>
            </div>

            <div class="contents">
            @yield('content')   
            </div>
            @if(session('success'))
                <div class="alert animate__animated animate__slideInDown tc" id="alertMessage">
                    <div class="successLogo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 417.065 417.065" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                            <g xmlns="http://www.w3.org/2000/svg">
                                <path style="" d="M401.56,47.087c-17.452-14.176-42.561-12.128-56.095,4.536L167.042,271.598L73.913,150.58   c-13.892-18.037-39.781-21.411-57.819-7.535c-18.054,13.884-21.427,39.781-7.535,57.843l125.001,162.433   c13.892,18.037,39.789,21.419,57.835,7.535c5.145-3.959,8.95-8.958,11.648-14.42l205.645-253.514   C422.215,86.234,419.02,61.247,401.56,47.087z" fill="#ffffff" data-original="#010002"/>
                            </g>
                        </svg>
                    </div>
                    <label for="">{{ session('success')}}</label>
                </div>
            @endif
            
        </div>
    </div>

    
    @stack('scripts')
    <!-- <script src="{{ asset('../js/storeManagement.js')}}"></script> -->
</body>
</html>