//Adding Active class on buttons, text fields, date
let text_inputs        = document.querySelectorAll    ('input[type="text"]')

let secBtns            = document.querySelectorAll     ('.btnBgColor')
let date_inputs        = document.querySelectorAll    ('input[type="date"]')
let number_inputs      = document.querySelectorAll    ('input[type="number"]')

let operator_images    = document.querySelectorAll    ('.circle')
let predefined_bills   = document.querySelectorAll    (".predefined_bill input")
let sections           = document.querySelectorAll    ('section')

const removeStationaryData = () => {
    let data=document.getElementById("stid").value
    console.log(data)
}

//Insert Form Show and Hide
const form_showHide = (formType) => {
    console.log(formType)
    let form = document.getElementById(formType)
    console.log(form.classList)
    if(form.classList.contains("hide")){
        form.classList.remove("hide")
    }
    else{
        form.classList.add("hide")
    }     
}
// End 

//Section Changer buttons

//Highlight Function and Remove
const highlight_Me = (highlightMe) => {
    highlightMe.classList.add("active-input")
}
const remove_highlight = (removeMe) => {
    removeMe.classList.remove("active-input")
}

//date
date_inputs.forEach(date_input => {
    console.log(date_input)
    date_input.onchange = () => {
        if(date_input.value === "" || date_input.value === "undefined")
            {remove_highlight(date_input)}
        else
            { highlight_Me(date_input) }
    }
})
//text fields
text_inputs.forEach(text_input => {
    text_input.onchange = () => {
        if(text_input.value === "" || text_input.value === "undefined")
            { remove_highlight(text_input) }
        else
            { highlight_Me(text_input) }
    }
})

//number fields
number_inputs.forEach(number_input => {
    number_input.onchange = () => {
        console.log(number_input.value)
        if(number_input.value === "" || number_input.value === "undefined")
            { remove_highlight(number_input) }
        else
            { highlight_Me(number_input) }
    }
})

//Operator Selection fields
const getOperator       = id => { 
    document.querySelector('input[name="operator"]').value = id;
    operator_images.forEach(img => {
    img.addEventListener('click',  () => {
        operator_images.forEach(img => {img.classList.remove('circleActive')} )
        img.classList.add('circleActive')
    })

})
}

//buttons
predefined_bills.forEach(bill => {
    // console.log(input)
    bill.addEventListener('click',  () => {
        predefined_bills.forEach(bill => {bill.classList.remove('active')} )
        bill.classList.add('active')
    })
})

const removeAlert = () => {
    document.getElementById('alertMessage').classList.remove("animate__slideInDown")
    document.getElementById('alertMessage').classList.add("animate__slideOutUp")
}
window.onload = function() {
    setTimeout(removeAlert, 4000)
}
const clearInputs = () => {
    date_inputs.forEach(date=> {
        date.value=""
        remove_highlight(date)
    })
    text_inputs.forEach(text => {
        text.value =""
        remove_highlight(text)
    })
    number_inputs.forEach(number => {
        number.value =""
        remove_highlight(number)
    })
    // text_inputs.forEach()
    operator_images.forEach(img => {
        operator_images.forEach(img => {img.classList.remove('circleActive')} )
    })
    document.querySelectorAll    ('input[name="operator"]')[0].defaultValue = ""

}

