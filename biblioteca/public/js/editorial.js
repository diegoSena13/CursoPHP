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

alert("hola")

/*  let registrar=document.getElementById('Registrar');

 registrar.addEventListener('click',()=>{
    alert("hola")
 }) */