'use strict'
function toggleShoppingCart(e){
    const xhttp = new XMLHttpRequest();
    if(e.children[0].innerText == '+'){
        e.children[0].innerHTML = '&#10004;';
        xhttp.open("GET", "/user/"+ $('#user_id').val() +"/addItem/"+e.id);
        xhttp.onload = function() {
            const xmlDoc = JSON.parse(xhttp.responseXML);
            console.log(xmlDoc);
        }
        xhttp.send();
    }else{
        e.children[0].textContent = '+';
        xhttp.open("GET", "/user/"+ $('#user_id').val() +"/removeItem/"+e.id);
        xhttp.onload = function() {
            const xmlDoc = JSON.parse(xhttp.responseXML);
            console.log(xmlDoc);
        }
        xhttp.send();
    }

}
