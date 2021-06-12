
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
let calendar = document.getElementById("calendar")
let calendar_days = document.querySelectorAll('.calendar-day')

calendar_days.forEach( day => {
   day.addEventListener('click',(id)=> {
      let clicked_date   = day.innerHTML
      let selected_month = document.getElementById('selected-month').innerHTML
      let mon            = selected_month.split(" ")[0]
      let year           = selected_month.split(" ")[1]
      console.log(id)
      let target = document.getElementById("calendar_type").innerHTML.toLowerCase()
      console.log(target)
      document.getElementById(target).value = mon + " " + clicked_date + ", " + year
      calendar.classList.add("hide")

   })
})
const choose_date = (id) => {

   document.getElementById("calendar_type").innerHTML = id
   calendar.classList.remove("hide")
   // window.scrollTo(0, 200);
   window.scrollTo({
      top: 200,
      behavior: 'smooth',
    });
   
}

const formatDate = (getDate) => {
   let date = new Date(getDate)
   let mon = date.getMonth()+1
   let dat = date.getDate()
   let year = date.getFullYear()
   return year+"-"+mon+"-"+dat
}



const calculate = () => {
   let stDate = document.getElementById('start date').value
   let enDate = document.getElementById('end date').value

   console.log(formatDate(stDate))

   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
  });
  $.ajax({
      type: 'GET',
      url: 'benefits/calculate_benefit',
      data: {stDate: stDate,edDate: enDate},
      dataType: 'json',
      success: function (data) {
         console.log(data)
      },
      error: function (data) {
         console.log(data);
     }
  })
}