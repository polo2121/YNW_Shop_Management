@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./css/storeSaleRecords.css">
    <link rel="stylesheet" href="./css/storeSaleRecords_grid.css">
    <link rel="stylesheet" href="./animate.css/animate.css">
@endpush

@push('scripts')
    <script src="./js/storeSaleRecords.js"></script>
@endpush
@section('location')
    <div class="location">
        <a>Application</a> 
            > 
        <a herf="">  
            <span>Sale Records</span> 
        </a>
    </div>
@endsection
@section('content')

    <h2 class="title">Sale Records Management</h2>
    <div class="form-entry-buttons">
        <div class="form-entry">
            <img class="form_entry_icon" src="../images/form_entry.svg" alt="" width="40" height="40">
            <label for="" class="form_name">စာရင်းသွင်းမည်</label>
        </div>
        <div class="btn-groups">
            <button type="button" id="print" class="blue" onclick="hide_show('print-form',id)">
                <i class="far fa-copy fa-lg"></i>    
                Print
            </button>
            <button type="button" id="computer"   class="blue" onclick="hide_show('computer-form',id)">
                <i class="fas fa-laptop fa-lg"></i>
                Computer
            </button>
            <button type="button" id="stationary" class="blue" onclick="hide_show('stationary-form',id)">
                <i class="fas fa-pencil-ruler fa-lg"></i>
                Stationary
            </button>
            <button type="button" id="phone" class="blue" onclick="hide_show('phone-bill-form',id)">
                <i class="fas fa-mobile-alt"></i>
                Phone Bill
            </button>
        </div>
    </div>

    <div class="form hide" id="stationary-form">
        <!-- Copyer Form -->
        <form class="tc animate__animated" action="" method="POST">
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
                    <label for="">
                        <i class="far fa-calendar-alt pd-r-8"></i>
                        Date
                    </label>
                    <input type="date" name="date" id="date" placeholder="e.g 20/12/2021">
                </div>

                <div class="input_groups" style="position:relative;">
                    <label for=""><i class="fas fa-drafting-compass fa-lg pd-r-8"></i>Stationary</label>
                    <input type="search" name="stname" id="" placeholder="e.g 12">
                    <div class="select hide">
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                        <option value="Hello">dd</option>
                    </div>
                </div>

                <div class="input_groups">
                    <label for=""><i class="fas fa-calculator pd-r-8"></i>
                        Amount
                    </label>
                    <input type="text" name="amount" id="amount" placeholder="e.g 12">
                </div>

                <div class="input_groups">
                    <label for="">
                        <i class="fas fa-money-bill-wave pd-r-8"></i>
                        Price
                    </label>
                    <input type="text" name="paper_price" id="paper_price" placeholder="e.g 1000 or 2000">
                </div>

                <div></div>

                <div class="input_groups form_submit blue">
                    <button class="subBtn">
                        <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                        Submit
                    </button>
                </div>
            </div>

            
        </form>
    </div>

    <div class="form hide" id="print-form">   
        <!-- print Form -->
        <form class="tc animate__animated" action="" method="POST">
            @csrf
            @method('POST')
            
            <div class="form_header">
                <i class="fas fa-times close" onclick="close_form('print-form')"></i>
                <h3 for="" class="form_title">
                    <i class="far fa-file-powerpoint fa-2x"></i>
                    Print Sale Record Form
                </h3>
            </div>
            
            <div class="form_inputs_group">
                <div class="input_groups">
                    <label for="">
                        <i class="far fa-calendar-alt pd-r-8"></i>
                        Date
                    </label>
                    <input type="date" name="date" id="date" placeholder="e.g 20/12/2021">
                </div>

                <div class="input_groups">
                    <label for=""><i class="far fa-file pd-r-8"></i>Paper</label>
                    <div class="paperBtn">
                        <button type="button" class="paperBtn blue" id="A4"    onclick="getPaperType(id)">A4</button>
                        <button type="button" class="paperBtn blue" id="legal" onclick="getPaperType(id)">Legal</button>
                        <button type="button" class="paperBtn blue" id="A3"    onclick="getPaperType(id)">A3</button>
                    </div>
                </div>

                <div class="input_groups">
                    <label for=""><i class="fas fa-calculator pd-r-8"></i>
                        Amount
                    </label>
                    <input type="text" name="amount" id="amount" placeholder="e.g 12">
                </div>

                <div class="input_groups">
                    <label for="">
                        <i class="fas fa-money-bill-wave pd-r-8"></i>
                        Price
                    </label>
                    <input type="text" name="paper_price" id="paper_price" placeholder="e.g 1000 or 2000">
                </div>

                <div></div>

                <div class="input_groups form_submit blue">
                    <button class="subBtn">
                        <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                        Submit
                    </button>
                </div>
            </div>

            
        </form>

    </div>


    <div class="form hide" id="phone-bill-form">
        <form class="animate__animated" action="" method="POST" >
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
                    <label for="">Select Date</label>
                    <input type="date" name="date" value="Card" id="date">
                </div>
                
                <div class="input_groups">
                    <label for="" class="d_b">Operator</label>
                    <div class="operator_groups">
                        <input type="hidden" name="operator">
                        <div class="circle" onclick="getOperator('telenor')">
                            <img src="../images/telenor.svg" id="telenor" width="25px" onclick="getOperator(id)">   
                        </div>

                        <div class="circle" onclick="getOperator('mpt')">
                            <img src="../images/mpt.svg"     id="mpt"     width="25px" onclick="getOperator(id)">
                        </div>

                        <div class="circle" onclick="getOperator('ooredoo')">
                            <img src="../images/ooredoo.svg" id="ooredoo" width="25px" onclick="getOperator(id)">
                        </div>
                    </div>                  
                </div>

                <div class="input_groups">
                    <label for="">Bill</label>
                    <div class="prebill_Btn_group">
                        <button type="button" class="" id="1000"    onclick="getPredefinedBill(id)">1000</button>
                        <button type="button" class="" id="3000"    onclick="getPredefinedBill(id)">3000</button>
                        <button type="button" class="" id="5000"    onclick="getPredefinedBill(id)">5000</button>
                    </div>
                </div>

                <div class="input_groups">
                    <label for="">Amount</label>
                    <input type="text" name="amount" placeholder="e.g. 10">
                </div>
                
                <div></div>
                <div class="input_groups">
                    
                    <button class="subBtn">
                        <i class="fas fa-cloud-upload-alt pd-r-8"></i>
                        Submit
                    </button>
                </div>

            </div>

            
        </form>

    </div>

    <div class="form hide" id="computer-form">
        <!-- Stationary Form -->
        <form class="animate__animated" action="" method="POST" >
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
                    <label for="">Date</label>
                    <div>
                        <input type="date" name="date" value="Card" id="date" onchange="choose_route(id)">
                    </div>
                </div>


                <div class="input_groups mb2 ">
                    <label for="">Task</label>
                    <div>
                        <input type="text" placeholder="e.g. pencil/books" value="">
                    </div>
                </div>
                        
                <div class="input_groups mb2 ">
                    <label for="" class="d_b">Amount</label>
                    <input type="text" placeholder="e.g. 3">
                </div>

                <div class="input_groups mb2 ">
                    <label for="" class="d_b">Price</label>
                    <input type="text" placeholder="e.g. 1000">
                </div>

                <div class="input_groups">
                    <button class="subBtn">Submit</button>
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
    

    <section>
        <div class="date_price">
            
            <h2 class="">Sale Records Table</h2>

            <div class="disFlex">
                <div class="today_date">
                    <p for="" id="tdyDate"><i class="fas fa-calendar-day fa-lg"></i>Hello</p>
                </div>

                <div class="today_total">
                    <p class="total_price"><i class="fas fa-wallet fa-lg"></i>100,000</p>
                </div>
            </div>

        </div>

        <div class="table_panel">
            
        </div>
    </section>


     
        <!-- end Show Info Section -->



    @if(session('success'))
    <div class="alert animate__animated animate__slideInUp tc" id="alertMessage">
        {{ session('success')}}
    </div>
    @endif
</div>
@endsection



