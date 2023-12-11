
function validatSignup() {

    clearErrorMessages();

    let name = document.forms["signupForm"]["name"].value;
    let email = document.forms["signupForm"]["email"].value;
    let username = document.forms["signupForm"]["username"].value;
    let password = document.forms["signupForm"]["password"].value;
    

    let nameError = document.getElementById('nameError');
    let emailError = document.getElementById('emailError');
    let usernameError = document.getElementById('usernameError');
    let passwordError = document.getElementById('passwordError');
    

    nameError.innerHTML = '';
    emailError.innerHTML = '';
    usernameError.innerHTML = '';
    passwordError.innerHTML = '';
    

    let hasErrors = false;

    if (name === "") {
        nameError.innerHTML = "Name is required";
        hasErrors = true;
    } 


    if (email === "") {
        emailError.innerHTML = "Email is required";
        hasErrors = true;
    } 


    if (username === "") {
        usernameError.innerHTML = "Username is required";
        hasErrors = true;
    } 


    if (password === "") {
        passwordError.innerHTML = "Password is required";
        hasErrors = true;
    } 

    return !hasErrors;
}

function clearErrorMessages() {
    document.getElementById('nameError').innerHTML = '';
    document.getElementById('emailError').innerHTML = '';
    document.getElementById('usernameError').innerHTML = '';
    document.getElementById('passwordError').innerHTML = '';
}