$(document).ready(function () {
  var table = $("#tblEditorial").DataTable({
    autoWidth: false,
    ajax: {
      url: "http://localhost/CursoPHP/Biblioteca/Editorial/dataTable",
      dataSrc: "",
    },
    columns: [
      { data: "nit" },
      { data: "nombre" },
      { data: "generosProduce" },
      { data: "tipo" },
      { data: "ubicacion" },
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

  $("#tblEditorial tbody").on("click", "#editar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEditar(data.nit, data.nombre);
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });

  $("#tblEditorial tbody").on("click", "#eliminar", function () {
    let data = table.row($(this).parents("tr")).data();
    modalEliminar(data.nit, data.nombre);
    //alert(data);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });
});

//funcion para abrir el modal de editar con la pregunta de confirmacion
function modalEditar(nit, nombre) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
    <p>deseas editar la editorial ${nombre}?</p>
    <form action="#" method="post" id="frmEditar" >
        <input type="hidden" id="nit" name="nit" value="${nit}">  
    </form>
    `;
  preguntaEditar.innerHTML = fila;
}

//funcion para abrir el modal editar con el formulario para editar
function modalEditar2(nit, nombre, generos, tipo, ubicacion) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
  <form action="" method="post" id="frmEditar2">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nit" class="form-control" placeholder="NIT" aria-label="nit" value="${nit}">
                        </div>
                        <div class="col">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="nombre" value="${nombre}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="generosProduce" value="${generos}" class="form-control" placeholder="Generos Produce" aria-label="GeneroProduce">
                        </div>
                        <div class="col">
                            <label for="formGroupExampleInput" class="form-label">Seleccione Tipo</label>
                            <select class="form-select" name="tipo" aria-label="tipo">
                                <option value="${tipo}">${tipo}</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="ubicacion" value="${ubicacion}" class="form-control" placeholder="Ubicación" aria-label="ubicacion">
                        </div>
                    </div><br>
            </div>

            </form>
    `;
  preguntaEditar.innerHTML = fila;
}

//funcion para abrir el modal de eliminar con la pregunta de confirmacion
function modalEliminar(nit, nombre) {
  let preguntaEditar = document.getElementById("preguntaEliminar");
  let fila = `
    <p>deseas eliminar la editorial ${nombre}?</p>
    <form action="#" method="post" id="frmEliminar" >
        <input type="hidden" id="nit" name="nit" value="${nit}">  
    </form>
    `;
  preguntaEditar.innerHTML = fila;
}

//boton  de el modal
let confirmarEdit = document.getElementById("confirmarEdit");

//esta parte envia el nit de la editorial por el metodo post y devuelve todos los datos de la editorial en un formulario para editar
confirmarEdit.addEventListener("click", (e) => {
  let datos = new FormData(document.getElementById("frmEditar"));
  fetch("http://localhost/CursoPHP/Biblioteca/Editorial/editarEditorial", {
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
        json["nit"],
        json["nombre"],
        json["generosProduce"],
        json["tipo"],
        json["ubicacion"]
      );
    })
    .catch(function (err) {
      console.log(err);
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
  fetch("http://localhost/CursoPHP/Biblioteca/Editorial/eliminarEditorial", {
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
  fetch("http://localhost/CursoPHP/Biblioteca/Editorial/cargarEditorial", {
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
    text: "Editorial eliminada",
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
    text: "Editorial Insertada",
    icon: "success",
    confirmButtonText: "ok",
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.reload();
    }
  });
}
