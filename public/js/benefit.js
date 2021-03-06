let weeks  = [7,14,21]
let months = [31,62,93,124,155,186,217,248,279,310,341,372]

// let from = document.querySelectorAll('.from')
// let to = document.querySelectorAll('.to')


const formatDate = (getDate) => {
   let date = new Date(getDate)
   let mon = date.getMonth()+1
   let dat = date.getDate()
   let year = date.getFullYear()
   return year+"-"+mon+"-"+dat
}

// const formatMDY = date =>{
//    let dateMe = date.innerHTML
//    let month          = dateMe.split("-")[1]
//    let day            = dateMe.split("-")[2]
//    let year           = dateMe.split("-")[0]
//    date.innerHTML = dayjs(
//       new Date(year, month - 1)
//     ).format("MMMM DD, YYYY ");
// }

// from.forEach(date => { 
//    formatMDY(date)
// })

// to.forEach(date => { 
//    formatMDY(date)
// })

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
let que = " "
const switchBetween = id => {
   console.log(que)
   if(que !== " " )
   {
      document.getElementById(que).classList.add("hide")
   }
  console.log("down")
  let target = document.getElementById(id)
  target.classList.remove("hide")
  que = target.id
  document.getElementById("switchedValue").value = que

}
const choose_date = (id) => {
   console.log(document.getElementById("switchedValue").value)
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
const getBenefit = () => {
   let stDate = document.getElementById('abstartdate').value
   let enDate = document.getElementById('abenddate').value

   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
  });

   $.ajax({
   type: 'POST',
   url: 'benefits/actual_benefit',
   data: {stDate: formatDate(stDate),edDate: formatDate(enDate)},
   dataType: 'html',
   success: function (data) {
      console.log(data.responseText)

      $("#actualBenefit_results").html(data)
      document.getElementById("ab_dayBetween").innerHTML= generate_num_days(stDate,enDate)
   },
   error: function (data) {
      console.log(data);
  }
})


}

const calculate = () => {
   let stDate = document.getElementById('tsstartdate').value
   let enDate = document.getElementById('tsenddate').value

   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
  });
//   width: 50%;
//   margin: auto;
//   grid-template-columns: 1fr;
  $.ajax({
      type: 'POST',
      url: 'benefits/calculate_benefit',
      data: {stDate: formatDate(stDate),edDate: formatDate(enDate)},
      dataType: 'html',
      success: function (data) {
         $("#calculate_results").append(data)
         console.log(data)
         document.getElementById("ts_dayBetween").innerHTML= generate_num_days(stDate,enDate)
         document.getElementById("real_benefit").innerHTML = Intl.NumberFormat('en-US').format(document.getElementById("real_benefit").innerHTML)+" MMK"
      },
      error: function (data) {
         console.log(data);
     }
  })
}


const getMost_sale = () => {
   let stDate = document.getElementById('msstartdate').value
   let enDate = document.getElementById('msenddate').value
   console.log(stDate)
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
  });
//   width: 50%;
//   margin: auto;
//   grid-template-columns: 1fr;
  $.ajax({
      type: 'POST',
      url: 'benefits/most_sale_items',
      data: {stDate: formatDate(stDate),edDate: formatDate(enDate)},
      dataType: 'html',
      success: function (data) {
         console.log(data)
         $("#mostSale_results").html(data)
         document.getElementById("ab_dayBetween").innerHTML= generate_num_days(stDate,enDate)         
      },
      error: function (data) {
         console.log(data);
     }
  })
}




