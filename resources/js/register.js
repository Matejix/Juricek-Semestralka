import axios from "axios";

const register = document.querySelector("#registerForm");
if (register) {
    register.addEventListener("submit", function (e) {
        let firstname = document.getElementById("firstname").value;
        let lastname = document.getElementById("lastname").value;
        let username = document.getElementById("username_reg").value;
        let email = document.getElementById("email").value;
        let password = document.getElementById("password_reg").value;
        let passConfirm = document.getElementById(
            "password_confirmation"
        ).value;
        let errorLog = document.getElementById("error_log");

        e.preventDefault();

        if (
            firstname === "" ||
            lastname === "" ||
            username === "" ||
            email === "" ||
            password === "" ||
            passConfirm === ""
        ) {
            console.log("EMPTY");
            createError(["Please fill all fields"], errorLog);
            return;
        }

        if (password !== passConfirm) {
            createError(["Passwords do not match"], errorLog);
            return;
        }

        axios
            .post(location.origin + "/api/register", {
                firstname,
                lastname,
                username,
                email,
                password,
                password_confirmation: passConfirm,
            })
            .then((response) => {
                if (
                    response.status === 200 &&
                    response.data.operation === "SUCCESS"
                ) {
                    createError([], errorLog);
                    //location.replace(location.origin);
                }
                console.log(response);
            })
            .catch((error) => {
                console.log(error.response.data.errors);
                const errors = error.response.data.errors;
                createError(Object.values(errors), errorLog);
            });
    });
}


const login = document.querySelector("#loginForm");
if (login) {
    login.addEventListener("submit", function (e) {
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;
        let remember = document.getElementById("loginRadio").checked; // true / false;
        let errorLog = document.getElementById("error_log_login");

        e.preventDefault();

        if (firstname === "" || password === "") {
            console.log("EMPTY");
            createError(["Please fill all fields"], errorLog);
            return;
        }

        axios
            .post(location.origin + "/api/login", {
                username,
                password,
                remember,
            })
            .then((response) => {
                if (
                    response.status === 200 &&
                    response.data.operation === "SUCCESS"
                ) {
                    createError([], errorLog);
                    //location.replace(location.origin);
                }
                console.log(response);
            })
            .catch((error) => {
                console.log(error.response.data.errors);
                const errors = error.response.data.errors;
                createError(Object.values(errors), errorLog);
            });
    });
}

function createError(errors, errorLog) {
    let html = "";
    for (let index = 0; index < errors.length; index++) {
        html += `<p>${errors[index]}</p>`;
    }
    errorLog.innerHTML = html;
}
