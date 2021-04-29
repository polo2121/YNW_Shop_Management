
const  match = ["",null,0] 

const price = {
        A4          : 25,
        A4_pass     : 50,
        A4_back     : 30,
        legal       : 30,
        legal_back  : 40,
        A3          : 60,
        A3_back     : 120
}
const record = {
        A4          : 0,
        A4_back     : 0,
        legal       : 0,
        legal_back  : 0,
        A3          : 0,
        A3_back     : 0

}
const Show = element => {
    return element.style.display = "grid "
}
const Hide = element => {
    return element.style.display = "none"
}
const calculate_total = () => {

    let all = 0
    for( let name in record){
        all += record[name]
    }
    
    return document.getElementById("total_price_all").value   = all
}

const getValue = (item) => {
    
    amount                    = Number(document.getElementById(item).value)
    items = document.getElementById(item+"_item")
    console.log(items)
    
    if(match.includes(amount) !== true){
        Show(items)
        document.getElementById(item+"_amount").textContent = amount
        total_price  = amount * price[item]
        document.getElementById(item+"_total_price").value  = total_price
        record[item] = total_price
    }
    else {
        Hide(items)
        record[item] = 0
    }   
    calculate_total()
    
}
const changePrice = (price,item) => {
    
    new_price                                          = Number(document.getElementById(item).value) * Number(price)
    document.getElementById(item+"_total_price").value = new_price
    record[item]                                       = new_price
    calculate_total()


}
