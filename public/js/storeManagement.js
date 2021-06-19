//Adding Active class on buttons, text fields, date
let text_inputs        = document.querySelectorAll    ('input[type="text"]')

let secBtns            = document.querySelectorAll     ('.btnBgColor')
let date_inputs        = document.querySelectorAll    ('input[type="date"]')
let number_inputs      = document.querySelectorAll    ('input[type="number"]')


let operator_images    = document.querySelectorAll    ('.circle')
let predefined_bills   = document.querySelectorAll    (".predefined_bill input")
let sections           = document.querySelectorAll    ('section')

let formatMe           = document.querySelectorAll('.formatMe')
let del_or_not         = document.querySelectorAll    ('.del_or_not')


const removeStationaryData = () => {
    let data=document.getElementById("stid").value
}
formatMe.forEach(fm => {
    let dollarUSLocale = Intl.NumberFormat('en-US');
    price = dollarUSLocale.format(fm.innerHTML)
    fm.innerHTML = price
})


del_or_not.forEach(del => {
    del.addEventListener("click",(event) => {
        event.preventDefault()
        document.getElementById("del_confirm").classList.remove("hide")
        document.getElementById("confirm").href = del.href
    })
})

document.getElementById("cancel").addEventListener("click",() => {
    document.getElementById("del_confirm").classList.add("hide")
})

// del_or_not.forEach(del => {
//     del.addEventListener('click', event => {

        
//         event.preventDefault()
//         document.getElementById("del_confirm").classList.remove("hide")
//         document.getElementById("cancel").addEventListener("click", () => {
//             document.getElementById("del_confirm").classList.add("hide")
//         })
//         document.getElementById("confirm").addEventListener("click", () => {
//             $().unbind("click");
//         })
        
//     })
// })

//Insert Form Show and Hide
const form_showHide = (formType) => {
    console.log(formType)
    let form = document.getElementById(formType)
    console.log(form.classList)
    if(form.classList.contains("hide")){
        form.classList.remove("hide")
    }
    else{
        form.classList.replace("animate__fadeInUp","animate__fadeOutDown")
        setTimeout(() => {
            form.classList.add('hide')
        }, 800)
        // form.classList.replace("animate__fadeOutDown","animate__fadeInUp")
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
    console.log("Yahello")
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
const formatNumber = (id) => {

    let target = document.getElementById(id)
    target.style.letterSpacing = "2px";
    let new_input = target.value.replace(/[\D\s\._\-]+/g, "");
    let final_input = new_input ? parseInt( new_input, 10 ) : 0;
    if( final_input === 0 ){
        target.value = ""
    }
    else{
        target.value = final_input.toLocaleString( "en-US" )
    }
}

const searching = (id,table) => {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(id);
    console.log(input)
    filter = input.value.toUpperCase();
    table = document.getElementById(table);
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
}
