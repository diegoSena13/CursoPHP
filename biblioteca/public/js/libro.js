$(document).ready(function () {
    $('#tblLibro').DataTable({
        ajax:{
            url:"http://localhost/CursoPHP/Biblioteca/Libro/dataTable",
            dataSrc:""
        },
        columns: [
            { data: 'titulo' },
            { data: 'autor' },
            { data: 'descripcion' },
            { data: 'categoria' },
            { data: 'cantidad' },
            { data: 'existencia' },
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