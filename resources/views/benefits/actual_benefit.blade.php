  
<div class="actual_benefit_card" id="abc">
    <div class="ab_UpperWave"></div>
    <h1>Actual Benefit</h1>

    <div id="actual_benefit_results">
        <div>
            <h5>                                       
                From                                    
                <span class="from">{{$st}}<span>                 
            </h5>
            <i class='fas fa-arrows-alt-h fa-lg' style="text-align:center;"><br>     
                <span id="ab_dayBetween"><span>             
            </i> 
            <h5>                                       
                To                                 
                <span class="to">{{$ed}}<span>                 
            </h5>
        </div>

        <table class="abTable" width="100%">
            <thead>
                <tr>
                    <th>Items</th>
                    <th>Amount</th>
                    <th></th>
                    <th></th>
                    <th colspan="">Total Benefit</th>

                </tr>
            </thead>
            <tbody id="tbody">
                @foreach($abs as $ab)
                <tr>
                    <td>{{$ab->name}}</td>
                    <td>{{$ab->amount}}</td>
                    <td></td>
                    <td></td>
                    <td>{{$ab->benefit}}</td>
                </tr>
                @endforeach
                
                <tr>
                    <th colspan="4" style="text-align:right;font-size: 1.3rem;">Final Total</th>
                    <td style="text-align:right;font-size: 1.3rem;font-weight: 600;">{{$total_benefit}} MMK</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="ab_LowerWave"></div>
</div>   