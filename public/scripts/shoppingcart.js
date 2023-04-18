const allItemSelection = document.querySelectorAll('.priceCheckbox');
const allRemoveButtons = document.querySelectorAll('.removeItem');
const balanceSumLabel = document.querySelector('#sumBalanceLabel');
let priceSum = 0;

for (const item of allItemSelection){
    item.addEventListener('click',(e) => {
        const add = e.target.checked;
        const id = e.target.id
        const price = Number.parseFloat((document.querySelector('#price_'+id).innerText).slice(0,-1).replace(',','.'));
        accumulatePriceSum(add,price);
    });
}

for(const item of allRemoveButtons){
    item.addEventListener('click',(e) => {
        document.querySelector('#price_'+e.target.id).remove()
        e.target.parentElement.parentElement.parentElement.remove();
    });
}

//add = true == addition else subtraction
function accumulatePriceSum(add, price){
    priceSum = (add)? priceSum+Number(price) : priceSum-Number(price);
    if(priceSum < 0){ priceSum = 0; }
    balanceSumLabel.innerText = String(priceSum.toFixed(2)).replace('.',',') + '€';
}

