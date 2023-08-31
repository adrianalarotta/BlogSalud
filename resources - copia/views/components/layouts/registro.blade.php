<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style>
    .entradas-de-texto-govco {
      padding: 0px !important;
      font-size: 16px !important;
      font-family: WorkSans-Regular !important;
    }
  </style>

</head>

<body>

  <div class="image-icon">
    <div class="col-md-9 mr-auto" style="padding-left:8.5%">
      <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
      <p class="ml-3 ml-md-0 text-miga" style="color: #004884; font-size:14px;">
        <strong> 1. Datos generales </strong>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-4 " style="padding-left:10%; padding-top:0.5%">
      <label for="" class="">Tipo Persona<span aria-required="true">*</span></label>
      <select class="form-control" id="tipopersona" onchange="mostrarRazonSocial()" name="tipopersona">
        <option value="">Seleccione</option>
        <option value="natural">Natural</option>
        <option value="juridica">Juridica</option>
      </select>
      <p class="error" id="tipopersonaError"></p>
    </div>
    <div class="col-sm-6 col-md-4" style="padding-left:3%; display:none;" id="razon-social-div">
      <div class="entradas-de-texto-govco">
        <label for="razon-social-id">Razon Social Responsable*</label>
        <input type="text" id="razon" name="Razon_Social_Responsable" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="razonError"></p>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-6 col-md-4 " style="padding-left:10%">
      <div class="entradas-de-texto-govco">
        <label for="input-basico-id" name="nombre">Nombres*</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="nombreError"></p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4" style="padding-left:3%">
      <div class="entradas-de-texto-govco">
        <label for="input-basico-id">Apellidos*</label>
        <input type="text" id="apellido" name="apellido" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="apellidoError"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-4 mb-0" style="padding-left:10%">
      <label for="lista-desplegables" class="label-desplegable-govco">Tipo de documento*</label>
      <select class="form-control" id="tipodocumento" name="tipo_documento">
        <option value="">Seleccione</option>
        <option value="cedula">cedula</option>
        <option value="cedulaExtranjeria">Cedula de extrangeria</option>
        <option value="numNit">NIT</option>
      </select>
      <p class="error" id="tipodocumentoError"></p>
    </div>

    <div class="col-sm-6 col-md-4 mb-0" style="padding-left:3%">
      <div class="entradas-de-texto-govco">
        <label for="input-basico-id">Numero de documento*</label>
        <input type="text" id="documento" name="documento" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="documentoError"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-4 mt-0" style="padding-left:10%">
      <div class="entradas-de-texto-govco">
        <label for="input-basico-id">Telefono*</label>
        <input type="text" id="telefono" name="telefono" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="telefonoError"></p>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mt-0" style="padding-left:3%">
      <div class="entradas-de-texto-govco">
        <label for="input-basico-id">Correo Electronico*</label>
        <input type="text" id="correo" name="correo" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="correoError"></p>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-6 col-md-4" style="padding-left:10%">
      <div class="entradas-de-texto-govco">
        <label for="telefono-id">Direccion*</label>
        <input type="text" id="direccion" name="direccion" placeholder="Ejemplo: Campo de texto" />
        <p class="error" id="direccionError"></p>
      </div>
    </div>
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', (e) => {

    })

    window.addEventListener('onchange', (e) => {
      console.log(e.target)
    })

    function mostrarRazonSocial() {



      var x = document.getElementById("tipopersona").value;
      if (x == "juridica") {
        document.getElementById("razon-social-div").style.display = "block";
      } else {
        document.getElementById("razon-social-div").style.display = "none";
      }
    }
  </script>


  <script>
    document.addEventListener('DOMContentLoaded', (e) => {
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



          var tipopersonaError = document.getElementById('tipopersonaError');
          var razonError = document.getElementById('razonError');
          var nombreError = document.getElementById('nombreError');
          var apellidoError = document.getElementById('apellidoError');
          var tipodocumentoError = document.getElementById('tipodocumentoError');
          var documentoError = document.getElementById('documentoError');
          var telefonoError = document.getElementById('telefonoError');
          var correoError = document.getElementById('correoError');
          var direccionError = document.getElementById('direccionError');


          tipopersona.classList.remove('error-border');
          razon.classList.remove('error-border');
          nombre.classList.remove('error-border');
          apellido.classList.remove('error-border');
          tipodocumento.classList.remove('error-border');
          documento.classList.remove('error-border');
          telefono.classList.remove('error-border');
          correo.classList.remove('error-border');




          tipopersonaError.innerText = "";
          razonError.innerText = "";
          nombreError.innerText = "";
          apellidoError.innerText = "";
          tipodocumentoError.innerText = "";
          telefonoError.innerText = "";
          documentoError.innerText = "";
          correoError.innerText = "";

          if (tipopersona.value === "") {
            tipopersona.classList.add('error-border');
            tipopersonaError.innerText = "Por favor, haga una selección.";
            isValid = false;
          }

          if (razon.value === "") {
            razon.classList.add('error-border');
            razonError.innerText = "Este campo es requerido.";
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






          // Agregar eventos de validación
          tipoPersona.addEventListener('change', mostrarRazonSocial);
          nombreInput.addEventListener('blur', validarNombre);
          apellidoInput.addEventListener('blur', validarApellido);
          tipoDocumento.addEventListener('change', mostrarCampoDocumento);
          documentoInput.addEventListener('blur', validarDocumento);
          telefonoInput.addEventListener('blur', validarTelefono);
          correoInput.addEventListener('blur', validarCorreo);
          direccionInput.addEventListener('blur', validarDireccion);






          // Función para mostrar/ocultar el campo de Razon Social
          function mostrarRazonSocial() {
            const seleccionado = tipoPersona.value;
            if (seleccionado === 'juridica') {
              razonSocialDiv.style.display = 'block';
            } else {
              razonSocialDiv.style.display = 'none';
            }
          }
  </script>


</body>