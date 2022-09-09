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
            { data: 'existencia' }
        ],
    });
});