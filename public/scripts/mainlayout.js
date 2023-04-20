'use strict'
let displayingAccountOptions = false;
const accountOptions = document.getElementById("account");
const accountButton = document.getElementById("accountButton");
const accountButtonLabel = document.querySelector(".accountButtonLabel");

let displayingSignIn = false;
const signInButton = document.getElementById("signInButton");
const signInContainer = document.getElementById("signInContainer");
const signInBackground = document.getElementById("signInBackground");

const inputPasswordSignIn = document.getElementById("passwordSignIn");
const inputEmailSignIn = document.getElementById("emailSignIn");

let displayingRegister = false;
const registerLabel = document.getElementById("registerLabel");
const registerContainer = document.getElementById("registerContainer");
const registerBackground = document.getElementById("registerBackground");
const registerButton = document.getElementById("registerButton");
const registerForm = document.getElementById('registerForm');

const inputFullNameRegister = document.getElementById("fullNameRegister");
const inputPasswordRegister = document.getElementById("passwordRegister");
const inputPasswordSubmitRegister = document.getElementById(
    "passwordSubmitRegister"
);
const inputEmailRegister = document.getElementById("emailRegister");

const successfulLoginDiv = document.createElement("div");
successfulLoginDiv.classList.add("fixed","z-50","flex", "top-0", "left-0", "w-fit", "p-4", "m-4", "text-white", "rounded-lg","bg-green-600");
successfulLoginDiv.innerHTML = "    <svg aria-hidden=\"true\" class=\"flex-shrink-0 w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path></svg>\n" +
    "    <span class=\"sr-only\">Info</span>\n" +
    "    <div class=\"ml-3 text-sm\">\n" +
    "        <span class=\"font-bold text-md\">Successful, you are now logged in!</span>\n" +
    "        <span class=\"font-base\"> Good job, you can now browse and find your next nice shopping decision</span>\n" +
    "    </div>\n" +
    "    <button onclick=\"closeNotification(this)\" type=\"button\" class=\" ml-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8\" data-dismiss-target=\"#alert-3\" aria-label=\"Close\">\n" +
    "        <span class=\"sr-only\">Close</span>\n" +
    "        <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>\n" +
    "    </button>";

const successfulLogoutDiv = document.createElement("div");
successfulLogoutDiv.classList.add("fixed","z-50","flex", "top-0", "left-0", "w-fit", "p-4", "m-4", "text-white", "rounded-lg","bg-green-600");
successfulLogoutDiv.innerHTML = "    <svg aria-hidden=\"true\" class=\"flex-shrink-0 w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path></svg>\n" +
    "    <span class=\"sr-only\">Info</span>\n" +
    "    <div class=\"ml-3 text-sm\">\n" +
    "        <span class=\"font-bold text-md\">Successful, you are now loged out.</span>\n" +
    "        <span class=\"font-base\"> We are looking forward to the next time</span>\n" +
    "    </div>\n" +
    "    <button onclick=\"closeNotification(this)\" type=\"button\" class=\" ml-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8\" data-dismiss-target=\"#alert-3\" aria-label=\"Close\">\n" +
    "        <span class=\"sr-only\">Close</span>\n" +
    "        <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>\n" +
    "    </button>";

const successfulLRegistered = document.createElement("div");
successfulLRegistered.classList.add("fixed","z-50","flex", "top-0", "left-0", "w-fit", "p-4", "m-4", "text-white", "rounded-lg","bg-green-600");
successfulLRegistered.innerHTML = "    <svg aria-hidden=\"true\" class=\"flex-shrink-0 w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path></svg>\n" +
    "    <span class=\"sr-only\">Info</span>\n" +
    "    <div class=\"ml-3 text-sm\">\n" +
    "        <span class=\"font-bold text-md\">Successful, you are now registered.</span>\n" +
    "        <span class=\"font-base\"> Please go under Profile to Log in your first time!</span>\n" +
    "    </div>\n" +
    "    <button onclick=\"closeNotification(this)\" type=\"button\" class=\" ml-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8\" data-dismiss-target=\"#alert-3\" aria-label=\"Close\">\n" +
    "        <span class=\"sr-only\">Close</span>\n" +
    "        <svg aria-hidden=\"true\" class=\"w-5 h-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z\" clip-rule=\"evenodd\"></path></svg>\n" +
    "    </button>";

const loggedInOptions = '        <p class="hover:translate-x-0.5 transition"\n onclick="logout()"\n' +
    '                                id="logOut"\n' +
    '                            >\n' +
    '                                Abmelden\n' +
    '                            </p>'+
    '                            <a href="../shoppingCart" class="hover:translate-x-0.5 transition">Warenkorb</a>\n' +
    '                            <p class="hover:translate-x-0.5 transition">Account Einstellungen</p>\n' +
    '                            <p class="hover:translate-x-0.5 transition">Meine Käufe</p>\n' +
    '                            <a href="../sell" class="hover:translate-x-0.5 transition">Meine Verkäufe</a>\n' +
    '                            <p class="hover:translate-x-0.5 transition">Beobachtungsliste</p>\n' +
    '                            <p class="hover:translate-x-0.5 transition">Nachrichten</p>';

const logOutButton = document.createElement('p');
logOutButton.classList.add("hover:translate-x-0.5", "transition");
logOutButton.onclick = showSignInContainer;
logOutButton.id = "signInLabel"
logOutButton.textContent = "Anmelden";

const incorrectCredentials = document.getElementById('errorMessage');
const signInForm = document.getElementById('signInForm');

function showAccountOptions() {
    accountOptions.style.display = "flex";
    displayingAccountOptions = true;
}

function hideAccountOptions() {
    accountOptions.style.display = "none";
    displayingAccountOptions = false;
}

function hideSignInContainer() {
    signInContainer.style.display = "none";
    displayingSignIn = false;
}

function showSignInContainer() {
    hideErrorMessageSignIn();
    signInContainer.style.display = "flex";
    inputEmailSignIn.value = "";
    inputPasswordSignIn.value = "";
    displayingSignIn = true;
}

function hideRegisterContainer() {
    displayingRegister = false;
    registerContainer.style.display = "none";
}

function showRegisterContainer() {
    displayingRegister = true;
    inputFullNameRegister.value = "";
    inputPasswordRegister.value = "";
    inputPasswordSubmitRegister.value = "";
    inputEmailRegister.value = "";
    registerContainer.style.display = "flex";
}

document.addEventListener("click", (e) => {
    //opend AccountOptions and clicking outside
    if (displayingAccountOptions && e.target.id != accountButton.id)
        hideAccountOptions();
});

accountButton.addEventListener("click", (e) => {
    if (displayingAccountOptions) hideAccountOptions();
    else showAccountOptions();
});

signInBackground.addEventListener("click", (e) => {
    hideSignInContainer();
});

registerBackground.addEventListener("click", (e) => {
    hideRegisterContainer();
});

registerLabel.addEventListener("click", (e) => {
    e.preventDefault();
    hideSignInContainer();
    showRegisterContainer();
    registerContainer.style.display = "flex";

});

signInButton.addEventListener('click', (e)=> {

    if(signInForm.checkValidity()) {
        e.preventDefault();
        let data = {email: inputEmailSignIn.value, password: inputPasswordSignIn.value};
        const csrfToken = document.getElementById("csrf_token_signin").value

        fetchData(csrfToken, data,'/login','post')
            .then((response) => {
                return response.json();
            })
            .then((response) => {
                console.log(response);
                if (response.authenticate) {  //successful
                    hideSignInContainer();
                    accountOptions.innerHTML = loggedInOptions;
                    accountButtonLabel.textContent = response.name
                } else {                      //not successful
                    showErrorMessageSignIn();
                }
            })
            .catch((error) => {
                console.log("SERVER ERROR");
            });
    }
})

function showErrorMessageSignIn() {
    inputPasswordSignIn.value = "";
    incorrectCredentials.style.display = "block";
}

function hideErrorMessageSignIn() {
    incorrectCredentials.style.display = "none";
}

function closeNotification(e){
    e.parentElement.remove();
}


function logout(){
    const csrfToken = document.getElementById("csrf_token_signin").value
    fetchData(csrfToken, [],'/logout','get')
        .then((res) => {
            return res.json();
        })
        .then((res) => {
            if(res.successful){
                document.body.appendChild(successfulLogoutDiv);
                accountButtonLabel.textContent = "Account"
                accountOptions.innerHTML = "";
                accountOptions.appendChild(logOutButton);
            }
            else {                      //not successful
                showErrorMessageSignIn();
            }
        })
        .catch((error) => {
            console.log("SERVER ERROR");
        });
}

inputPasswordSubmitRegister.addEventListener('keyup', (e) => {
    const password = inputPasswordRegister.value;
    const passwordSubmit = inputPasswordSubmitRegister.value;

    if(passwordSubmit.length === 0 || password.slice(0,passwordSubmit.length) === passwordSubmit){
        inputPasswordSubmitRegister.style.borderColor = 'rgb(107 114 128 / var(--tw-border-opacity))';
        inputPasswordSubmitRegister.style.borderBottomWidth = '2px';
    }
    else{
        inputPasswordSubmitRegister.style.borderColor = 'red';
        inputPasswordSubmitRegister.style.borderBottomWidth = '4px';
    }
});

async function fetchData(csrfToken, data, path, method){
    if(data.length !== 0) {
        return await fetch(path, {
            method: method,
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": csrfToken
            },
            body: JSON.stringify(data),
        });
    }
    else{
        return await fetch(path, {
            method: method,
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": csrfToken
            },
        });
    }

}

registerButton.addEventListener('click',(e) => {
    if(registerForm.checkValidity()){
        e.preventDefault();
        if(inputPasswordRegister.value === inputPasswordSubmitRegister.value){ //passwords match
            let data = {email: inputEmailRegister.value, password: inputPasswordRegister.value, name: inputFullNameRegister.value};
            const csrfToken = document.getElementById("csrf_token_signin").value;
            fetchData(csrfToken, data, '/register','post')
                .then(res => res.json())
                .then(res => {
                    console.log(res);
                    if(res.successful){
                        hideRegisterContainer();
                        document.body.appendChild(successfulLRegistered);
                    }else{
                        showErrorMessage();
                    }
                });
        }
    }

});

function showErrorMessage(){
    alert("FALSE");
}
