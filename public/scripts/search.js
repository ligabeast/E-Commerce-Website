'use strict'
function markShoppingCart(e){
    if(e.children[0].innerText == '+'){
        e.children[0].innerHTML = '&#10004;';
    }else{
        e.children[0].textContent = '+';
    }
}
