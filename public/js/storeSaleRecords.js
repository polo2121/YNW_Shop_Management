
let record_form = ""
const today = new Date()
document.getElementById("tdyDate").innerHTML = today.toDateString()

let selectBtn = document.querySelectorAll    (".selectBtn")
let forms = document.querySelectorAll    ("form")

selectBtn.forEach( (btn,num) => {
    // console.log(input)
    btn.addEventListener('click',  () => {
        selectBtn.forEach(btn => {
            btn.classList.remove('active')
        })
        forms.forEach(form => {
            form.classList.add('hide')
            form.classList.remove('animate__fadeInDown')
        })
        btn.classList.add('active')
        forms[num].classList.remove("hide");
        forms[num].classList.add("animate__fadeInDown")
    })
})
// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close");

// window.onclick = function(event) {

//     if(event.target === CopyModal)            { CopyModal.style.display         ="none";  }
//     else if(event.target == computerModal)    { computerModal.style.display     ="none";  }
//     else if(event.target === stationaryModal) { stationaryModal.style.display   ="none";  }
//     else if(event.target === phoneModal)      { phoneModal.style.display        = "none"; }

// }

const getPaperType = id => {
    document.querySelector('input[name = "paperType"]').value =  id
}

const getBillingMethod  = id => { document.querySelector('input[name="billing_method"]').value = id; console.log(id)}
const getOperator       = id => { document.querySelector('input[name="operator"]').value = id;console.log(id) }
const getPredefinedBill = id => { document.querySelector('input[name="predefined_bill"]').value = id;console.log(id) }


const removeAlert = () => {
    document.getElementById('alertMessage').classList.remove("animate__slideInUp")
    document.getElementById('alertMessage').classList.add("animate__slideOutDown")
}

window.onload = function() {
    setTimeout(removeAlert, 4000)
}

