

let frmFormula = document.getElementById("frmFormula");

//Carga Inicial de las interacciones
function init() {
  frmFormula.addEventListener("submit", function (e) {
    guardar(e);
  });
}

//=========================================================================================================



let tblUsuario = $("#tblUsuario").DataTable({
  autoWidth: false,
  ajax: {
    url: "http://localhost/CursoPHP/Biblioteca/Estudiante/dataTable",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregarUsuario'>+</button>",
    },
    { data: "idUsuario" },
    { data: "nombre" },
    { data: "correo" },
    { data: "telefono" },
    { data: "direccion" },
  ],
});
//selecciona el usuario para agregarlo a la cabecera de la factura
$("#tblUsuario tbody").on("click", "#agregarUsuario", function () {
  var data = tblUsuario.row($(this).parents("tr")).data(); //captura la fila
  agregarDataUsuario(
    data.idUsuario,
    data.nombre,
    data.correo,
    data.telefono,
    data.direccion
  );
});

function agregarDataUsuario(id, nombre, correo, telefono, direccion) {
  let idUsuario = document.getElementById("identificacion");
  let nombreU = document.getElementById("nombre");
  let correoU = document.getElementById("correo");
  let telefonoU = document.getElementById("telefono");
  let direccionU = document.getElementById("direccion");
  idUsuario.value = id;
  nombreU.value = nombre;
  correoU.value = correo;
  telefonoU.value = telefono;
  direccionU.value = direccion;
}

//para llenar la tabla de libros

let tblLibros = $("#tblLibros").DataTable({
  autoWidth: false,
  ajax: {
    url: "http://localhost/CursoPHP/Biblioteca/Libro/dataTable",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregarLibro'>Agregar +</button>",
    },
    { data: "id" },
    { data: "titulo" },
    { data: "autor" },
    { data: "descripcion" },
    { data: "editorial" },
  ],
});
//selecciona el  item para agregarlo al detalle de la formula
$("#tblLibros tbody").on("click", "#agregarLibro", function () {
  var data = tblLibros.row($(this).parents("tr")).data(); //captura la fila
  agregarLibro(data.titulo, data.autor, data.descripcion);
});
//});

//agrega el item al detalle de la formula

function agregarLibro(titulo, autor, categoria) {
  detalle = document.getElementById("tblDetalleLibro");
  fila = `  
    <tr id='filas' > 
    <td><input type="text" name="titulo[]" id="titulo[]" value ='${titulo}' class="form-control form-control-sm" readonly></td>
    <td><input type="text" name="autor[]"  id="autor[]" value ='${autor}' class="form-control form-control-sm" readonly></td>
    <td><input type="text" name="categoria[]"  id="categoria[]" value ='${categoria}' class="form-control form-control-sm" readonly></td>
    <td><input type="date" name="fechaSalida[]"  id="fechaSalida[]" value ='' class="form-control form-control-sm"></td>
    <td><input type="date" name="fechaEntrega[]"  id="fechaEntrega[]" value ='' class="form-control form-control-sm"></td>
    </tr>
    `;
  detalle.innerHTML += fila;
}




//agregar encabezado y el detalle de el prestamo

//Guardar el documento
function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmFormula);

  fetch("http://localhost/CursoPHP/Biblioteca/Prestamo/guardar", {
    method: "POST",
    body: datos,
  })
    .then((response) => response.json())
    .then((data) => {
      Swal.fire({
        title: data,
        icon: "success",
        confirmButtonText: "Ok",
      });
    })
    .catch((error) => {
      console.log("hay un error :", error);
    });
}

//cargamos todo
init();


