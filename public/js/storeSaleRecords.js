

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
    console.log(id)
    if(paper_record !== ""){
        document.getElementById(paper_record).classList.remove("print-active")
    }
    let paperType = document.getElementById("paper")
    paperType.value = id
    document.getElementById(id).classList.add("print-active")
    paper_record = id
}

let bill_record ="";
const getPreDefinedBill = id => {
    if(bill_record !== ""){
        document.getElementById(bill_record).classList.remove("phone-active")
    }
    console.log(id)
    let bill = document.getElementById("bill")
    bill.value = id
    document.getElementById(id).classList.add("phone-active")
    bill_record = id
}

let op_record =""
const getOperator = id => {
    if(op_record !== ""){
        document.getElementById(op_record).classList.remove("operator-active")
    }
    console.log(id)
    let op = document.getElementById("operator")
    op.value = id
    document.getElementById(id).classList.add("operator-active")
    op_record = id

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
$('#st_amount').on( "keyup", function( event ) {
    // 1.
    var selection = window.getSelection().toString();
    console.log(selection)
    if ( selection !== '' ) {
        return;
    }

    var $this = $( this );
    var input = $this.val();
    
    var input = input.replace(/[\D\s\._\-]+/g, "");
    
    input = input ? parseInt( input, 10 ) : 0;
    
    // 4
    $this.val( function() {
        return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
    } );

});
