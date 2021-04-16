// login stilos
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container_login = document.querySelector(".container_login");

sign_up_btn.addEventListener("click", () => {
    container_login.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container_login.classList.remove("sign-up-mode");
});


// capturar datos del formulario

document.addEventListener('DOMContentLoaded', function () {
    //console.log('cargado');
    if (document.querySelector("#formLogin")) {
        let formLogin = document.querySelector("#formLogin");
        formLogin.onsubmit = function (e) {
            e.preventDefault();

            let strEmail = document.querySelector('#txtEmail').value;
            let strPassword = document.querySelector('#txtPassword').value;

            if (strEmail == "" || strPassword == "") {
                swal("Por favor", "Escribe Un Usuario y contraseña.", "error");
                return false;
            }
            console.log("strEmail");
        }
    }
}, false);