let displayingAccountOptions = false;
const accountOptions = document.getElementById("account");
const accountButton = document.getElementById("accountButton");

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


const inputFullNameRegister = document.getElementById("fullNameRegister");
const inputPasswordRegister = document.getElementById("passwordRegister");
const inputPasswordSubmitRegister = document.getElementById(
    "passwordSubmitRegister"
);
const inputEmailRegister = document.getElementById("emailRegister");


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
    hideSignInContainer();
    showRegisterContainer();
    registerContainer.style.display = "flex";
});

signInButton.addEventListener('click', (e)=> {
    let data = {email: inputEmailSignIn.value, password : inputPasswordSignIn.value };
    const csrfToken = document.getElementById("csrf_token_signin").value

    fetch("/login", {
        method: "post",
        credentials: "same-origin",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": csrfToken
        },
        body: JSON.stringify(data)
    }).then(res => {
        console.log("Request complete! response:", res);
    });
})
