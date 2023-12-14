// prepare for the success/error message for user submit -- does not work currently as the message will come from the server side (php)

// function setFormMessage(formType, messageType, messageContent) {
//     const messageElement = formType.querySelector(".form-message");

//     messageElement.textContent = messageContent;
//     messageElement.classList.remove("form-message-success", "form-message-error");
//     messageElement.classList.add("form-message-${messageType}");
// }

// prepare for the error message for user input in individual input field

function setInputError(inputElement, messageContent) {
    inputElement.classList.add("form-input-error");
    inputElement.parentElement.querySelector(".form-input-error-message").textContent = messageContent;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form-input-error");
    inputElement.parentElement.querySelector(".form-input-error-message").textContent = "";
}

// actual operation

document.addEventListener("DOMContentLoaded", () => {
    const popupForm = document.querySelector(".popup");
    const loginForm = document.querySelector("#login");
    const signupForm = document.querySelector("#signup");

    // show login and signup form

    document.querySelector("#show-login").addEventListener("click", e => {
        e.preventDefault();
        popupForm.classList.remove("form-hidden");
        signupForm.classList.add("form-hidden");
        loginForm.classList.remove("form-hidden");

        document.querySelector("main").classList.add("overlay");
    })

    document.querySelector("#show-signup").addEventListener("click", e => {
        e.preventDefault();
        popupForm.classList.remove("form-hidden");
        signupForm.classList.remove("form-hidden");
        loginForm.classList.add("form-hidden");

        document.querySelector("main").classList.add("overlay");
    })

    // close login and signup form

    document.querySelector("#login .close-btn").addEventListener("click", e => {
        e.preventDefault();
        popupForm.classList.add("form-hidden");

        document.querySelector("main").classList.remove("overlay");
    })

    document.querySelector("#signup .close-btn").addEventListener("click", e => {
        e.preventDefault();
        popupForm.classList.add("form-hidden");

        document.querySelector("main").classList.remove("overlay");
    })

    // switch between login and signup

    document.querySelector("#linkSignup").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form-hidden");
        signupForm.classList.remove("form-hidden");
    })

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form-hidden");
        signupForm.classList.add("form-hidden");
    })

    // send the error message for individual input field if user input is not appropriate
    
    document.querySelectorAll(".form-input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id === "password" && e.target.value.length > 0 && e.target.value.length < 8) {
                setInputError(inputElement, "Password must be at least 8 characters.")
            }
        })

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        })
    })
})