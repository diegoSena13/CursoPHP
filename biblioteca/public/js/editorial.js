$(document).ready(function () {
  $("#tblEditorial").DataTable({
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
          "<button type='button' class='btn btn-danger btn-sm shadow-sm' id='eliminar'>Eliminar +</button>",
      },
    ],
  });
  
  $("#tblEditorial tbody").on("click", "#editar", function () {
    let data = table.row($(this).parents("tr")).data();
    alert(data.nit, data.nombre);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });
});

function modalEditar(nit, nombre) {
  let preguntaEditar = document.getElementById("preguntaEditar");
  let fila = `
    <form action="" method="post" >
        <p>deseas editar la editorial ${nombre},${nit}?</p>
        <button type="submit" class="btn btn-primary">Confirmar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>   
    </form>
    `;
  preguntaEditar.innerHTML += fila;
}
