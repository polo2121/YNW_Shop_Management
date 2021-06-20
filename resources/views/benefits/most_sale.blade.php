<div class="most_sale_card">
    <div class="ms_UW"></div><h1>Most Purchased Items</h1>

        <div class="dates">
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
        <div id="most_sale_results">
        @for($n=0;$n < count($msi);$n++)
            <div class="rank">
                <h1 class="rank_num">{{$n + 1}}</h1>
                <div class="rank_results">
                    <label for="" class="item_name">{{$msi[$n]->name}}</label>
                    <label for="" class="item_name">Amount: {{$msi[$n]->total}}</label>
                </div>
            </div>

        @endfor
          
        </div>
    <div class="ms_LW"></div>
</div>