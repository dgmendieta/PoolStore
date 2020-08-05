

function CheckFormAdmin() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION Debe Ingresar\n";
    var error   = false;
    // capturar datos del formulario
    var correo      = document.getElementById("dataUsuarioAdmin").value;
    var contrasena   = document.getElementById("dataClaveAdmin").value;
    // validar datos
    if (correo=="") {
        error   = true;
        mensaje = mensaje+" Usuario\n";
    } // endif
    if (contrasena=="") {
        error   = true;
        mensaje = mensaje+" Contraseña\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajeadmin").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("ingresoAdminForm").submit();
    } // endif                                    
} // end function

function CheckFormIngresoProd() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    var nombre       = document.getElementById("prodNombre").value;
    var descripcion  = document.getElementById("prodDesc").value;
    var categoria    = document.getElementById("prodCateg").value;
    var precio       = document.getElementById("prodPrecio").value;
    var imagen       = document.getElementById("prodImagen").value;
      
    
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+" Nombre requerido\n";
    } // endif
    if (descripcion=="") {
        error   = true;
        mensaje = mensaje+" Descripción requerido\n";
    } // endif
    if (categoria=="0") {
        error   = true;
        mensaje = mensaje+" Seleccione Categoría\n";
    } // endif
    if (precio=="") {
        error   = true;
        mensaje = mensaje+" Precio requerido\n";
    } // endif
    
    if (isNaN(precio)) {
        error   = true;
        mensaje = mensaje+" Precio debe ser numérico\n";
    } // endif
    
    if (imagen=="") {
        error   = true;
        mensaje = mensaje+" Debe seleccionar Imágen\n";
    } // endif    
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajeingreso").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("ingresoAdminForm").submit();
    } // endif                                    
} // end function

function CheckFormIdProd() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    var id       = document.getElementById("prodId").value;
   
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+" Id requerido\n";
    } // endif
    
    if (isNaN(id)) {
        error   = true;
        mensaje = mensaje+" Id debe ser numérico\n";
    } // endif
    
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajeingreso").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("idAdminForm").submit();
    } // endif                                    
} // end function

function CheckFormModificaProd() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION \n";
    var error   = false;
    // capturar datos del formulario
    var nombre       = document.getElementById("prodNombre").value;
    var descripcion  = document.getElementById("prodDesc").value;
    var categoria    = document.getElementById("prodCateg").value;
    var precio       = document.getElementById("prodPrecio").value;
    var imagen       = document.getElementById("prodImagen").value;
      
    
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+" Nombre requerido\n";
    } // endif
    if (descripcion=="") {
        error   = true;
        mensaje = mensaje+" Descripción requerido\n";
    } // endif
    if (categoria=="0") {
        error   = true;
        mensaje = mensaje+" Seleccione Categoría\n";
    } // endif
    if (precio=="") {
        error   = true;
        mensaje = mensaje+" Precio requerido\n";
    } // endif
    
    if (isNaN(precio)) {
        error   = true;
        mensaje = mensaje+" Precio debe ser numérico\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje
        document.getElementById("errormensajemodifica").innerHTML=mensaje;
    } else {
        // enviar formuario
        document.getElementById("modificaAdminForm").submit();
    } // endif                                    
} // end function