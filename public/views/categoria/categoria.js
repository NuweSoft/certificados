document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("page_name").innerHTML = "Categorias";
  listar_categorias();
  const nombre = document.getElementById("nombre_categoria");
  nombre.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (nombre.value === "") {
        toast("El nombre de la categoria es requerido", "info");
        nombre.focus();
        return;
      }
      nombre.value = capitalizarPalabras(nombre.value);
      registrar_categoria(e);
    }
  });
});
async function listar_categorias() {
  const url = `${BASE_URL}categoriasListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data.data;

    $("#tbCategorias").DataTable({
      data: datos,
      language: LENGUAJE,
      destroy: true,
      responsive: true,
      info: true,
      lengthMenu: [DISPLAY_LENGTH, 10, 25, 50],
      autoWidth: true,
      paging: true,
      searching: true,
      columns: [
        {
          data: null,
          render: (data, type, row, meta) =>
            `<span class="badge badge-pill bg-gradient-success">${formatNumber(
              meta.row + 1
            )}</span>`,
        },
        { data: "nombre" },
        {
          data: null,
          render: (data, type, row) =>
            `<a class="btn btn-icon-only text-info" data-id="${row.id_categoria}" onclick="modificar_categoria(\'${row.id_categoria}\')"><i class="fas fa-edit"></i></a> <a class="btn btn-icon-only text-secundary" data-id="${row.id_categoria}" onclick="eliminar_categoria(\'${row.id_categoria}\')"><i class="fas fa-trash"></i></a>`,
        },
      ],
    });
  } catch (error) {
    console.error(error);
  }
}
function Mcategoria(e) {
  e.preventDefault();
  document.getElementById("tituloCategoria").innerHTML =
    "<b>Nuevo Categoria</b>";
  document.getElementById("id_categoria").value = "";
  document.getElementById("nombre_categoria").value = "";
  $("#ModalCategoria").modal("show");
  $("#ModalCategoria").on("shown.bs.modal", () => {
    document.getElementById("nombre_categoria").focus();
  });
}
async function modificar_categoria(id) {
  const url = `${BASE_URL}categoriaObtener/${id}`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data.data;
    document.getElementById("tituloCategoria").innerHTML = "<b>Modificar Categoria</b>";
    document.getElementById("id_categoria").value = datos.id_categoria;
    document.getElementById("nombre_categoria").value = datos.nombre;
    $("#ModalCategoria").modal("show");
    $("#ModalCategoria").on("shown.bs.modal", () => {
      document.getElementById("nombre_categoria").focus();
    });
  } catch (error) {
    console.error(error);
  }
}
async function eliminar_categoria(id) {
  const result = await Swal.fire({
    title: "NuweSoft",
    text: "¿Está seguro de eliminar la categoria?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "eliminar",
    cancelButtonText: "cancelar",
    customClass: {
      confirmButton: "btn bg-gradient-danger btn-sm rounded-pill m-3",
      cancelButton: "btn bg-gradient-secondary btn-sm rounded-pill m-3",
    },
    buttonsStyling: false,
    confirmButtonColor: "#dc3545",
  });
  if (result.isConfirmed) {
    const url = `${BASE_URL}categoriaEliminar/${id}`;
    try {
      const response = await axios.get(url, config);
      const datos = response.data;
      if (datos.codigo === 200) {
        listar_categorias();
        toast("Categoria eliminado correctamente", "success");
        return;
      }
    } catch (error) {
      console.error(error);
    }
  }
}


  