

let forms              = document.querySelectorAll('.form')
let entry_form_buttons = document.querySelectorAll('.btn-groups button')

console.log(entry_form_buttons)
// console.log(forms)

const hide_show = (form_id,btn_id) =>{

    forms.forEach(form => {
        form.classList.add('hide')
    })

    entry_form_buttons.forEach(btn => {
        btn.classList.remove("active")
    })

    let form_name = document.getElementById(form_id)
    form_name.classList.remove("hide")

    document.getElementById(btn_id).classList.add("active")
}
const close_form = form_id => {
    entry_form_buttons.forEach(btn => {
        btn.classList.remove("active")
    })
    form = document.getElementById(form_id)
    form.classList.add('hide')
}
