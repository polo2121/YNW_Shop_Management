@extends('layout')
@push('styles')
    <!-- SHIFT + Tab -->
    <link rel="stylesheet" href="{{ asset('./css/monthly.css')}}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('../js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('../css/jquery-ui.css')}}">
    <script type="text/javascript" src="{{ asset('../js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('../js/.js')}}"></script>
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
    <div class="months-years">
        <div>  
            <i class="fas fa-chevron-left"></i>
            <label>January</label>
            <i class="fas fa-chevron-right"></i>
        </div>
        <div>
            <i class="fas fa-chevron-left"></i>
            <label>2021</label>
            <i class="fas fa-chevron-right"></i>
        </div>
        <button>Apply</button>
    </div>

    <div class="days">
        <ul>
            <li><span>1</span><span>135,000 MMK</span></li>
            <li><span>2</span><span>135,000 MMK</span></li>
            <li><span>3</span><span>135,000 MMK</span></li>

        </ul>
    </div>
@endsection