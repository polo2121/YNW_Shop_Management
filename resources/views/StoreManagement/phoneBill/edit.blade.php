@extends('../layout')


@section('location')
<div class="location">
    <a href="">Application</a>
        >
    <a href="">Store Management</a>
        >
    <a href="{{route('sm.pb.home')}}">Phone Bills</a>
    >
    <a href=""><span>Edit</span></a>

</div>
  
@endsection

@section('content')

<div class="selection">
        <div class="pill">
            <a href="{{route('sm.st.home')}}">
                <button type="button"  class="submitBtn btnBgColor"  id="stBtn">
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
<div class="form_panel">
    @foreach ($results as $result)

        @if ( $result->operator === "ooredoo") 
            @push('styles')
                <link href="{{ asset('../css/ooredoo.css')}}" rel="stylesheet" type="text/css" >
            @endpush

        @elseif ($result->operator === "telenor")
            @push('styles')
                <link href="{{ asset('../css/telenor.css')}}" rel="stylesheet" type="text/css" >
            @endpush

        @else
            @push('styles')
                <link href="{{ asset('../css/mpt.css')}}" rel="stylesheet" type="text/css" >
            @endpush
        @endif

    <div class="form_header mt-3"><h3 for="" class="form_title"><i class="fas fa-pen-square fa-lg pd-r-1"></i>Update Form ({{$result->operator}})</h3></div>
    <form class="store_management_form" id="bill-update-form" action="{{route('sm.pb.toEdit')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form_header_icon">
            <a href="{{route('sm.pb.home')}}">
                <i class="far fa-times-circle fa-lg">
                </i>
            </a>
        </div>

        <div class="form_input_panel">
            
            <input type="hidden" name="pbId" value="{{$result->pbId}}">
            <div class="input_groups">
                <label for="" id="changeFont" >Select Date</label>               
                <input type="date" name="date" id="date" value="{{$result->date}}">
            </div>

            <div class="input_groups">
                <label for="" class="d_b">Bill</label>
                <input type="number" name="bill" value="{{$result->bill}}">
            </div>

            <div class="input_groups">
                <label for="" class="d_b">Amount</label>
                <input type="number" name="amount" value="{{$result->amount}}">
            </div>

            <div class="input_groups">
                <label for="" class="d_b">Percentage</label>
                <input type="number" name="percentage" value="{{$result->percentage}}">
            </div>
            @endforeach
            <div></div>
        
            <div class="buttons-group">
                <button class="subBtn">
                    <img class="mr-1 svg-primary" src="{{ asset('../images/submit.svg')}}" alt="" width="25" height="25" >
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
@endsection

