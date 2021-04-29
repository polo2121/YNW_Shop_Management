//Adding Active class on buttons, text fields, date
let text_inputs      = document.querySelectorAll    ('input[type="text"]')
let buttons          = document.querySelectorAll    ('button')
let date_inputs      = document.querySelectorAll    ('input[type="date"]')
let button_inputs    = document.querySelectorAll    ('input[type = "button"]')
let operator_images  = document.querySelectorAll    ('.frame')
let predefined_bills = document.querySelectorAll    (".predefined_bill input")

//buttons
buttons.forEach(btn => {
    // console.log(input)
    btn.addEventListener('click',  () => {
        buttons.forEach(btn => {btn.classList.remove('active')} )
        btn.classList.add('active')
    })
})

//button_inputs
button_inputs.forEach(btn_input => {
    // console.log(input)
    btn_input.addEventListener('click',  () => {
        button_inputs.forEach(input => {input.classList.remove('active')} )
        btn_input.classList.add('active')
    })
})

//date

date_inputs.forEach(date_input => {
    // console.log(input)
    date_input.onchange = () => {
        console.log(date)
        if(date_input.value === "" || date_input.value === "undefined"){
            console.log("hey ther")
            date_input.classList.remove("active")
        }
        else{
            date_input.classList.add("active")
        }
    }
})


//text fields
text_inputs.forEach(text_input => {
    text_input.onchange = () => {
        console.log(text_input.value)
        if(text_input.value === "" || text_input.value === "undefined"){
            console.log("hey ther")
            text_input.classList.remove("active")
        }
        else{
            text_input.classList.add("active")
        }
    }

})

//text fields
operator_images.forEach(img => {
    img.addEventListener('click',  () => {
        operator_images.forEach(img => {img.classList.remove('active')} )
        img.classList.add('active')
    })

})

//buttons
predefined_bills.forEach(bill => {
    // console.log(input)
    bill.addEventListener('click',  () => {
        predefined_bills.forEach(bill => {bill.classList.remove('active')} )
        bill.classList.add('active')
    })
})
