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
        <a href="{{route('sm.print.home')}}">Print</a>
        >
        <a href=""><span>Edit</span></a>
    </div>
  
@endsection

@section('content')
    <section id="stationarySection" class="">

        <div class="form_panel mt-3" id="stInesrtForm">
            <form class="store_management_form" id="stationaryItems" action="{{route('sm.print.toUpdate')}}" method="POST" >
                @csrf
                @method('POST')

                <div class="form_header"><h3 for="" class="form_title print_BgColor">Print Items Edit Form</h3></div>

                <div class="form_header_icon">
                    <a href="{{url('/store-management/print')}}">
                        <i class="far fa-times-circle fa-lg"></i>
                    </a>
      
                </div>
                
                <div class="form_input_panel">
                @foreach ($results as $result)
                    <input type="hidden" name="printId" value="{{$result->printId}}">
                    <div class="input_groups">
                        <label for="" id="changeFont" >Select Date</label>               
                        <input type="date" name="date" value="{{$result->date}}" id="date" required>

                    </div>

                    
                    <div class="input_groups">
                        <label for="">Category</label>
                        <input style="text-transform: capitalize;" type="text" name="category" value="{{$result->category}}" required>
                    </div>

                    <div class="input_groups">
                        <label for="">Print Items</label>
                        <input type="text" name="items" value="{{$result->items}}" required>
                    </div>

                    <div class="input_groups">
                        <label for="">Price (Per Unit)</label>
                        <input type="text" name="price" value="{{$result->price}}" required>
                    </div>

                    <div class="input_groups">
                        <label for="" class="d_b">Total Purchased Price</label>
                        <input type="text" name="total_purchased_price" value="{{$result->total_price}}" required>
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
                        <button class="subBtn psubBtn">
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