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

		var strNombre = document.querySelector("#txtNombre").value;
		var strDescripcion = document.querySelector("#txtDescripcion").value;
		var intStatus = document.querySelector("#listStatus").value;
		if (strNombre == '' || strDescripcion == '' || intStatus == '') {
			swal("atención", "todos los campos son obligatorios.", "error");
			return false;

		}
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		var ajaxUrl = base_url+'/Roles/setRol';
		var formData = new FormData(formRol);
		request.open("POST",ajaxUrl,true);
		request.send(formData);
		request.onreadystatechange = function(){
			if (request.readyState == 4 && request.status == 200) {
			console.log(request.responseText);
				
			}
		}
	};
});

$('#tableRoles').DataTable();

function openModal() {
	$('#modalFormRol').modal('show');
}

function closeModal() {
	$('#modalFormRol').modal('hide');
}

