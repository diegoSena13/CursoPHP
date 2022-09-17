$(document).ready(function () {
  $("#tblEstudiantes").DataTable({
    ajax: {
      url: "http://localhost/CursoPHP/Biblioteca/Estudiante/dataTable",
      dataSrc: "",
    },
    columns: [
      { data: "nombre" },
      { data: "apellido" },
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
          "<button type='button' class='btn btn-danger btn-sm shadow-sm' id='eliminar'>Eliminar +</button>",
      },
    ],
  });
});
