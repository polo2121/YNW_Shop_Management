@extends('layout')
@push('styles')
    <link rel="stylesheet" href="{{ asset('../css/saleRecordEditForm.css')}}">  
    <link rel="stylesheet" href="{{ asset('../css/storeSaleRecords.css')}}">
    <link rel="stylesheet" href="{{ asset('../css/storeSaleRecords_grid.css')}}">


@endpush

@section('location')
    <div class="location">
        <a href="{{route('sa.home')}}">
            Application
        </a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a href="{{route('sa.home')}}">  
            Sale Records 
        </a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a href="{{route('sa.home')}}">
            <span>Stationary</span>
        </a>
        <i class="fas fa-greater-than fa-xs"></i>
        <a><span>Edit</span></a>
    </div>
@endsection
@section('content')

<div class="form_panel">
    <form action="{{route('sa.st.toUpdate')}}" method="POST">
        @csrf
        @method('POST')
        @foreach ($results as $result)
        <div class="card">
            <div class="card-header">
                <svg class="stSVG" fill="#ffffff" id="header_icon" enable-background="new 0 0 64 64" width="55px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g><path d="m19 1h-12c-.552 0-1 .448-1 1v60c0 .552.448 1 1 1h12c.552 0 1-.448 1-1v-60c0-.552-.448-1-1-1zm-1 60h-10v-2h3v-2h-3v-2h5v-2h-5v-2h3v-2h-3v-2h3v-2h-3v-2h3v-2h-3v-2h5v-2h-5v-2h3v-2h-3v-2h3v-2h-3v-2h3v-2h-3v-2h5v-2h-5v-2h3v-2h-3v-2h3v-2h-3v-2h3v-2h-3v-2h5v-2h-5v-2h10z"/><path d="m32.929 11.628-4-10c-.153-.379-.52-.628-.929-.628s-.776.249-.929.628l-4 10 .003.001c-.045.116-.074.24-.074.371v50c0 .552.448 1 1 1h8c.552 0 1-.448 1-1v-50c0-.131-.029-.255-.075-.37zm-4.929-6.936 2.523 6.308h-5.045zm3 44.308h-2v-36h2zm-6 0v-36h2v36zm0 12v-10h6v10z"/><path d="m45 52h-2v-40c0-.097-.014-.194-.042-.287l-3-10c-.127-.423-.517-.713-.958-.713s-.831.29-.958.713l-3 10c-.028.093-.042.19-.042.287v47c0 .552.448 1 1 1v2c0 .552.448 1 1 1h4c.552 0 1-.448 1-1v-2c.552 0 1-.448 1-1v-5h2v4h2v-12h-2zm-8-39.853 2-6.667 2 6.667v45.853h-4zm3 48.853h-2v-1h2z"/><path d="m52.5 5c-3.033 0-5.5 2.467-5.5 5.5v10.5h2v-10.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v8.5c0 1.103-.897 2-2 2s-2-.897-2-2v-8.5c0-.276.224-.5.5-.5s.5.224.5.5v9.5h2v-9.5c0-1.378-1.122-2.5-2.5-2.5s-2.5 1.122-2.5 2.5v8.5c0 2.206 1.794 4 4 4s4-1.794 4-4v-8.5c0-3.033-2.467-5.5-5.5-5.5z"/><path d="m52.5 25c-3.033 0-5.5 2.467-5.5 5.5v10.5h2v-10.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v8.5c0 1.103-.897 2-2 2s-2-.897-2-2v-8.5c0-.276.224-.5.5-.5s.5.224.5.5v9.5h2v-9.5c0-1.378-1.122-2.5-2.5-2.5s-2.5 1.122-2.5 2.5v8.5c0 2.206 1.794 4 4 4s4-1.794 4-4v-8.5c0-3.033-2.467-5.5-5.5-5.5z"/></g></svg>
                <h2>
                    Stationary Edit Form
                </h2>
                <svg fill="#ffffff" class="cancelSVG" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 511.995 511.995" style="enable-background:new 0 0 511.995 511.995;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M437.126,74.939c-99.826-99.826-262.307-99.826-362.133,0C26.637,123.314,0,187.617,0,256.005
                                s26.637,132.691,74.993,181.047c49.923,49.923,115.495,74.874,181.066,74.874s131.144-24.951,181.066-74.874
                                C536.951,337.226,536.951,174.784,437.126,74.939z M409.08,409.006c-84.375,84.375-221.667,84.375-306.042,0
                                c-40.858-40.858-63.37-95.204-63.37-153.001s22.512-112.143,63.37-153.021c84.375-84.375,221.667-84.355,306.042,0
                                C493.435,187.359,493.435,324.651,409.08,409.006z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M341.525,310.827l-56.151-56.071l56.151-56.071c7.735-7.735,7.735-20.29,0.02-28.046
                                c-7.755-7.775-20.31-7.755-28.065-0.02l-56.19,56.111l-56.19-56.111c-7.755-7.735-20.31-7.755-28.065,0.02
                                c-7.735,7.755-7.735,20.31,0.02,28.046l56.151,56.071l-56.151,56.071c-7.755,7.735-7.755,20.29-0.02,28.046
                                c3.868,3.887,8.965,5.811,14.043,5.811s10.155-1.944,14.023-5.792l56.19-56.111l56.19,56.111
                                c3.868,3.868,8.945,5.792,14.023,5.792c5.078,0,10.175-1.944,14.043-5.811C349.28,331.117,349.28,318.562,341.525,310.827z"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="card-body">

                <label class="input">
                    <svg fill="#000000" width="27px" height="27px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="10px" y="10px"
                            viewBox="0 0 470 470" style="enable-background:new 0 0 470 470;" xml:space="preserve">
                            <g>
                                <path d="M462.5,425H7.5c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h455c4.143,0,7.5-3.358,7.5-7.5S466.643,425,462.5,425z"/>
                                <path d="M462.5,455H7.5c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h455c4.143,0,7.5-3.358,7.5-7.5S466.643,455,462.5,455z"/>
                                <path d="M462.5,30h-25v-7.5C437.5,10.093,427.406,0,415,0s-22.5,10.093-22.5,22.5V30h-75v-7.5C317.5,10.093,307.406,0,295,0
                                    s-22.5,10.093-22.5,22.5V30h-75v-7.5C197.5,10.093,187.407,0,175,0s-22.5,10.093-22.5,22.5V30h-75v-7.5C77.5,10.093,67.407,0,55,0
                                    S32.5,10.093,32.5,22.5V30h-25C3.358,30,0,33.358,0,37.5v365c0,4.142,3.358,7.5,7.5,7.5h455c4.143,0,7.5-3.358,7.5-7.5v-365
                                    C470,33.358,466.643,30,462.5,30z M407.5,22.5c0-4.136,3.364-7.5,7.5-7.5s7.5,3.364,7.5,7.5v30c0,4.136-3.364,7.5-7.5,7.5
                                    s-7.5-3.364-7.5-7.5V22.5z M287.5,22.5c0-4.136,3.364-7.5,7.5-7.5s7.5,3.364,7.5,7.5v30c0,4.136-3.364,7.5-7.5,7.5
                                    s-7.5-3.364-7.5-7.5V22.5z M167.5,22.5c0-4.136,3.364-7.5,7.5-7.5s7.5,3.364,7.5,7.5v30c0,4.136-3.364,7.5-7.5,7.5
                                    s-7.5-3.364-7.5-7.5V22.5z M47.5,22.5c0-4.136,3.364-7.5,7.5-7.5s7.5,3.364,7.5,7.5v30c0,4.136-3.364,7.5-7.5,7.5
                                    s-7.5-3.364-7.5-7.5V22.5z M32.5,45v7.5C32.5,64.907,42.593,75,55,75s22.5-10.093,22.5-22.5V45h75v7.5
                                    c0,12.407,10.093,22.5,22.5,22.5s22.5-10.093,22.5-22.5V45h75v7.5c0,12.407,10.094,22.5,22.5,22.5s22.5-10.093,22.5-22.5V45h75v7.5
                                    c0,12.407,10.094,22.5,22.5,22.5s22.5-10.093,22.5-22.5V45H455v77.3H15V45H32.5z M15,395V137.3h440V395H15z"/>
                                <path d="M412,226.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S416.143,226.8,412,226.8z"/>
                                <path d="M331,226.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S335.143,226.8,331,226.8z"/>
                                <path d="M250,226.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S254.143,226.8,250,226.8z"/>
                                <path d="M169,226.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S173.142,226.8,169,226.8z"/>
                                <path d="M88,226.8H58c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S92.142,226.8,88,226.8z"/>
                                <path d="M331,280.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S335.143,280.8,331,280.8z"/>
                                <path d="M250,280.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S254.143,280.8,250,280.8z"/>
                                <path d="M169,280.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S173.142,280.8,169,280.8z"/>
                                <path d="M88,280.8H58c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S92.142,280.8,88,280.8z"/>
                                <path d="M331,334.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S335.143,334.8,331,334.8z"/>
                                <path d="M412,280.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S416.143,280.8,412,280.8z"/>
                                <path d="M412,334.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S416.143,334.8,412,334.8z"/>
                                <path d="M250,334.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S254.143,334.8,250,334.8z"/>
                                <path d="M169,334.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S173.142,334.8,169,334.8z"/>
                                <path d="M88,334.8H58c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S92.142,334.8,88,334.8z"/>
                                <path d="M412,172.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S416.143,172.8,412,172.8z"/>
                                <path d="M331,172.8h-30c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S335.143,172.8,331,172.8z"/>
                                <path d="M250,172.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.143,0,7.5-3.358,7.5-7.5S254.143,172.8,250,172.8z"/>
                                <path d="M169,172.8h-30c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S173.142,172.8,169,172.8z"/>
                                <path d="M88,172.8H58c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h30c4.142,0,7.5-3.358,7.5-7.5S92.142,172.8,88,172.8z"/>
                            </g>
                    </svg>
                    <input name="date" class="input__field" type="text" placeholder=" " value="{{$result->date}}" />
                    <span class="input__label">Date</span>
                </label>

                <label class="input">
                    <svg id="Layer_5" enable-background="new 0 0 64 64" height="27px" viewBox="0 0 64 64" width="27px" xmlns="http://www.w3.org/2000/svg"><path d="m60 19c1.654 0 3-1.346 3-3v-8c0-1.654-1.346-3-3-3-.449 0-.871.106-1.253.283-.741-2.474-3.035-4.283-5.747-4.283-3.309 0-6 2.691-6 6v14h-2v-11.287l-4.728-7.565c-.449-.719-1.224-1.148-2.072-1.148h-.4c-.848 0-1.623.429-2.072 1.147l-4.728 7.566v11.287h-2v-11.182l-2.712-7.232c-.355-.948-1.275-1.586-2.288-1.586s-1.933.638-2.288 1.585l-2.712 7.233v11.182h-1c-1.654 0-3 1.346-3 3v2c0 1.32.863 2.431 2.05 2.831l.261 4.169h-13.311c-1.654 0-3 1.346-3 3v9.618l2 1v2.764l-2 1v9.618c0 1.654 1.346 3 3 3h16c1.302 0 2.402-.839 2.816-2h.003 32.363c2.107 0 3.861-1.647 3.992-3.75l1.776-28.419c1.187-.4 2.05-1.511 2.05-2.831v-2c0-1.654-1.346-3-3-3h-1v-2.184c.314.112.648.184 1 .184zm0-12c.551 0 1 .448 1 1v8c0 .552-.449 1-1 1s-1-.448-1-1v-8c0-.552.449-1 1-1zm-7-4c2.206 0 4 1.794 4 4v1 7h-8v-8c0-2.206 1.794-4 4-4zm-14 18v-10h4v10zm-1.576-17.792c.081-.13.222-.208.376-.208h.4c.154 0 .294.078.375.208l3.621 5.792h-8.391zm-4.424 7.792h4v10h-4zm-9.415-7.713c.129-.344.7-.345.829.001l2.143 5.712h-5.114zm-2.585 7.713h6v10h-6zm-1.936 18h3.521l4 4-3.585 3.586v-.586c0-1.654-1.346-3-3-3h-.686zm1.936 20.382v-2.764l2-1v-5.204l3.586 3.586-5.45 5.45zm12.586-20.382 4 4-4.086 4.086-4.086-4.086 4-4zm11 0 4 4-4.086 4.086-4.086-4.086 4-4zm-20.672 20.5 4.086-4.086 4.086 4.086-4.086 4.086zm2.672 5.5-3.586 3.586v-7.172zm2.828-11 4.086-4.086 4.086 4.086-4.086 4.086zm9.586 1.414 4.086 4.086-4.086 4.086-4.086-4.086zm1.414-1.414 4.086-4.086 4.086 4.086-4.086 4.086zm5.5-5.5 4.086-4.086 4.086 4.086-4.086 4.086zm-2.828 0-4.086 4.086-4.086-4.086 4.086-4.086zm-11 0-4.086 4.086-4.086-4.086 4.086-4.086zm-4.086 17.914 2.586 2.586h-5.172zm5.414 2.586-4-4 4.086-4.086 4.086 4.086-4 4zm5.586-2.586 2.586 2.586h-5.172zm5.586 2.586h-.172l-4-4 4.086-4.086 4.086 4.086zm5.414-2.586 2.586 2.586h-5.172zm-4.086-6.914 4.086-4.086 4.086 4.086-4.086 4.086zm5.5-5.5 4.086-4.086 2.591 2.591-.481 7.692zm5.5-5.5 1.522-1.522-.179 2.866zm1.711-4.539-3.125 3.125-4.086-4.086 4-4h3.521zm-8.625-2.375-2.586-2.586h5.172zm-11 0-2.586-2.586h5.172zm-11 0-2.586-2.586h5.172zm-14 19.414c-.551 0-1-.448-1-1s.449-1 1-1 1 .448 1 1-.449 1-1 1zm-1-3.816c-1.161.414-2 1.514-2 2.816s.839 2.402 2 2.816v8.184h-4v-22h4zm8 12.816c0 .552-.449 1-1 1h-5v-8.184c1.161-.414 2-1.514 2-2.816s-.839-2.402-2-2.816v-10.184h-8v24h-3c-.551 0-1-.448-1-1v-8.382l.894-.447c.682-.34 1.106-1.025 1.106-1.789v-2.764c0-.764-.424-1.449-1.105-1.789l-.895-.447v-8.382c0-.552.449-1 1-1h16c.551 0 1 .448 1 1v8.382l-.894.447c-.682.34-1.106 1.025-1.106 1.789v2.764c0 .764.424 1.449 1.105 1.789l.895.447zm34.393-1.021-3.979-3.979 4.086-4.086 1.944 1.944-.267 4.267c-.06.98-.828 1.752-1.784 1.854zm5.607-34.979v2c0 .552-.449 1-1 1h-42c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h42c.551 0 1 .448 1 1zm-12-3v-4h8v4z"/>
                    </svg>
                        <input name="name" class="input__field" type="text" placeholder=" " value="{{$result->name}}" />
                        <span class="input__label">Stationary</span>
                </label>

                <label class="input">
                    <svg width="27px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M87.228,409.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C90.428,413.482,89.242,411.111,87.228,409.6z M74.428,464h-16v-16h-16v16h-16v-44l24-18l24,18V464z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M183.228,409.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C186.428,413.482,185.242,411.111,183.228,409.6z M170.428,464h-16v-16h-16v16h-16v-44l24-18l24,18V464z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M183.228,297.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C186.428,301.482,185.242,299.111,183.228,297.6z M170.428,352h-16v-16h-16v16h-16v-44l24-18l24,18V352z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M279.228,409.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C282.428,413.482,281.242,411.111,279.228,409.6z M266.428,464h-16v-16h-16v16h-16v-44l24-18l24,18V464z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M375.228,409.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C378.428,413.482,377.242,411.111,375.228,409.6z M362.428,464h-16v-16h-16v16h-16v-44l24-18l24,18V464z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M471.228,409.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C474.428,413.482,473.242,411.111,471.228,409.6z M458.428,464h-16v-16h-16v16h-16v-44l24-18l24,18V464z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M279.228,297.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C282.428,301.482,281.242,299.111,279.228,297.6z M266.428,352h-16v-16h-16v16h-16v-44l24-18l24,18V352z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M375.228,297.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C378.428,301.482,377.242,299.111,375.228,297.6z M362.428,352h-16v-16h-16v16h-16v-44l24-18l24,18V352z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M471.228,297.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C474.428,301.482,473.242,299.111,471.228,297.6z M458.428,352h-16v-16h-16v16h-16v-44l24-18l24,18V352z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M375.228,185.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C378.428,189.482,377.242,187.111,375.228,185.6z M362.428,240h-16v-16h-16v16h-16v-44l24-18l24,18V240z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M471.228,185.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8v-56C474.428,189.482,473.242,187.111,471.228,185.6z M458.428,240h-16v-16h-16v16h-16v-44l24-18l24,18V240z"
                                            />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M471.228,73.6l-32-24c-2.844-2.133-6.756-2.133-9.6,0l-32,24c-2.014,1.511-3.2,3.882-3.2,6.4v56c0,4.418,3.582,8,8,8h64
                                            c4.418,0,8-3.582,8-8V80C474.428,77.482,473.242,75.111,471.228,73.6z M458.428,128h-16v-16h-16v16h-16V84l24-18l24,18V128z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.428,0h-32v16h11.152l-64.504,58.056c-0.639,0.584-1.18,1.267-1.6,2.024L237.748,200h-91.32
                                            c-1.756-0.003-3.464,0.577-4.856,1.648l-136,104l9.712,12.704L149.132,216h93.296c2.892,0.001,5.559-1.559,6.976-4.08
                                            l71.352-126.848l65.672-59.112V40h16V8C402.428,3.582,398.846,0,394.428,0z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="26.428" y="16" width="104" height="16"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="26.428" y="48" width="104" height="16"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="26.428" y="80" width="56" height="16"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M106.028,120.44c-21.848-21.89-57.306-21.924-79.196-0.076c-21.89,21.848-21.924,57.306-0.076,79.196
                                            C37.27,210.094,51.545,216.01,66.428,216c14.861,0.037,29.12-5.871,39.6-16.408C127.868,177.728,127.868,142.304,106.028,120.44z
                                            M74.428,120.8c5.021,1.013,9.797,2.991,14.064,5.824l-6.672,6.672l-5.04,5.04c-0.765-0.368-1.551-0.694-2.352-0.976V120.8z
                                            M66.428,152c2.123-0.006,4.16,0.838,5.656,2.344c3.112,3.122,3.112,8.174,0,11.296c-3.115,3.133-8.18,3.148-11.314,0.034
                                            c-3.133-3.115-3.148-8.18-0.034-11.314C62.243,152.845,64.292,151.995,66.428,152z M33.072,182.025
                                            c-12.171-18.436-7.093-43.248,11.343-55.42c4.258-2.811,9.014-4.781,14.012-5.805v16.56c-12.47,4.493-18.936,18.245-14.443,30.715
                                            c4.493,12.47,18.245,18.936,30.715,14.443c0.706-0.255,1.4-0.542,2.08-0.862l5.04,5.04l6.672,6.672
                                            C70.056,205.539,45.244,200.461,33.072,182.025z M99.804,182.064l-11.712-11.712c3.115-6.55,3.115-14.154,0-20.704l11.712-11.712
                                            C108.637,151.319,108.637,168.681,99.804,182.064z"/>
                                    </g>
                                </g>
                    </svg>
                    <input name="amount" class="input__field" type="text" placeholder=" " value="{{$result->amount}}" />
                    <span class="input__label">Amount</span>
                </label>

                <label class="input">
                    <svg width="27px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M487.59,299.894h-7.662v-69.015c0-10.926-5.438-20.6-13.743-26.478v-9.397c0-13.631-11.089-24.72-24.72-24.72h-5.721
                                    l21.889-32.12c7.337-10.766,4.547-25.495-6.219-32.833L302.883,4.111c-5.215-3.555-11.501-4.867-17.705-3.69
                                    c-6.201,1.175-11.574,4.694-15.128,9.91L141.849,198.454h-35.675l8.607-87.13c0.097-0.982,0.735-1.833,1.625-2.168
                                    c11.089-4.181,20.699-11.989,27.059-21.985c0.501-0.787,1.446-1.237,2.424-1.138l55.955,5.528
                                    c4.012,0.389,7.581-2.533,7.977-6.543s-2.533-7.581-6.543-7.977l-55.955-5.528c-6.495-0.636-12.689,2.357-16.169,7.825
                                    c-4.676,7.35-11.742,13.09-19.895,16.164c-6.137,2.314-10.351,7.826-10.999,14.387l-8.748,88.564h-9.303L95.821,60.649
                                    c0.49-4.96,4.917-8.604,9.883-8.107l113.074,11.17c4.01,0.387,7.581-2.533,7.977-6.543s-2.533-7.581-6.543-7.977l-113.074-11.17
                                    C94.174,36.743,82.581,46.248,81.3,59.214l-10.972,111.07H51.643c-13.63,0-24.72,11.089-24.72,24.72v6.41
                                    c-11.151,5.134-18.915,16.406-18.915,29.465v248.695c0,17.88,14.546,32.426,32.427,32.426h407.067
                                    c17.88,0,32.426-14.546,32.426-32.426V410.56h7.662c9.044,0,16.401-7.357,16.401-16.4v-77.865
                                    C503.992,307.251,496.634,299.894,487.59,299.894z M441.465,184.876L441.465,184.876c5.586-0.001,10.129,4.543,10.129,10.129
                                    v3.717c-1.342-0.17-2.705-0.267-4.092-0.267h-30.955l9.253-13.579H441.465z M282.107,18.547c1.36-1.995,3.415-3.341,5.787-3.791
                                    c0.567-0.107,1.136-0.161,1.701-0.161c1.797,0,3.553,0.538,5.071,1.572l148.531,101.22c4.118,2.807,5.186,8.441,2.38,12.559
                                    l-46.686,68.506h-11.204l22.889-33.587c3.712-5.447,4.018-12.379,0.796-18.092c-4.282-7.59-6.018-16.527-4.888-25.166
                                    c0.84-6.427-1.988-12.701-7.38-16.375L322.106,52.76c-5.393-3.675-12.267-4.012-17.941-0.879
                                    c-7.625,4.21-16.578,5.863-25.208,4.655c-6.4-0.898-12.891,1.992-16.548,7.357l-91.699,134.56h-11.204L282.107,18.547z
                                    M285.32,142.438c-31.771,0-57.851,24.773-59.976,56.015h-36.979L274.464,72.11c0.001,0,0.001,0,0.001,0
                                    c0.489-0.719,1.3-1.147,2.133-1.147c0.111,0,0.222,0.008,0.333,0.023c11.738,1.642,23.913-0.604,34.285-6.331
                                    c0.816-0.452,1.864-0.387,2.672,0.163l76.999,52.473c0.806,0.55,1.249,1.502,1.129,2.426c-1.537,11.749,0.825,23.903,6.648,34.225
                                    c0.467,0.829,0.41,1.891-0.144,2.706l-28.488,41.804h-24.733C343.172,167.211,317.093,142.438,285.32,142.438z M330.668,198.454
                                    h-90.695c2.09-23.189,21.624-41.424,45.347-41.424C309.044,157.029,328.579,175.265,330.668,198.454z M41.514,195.004
                                    c0-5.586,4.543-10.13,10.129-10.13h17.244l-1.341,13.579H41.514V195.004z M22.599,230.879c0-9.834,8.001-17.835,17.836-17.835
                                    h407.067c9.835,0,17.835,8.001,17.835,17.835v20.244H22.599V230.879z M465.337,479.574c0,9.834-8,17.835-17.835,17.835H40.435
                                    c-9.835,0-17.836-8.001-17.836-17.835V459.33h39.342c4.03,0,7.295-3.266,7.295-7.295c0-4.029-3.266-7.295-7.295-7.295H22.599
                                    V265.714h442.738v34.18h-69.366h-0.001c-21.856,0-40.788,12.74-49.773,31.181c-0.03,0.062-0.064,0.122-0.095,0.184
                                    c-0.076,0.157-0.142,0.32-0.216,0.478c-1.07,2.273-2,4.626-2.757,7.054c-0.002,0.007-0.004,0.013-0.006,0.02
                                    c-1.615,5.189-2.486,10.702-2.486,16.416c0,30.511,24.822,55.333,55.332,55.333h0.001h69.366v34.18H108.655
                                    c-4.03,0-7.295,3.266-7.295,7.295c0,4.029,3.266,7.295,7.295,7.295h356.682V479.574z M489.401,394.159
                                    c0,0.998-0.812,1.81-1.811,1.81h-91.618c-15.445,0-28.911-8.639-35.818-21.338c-0.314-0.577-0.614-1.163-0.901-1.756
                                    c-0.573-1.187-1.09-2.406-1.547-3.654c-1.602-4.366-2.476-9.08-2.476-13.994s0.875-9.628,2.476-13.994
                                    c0.458-1.247,0.975-2.466,1.547-3.654c0.287-0.593,0.587-1.179,0.901-1.756c6.907-12.699,20.373-21.338,35.818-21.338h91.618
                                    c0.998,0,1.811,0.812,1.811,1.81V394.159z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M397.681,325.627c-16.322,0-29.6,13.279-29.6,29.6c0,16.321,13.278,29.599,29.6,29.599c16.322,0,29.6-13.278,29.6-29.599
                                    C427.281,338.906,414.003,325.627,397.681,325.627z M397.681,370.235c-8.276,0-15.009-6.733-15.009-15.008
                                    c0-8.275,6.733-15.009,15.009-15.009s15.009,6.733,15.009,15.009S405.957,370.235,397.681,370.235z"/>
                            </g>
                        </g>
                    </svg>
                    <input name="price" class="input__field" type="text" placeholder=" " value="{{$result->price}}" />
                    <span class="input__label">Price</span>
                </label>

                <div></div>
                <div class="btn">
                    <button type="submit" id="submitBtn">
                        <svg  class="submitSVG" fill="var(--st-color)" version="1.1" width="30" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 489.4 489.4" style="enable-background:new 0 0 489.4 489.4;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M382.4,422.75h-79.1H282h-4.6v-106.1h34.7c8.8,0,14-10,8.8-17.2l-67.5-93.4c-4.3-6-13.2-6-17.5,0l-67.5,93.4
                                        c-5.2,7.2-0.1,17.2,8.8,17.2h34.7v106.1h-4.6H186H94.3c-52.5-2.9-94.3-52-94.3-105.2c0-36.7,19.9-68.7,49.4-86
                                        c-2.7-7.3-4.1-15.1-4.1-23.3c0-37.5,30.3-67.8,67.8-67.8c8.1,0,15.9,1.4,23.2,4.1c21.7-46,68.5-77.9,122.9-77.9
                                        c70.4,0.1,128.4,54,135,122.7c54.1,9.3,95.2,59.4,95.2,116.1C489.4,366.05,442.2,418.55,382.4,422.75z"/>
                                </g>
                            </g>
                        </svg>
                        Submit
                    </button>
                </div>

            </div>
        </div>
        @endforeach
    </form>    
</div>

<script>
    
</script>

@endsection