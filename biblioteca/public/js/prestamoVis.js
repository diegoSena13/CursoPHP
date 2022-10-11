/* $(document).ready(function () {
$("#tblPrestamo").DataTable({
      ajax: {
        url:"http://localhost/CursoPHP/Biblioteca/Prestamo/dataTable",
        dataSrc: "",
      },
      columns: [
        { data: "tituloLibro" },
        { data: "autorLibro" },
        { data: "categoriaLibro" },
        { data: "fechaSalida" },
        { data: "fechaEntrega" },
        { data: "encabezadoPrestamo_consecutivo" },
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
    }); */

$(document).ready(function () {
  $("#tblPrestamo").DataTable({
    ajax: {
      url: "http://localhost/CursoPHP/Biblioteca/Prestamo/dataTable",
      dataSrc: "",
    },
    columns: [
      { data: "tituloLibro" },
      { data: "autorLibro" },
      { data: "categoriaLibro" },
      { data: "fechaSalida" },
      { data: "fechaEntrega" },
      { data: "encabezadoPrestamo_consecutivo" },
    ],
  });
});
