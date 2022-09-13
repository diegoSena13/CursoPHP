$(document).ready(function () {
    $('#tblEditorial').DataTable({
        ajax:{
            url:"http://localhost/CursoPHP/Biblioteca/Editorial/dataTable",
            dataSrc:""
        },
        columns: [
            { data: 'nit' },
            { data: 'nombre' },
            { data: 'generosProduce' },
            { data: 'tipo' },
            { data: 'ubicacion' }
        ],
    });
});

function saludar(){
    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
    )
}