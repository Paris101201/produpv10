var tableRoles;
// Extrae y muestra los roles en formato AJAX JSON
document.addEventListener('DOMContentLoaded', function(){
    tablaRoles = $('#tablaRoles').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Roles/getRoles",
            "dataSrc":""
        },
        "columns":[
            {"data":"idRol"},
            {"data":"nombreRol"},
            {"data":"descripcion"},
            {"data":"idStatus"},
            {"data":"opciones"}
        ],
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplayLength": 10,
        "order":[[0, "asc"]]
    });

    // Nuevo Rol
    var formRol = document.querySelector("#formRol");
    formRol.onsubmit = function(e){
        e.preventDefault();

        var intIdRol = document.querySelector('#idRol').value;
        var strNombre = document.querySelector('#txtNombreRol').value;
        var strDescripcion = document.querySelector('#txtDescripcionRol').value;
        var intStatus = document.querySelector('#listaStatus').value;
        if(strNombre == '' || strDescripcion == '' || intStatus == '')
            {
                swal("Atencion", "Todos los campos son obligatorios.", "error");
                return false;
            }
        // Crea elementos legibles para diferente navegador con el objetivo de leer y capturar datos
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Roles/setRol';
        var formData = new FormData(formRol);
        // Envio de datos por medio de AJAX
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        // Verifica que la informacion llego correctamente
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText);
                // Transforma en objeto lo que trae el AJAX
                if(objData.status){
                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    // Mensaje alert 
                    swal("Roles de usuario", objData.msg, "success");
                    tablaRoles.api().ajax.reload(function(){
                        fntEditRol();
                        // fntDelRol();
                        // fntPermisos();
                    });
                }else{
                    swal("Error", objData.msg, "error");
                }
            }
        }
    }
});

// Muestra la tabla de registros
$('#tablaRoles').DataTable();

// Muestra el modal registrar rol
function abrirModalRol() {
    document.querySelector('#idRol').value="";
    document.querySelector('.modal-header').classList.replace("headerUpdate","headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info","btn-primary");
    $('.icon').removeClass('fa fa-fw fa-lg fa-refresh').addClass('fa fa-fw fa-lg fa-floppy-o');
    document.querySelector('#btnText').innerHTML = "Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector("#formRol").reset();
    $('#modalFormRol').modal('show');
}

window.addEventListener('load',function(){
    fntEditRol();
    fntDelRol();
}, false);

// Funcion para los botones editar rol
function fntEditRol(){
    var btnEditRol = document.querySelectorAll('.btnEditRol');
    btnEditRol.forEach(function(btnEditRol){
        btnEditRol.addEventListener('click',function(){
            document.querySelector('#titleModal').innerHTML = "Actualizar Rol";
            document.querySelector('.modal-header').classList.replace("headerRegister","headerUpdate");
            document.querySelector('#btnActionForm').classList.replace("btn-primary","btn-info");
            $('.icon').removeClass('fa fa-fw fa-lg fa-floppy-o').addClass('fa fa-fw fa-lg fa-refresh');
            //document.querySelector('#btnicon').classList.replace("fa fa-fw fa-lg fa-floppy-o","fa fa-fw fa-lg fa-refresh");
            document.querySelector('#btnText').innerHTML = "Actualizar";

            var idrol = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Roles/getRol/'+idrol;
            request.open("GET", ajaxUrl, true);
            request.send();

            request.onreadystatechange = function()
            {
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status){
                        document.querySelector("#idRol").value = objData.data.idRol;
                        document.querySelector("#txtNombreRol").value = objData.data.nombreRol;
                        document.querySelector("#txtDescripcionRol").value = objData.data.descripcion;

                        if(objData.data.idStatus == 1)
                            {
                                var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                            }else{
                                var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                            }
                            var htmlSelect = `${optionSelect}
                                              <option value="1">Activo</option>
                                              <option value="2">Inactivo</option>
                                            `;
                        document.querySelector("#listaStatus").innerHTML = htmlSelect;
                        $('#modalFormRol').modal('show');
                    }else{
                        swal("Error",objData.msg,"Error");
                    }
                }
            }

            $('#modalFormRol').modal('show');
        });
    });
}

// Funcion para los botones eliminar rol
function fntDelRol()
{
    var btnDelRol = document.querySelectorAll(".btnDelRol");
    btnDelRol.forEach(function(btnDelRol){
        btnDelRol.addEventListener('click',function(){
            var idrol = this.getAttribute("rl");
            swal({
                title: "Eliminar Rol",
                text: "¿Realmente quieres eliminar el Rol?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function(isConfirm){
                var request = (Window.XMLHttpRequest) ? new XMLHttpRequest() : ActiveXObject('Microsoft.XMLHTTP');
                request = document.scripts.ActiveXObject;
                return request();
            });
        });
    });
}
