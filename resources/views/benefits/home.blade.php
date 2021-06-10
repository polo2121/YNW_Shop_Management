@extends('layout')
@push('styles')
    <!-- SHIFT + Tab -->
    <link rel="stylesheet" href="./css/benefit.css">
@endpush

@push('scripts')
    <script src="{{ asset('../js/weekday.js')}}"></script>
    <script src="{{ asset('../js/dayjs.min.js')}}"></script>
    <script src="{{ asset('../js/calendar.js')}}"></script>
    <script src="{{ asset('../js/benefit.js')}}"></script>
    <script type="text/javascript" src="{{ asset('../js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('../css/jquery-ui.css')}}">
    <script type="text/javascript" src="{{ asset('../js/jquery-ui.min.js')}}"></script>
@endpush

@section('location')
    <div class="location">
        <a href="{{route('sa.home')}}">Application</a> 
            > 
        <a href="{{route('benefit.home')}}">  
            <span>Benefits</span> 
        </a>
    </div>
@endsection

@section('content')
    <section>
        <div class="big_three">
            <button class="big_three_btn" type="button" id="total_sale">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m376.344 320.67c-51.365 0-93.153-41.789-93.153-93.154s41.788-93.154 93.153-93.154 93.154 41.789 93.154 93.154-41.789 93.154-93.154 93.154zm0-171.308c-43.094 0-78.153 35.06-78.153 78.154s35.06 78.154 78.153 78.154c43.095 0 78.154-35.059 78.154-78.154 0-43.094-35.059-78.154-78.154-78.154z" fill="#ffffff" data-original="#000000" style=""/><path d="m352.351 265.696c6.754 4.372 11.571 5.833 18.021 6.222v3.508c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-5.024c10.214-3.65 16.735-12.858 18.263-21.946 2.126-12.648-4.738-24.078-17.08-28.441-.392-.139-.787-.279-1.183-.421v-21.227c1.708-.228 3.328-1.045 4.543-2.361 3.665-3.974 2.08-10.454-3.041-12.187-.486-.164-.99-.316-1.502-.461v-3.753c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v3.274c-.923.194-1.86.432-2.811.718-8.348 2.515-14.581 9.634-16.267 18.581-1.551 8.229 1.134 16.202 7.008 20.81 3.043 2.387 6.818 4.546 12.069 6.837v27.072c-3.661-.32-6.035-1.282-10.094-3.937-3.72-2.433-8.798-1.136-10.837 2.967-1.72 3.462-.335 7.668 2.911 9.769zm36.491-19.726c-.409 2.437-1.583 4.958-3.47 6.982v-16.744c3.992 3.15 3.823 7.664 3.47 9.762zm-21.282-34.786c-1.428-1.12-2.026-3.565-1.524-6.229.427-2.265 1.793-4.917 4.337-6.335v14.456c-1.041-.615-1.989-1.245-2.813-1.892z" fill="#ffffff" data-original="#000000" style=""/><path d="m484.167 80.166c15.348 0 27.833-12.486 27.833-27.833 0-15.348-12.485-27.833-27.833-27.833h-319.5c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h319.5c7.076 0 12.833 5.757 12.833 12.833s-5.757 12.833-12.833 12.833h-395.5v-25.666h45.997c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-46.203c-1.654-13.781-13.408-24.5-27.627-24.5-15.348 0-27.834 12.486-27.834 27.833v281.164c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-281.164c0-7.076 5.757-12.833 12.834-12.833 7.076 0 12.833 5.757 12.833 12.833v424.292h-25.667v-113.124c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v113.124h-10.5c-12.406 0-22.5 10.093-22.5 22.5v14.875c0 12.407 10.094 22.5 22.5 22.5h76.667c12.406 0 22.5-10.093 22.5-22.5v-14.875c0-12.407-10.094-22.5-22.5-22.5h-10.5v-371.959h61.315v23.951h-22.464c-10 0-18.135 8.135-18.135 18.135v208.447c0 10 8.135 18.135 18.135 18.135h352.58c10 0 18.135-8.135 18.135-18.135v-208.447c0-10-8.135-18.135-18.135-18.135h-22.463v-23.951zm-377.5 394.459v14.875c0 4.136-3.364 7.5-7.5 7.5h-76.667c-4.136 0-7.5-3.364-7.5-7.5v-14.875c0-4.136 3.364-7.5 7.5-7.5h76.667c4.136 0 7.5 3.364 7.5 7.5zm376.566-352.373v45.563l-31.346 22.919c-3.344 2.445-4.072 7.137-1.628 10.481 2.445 3.344 7.138 4.073 10.481 1.628l22.492-16.445v144.302c0 1.728-1.406 3.135-3.135 3.135h-199.52l45.307-35.04c3.277-2.534 3.879-7.244 1.345-10.521-2.534-3.276-7.245-3.878-10.521-1.344l-60.649 46.906h-128.54c-1.729 0-3.135-1.406-3.135-3.135v-208.449c0-1.729 1.406-3.135 3.135-3.135h352.58c1.728 0 3.134 1.406 3.134 3.135zm-40.597-18.135h-277.654v-23.951h277.653v23.951z" fill="#ffffff" data-original="#000000" style=""/><path d="m160 277.475h89.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-89.553c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5z" fill="#ffffff" data-original="#000000" style=""/><path d="m160 310.475h51.333c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-51.333c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5z" fill="#ffffff" data-original="#000000" style=""/><path d="m190.363 242.278c1.407 1.407 3.314 2.197 5.304 2.197 1.989 0 3.896-.79 5.304-2.197l24.513-24.512c2.929-2.929 2.929-7.678 0-10.606s-7.677-2.93-10.607 0l-11.709 11.709v-63.395c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v63.394l-11.708-11.708c-2.93-2.929-7.678-2.93-10.607 0-2.929 2.929-2.929 7.678 0 10.606z" fill="#ffffff" data-original="#000000" style=""/></g></g>
                </svg>
                
                <label for="">Total Sale</label>
                
            </button>
            <button class="big_three_btn" type="button" id="benefit">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m51 59h2v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3h-2c-.551 0-1-.448-1-1s.449-1 1-1h3v1h2v-3h-3v-2h-2v2c-1.654 0-3 1.346-3 3s1.346 3 3 3h2c.551 0 1 .448 1 1s-.449 1-1 1h-3v-1h-2v3h3z" fill="#ffffff" data-original="#000000" style=""/><path d="m53 25h-2v2c-1.654 0-3 1.346-3 3s1.346 3 3 3h2c.551 0 1 .448 1 1s-.449 1-1 1h-3v-1h-2v3h3v2h2v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3h-2c-.551 0-1-.449-1-1s.449-1 1-1h3v1h2v-3h-3z" fill="#ffffff" data-original="#000000" style=""/><path d="m63 32c0-4.439-2.649-8.264-6.444-10 3.795-1.736 6.444-5.561 6.444-10 0-6.065-4.935-11-11-11s-11 4.935-11 11c0 4.439 2.649 8.264 6.444 10-3.795 1.736-6.444 5.561-6.444 10s2.649 8.264 6.444 10c-2.906 1.329-5.132 3.882-6.018 7h-11.426c-.475 0-.919.121-1.319.319.198-.4.319-.844.319-1.319v-2c0-.771-.301-1.468-.78-2 .48-.532.78-1.229.78-2v-2c0-1.654-1.346-3-3-3h-7v-4h7c4.962 0 9-4.038 9-9v-1h-9c-2.826 0-5.349 1.312-7 3.356v-1.356-1-5h7c4.962 0 9-4.038 9-9v-1h-9c-2.826 0-5.349 1.312-7 3.356v-1.356-1c0-4.962-4.038-9-9-9h-9v1c0 4.962 4.038 9 9 9h7v7 .356c-1.651-2.044-4.174-3.356-7-3.356h-9v1c0 4.962 4.038 9 9 9h7v7 1 4h-7c-1.654 0-3 1.346-3 3v2c0 .771.301 1.468.78 2-.479.532-.78 1.229-.78 2v2c0 .771.301 1.468.78 2-.479.532-.78 1.229-.78 2v2c0 .771.301 1.468.78 2-.479.532-.78 1.229-.78 2v2c0 1.654 1.346 3 3 3h16c.771 0 1.468-.301 2-.78.532.48 1.229.78 2 .78h16c.75 0 1.442-.285 1.982-.771 1.246.492 2.599.771 4.018.771 6.065 0 11-4.935 11-11 0-4.439-2.649-8.264-6.444-10 3.795-1.736 6.444-5.561 6.444-10zm-37-7h6.929c-.487 3.388-3.408 6-6.929 6h-6.929c.487-3.388 3.408-6 6.929-6zm0-14h6.929c-.487 3.388-3.408 6-6.929 6h-6.929c.487-3.388 3.408-6 6.929-6zm-16-2c-3.521 0-6.442-2.612-6.929-6h6.929c3.521 0 6.442 2.612 6.929 6zm0 14c-3.521 0-6.442-2.612-6.929-6h6.929c3.521 0 6.442 2.612 6.929 6zm33-11c0-4.962 4.038-9 9-9s9 4.038 9 9-4.038 9-9 9-9-4.038-9-9zm-13 39h1v2h2v-2h2v2h2v-2h4.051c-.03.33-.051.662-.051 1 0 1.041.155 2.045.426 3h-11.426c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1zm-20 4c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1zm-1-7v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1h-16c-.551 0-1-.448-1-1zm0-8c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1h-16c-.551 0-1-.448-1-1zm17 21h-16c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1zm4 0c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h1.214c.821 1.6 2.019 2.973 3.481 4zm31-9c0 4.963-4.038 9-9 9s-9-4.037-9-9 4.038-9 9-9 9 4.037 9 9zm-9-11c-4.962 0-9-4.037-9-9 0-4.962 4.038-9 9-9s9 4.038 9 9c0 4.963-4.038 9-9 9z" fill="#ffffff" data-original="#000000" style=""/><path d="m53 5h-2v2c-1.654 0-3 1.346-3 3s1.346 3 3 3h2c.551 0 1 .449 1 1s-.449 1-1 1h-3v-1h-2v3h3v2h2v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3h-2c-.551 0-1-.449-1-1s.449-1 1-1h3v1h2v-3h-3z" fill="#ffffff" data-original="#000000" style=""/></g></g>
                </svg>
                <label for="">Actual Benefit</label>
                
            </button>
            <button class="big_three_btn" type="button" id="most_sale">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 512.006 512.006" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1468_" d="m502.335 77.815 6.741-6.741c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.143 0l-6.741 6.741-6.737-6.737c-1.875-1.875-4.419-2.929-7.071-2.929h-10.999l-51.077-51.077c-1.876-1.875-4.419-2.929-7.071-2.929h-369.222c-19.858 0-36.014 16.155-36.014 36.014v187.401c0 19.858 16.156 36.014 36.014 36.014h87.12l-58.585 58.586c-6.802 6.802-10.548 15.846-10.548 25.466 0 9.619 3.746 18.663 10.548 25.466l132.512 132.512c6.802 6.802 15.846 10.548 25.466 10.548s18.664-3.746 25.466-10.548l99.247-99.246c3.906-3.905 3.906-10.237 0-14.143-3.905-3.903-10.237-3.904-14.142 0l-99.248 99.246c-3.024 3.025-7.046 4.69-11.323 4.69s-8.299-1.665-11.323-4.69l-132.513-132.512c-3.024-3.024-4.69-7.046-4.69-11.323 0-4.278 1.666-8.299 4.69-11.323l258.15-258.15h133.401l3.808 3.808-23.124 23.124c-3.917-1.878-8.3-2.931-12.926-2.931-16.542 0-30 13.458-30 30s13.458 30 30 30 30-13.458 30-30c0-4.626-1.054-9.01-2.932-12.926l23.124-23.124 3.808 3.808v133.4l-95.264 95.265c-3.905 3.905-3.905 10.237 0 14.143 3.905 3.904 10.237 3.904 14.143 0l98.193-98.193c1.875-1.876 2.929-4.419 2.929-7.071v-141.688c0-2.652-1.054-5.195-2.929-7.071zm-322.755 101.62c-5.516 0-10.003-4.487-10.003-10.003 0-5.517 4.487-10.004 10.003-10.004s10.003 4.487 10.003 10.004c0 5.515-4.487 10.003-10.003 10.003zm153.12-125.428c-2.652 0-5.196 1.054-7.071 2.929l-116.294 116.293c.158-1.245.249-2.511.249-3.798 0-16.544-13.459-30.004-30.003-30.004-16.543 0-30.003 13.46-30.003 30.004s13.459 30.003 30.003 30.003c1.287 0 2.553-.091 3.798-.249l-40.243 40.243h-107.121c-8.83 0-16.014-7.184-16.014-16.014v-187.4c0-8.83 7.184-16.014 16.014-16.014h365.079l34.007 34.007zm105.301 84c-5.514 0-10-4.486-10-10s4.486-10 10-10c2.282 0 4.382.777 6.067 2.069.265.346.547.684.863 1s.654.598 1 .863c1.292 1.685 2.069 3.785 2.069 6.067.001 5.515-4.485 10.001-9.999 10.001z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1527_" d="m332.599 295.835c2.652 0 5.196-1.054 7.071-2.929l22.627-22.628c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.142 0l-15.556 15.557-49.498-49.497c-3.904-3.904-10.237-3.904-14.142 0-3.905 3.905-3.905 10.237 0 14.143l56.569 56.568c1.876 1.875 4.42 2.929 7.071 2.929z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1528_" d="m410.381 208.053c-3.905-3.904-10.237-3.904-14.143 0l-12.728 12.728-14.142-14.141 12.728-12.728c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.143 0l-12.728 12.728-14.142-14.142 12.728-12.728c3.905-3.905 3.906-10.237 0-14.143-3.905-3.903-10.237-3.904-14.142 0l-19.799 19.799c-1.875 1.875-2.929 4.419-2.929 7.071s1.054 5.195 2.929 7.071l56.569 56.568c1.952 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929l19.799-19.799c3.906-3.904 3.906-10.236.001-14.141z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1531_" d="m299.776 323.029c4.919 2.508 10.942.55 13.45-4.371 2.507-4.921.55-10.942-4.372-13.449l-74.953-38.184c-3.86-1.967-8.547-1.224-11.61 1.839s-3.806 7.751-1.839 11.61l38.184 74.953c1.766 3.468 5.276 5.464 8.918 5.463 1.527 0 3.078-.351 4.531-1.092 4.921-2.507 6.878-8.528 4.372-13.449l-3.066-6.02 20.367-20.367zm-35.932-1.437-11.604-22.779 22.78 11.605z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1532_" d="m203.906 400.386c-3.905 3.905-3.906 10.237 0 14.143 1.953 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929l14.143-14.142c11.697-11.697 11.697-30.729 0-42.427-11.118-11.118-28.857-11.66-40.632-1.644-.366.277-.722.571-1.055.905l-.74.739c-1.889 1.889-4.4 2.929-7.071 2.929s-5.182-1.04-7.071-2.929c-3.899-3.899-3.899-10.243 0-14.143l14.142-14.142c3.905-3.905 3.906-10.237 0-14.143-3.905-3.903-10.237-3.904-14.142 0l-14.143 14.142c-11.697 11.697-11.697 30.73 0 42.428 5.667 5.666 13.2 8.786 21.213 8.786 8.002 0 15.526-3.112 21.192-8.766.007-.007.015-.013.022-.02 3.898-3.9 10.243-3.9 14.142 0 1.889 1.889 2.929 4.399 2.929 7.07 0 2.672-1.04 5.183-2.929 7.071z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1533_" d="m171.339 64.557c-4.809-2.714-10.909-1.018-13.624 3.792l-64.5 114.254c-2.715 4.81-1.018 10.909 3.792 13.624 1.554.877 3.241 1.294 4.907 1.294 3.49 0 6.879-1.83 8.717-5.086l64.5-114.254c2.715-4.81 1.018-10.91-3.792-13.624z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1536_" d="m125.176 89.997c0-16.544-13.459-30.003-30.003-30.003s-30.004 13.459-30.004 30.003 13.459 30.004 30.003 30.004 30.004-13.46 30.004-30.004zm-40.007 0c0-5.516 4.487-10.003 10.003-10.003s10.003 4.487 10.003 10.003c0 5.517-4.487 10.004-10.003 10.004s-10.003-4.487-10.003-10.004z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1537_" d="m371.991 353.319c-2.64 0-5.21 1.07-7.07 2.931-1.86 1.859-2.93 4.439-2.93 7.069 0 2.631 1.07 5.211 2.93 7.07 1.86 1.86 4.43 2.93 7.07 2.93 2.63 0 5.21-1.069 7.07-2.93 1.86-1.859 2.93-4.439 2.93-7.07 0-2.63-1.07-5.21-2.93-7.069-1.86-1.86-4.44-2.931-7.07-2.931z" fill="#ffffff" data-original="#000000" style=""/></g>
                </svg>
                <label for="">Most Sale Items</label>

            </button>

        </div>

        <div class="small_three" id="dwm">

            <button class="big_three_btn" type="button" style="background-color: #039684;" id="total_sale">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m376.344 320.67c-51.365 0-93.153-41.789-93.153-93.154s41.788-93.154 93.153-93.154 93.154 41.789 93.154 93.154-41.789 93.154-93.154 93.154zm0-171.308c-43.094 0-78.153 35.06-78.153 78.154s35.06 78.154 78.153 78.154c43.095 0 78.154-35.059 78.154-78.154 0-43.094-35.059-78.154-78.154-78.154z" fill="#ffffff" data-original="#000000" style=""/><path d="m352.351 265.696c6.754 4.372 11.571 5.833 18.021 6.222v3.508c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-5.024c10.214-3.65 16.735-12.858 18.263-21.946 2.126-12.648-4.738-24.078-17.08-28.441-.392-.139-.787-.279-1.183-.421v-21.227c1.708-.228 3.328-1.045 4.543-2.361 3.665-3.974 2.08-10.454-3.041-12.187-.486-.164-.99-.316-1.502-.461v-3.753c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v3.274c-.923.194-1.86.432-2.811.718-8.348 2.515-14.581 9.634-16.267 18.581-1.551 8.229 1.134 16.202 7.008 20.81 3.043 2.387 6.818 4.546 12.069 6.837v27.072c-3.661-.32-6.035-1.282-10.094-3.937-3.72-2.433-8.798-1.136-10.837 2.967-1.72 3.462-.335 7.668 2.911 9.769zm36.491-19.726c-.409 2.437-1.583 4.958-3.47 6.982v-16.744c3.992 3.15 3.823 7.664 3.47 9.762zm-21.282-34.786c-1.428-1.12-2.026-3.565-1.524-6.229.427-2.265 1.793-4.917 4.337-6.335v14.456c-1.041-.615-1.989-1.245-2.813-1.892z" fill="#ffffff" data-original="#000000" style=""/><path d="m484.167 80.166c15.348 0 27.833-12.486 27.833-27.833 0-15.348-12.485-27.833-27.833-27.833h-319.5c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h319.5c7.076 0 12.833 5.757 12.833 12.833s-5.757 12.833-12.833 12.833h-395.5v-25.666h45.997c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-46.203c-1.654-13.781-13.408-24.5-27.627-24.5-15.348 0-27.834 12.486-27.834 27.833v281.164c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-281.164c0-7.076 5.757-12.833 12.834-12.833 7.076 0 12.833 5.757 12.833 12.833v424.292h-25.667v-113.124c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v113.124h-10.5c-12.406 0-22.5 10.093-22.5 22.5v14.875c0 12.407 10.094 22.5 22.5 22.5h76.667c12.406 0 22.5-10.093 22.5-22.5v-14.875c0-12.407-10.094-22.5-22.5-22.5h-10.5v-371.959h61.315v23.951h-22.464c-10 0-18.135 8.135-18.135 18.135v208.447c0 10 8.135 18.135 18.135 18.135h352.58c10 0 18.135-8.135 18.135-18.135v-208.447c0-10-8.135-18.135-18.135-18.135h-22.463v-23.951zm-377.5 394.459v14.875c0 4.136-3.364 7.5-7.5 7.5h-76.667c-4.136 0-7.5-3.364-7.5-7.5v-14.875c0-4.136 3.364-7.5 7.5-7.5h76.667c4.136 0 7.5 3.364 7.5 7.5zm376.566-352.373v45.563l-31.346 22.919c-3.344 2.445-4.072 7.137-1.628 10.481 2.445 3.344 7.138 4.073 10.481 1.628l22.492-16.445v144.302c0 1.728-1.406 3.135-3.135 3.135h-199.52l45.307-35.04c3.277-2.534 3.879-7.244 1.345-10.521-2.534-3.276-7.245-3.878-10.521-1.344l-60.649 46.906h-128.54c-1.729 0-3.135-1.406-3.135-3.135v-208.449c0-1.729 1.406-3.135 3.135-3.135h352.58c1.728 0 3.134 1.406 3.134 3.135zm-40.597-18.135h-277.654v-23.951h277.653v23.951z" fill="#ffffff" data-original="#000000" style=""/><path d="m160 277.475h89.553c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-89.553c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5z" fill="#ffffff" data-original="#000000" style=""/><path d="m160 310.475h51.333c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-51.333c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5z" fill="#ffffff" data-original="#000000" style=""/><path d="m190.363 242.278c1.407 1.407 3.314 2.197 5.304 2.197 1.989 0 3.896-.79 5.304-2.197l24.513-24.512c2.929-2.929 2.929-7.678 0-10.606s-7.677-2.93-10.607 0l-11.709 11.709v-63.395c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v63.394l-11.708-11.708c-2.93-2.929-7.678-2.93-10.607 0-2.929 2.929-2.929 7.678 0 10.606z" fill="#ffffff" data-original="#000000" style=""/></g></g>
                </svg>
                
                <label for="">Days</label>
                
            </button>
            <button class="big_three_btn" type="button" style="background-color: #bb3e03;" id="benefit">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m51 59h2v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3h-2c-.551 0-1-.448-1-1s.449-1 1-1h3v1h2v-3h-3v-2h-2v2c-1.654 0-3 1.346-3 3s1.346 3 3 3h2c.551 0 1 .448 1 1s-.449 1-1 1h-3v-1h-2v3h3z" fill="#ffffff" data-original="#000000" style=""/><path d="m53 25h-2v2c-1.654 0-3 1.346-3 3s1.346 3 3 3h2c.551 0 1 .448 1 1s-.449 1-1 1h-3v-1h-2v3h3v2h2v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3h-2c-.551 0-1-.449-1-1s.449-1 1-1h3v1h2v-3h-3z" fill="#ffffff" data-original="#000000" style=""/><path d="m63 32c0-4.439-2.649-8.264-6.444-10 3.795-1.736 6.444-5.561 6.444-10 0-6.065-4.935-11-11-11s-11 4.935-11 11c0 4.439 2.649 8.264 6.444 10-3.795 1.736-6.444 5.561-6.444 10s2.649 8.264 6.444 10c-2.906 1.329-5.132 3.882-6.018 7h-11.426c-.475 0-.919.121-1.319.319.198-.4.319-.844.319-1.319v-2c0-.771-.301-1.468-.78-2 .48-.532.78-1.229.78-2v-2c0-1.654-1.346-3-3-3h-7v-4h7c4.962 0 9-4.038 9-9v-1h-9c-2.826 0-5.349 1.312-7 3.356v-1.356-1-5h7c4.962 0 9-4.038 9-9v-1h-9c-2.826 0-5.349 1.312-7 3.356v-1.356-1c0-4.962-4.038-9-9-9h-9v1c0 4.962 4.038 9 9 9h7v7 .356c-1.651-2.044-4.174-3.356-7-3.356h-9v1c0 4.962 4.038 9 9 9h7v7 1 4h-7c-1.654 0-3 1.346-3 3v2c0 .771.301 1.468.78 2-.479.532-.78 1.229-.78 2v2c0 .771.301 1.468.78 2-.479.532-.78 1.229-.78 2v2c0 .771.301 1.468.78 2-.479.532-.78 1.229-.78 2v2c0 1.654 1.346 3 3 3h16c.771 0 1.468-.301 2-.78.532.48 1.229.78 2 .78h16c.75 0 1.442-.285 1.982-.771 1.246.492 2.599.771 4.018.771 6.065 0 11-4.935 11-11 0-4.439-2.649-8.264-6.444-10 3.795-1.736 6.444-5.561 6.444-10zm-37-7h6.929c-.487 3.388-3.408 6-6.929 6h-6.929c.487-3.388 3.408-6 6.929-6zm0-14h6.929c-.487 3.388-3.408 6-6.929 6h-6.929c.487-3.388 3.408-6 6.929-6zm-16-2c-3.521 0-6.442-2.612-6.929-6h6.929c3.521 0 6.442 2.612 6.929 6zm0 14c-3.521 0-6.442-2.612-6.929-6h6.929c3.521 0 6.442 2.612 6.929 6zm33-11c0-4.962 4.038-9 9-9s9 4.038 9 9-4.038 9-9 9-9-4.038-9-9zm-13 39h1v2h2v-2h2v2h2v-2h4.051c-.03.33-.051.662-.051 1 0 1.041.155 2.045.426 3h-11.426c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1zm-20 4c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1zm-1-7v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1h-16c-.551 0-1-.448-1-1zm0-8c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1h-16c-.551 0-1-.448-1-1zm17 21h-16c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h2v2h2v-2h1c.551 0 1 .448 1 1v2c0 .552-.449 1-1 1zm4 0c-.551 0-1-.448-1-1v-2c0-.552.449-1 1-1h1v2h2v-2h2v2h2v-2h2v2h2v-2h1.214c.821 1.6 2.019 2.973 3.481 4zm31-9c0 4.963-4.038 9-9 9s-9-4.037-9-9 4.038-9 9-9 9 4.037 9 9zm-9-11c-4.962 0-9-4.037-9-9 0-4.962 4.038-9 9-9s9 4.038 9 9c0 4.963-4.038 9-9 9z" fill="#ffffff" data-original="#000000" style=""/><path d="m53 5h-2v2c-1.654 0-3 1.346-3 3s1.346 3 3 3h2c.551 0 1 .449 1 1s-.449 1-1 1h-3v-1h-2v3h3v2h2v-2c1.654 0 3-1.346 3-3s-1.346-3-3-3h-2c-.551 0-1-.449-1-1s.449-1 1-1h3v1h2v-3h-3z" fill="#ffffff" data-original="#000000" style=""/></g></g>
                </svg>
                <label for="">Weeks</label>
                
            </button>
            <button class="big_three_btn" type="button" style="background-color: #344e41;" id="most_sale">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 512.006 512.006" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1468_" d="m502.335 77.815 6.741-6.741c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.143 0l-6.741 6.741-6.737-6.737c-1.875-1.875-4.419-2.929-7.071-2.929h-10.999l-51.077-51.077c-1.876-1.875-4.419-2.929-7.071-2.929h-369.222c-19.858 0-36.014 16.155-36.014 36.014v187.401c0 19.858 16.156 36.014 36.014 36.014h87.12l-58.585 58.586c-6.802 6.802-10.548 15.846-10.548 25.466 0 9.619 3.746 18.663 10.548 25.466l132.512 132.512c6.802 6.802 15.846 10.548 25.466 10.548s18.664-3.746 25.466-10.548l99.247-99.246c3.906-3.905 3.906-10.237 0-14.143-3.905-3.903-10.237-3.904-14.142 0l-99.248 99.246c-3.024 3.025-7.046 4.69-11.323 4.69s-8.299-1.665-11.323-4.69l-132.513-132.512c-3.024-3.024-4.69-7.046-4.69-11.323 0-4.278 1.666-8.299 4.69-11.323l258.15-258.15h133.401l3.808 3.808-23.124 23.124c-3.917-1.878-8.3-2.931-12.926-2.931-16.542 0-30 13.458-30 30s13.458 30 30 30 30-13.458 30-30c0-4.626-1.054-9.01-2.932-12.926l23.124-23.124 3.808 3.808v133.4l-95.264 95.265c-3.905 3.905-3.905 10.237 0 14.143 3.905 3.904 10.237 3.904 14.143 0l98.193-98.193c1.875-1.876 2.929-4.419 2.929-7.071v-141.688c0-2.652-1.054-5.195-2.929-7.071zm-322.755 101.62c-5.516 0-10.003-4.487-10.003-10.003 0-5.517 4.487-10.004 10.003-10.004s10.003 4.487 10.003 10.004c0 5.515-4.487 10.003-10.003 10.003zm153.12-125.428c-2.652 0-5.196 1.054-7.071 2.929l-116.294 116.293c.158-1.245.249-2.511.249-3.798 0-16.544-13.459-30.004-30.003-30.004-16.543 0-30.003 13.46-30.003 30.004s13.459 30.003 30.003 30.003c1.287 0 2.553-.091 3.798-.249l-40.243 40.243h-107.121c-8.83 0-16.014-7.184-16.014-16.014v-187.4c0-8.83 7.184-16.014 16.014-16.014h365.079l34.007 34.007zm105.301 84c-5.514 0-10-4.486-10-10s4.486-10 10-10c2.282 0 4.382.777 6.067 2.069.265.346.547.684.863 1s.654.598 1 .863c1.292 1.685 2.069 3.785 2.069 6.067.001 5.515-4.485 10.001-9.999 10.001z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1527_" d="m332.599 295.835c2.652 0 5.196-1.054 7.071-2.929l22.627-22.628c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.142 0l-15.556 15.557-49.498-49.497c-3.904-3.904-10.237-3.904-14.142 0-3.905 3.905-3.905 10.237 0 14.143l56.569 56.568c1.876 1.875 4.42 2.929 7.071 2.929z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1528_" d="m410.381 208.053c-3.905-3.904-10.237-3.904-14.143 0l-12.728 12.728-14.142-14.141 12.728-12.728c3.905-3.905 3.905-10.237 0-14.143-3.905-3.904-10.237-3.904-14.143 0l-12.728 12.728-14.142-14.142 12.728-12.728c3.905-3.905 3.906-10.237 0-14.143-3.905-3.903-10.237-3.904-14.142 0l-19.799 19.799c-1.875 1.875-2.929 4.419-2.929 7.071s1.054 5.195 2.929 7.071l56.569 56.568c1.952 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929l19.799-19.799c3.906-3.904 3.906-10.236.001-14.141z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1531_" d="m299.776 323.029c4.919 2.508 10.942.55 13.45-4.371 2.507-4.921.55-10.942-4.372-13.449l-74.953-38.184c-3.86-1.967-8.547-1.224-11.61 1.839s-3.806 7.751-1.839 11.61l38.184 74.953c1.766 3.468 5.276 5.464 8.918 5.463 1.527 0 3.078-.351 4.531-1.092 4.921-2.507 6.878-8.528 4.372-13.449l-3.066-6.02 20.367-20.367zm-35.932-1.437-11.604-22.779 22.78 11.605z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1532_" d="m203.906 400.386c-3.905 3.905-3.906 10.237 0 14.143 1.953 1.952 4.512 2.929 7.071 2.929s5.119-.977 7.071-2.929l14.143-14.142c11.697-11.697 11.697-30.729 0-42.427-11.118-11.118-28.857-11.66-40.632-1.644-.366.277-.722.571-1.055.905l-.74.739c-1.889 1.889-4.4 2.929-7.071 2.929s-5.182-1.04-7.071-2.929c-3.899-3.899-3.899-10.243 0-14.143l14.142-14.142c3.905-3.905 3.906-10.237 0-14.143-3.905-3.903-10.237-3.904-14.142 0l-14.143 14.142c-11.697 11.697-11.697 30.73 0 42.428 5.667 5.666 13.2 8.786 21.213 8.786 8.002 0 15.526-3.112 21.192-8.766.007-.007.015-.013.022-.02 3.898-3.9 10.243-3.9 14.142 0 1.889 1.889 2.929 4.399 2.929 7.07 0 2.672-1.04 5.183-2.929 7.071z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1533_" d="m171.339 64.557c-4.809-2.714-10.909-1.018-13.624 3.792l-64.5 114.254c-2.715 4.81-1.018 10.909 3.792 13.624 1.554.877 3.241 1.294 4.907 1.294 3.49 0 6.879-1.83 8.717-5.086l64.5-114.254c2.715-4.81 1.018-10.91-3.792-13.624z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1536_" d="m125.176 89.997c0-16.544-13.459-30.003-30.003-30.003s-30.004 13.459-30.004 30.003 13.459 30.004 30.003 30.004 30.004-13.46 30.004-30.004zm-40.007 0c0-5.516 4.487-10.003 10.003-10.003s10.003 4.487 10.003 10.003c0 5.517-4.487 10.004-10.003 10.004s-10.003-4.487-10.003-10.004z" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" id="XMLID_1537_" d="m371.991 353.319c-2.64 0-5.21 1.07-7.07 2.931-1.86 1.859-2.93 4.439-2.93 7.069 0 2.631 1.07 5.211 2.93 7.07 1.86 1.86 4.43 2.93 7.07 2.93 2.63 0 5.21-1.069 7.07-2.93 1.86-1.859 2.93-4.439 2.93-7.07 0-2.63-1.07-5.21-2.93-7.069-1.86-1.86-4.44-2.931-7.07-2.931z" fill="#ffffff" data-original="#000000" style=""/></g>
                </svg>
                <label for="">Months</label>

            </button>

        </div>

        <div id="app">
            <div class="calendar-month">
                <section class="calendar-month-header">
                    <div  id="selected-month" class="calendar-month-header-selected-month"></div>
                    <section class="calendar-month-header-selectors">
                    <span id="previous-month-selector"><</span>
                    <span id="present-month-selector">Today</span>
                    <span id="next-month-selector">></span>
                    </section>
                </section>

                <ol id="days-of-week" class="day-of-week"></ol>

                <ol id="calendar-days"class="days-grid"></ol>

            </div>
        </div>

    </section>
@endsection




