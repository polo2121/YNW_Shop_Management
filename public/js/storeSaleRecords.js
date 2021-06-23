

let forms              = document.querySelectorAll('.form')
let entry_form_buttons = document.querySelectorAll('.btn-groups button')
let tdy_date = document.querySelectorAll('.tdy_date')

let print_inputs       = document.querySelectorAll('input')
let is                 = document.querySelectorAll('insert-submit')
let formatMe           = document.querySelectorAll('.formatMe')


console.log(entry_form_buttons)
// console.log(forms)

let today = new Date();
let tdate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
tdy_date.forEach( date => {
    date.value = tdate 
})

const getMdy = () => {
    let week  = today.toDateString().split(' ')[0]
    let mon   = today.toDateString().split(' ')[1]
    let day   = today.toDateString().split(' ')[2]
    // let year  = today.toDateString().split(' ')[3]
    return week+", "+mon+" "+day
}
document.getElementById("tdyDate").innerHTML = getMdy()

formatMe.forEach(fm => {
    // console.log(typeof(fm.innerHTML))
    // fm = fm.innerHTML.split("")
    let dollarUSLocale = Intl.NumberFormat('en-US');
    console.log(fm.innerHTML)

    price = dollarUSLocale.format(fm.innerHTML)
    fm.innerHTML = price
})

const hide_show = (form_id,btn_id) =>{

    forms.forEach(form => {
        form.classList.add('hide')
    })

    entry_form_buttons.forEach(btn => {
        btn.classList.remove(btn.id+"-active")
    })

    let form_name = document.getElementById(form_id)
    form_name.classList.remove("hide")

    document.getElementById(btn_id).classList.add(btn_id+"-active")
}

const rotationAni = (form_id,btn_id) => {
    
    let target_btn  = document.getElementById(btn_id)
    let target_form = document.getElementById(form_id)

    console.log(btn_id)
    if( target_btn.style.transform !== "rotate(314deg)"){
        target_form.classList.remove('hide')
        // setTimeout()
        // target_form.classList.replace("animate__fadeInUp","animate__fadeOutDown")
        target_btn.style.transform ="rotate(314deg)"
    }
    else{ 
        target_form.classList.replace("animate__fadeInUp","animate__fadeOutDown")
        target_btn.style.transform ="rotate(0deg)"
        setTimeout(() => {
            target_form.classList.add('hide')
        target_form.classList.replace("animate__fadeOutDown","animate__fadeInUp")

        
        }, 500)
        // target_form.classList.add('hide')
        // target_form.classList.replace("animate__slideInDown","animate__slideInUp")
    }
    target_btn.style.transition = "transform 500ms ease-in-out"
    
}


const removeAlert = () => {
    document.getElementById('alertMessage').classList.remove("animate__slideInDown")
    document.getElementById('alertMessage').classList.add("animate__slideOutUp")
}
window.onload = function() {
    setTimeout(removeAlert, 4000)
}
const close_form = form_id => {
    entry_form_buttons.forEach(btn => {
        btn.classList.remove("active")
    })
    form = document.getElementById(form_id)
    form.classList.add('hide')
}
const formatNumber = (id) => {

    let target = document.getElementById(id)
    target.style.letterSpacing = "3px";
    let new_input = target.value.replace(/[\D\s\._\-]+/g, "");
    let final_input = new_input ? parseInt( new_input, 10 ) : 0;
    if( final_input === 0 ){
        target.value = ""
    }
    else{
        target.value = final_input.toLocaleString( "en-US" )
    }
}

