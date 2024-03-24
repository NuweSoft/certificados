document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("page_name").innerHTML = "Roles";
  listar_roles();
  const nombre = document.getElementById("nombre_rol");
  nombre.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (nombre.value === "") {
        toast("El nombre del rol es requerido", "info");
        nombre.focus();
        return;
      }
      nombre.value = capitalizarPalabras(nombre.value);
      registrar_rol(e);
    }
  });
});
async function listar_roles() {
  const url = `${BASE_URL}rolesListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data.data;
    $("#tbRoles").DataTable({
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
            `<a class="btn btn-icon-only text-info" data-id="${row.id_rol}" onclick="modificar_rol(\'${row.id_rol}\')"><i class="fas fa-edit"></i></a> <a class="btn btn-icon-only text-secundary" data-id="${row.id_rol}" onclick="eliminar_rol(\'${row.id_rol}\')"><i class="fas fa-trash"></i></a>`,
        },
      ],
    });
  } catch (error) {
    console.error(error);
  }
}
function Mrol(e) {
  e.preventDefault();
  document.getElementById("tituloRol").innerHTML = "<b>Nuevo Rol</b>";
  document.getElementById("id_rol").value = "";
  document.getElementById("nombre_rol").value = "";
  $("#ModalRol").modal("show");
  $("#ModalRol").on("shown.bs.modal", () => {
    document.getElementById("nombre_rol").focus();
  });
}
async function modificar_rol(id) {
  const url = `${BASE_URL}rolObtener/${id}`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data.data;
    document.getElementById("tituloRol").innerHTML = "<b>Modificar Rol</b>";
    document.getElementById("id_rol").value = datos.id_rol;
    document.getElementById("nombre_rol").value = datos.nombre;
    $("#ModalRol").modal("show");
    $("#ModalRol").on("shown.bs.modal", () => {
      document.getElementById("nombre_rol").focus();
    });
  } catch (error) {
    console.error(error);
  }
}
async function eliminar_rol(id) {
  const result = await Swal.fire({
    title: "NuweSoft",
    text: "¿Está seguro de eliminar el rol?",
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
    const url = `${BASE_URL}rolEliminar/${id}`;
    try {
      const response = await axios.get(url, config);
      const datos = response.data;
      if (datos.codigo === 200) {
        listar_roles();
        toast("Rol eliminado correctamente", "success");
        return;
      }
    } catch (error) {
      console.error(error);
    }
  }
}
