

function CheckFormIngreso() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION Debe Ingresar\n";
    var error   = false;
    // capturar datos del formulario
    var correo      = document.getElementById("dataCorreo").value;
    var contrasena   = document.getElementById("dataClave").value;
    // validar datos
    if (correo=="") {
        error   = true;
        mensaje = mensaje+" Correo\n";
    } // endif
    if (contrasena=="") {
        error   = true;
        mensaje = mensaje+" Contraseña\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensaje").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("ingresoForm").submit();
    } // endif                                    
} // end function

function CheckFormRegistro() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    var nombre       = document.getElementById("dataNombre").value;
    var apellido     = document.getElementById("dataApellido").value;
    var mail         = document.getElementById("dataMail").value;
    var telefono     = document.getElementById("dataTelefono").value;
    var celular      = document.getElementById("dataCelular").value;
    var clave        = document.getElementById("dataContra").value;
    var clave2       = document.getElementById("dataContra2").value;
    var direccion    = document.getElementById("dataDireccion").value;
    var esquina      = document.getElementById("dataEsquina").value;
    
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+" Nombre requerido\n";
    } // endif
    if (apellido=="") {
        error   = true;
        mensaje = mensaje+" Apellido requerido\n";
    } // endif
    if (mail=="") {
        error   = true;
        mensaje = mensaje+" Correo requerido\n";
    } // endif
    if (telefono=="") {
        error   = true;
        mensaje = mensaje+" Teléfono requerido\n";
    } // endif
    if (celular=="") {
        error   = true;
        mensaje = mensaje+" Celular requerido\n";
    } // endif
    if (isNaN(telefono)) {
        error   = true;
        mensaje = mensaje+" Teléfono debe ser numérico\n";
    } // endif
    if (isNaN(celular)) {
        error   = true;
        mensaje = mensaje+" Celular debe ser numérico\n";
    } // endif
    if (clave=="") {
        error   = true;
        mensaje = mensaje+" Contraseña requerido\n";
    } // endif
    if (clave2=="") {
        error   = true;
        mensaje = mensaje+" Confirmación de Contraseña requerido\n";
    } // endif
    if (clave2 != clave) {
        error   = true;
        mensaje = mensaje+" Las Contraseñas no Coinciden\n";
    } // endif
    if (direccion=="") {
        error   = true;
        mensaje = mensaje+" Dirección requerido\n";
    } // endif
    if (esquina=="") {
        error   = true;
        mensaje = mensaje+" Esquina requerido\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajereg").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("registroForm").submit();
    } // endif                                    
} // end function

function CheckFormEditar() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    var nombre       = document.getElementById("editaNombre").value;
    var apellido     = document.getElementById("editaApellido").value;
    var mail         = document.getElementById("editaMail").value;
    var telefono     = document.getElementById("editaTelefono").value;
    var celular      = document.getElementById("editaCelular").value;
    var direccion    = document.getElementById("editaDireccion").value;
    var esquina      = document.getElementById("editaEsquina").value;
    
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+" Nombre requerido\n";
    } // endif
    if (apellido=="") {
        error   = true;
        mensaje = mensaje+" Apellido requerido\n";
    } // endif
    if (mail=="") {
        error   = true;
        mensaje = mensaje+" Correo requerido\n";
    } // endif
    if (telefono=="") {
        error   = true;
        mensaje = mensaje+" Teléfono requerido\n";
    } // endif
    if (celular=="") {
        error   = true;
        mensaje = mensaje+" Celular requerido\n";
    } // endif
    if (isNaN(telefono)) {
        error   = true;
        mensaje = mensaje+" Teléfono debe ser numérico\n";
    } // endif
    if (isNaN(celular)) {
        error   = true;
        mensaje = mensaje+" Celular debe ser numérico\n";
    } // endif
    if (direccion=="") {
        error   = true;
        mensaje = mensaje+" Dirección requerido\n";
    } // endif
    if (esquina=="") {
        error   = true;
        mensaje = mensaje+" Esquina requerido\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajeedit").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("editaForm").submit();
    } // endif                                    
} // end function

function CheckFormRecup() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    
    var mail    = document.getElementById("dataCorreoRecup").value;
    
    
    if (mail=="") {
        error   = true;
        mensaje = mensaje+" Correo requerido\n";
    } // endif
    
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajerec").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("recupForm").submit();
    } // endif                                    
} // end function

function CheckFormBuscar() {
    // preparar mensaje y control de error
    var mensaje = "Debe ingresar datos a buscar...";
    var error   = false;
    // capturar datos del formulario
    var texto      = document.getElementById("dataBuscar").value;
    
    // validar datos
    if (texto=="") {
        error   = true;
    } //end if
     if (error) {
        // mostrar mensaje
        document.getElementById("dataBuscar").value.innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("buscarForm").submit();
    } // endif                  
} // end function

//CARRITO
//al cargar la página mostramos el contenido del carrito o un mensaje
//si no tiene contenido, como veremos vamos llamando a esta función
//en cada proceso ya que es la encargada de actualizar el carrito
function content_cart()
{
    $.get("content_cart.php", function(data){
        var json = JSON.parse(data);
        var html = "";
        if(json.res == "ok")
        {
            $("#titulo").html("<h1><small>Contenido del carrito.</small></h1>");
            html += "<thead style='text-align:left'>";
            html += "<tr>";
            html += "<th width='20'>Id</th>";
            html += "<th width='150'>Nombre</th>";
            html += "<th width='100'>Precio</th>";
            html += "<th width='50'>Cantidad</th>";
            html += "<th width='100'>Subtotal</th>";
            html += "<th width='150'>Eliminar</th>";
            html += "</tr>";
            html += "</thead>";
            html += "<tbody>";
            for(datos in json.content)
            {
                html += "<tr>";
                html += "<td>" + json.content[datos].id + "</td>";
                html += "<td>" + json.content[datos].nombre + "</td>";
                html += "<td>" + json.content[datos].precio + "</td>";
                html += "<td>" + json.content[datos].cantidad + "</td>";
                html += "<td>" + json.content[datos].total + "</td>";
                html += "<td><a href='#' onclick=\"eliminar('" + json.content[datos].unique_id + "')\">Eliminar</a>";
                html += "</tr>";
            }
            html += "<tr>";
            html += "<td colspan='5'><b>Total artículos: " + json.articulos_total + "</b></td>";
            html += "<td colspan='2'><b>Precio total: u$s " + json.precio_total + "</b></td>";
            html += "</tr>";
            html += "<tr><td colspan='4'></td>";
            html += "<td colspan='3'><a href='#' class='destroy btn btn-danger'>Borrar Contenido</a> ";
            html += " <a href='confirmaCompra.php' class='btn btn-success'>Comprar</a></td></tr>";
            html += "</tbody>";
            $("#cart").html(" "+ json.articulos_total + " ");
        }else{
            $("#titulo").html("");
            html += "<tbody>";
            html += "<tr>";
            html += "<td><h3>El carrito está vacío.</h3></td>";
            html += "</tr>";
            html += "</tbody>";
        }
        $("#content_cart").html("");
        $("#content_cart").append(html);
    });
}
 
//añadimos un nuevo producto al carrito 
$(document).ready(function(){
    $(".add").on("submit", function(e){
        e.preventDefault();
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function()
            {
 
            },
            success: function(data)
            {
                var json = JSON.parse(data);
                //si el proceso es correcto llamamos a la función
                //content_cart() y se actualizará el carrito
                if(json.res == "ok")
                {
                    content_cart();
                }else{
                    alert(json.message);
                }   
            },
            error: function()
            {
                alert("Error");
            }
        })
    });
});
 
 
//función para vaciar el contenido del carrito
$(document).on("click", ".destroy", function(e){
    e.preventDefault();
    $.post("destroy.php", function(){
        //llamamos a la función content_cart() para actualizar el carrito
        content_cart();
    });
})
 
 
//función para eliminar una fila
function eliminar(unique_id)
{
    $.post("remove_product.php",{unique_id : unique_id}, function(data){
        var json = JSON.parse(data);
        if(json.res == "ok")
        {
            //llamamos a la función content_cart() para actualizar el carrito
            content_cart();
        }else{
            alert("error");
        }   
    });
}
 
 
 
//el abrir la página ya mostramos el contenido del carrito
$(window).on("load", function(){
    content_cart();
});
function CheckFormClave() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    
    var clave        = document.getElementById("cambiaClave").value;
    var clave2       = document.getElementById("cambiaClave2").value;
    
    
    // validar datos
    
    
    if (clave=="") {
        error   = true;
        mensaje = mensaje+" Contraseña requerido\n";
    } // endif
    if (clave2=="") {
        error   = true;
        mensaje = mensaje+" Confirmación de Contraseña requerido\n";
    } // endif
    if (clave2 != clave) {
        error   = true;
        mensaje = mensaje+" Las Contraseñas no Coinciden\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajeclave").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("claveForm").submit();
    } // endif                                    
} // end function
