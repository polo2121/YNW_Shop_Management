@extends('layout')
@push('styles')
    <link rel="stylesheet" href="./css/storeSaleRecords.css">
    <link rel="stylesheet" href="./css/storeSaleRecords_grid.css">
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

    <h2 class="title">Sale Records Management</h2>
    <div class="form-entry-buttons">
        <div class="form-entry">
            <img class="form_entry_icon" src="../images/form_entry.svg" alt="" width="40" height="40">
            <label for="" class="form_name">စာရင်းသွင်းမည်</label>
        </div>
        <div class="btn-groups">
            <button type="button" id="print" class="" onclick="hide_show('print-form',id)">
                <i class="far fa-copy fa-lg"></i>    
                Print
            </button>
            <button type="button" id="computer"   class="" onclick="hide_show('computer-form',id)">
                <i class="fas fa-laptop fa-lg"></i>
                Computer
            </button>
            <button type="button" id="stationary" class="" onclick="hide_show('stationary-form',id)">
                <i class="fas fa-pencil-ruler fa-lg"></i>
                Stationary
            </button>
            <button type="button" id="phone" class="" onclick="hide_show('phone-bill-form',id)">
                <i class="fas fa-mobile-alt fa-lg"></i>
                Phone Bill
            </button>
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
                    <input class="" type="search" name="stName" id="st-input" placeholder="e.g 12" onChange="highlight_Input(name)">
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
                    <label for="" class=""><i class="fas fa-calculator pd-r-8"></i>
                        Amount
                    </label>
                    <input class="" type="text" name="stAmount" id="st-input" placeholder="e.g 12" onChange="highlight_Input(name)">
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
                    <button type="submit" class="">
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
    
    <section>
        <div class="date_price">
            
            <h2 class="title">Sale Records Table</h2>

            <div class="disFlex ml-2">
                <div class="today_date">
                    <p for="" id="tdyDate"><i class="fas fa-calendar-day fa-lg"></i>Hello</p>
                </div>

                <div class="today_total">
                    <p class="total_price"><i class="fas fa-wallet fa-lg"></i>100,000 MMK</p>
                </div>
            </div>

        </div>

        <div class="table_panel">
            <div class="whole_table_container">
                <p class="print">Print Sale Records</p>
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
									<td class="cell100 column2">{{$pifs->paper}}</td>
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
                    </div>
				</div>
        </div>

        <div class="table_panel">
            
            <div class="whole_table_container">
                <p class="st">Stationary Sale Records</p>
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

        <div class="table_panel">
            
            <div class="whole_table_container">
                <p class="com">Computer Sale Records</p>
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

        <div class="table_panel">
            
            <div class="whole_table_container">
                <p class="ph">Phone Bill Sale Records</p>
					<div class="table-header ph-header">
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

    </section>


     
    <!-- end Show Info Section -->
</div>
@endsection



