<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <img class="shop_icon" src="../images/store.svg" alt="" width="50" height="50">
                <p>YNW</p>    
            </div>
            <div class="devider mb4"></div>

            
            <a href="">
                <div class="nav_icons">
                    <img class="" src="../images/record.svg" alt="" width="25" height="25">
                </div>
                Sale Records
            </a>

            <a href="{{route('sm.st.home')}}">
                <div class="nav_icons">
                    <img src="../images/management.svg" alt="" width="25" height="25">
                </div>
                Store Management
            </a>

            <a href="/">
                <div class="nav_icons">
                    <img src="../images/calculation.svg" alt="" width="25" height="25">
                </div>
                Calculation
            
            </a>

        </div>
        <div class="dummy">
        </div>
        <div class="dashboard">
            @yield('location')
            <div class="devider devider_bg2" style="margin-bottom: 10px;"></div>
            @yield('section_name')
            <div class="contents">
            @yield('content')   
            </div>
            @if(session('success'))
                <div class="alert animate__animated animate__slideInUp tc" id="alertMessage">
                    {{ session('success')}}
                </div>
            @endif
        </div>
    </div>

    
    @stack('scripts')
    <script src="{{ asset('../js/storeManagement.js')}}"></script>
</body>
</html>