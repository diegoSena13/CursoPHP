$(document).ready(function () {
  var table = $("#tblLibro").DataTable({
    ajax: {
      url: "http://localhost/CursoPHP/Biblioteca/Libro/dataTable",
      dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "titulo" },
      { data: "autor" },
      { data: "descripcion" },
      { data: "categoria" },
      { data: "cantidad" },
      { data: "existencia" },
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

  $("#tblLibro tbody").on("click", "#editar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEditar(data.id, data.titulo);
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });

  $("#tblLibro tbody").on("click", "#eliminar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEliminar(data.id, data.titulo);
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });
});

//funcion para abrir el modal de editar con la pregunta de confirmacion
function modalEditar(id, titulo) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
      <p>deseas editar el libro ${titulo}?</p>
      <form action="#" method="post" id="frmEditar" >
          <input type="hidden" id="id" name="id" value="${id}">  
      </form>
      `;
  preguntaEditar.innerHTML = fila;
}

//funcion para abrir el modal editar con el formulario para editar
function modalEditar2(
  id,
  titulo,
  autor,
  descripcion,
  editorial,
  fechaSalida,
  cantidad,
  existencia,
  editorial_nit
) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
    <form action="" method="post" id="frmEditar2">
                    <div class="row">
                        <div class="col">
                            <input type="text" id="id" name="id" value="${id}" class="form-control" placeholder="ID" aria-label="id">
                        </div>
                        <div class="col">
                            <input type="text" id="titulo" name="titulo" value="${titulo}" class="form-control" placeholder="Titulo" aria-label="titulo">
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="autor" name="autor" value="${autor}" class="form-control" placeholder="Autor" aria-label="autor">
                        </div>
                        <div class="col">
                            <input type="text" name="descripcion" id="descripcion" value="${descripcion}" class="form-control" placeholder="Descripción" aria-label="descripcion">
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput"  class="form-label">Seleccione Categoría</label>
                            <select name="categoria" id="categoria" class="form-select" aria-label="categoria">
                                <option value="">Científicos</option>
                                <option value="">Literatura y lingüísticos</option>
                                <option value="">De viaje</option>
                                <option value="">Biografías</option>
                                <option value="">Libro de texto</option>
                                <option value="">Libros de gran formato (coffee table book)</option>
                                <option value="">De referencia o consulta</option>
                                <option value="">Monografías</option>
                                <option value="">Recreativos</option>
                                <option value="">Poéticos</option>
                                <option value="">Juveniles</option>
                                <option value="">Ficción</option>
                                <option value="">Comedia</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione el Editorial</label>
                            <select name="editorial" id="editorial" class="form-select" aria-label="editorial">
                                <option value="">${editorial}</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Fecha de Lanzamiento</label>
                            <input type="date" name="fechaSalidadLibro" value="${fechaSalida}" id="fechaSalidadLibro">
                        </div>
                        <div class="col">
                            <input type="text" name="cantidad" id="cantidad" value="${cantidad}" class="form-control" placeholder="Cantidad" aria-label="cantidad">
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="existencia" id="existencia" value="${existencia}" class="form-control" placeholder="Existencia" aria-label="existencia">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione NIT del Editorial</label>
                            <select name="editorial_nit" id="editorial_nit" class="form-select" aria-label="NitEditorial">
                                <option value="${editorial_nit}">${editorial_nit}</option>
                            </select>
                        </div><br>

                    </div>
                    <br>
                </form>
      `;
  preguntaEditar.innerHTML = fila;
}

//funcion para abrir el modal de eliminar con la pregunta de confirmacion
function modalEliminar(id, titulo) {
  let preguntaEditar = document.getElementById("preguntaEliminar");
  let fila = `
      <p>deseas eliminar la editorial ${titulo}?</p>
      <form action="#" method="post" id="frmEliminar" >
          <input type="hidden" id="id" name="id" value="${id}">  
      </form>
      `;
  preguntaEditar.innerHTML = fila;
}

//boton  de el modal
let confirmarEdit = document.getElementById("confirmarEdit");

//esta parte envia el id de el libro por el metodo post y devuelve todos los datos de el libro en un formulario para editar
confirmarEdit.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmEditar"));
  fetch("http://localhost/CursoPHP/Biblioteca/Libro/editarLibro", {
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
        json["id"],
        json["titulo"],
        json["autor"],
        json["descripcion"],
        json["editorial"],
        json["fechaSalida"],
        json["cantidad"],
        json["existencia"],
        json["editorial_nit"]
      );
    })
    .catch(function (err) {
      alert(err);
    });
});

//evento para editar la editoriasl con el formulario
confirmarEdit.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmEditar2"));
  fetch("http://localhost/CursoPHP/Biblioteca/Editorial/editarEditorial1", {
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
  fetch("http://localhost/CursoPHP/Biblioteca/Libro/eliminarLibro", {
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
  fetch("http://localhost/CursoPHP/Biblioteca/Libro/cargarLibro", {
    method: "POST",
    body: datos,
  })
    .then(function (response) {
      if (response.ok) {
        alert(response)
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






//--------------------------------Alertas---------------------------------------------------------------
function alertEdit() {
  Swal.fire({
    title: "Buen trabajo",
    text: "Editorial editada",
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
    text: "libro eliminado",
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
    text: "Libro Insertado",
    icon: "success",
    confirmButtonText: "ok",
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.reload();
    }
  });
}
