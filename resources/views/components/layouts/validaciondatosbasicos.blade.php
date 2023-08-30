<style>
.error {
    color: red !important;
}

.error-border {
    border: 1px solid red !important;
}
</style>

<script>
document.getElementById('submitButton').addEventListener('click', function(e) {
    e.preventDefault(); // Evita enviar el formulario al hacer clic



    // Obtener referencia a los campos del formulario
    const tipoPersona = document.getElementById('tipopersona');
    const razonSocialDiv = document.getElementById('razon-social-div');
    const razonSocialInput = document.getElementById('razon');
    const nombreInput = document.getElementById('nombre');
    const apellidoInput = document.getElementById('apellido');
    const tipoDocumento = document.getElementById('tipodocumento');
    const documentoInput = document.getElementById('documento');
    const telefonoInput = document.getElementById('telefono');
    const correoInput = document.getElementById('correo');
    const direccionInput = document.getElementById('direccion');


    var tipo_solicitud = document.getElementById('tipo_solicitud');
    var fecha_de_instalacion = document.getElementById('fecha_de_instalacion');
    var fotomontaje = document.getElementById('fotomontaje');
    var Camara_de_comercio = document.getElementById('Camara_de_comercio');
    var Carta_escrita_de_solicitud = document.getElementById('Carta_escrita_de_solicitud');

    var tipopersonaError = document.getElementById('tipopersonaError');
    var razonError = document.getElementById('razonError');
    var nombreError = document.getElementById('nombreError');
    var apellidoError = document.getElementById('apellidoError');
    var tipodocumentoError = document.getElementById('tipodocumentoError');
    var documentoError = document.getElementById('documentoError');
    var telefonoError = document.getElementById('telefonoError');
    var correoError = document.getElementById('correoError');
    var direccionError = document.getElementById('direccionError');

    var tipo_solicitudError = document.getElementById('tipo_solicitudError');
    var fecha_de_instalacionError = document.getElementById('fecha_de_instalacionError');
    var fotomontajeError = document.getElementById('fotomontajeError');
    var Camara_de_comercioError = document.getElementById('Camara_de_comercioError');
    var Carta_escrita_de_solicitudError = document.getElementById('Carta_escrita_de_solicitudError');

    tipopersona.classList.remove('error-border');
    razon.classList.remove('error-border');
    nombre.classList.remove('error-border');
    apellido.classList.remove('error-border');
    tipodocumento.classList.remove('error-border');
    documento.classList.remove('error-border');
    telefono.classList.remove('error-border');
    correo.classList.remove('error-border');

    tipo_solicitud.classList.remove('error-border');
    fecha_de_instalacion.classList.remove('error-border');
    fotomontaje.classList.remove('error-border');
    Camara_de_comercio.classList.remove('error-border');
    Carta_escrita_de_solicitud.classList.remove('error-border');





    tipopersonaError.innerText = "";
    razonError.innerText = "";
    nombreError.innerText = "";
    apellidoError.innerText = "";
    tipodocumentoError.innerText = "";
    telefonoError.innerText = "";
    documentoError.innerText = "";
    correoError.innerText = "";


    tipo_solicitudError.innerText = "";
    fecha_de_instalacionError.innerText = "";
    fotomontajeError.innerText = "";
    Camara_de_comercioError.innerText = "";
    Carta_escrita_de_solicitudError.innerText = "";

    var isValid = true;

    if (tipopersona.value === "") {
        tipopersona.classList.add('error-border');
        tipopersonaError.innerText = "Por favor, haga una selección.";
        isValid = false;

    }


    if (nombre.value === "") {
        nombre.classList.add('error-border');
        nombreError.innerText = "Este campo es requerido.";
        isValid = false;

    }

    if (apellido.value === "") {
        apellido.classList.add('error-border');
        apellidoError.innerText = "Este campo es requerido.";
        isValid = false;

    }

    if (tipodocumento.value === "") {
        tipodocumento.classList.add('error-border');
        tipodocumentoError.innerText = "Por favor, haga una selección.";
        isValid = false;

    }

    if (telefono.value === "") {
        telefono.classList.add('error-border');
        telefonoError.innerText = "Este campo es requerido.";
        isValid = false;

    }

    if (documento.value === "") {
        documento.classList.add('error-border');
        documentoError.innerText = "Este campo es requerido.";
        isValid = false;

    }

    if (correo.value === "") {
        correo.classList.add('error-border');
        correoError.innerText = "Este campo es requerido.";
        isValid = false;

    }

    if (direccion.value === "") {
        direccion.classList.add('error-border');
        direccionError.innerText = "Este campo es requerido.";
        isValid = false;
    }

        if (tipo_solicitud.value === "") {
            tipo_solicitud.classList.add('error-border');
            tipo_solicitudError.innerText = "Por favor, haga una selección.";
            isValid = false;
        }

        if (fecha_de_instalacion.value === "") {
            fecha_de_instalacion.classList.add('error-border');
            fecha_de_instalacionError.innerText = "Este campo es requerido.";
            isValid = false;
        }

        // Validar el archivo
        if (fotomontaje.value === "") {
            fotomontaje.classList.add('error-border');
            fotomontajeError.innerText = "Por favor, adjunte un archivo. \n";
            isValid = false;
        }
         
        if (Camara_de_comercio.value === "") {
            Camara_de_comercio.classList.add('error-border');
            Camara_de_comercioError.innerText = "Por favor, adjunte un archivo. \n";
            isValid = false;
        }
       
        if (Carta_escrita_de_solicitud.value === "") {
            Carta_escrita_de_solicitud.classList.add('error-border');
            Carta_escrita_de_solicitudError.innerText = "Por favor, adjunte un archivo. \n";
            isValid = false;
        }



    if (isValid) {
        // Si todos los campos son válidos, enviar el formulario
        document.getElementById('myForm').submit();
    }
});
</script>