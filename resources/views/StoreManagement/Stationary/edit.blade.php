@extends('../layout')

@push('styles')
    <link href="{{ asset('../css/stationaryEdit.css')}}" rel="stylesheet" type="text/css" >
@endpush

@section('location')
    <div class="location">
        <a>Application</a>
        >
        <a>Store Management</a>
        >
        <a href="{{route('sm.st.home')}}">Stationary</a>
        >
        <a href=""><span>Edit</span></a>
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

        <div class="form_panel mt-3" id="stInesrtForm">
            <form class="store_management_form" id="stationaryItems" action="{{route('sm.st.toEdit')}}" method="POST" >
                @csrf
                @method('POST')

                <div class="form_header"><h3 for="" class="form_title">Stationary Edit Form</h3></div>

                <div class="form_header_icon">
                    <a href="{{route('sm.st.home')}}">
                        <i class="far fa-times-circle fa-lg" onclick="form_showHide('pbInsertForm')"></i>
                    </a>
      
                </div>
                
                <div class="form_input_panel">
                @foreach ($results as $result)
                    <input type="hidden" name="stid" value="{{$result->stid}}">
                    <div class="input_groups">
                        <label for="" id="changeFont" >Select Date</label>               
                        <input type="date" name="date" value="{{$result->date}}" id="date" required>

                    </div>

                    <div class="input_groups">
                        <label for="">Stationary</label>
                        <input type="text" name="stName" value="{{$result->stName}}" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b">Total Purchased Price</label>
                        <input type="text" name="total_purchased_price" value="{{$result->total_purchased_price}}" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b">Amount</label>
                        <input type="text" name="amount" value="{{$result->amount}}" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b" style="display: block !important">Sale Price</label>
                        <input type="text" name="sale_price" value="{{$result->sale_price}}" required>
                    </div>

                    <div class="buttons-group">
                        <button class="subBtn">
                            <img class="mr-1 svg-primary" src="{{ asset('../images/edit.svg')}}" alt="" width="22" height="22" >
                            Edit               
                        </button>
                    </div>
                @endforeach  
                </div>
            </form>
        </div>
    </section>
@endsection