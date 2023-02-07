document.getElementById("email-login").addEventListener("blur", ()=>{
    validateEmail(document.querySelector("#email-login"));
})

document.getElementById("password").addEventListener("blur", ()=>{
    validatePassword(document.querySelector("#password"));
})
