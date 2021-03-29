var tableRoles;
document.addEventListener('DOMContentLoaded', function () {
	tableRoles = $('#tableRoles').dataTable({
		"aProcessing": true,
		"aServerSide": true,
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
		},
		"ajax": {
			"url": " " + base_url + "/Roles/getRoles",/* Ruta a la funcion getRoles que esta en el controlador roles.php*/
			"dataSrc": ""
		},
		"columns": [/* Campos de la base de datos*/
			{ "data": "idrol" },
			{ "data": "nombrerol" },
			{ "data": "descripcion" },
			{ "data": "status" },
			{ "data": "options" }
		],
		"responsieve": "true",
		"bDestroy": true,
		"iDisplayLength": 10, /*Mostrará los primero 10 registros*/
		"order": [[0, "desc"]] /*Ordenar de forma Desendente*/
	});

	//NUEVO ROL
	var formRol = document.querySelector("#formRol");

	formRol.onsubmit = function (e) {
		e.preventDefault();

		var intIdRol = document.querySelector("#idRol").value;
		var strNombre = document.querySelector("#txtNombre").value;
		var strDescripcion = document.querySelector("#txtDescripcion").value;
		var intStatus = document.querySelector("#listStatus").value;
		if (strNombre == '' || strDescripcion == '' || intStatus == '') {
			swal("atención", "todos los campos son obligatorios.", "error");
			return false;

		}
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxUrl = base_url + '/Roles/setRol';
		var formData = new FormData(formRol);
		request.open("POST", ajaxUrl, true);
		request.send(formData);
		request.onreadystatechange = function () {
			if (request.readyState == 4 && request.status == 200) {
				var objData = JSON.parse(request.responseText);
				if (objData.status) {
					$('#modalFormRol').modal("hide");
					formRol.reset();
					swal("Roles de usuario", objData.msg, "success");
					tableRoles.api().ajax.reload(function () {
						setTimeout(() => {
							fntEditRol();
							fntDelRol();
						}, 500);
					});
				} else {
					swal("Error", objData.msg, "error");
				}
			}
		}
	};
});

$('#tableRoles').DataTable();

function openModal() {
	document.querySelector('#formRol').classList.remove("was-validated");
	document.querySelector('#idRol').value = "";
	document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
	document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
	document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
	document.querySelector('#btnText').innerHTML = " Guardar";
	document.querySelector('#formRol').reset();
	$('#modalFormRol').modal('show');
}

function closeModal() {
	$('#modalFormRol').modal('hide');
}

window.addEventListener("load", function () {
	setTimeout(() => {
		fntEditRol();
		fntDelRol();
	}, 500);
}, false);
function fntEditRol() {
	const btnEditRol = document.querySelectorAll(".btnEditRol");
	btnEditRol.forEach(function (btnEditRol) {
		btnEditRol.addEventListener('click', function () {

			document.querySelector('#titleModal').innerHTML = "Actualizar Rol";
			document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
			document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
			document.querySelector('#btnText').innerHTML = " Actualizar";

			var idrol = this.getAttribute("rl");
			var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsorf.XMLHTTP');
			var ajaxUrl = base_url + '/Roles/getRol/' + idrol;
			request.open("GET", ajaxUrl, true);
			request.send();

			request.onreadystatechange = function () {
				if (request.readyState == 4 && request.status == 200) {
					var objData = JSON.parse(request.responseText);

					if (objData.status) {
						document.querySelector("#idRol").value = objData.data.idrol;
						document.querySelector("#txtNombre").value = objData.data.nombrerol;
						document.querySelector("#txtDescripcion").value = objData.data.descripcion;
						if (objData.data.status == 1) {
							var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
						} else {
							var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
						}

						var htmlSelect = `${optionSelect}
						<option value="1">Activo</option>
						<option value="2">Inactivo</option>
						`;

						document.querySelector("#listStatus").innerHTML = htmlSelect;
						$('#modalFormRol').modal('show');
					} else {
						swal("Error", objData.msg, "Error");
					}
				}
			}
		});
	});
}

function fntDelRol() {
	var bntDelRol = document.querySelectorAll(".btnDelRol");
	bntDelRol.forEach(function (btnDelRol) {
		btnDelRol.addEventListener('click', function () {
			var idrol = this.getAttribute("rl");
			swal({
				title: "Eliminar Rol",
				text: "¿Realmente desea Eliminar el Rol?",
				icon: "warning",
				buttons: [
					'No, Cancelar!',
					'Si, Eliminar!'
				],
				dangerMode: true,
			}).then(function (isConfirm) {
				if (isConfirm) {
					var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsorf.XMLHTTP');
					var ajaxDelRol = base_url+'/Roles/delRol/';
					var strData = 'idrol='+idrol;

					request.open("POST", ajaxDelRol, true);
					request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					request.send(strData);

					request.onreadystatechange = function () {
						if (request.readyState == 4 && request.status == 200) {
							var objData = JSON.parse(request.responseText);
							if (objData.status) {
								swal("Eliminar!", objData.msg, "success");
								tableRoles.api().ajax.reload(function () {
									setTimeout(() => {
										fntEditRol();
										fntDelRol();
									}, 500);
								});
							} else {
								swal("Atención!", objData.msg, "error");
							}
						} else {
							swal("Atención!", "Error externo", "error");
						}
					}
					//--------------------------------
				}
			});
		});
	});
};

// const optionsSelect = document
// 	.querySelector("#listStatus") //elemento select html
// 	.getElementsByTagName("option"); //elementos option html

// //recorrer los elementos options y añadir atributo selected
// for (let item of optionsSelect) {
// 	if (item.value == objData.data.estado) {
// 		item.setAttribute("selected", "");
// 	} else {
// 		item.removeAttribute("selected");
// 	}
// }