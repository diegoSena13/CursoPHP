$(document).ready(function () {
    $('#tblEstudiantes').DataTable({
        ajax:{
            url:"http://localhost/CursoPHP/Biblioteca/Estudiante/dataTable",
            dataSrc:""
        },
        columns: [
            { data: 'nombre' },
            { data: 'apellido' },
            { data: 'correo' },
            { data: 'telefono' },
            { data: 'direccion' }
        ],
    });
});