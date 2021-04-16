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
                //swal("Por favor", "Escribe Un Usuario y contraseña.", "error");
                swal({
                    icon: 'error',
                    title: 'Por favor',
                    text: 'Escribe un usuario y contraseña.',
                    buttons: false,
                    dangerMode: true,
                    timer: 3000
                });
                return false;
            } else {
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsorf.XMLHTTP');
                var ajaxUrl = base_url + '/Login/loginUser';
                var formData = new FormData(formLogin);
                request.open("POST", ajaxUrl, true);
                request.send(formData);

                request.onreadystatechange = function () {

                    if (request.readyState != 4) return;
                    if (request.status == 200) {
                        var objData = JSON.parse(request.responseText);
                        if (objData.status) {
                            window.location = base_url + '/dashboard';
                        } else {
                            swal("Atención", objData.msg, "error");
                            document.querySelector('#txtPassword').value = "";
                        }
                    } else {
                        swal("Atención", "Error en el proceso", "error");
                    }

                    return false;
                }
            }

        }
    }
}, false);