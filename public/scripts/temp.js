'use strict'
const html = "<div class='w-50 h-50 absolute top-0 left-0 z-50'> <p>accept cookie</p> <button type='submit' id='accept'>Accept</button>"

if(!document.cookie.includes('accept')){
    document.body.innerHTML += html;
}

document.querySelector('#accept').addEventListener('click', () => {
    document.cookie = 'accept=1;' + document.cookie;
    location.reload()
});

console.log(document.cookie)
