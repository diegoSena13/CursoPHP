$(document).ready(function () {
  var table = $("#tblEstudiantes").DataTable({
    ajax: {
      url: "http://localhost/CursoPHP/Biblioteca/Estudiante/dataTable",
      dataSrc: "",
    },
    columns: [
      { data: "idUsuario" },
      { data: "nombre" },
      { data: "correo" },
      { data: "telefono" },
      { data: "direccion" },
      {
        data: null,
        defaultContent:
          "<button type='button' class='btn btn-success' data-bs-toggle='modal' id='editar' data-bs-target='#exampleModal'>Editar</button>",
      },
      {
        data: null,
        defaultContent:
        "<button type='button' class='btn btn-danger' data-bs-toggle='modal' id='eliminar' data-bs-target='#exampleModal1'>Eliminar</button>",
      },
    ],
    
  });
  //se coge el nombre de la tabla para preguntar
  //se coge el id para enviarlo por el metodo post

  $("#tblEstudiantes tbody").on("click", "#editar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEditar(data.idUsuario, data.nombre);
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });

  $("#tblEstudiantes tbody").on("click", "#eliminar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEliminar(data.idUsuario, data.nombre);
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });
});


//funcion para abrir el modal de editar con la pregunta de confirmacion
function modalEditar(id, nombre) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
    <p>deseas editar la informacion del estudiante ${nombre}?</p>
    <form action="#" method="post" id="frmEditar" >
        <input type="hidden" id="idUsuario" name="idUsuario" value="${id}">  
    </form>
    `;
  preguntaEditar.innerHTML = fila;
}

//funcion para abrir el modal editar con el formulario para editar
function modalEditar2(id, nombre,apellido1,apellido2, correo, dirrecion, telefono) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
  <form action="" method="POST" id="frmEditar2">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="idUsuario" placeholder="# Identificación" value="${id}" aria-label="identificacion">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="${nombre}" aria-label="nombre">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="apellido1" placeholder="Primer Apellido" value="${apellido1}" aria-label="1erApellido">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido" value="${apellido2}" aria-label="2doApellido">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" name="correo" placeholder="Correo" value="${correo}" aria-label="correo">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="${telefono}" aria-label="telefono">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="${dirrecion}" aria-label="direccion">
                        </div>
                    </div><br>

            </div>

            </form>
    `;
  preguntaEditar.innerHTML = fila;
}

//funcion para abrir el modal de eliminar con la pregunta de confirmacion
function modalEliminar(id, nombre) {
  let preguntaEditar = document.getElementById("preguntaEliminar");
  let fila = `
    <p>deseas eliminar la informacion del estudiante ${nombre}?</p>
    <form action="#" method="post" id="frmEliminar" >
        <input type="hidden" id="idUsuario" name="idUsuario" value="${id}">  
    </form>
    `;
  preguntaEditar.innerHTML = fila;
}

//boton  de el modal
let confirmarEdit = document.getElementById("confirmarEdit");

//esta parte envia el nit del estudiante por el metodo post y devuelve todos los datos de el estudiante en un formulario para editar
confirmarEdit.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmEditar"));
  fetch("http://localhost/CursoPHP/Biblioteca/Estudiante/editarEstudiante", {
    method: "POST",
    body: datos,
  })
    .then(function (response) {
      if (response.ok) {
        return response.json();
      } else {
        throw "Error en la llamada Ajax";
      }
    })
    .then(function (json) {
      modalEditar2(
        json["idUsuario"],
        json["nombre"],
        json["apellido1"],
        json["apellido2"],
        json["correo"],
        json["direccion"],
        json["telefono"]
      );
    })
    .catch(function (err) {
      console.log(err);
    });
});

//evento para editar la editoriasl con el formulario
confirmarEdit.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmEditar2"));
  fetch("http://localhost/CursoPHP/Biblioteca/Estudiante/editarEstudiante1", {
    method: "POST",
    body: datos,
  })
    .then(function (response) {
      if (response.ok) {
        return response.ok;
      } else {
        throw "Error en la llamada Ajax";
      }
    })
    .then(function (ok) {
      alertEdit();
    })
    .catch(function (err) {
      console.log(err);
    });
});

//boton del modal eliminar para enviar el nit
let confirmarDelete = document.getElementById("confirmarDelete");
//evento click para enviar el nit a el controlador
confirmarDelete.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmEliminar"));
  fetch("http://localhost/CursoPHP/Biblioteca/Estudiante/eliminarEstudiante", {
    method: "POST",
    body: datos,
  })
    .then(function (response) {
      if (response.ok) {
        return response.ok;
      } else {
        throw "Error en la llamada Ajax";
      }
    })
    .then(function () {
      alertDelete();
    })
    .catch(function (err) {
      console.log(err);
    });
});


//boton del modal insertar para enviar los datos
let btnInsertar = document.getElementById("btnInsertar");
//evento click para enviar los datos a el controlador
btnInsertar.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmInsertar"));
  fetch("http://localhost/CursoPHP/Biblioteca/Estudiante/cargarEstudiante", {
    method: "POST",
    body: datos,
  })
    .then(function (response) {
      if (response.ok) {
        return response.ok;
      } else {
        throw "Error en la llamada Ajax";
      }
    })
    .then(function (ok) {
      alertInsert();
    })
    .catch(function (err) {
      console.log(err);
    });
});

function alertEdit() {
  Swal.fire({
    title: "Buen trabajo",
    text: "Estudiante editado",
    icon: "success",
    confirmButtonText: "ok",
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.reload();
    }
  });
}



function alertDelete() {
  Swal.fire({
    title: "Buen trabajo",
    text: "Estudiante eliminado",
    icon: "success",
    confirmButtonText: "ok",
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.reload();
    }
  });
}

function alertInsert() {
  Swal.fire({
    title: "Buen trabajo",
    text: "estudiante Insertado",
    icon: "success",
    confirmButtonText: "ok",
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.reload();
    }
  });
}
