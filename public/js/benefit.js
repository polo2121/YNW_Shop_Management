let weeks  = [7,14,21]
let months = [31,62,93,124,155,186,217,248,279,310,341,372]

const dwm = (id) =>{
   let target =  document.getElementById(id)
   document.getElementById("dwm")
}

const Open_Close = (id) => {
   let target = document.getElementById(id)
   target.classList.replace("animate__slideInUp","animate__fadeOut")
   setTimeout(() => {
      target.classList.add("hide");
      target.classList.replace("animate__fadeOut","animate__slideInUp")
  }, 1000)
   
}

const choose_date = (id) => {

   document.getElementById("calendar_type").innerHTML = id
   calendar.classList.remove("hide")
   // window.scrollTo(0, 200);
   window.scrollTo({
      top: 200,
      behavior: 'smooth',
    });
   
}
// let selected_date  = document.getElementById(id).value
// let date         = new Date(selected_date);
// let m            = date.toLocaleString('en-us', { month: 'long' });
// let d            = selected_date.split("-")[1]
// let y            = selected_date.split("-")[0]
// document.getElementById(id)
// document.getElementById(id).value = m+" "+d+", "+y

const formatDate = (getDate) => {
   let date = new Date(getDate)
   let mon = date.getMonth()+1
   let dat = date.getDate()
   let year = date.getFullYear()
   return year+"-"+mon+"-"+dat
}

const generate_num_days = (start,end) =>{
   let date1 = new Date(start);
   let date2 = new Date(end);
   let dit = date2.getTime() - date1.getTime();
   let did = dit / (1000 * 3600 * 24)
   if(date1.getMonth()+1 === 6){
      did+=1;
   }
   if(did < 7 ){
      did  = did+" days"
   }
   else if(weeks.includes(did)){
      did = did/7+" weeks"
   }
   else if(months.includes(did) ){
      did = did/31+" month"
   }
   else{
      did = did+ " days"
   }
   return did
}
// console.log(Difference_In_Days)

const calculate = () => {
   let stDate = document.getElementById('start date').value
   let enDate = document.getElementById('end date').value

   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
  });
  $.ajax({
      type: 'GET',
      url: 'benefits/calculate_benefit',
      data: {stDate: formatDate(stDate),edDate: formatDate(enDate)},
      dataType: 'json',
      success: function (data) {
         let ddd = 
         "<div class='total_sale_card'>"                    +
            "<h1>Total Sale</h1>"                           +
            "<div>"                                         +
               "<h5>"                                       +
                  "From"                                    +
                  " <span>"+stDate+"<span>"         +
               "</h5>"                                      +
               "<i class='fas fa-arrows-alt-h fa-lg'>"      +
                  "<span>"+generate_num_days(stDate,enDate) +"<span>"                       +                  
               "</i>"                                       +

               "<h5>"                                       +
                  "To"                                      +
                  " <span>"+enDate+"<span>"                 +
               "</h5>"                                      +
               "<i class='fas fa-equals fa-lg'></i>"        +                 
               "<h5>"                                       +
                  "Receieved Amount"                        +
                  "<span class='value'>"+Intl.NumberFormat('en-US').format(data.benefit)+" MMK"+"<span>" +
               "</h5>"                                                                                   +
            "</div>"                                                                                     +
         "</div>"
         $("#calculate_results").append(ddd)
         console.log(data.benefit)
      },
      error: function (data) {
         console.log(data);
     }
  })
}



