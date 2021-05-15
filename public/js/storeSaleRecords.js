

let forms              = document.querySelectorAll('.form')
let entry_form_buttons = document.querySelectorAll('.btn-groups button')
let print_inputs        = document.querySelectorAll    ('input')


console.log(entry_form_buttons)
// console.log(forms)

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

let paper_record ="";
const getPaperType = id => {
    if(paper_record !== ""){
        document.getElementById(record).classList.remove("print-active")
    }
    let paperType = document.getElementById("paper")
    paperType.value = id
    document.getElementById(id).classList.add("print-active")
    paper_record = id
}

let bill_record ="";
const getPreDefinedBill = id => {
    if(bill_record !== ""){
        document.getElementById(bill_record).classList.remove("print-active")
    }
}

const highlight_Input = (name,id) => {
   input =  document.querySelector('input[name='+name+']')
   if(input.value === "" || input.value === "undefined") { 
        input.classList.remove(input.id+"-active") 
    }
   else{    
        input.classList.add(input.id+"-active")
    }
}
// print_inputs.forEach(input => {
 
//     input.onchange = () => {
//         if(input.value === "" || input.value === "undefined")
//             { remove_highlight(input,input.id) }
//         else
//             { highlight_Me(input,input.id) }
//     }
// })

const close_form = form_id => {
    entry_form_buttons.forEach(btn => {
        btn.classList.remove("active")
    })
    form = document.getElementById(form_id)
    form.classList.add('hide')
}
