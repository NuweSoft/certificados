document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("page_name").innerHTML = "Instructores";
  listar_instructores();
  enterKey();
  const input = document.getElementById("foto");
  if (input) {
    input.addEventListener("change", preview);
  }
});
function Minstructor(e) {
  e.preventDefault();
  document.getElementById("tituloInstructor").innerHTML =
    "<b>Nuevo Instructor</b>";
  document.getElementById("formInstructor").reset();
  document.getElementById("id_instructor").value = "";
  document.getElementById("imagen_anterior").value = "";
  const wrapper = document.getElementById("imagen");
  wrapper.style.backgroundImage = "none";
  $("#ModalInstructor").modal("show");
  $("#ModalInstructor").on("shown.bs.modal", () => {
    document.getElementById("ci").focus();
  });
}
function enterKey() {
  const ci = document.getElementById("ci");
  const nombre = document.getElementById("nombre_instructor");
  const apellido = document.getElementById("apellido_instructor");
  const direccion = document.getElementById("direccion");
  const telefono = document.getElementById("telefono");
  const correo = document.getElementById("correo");

  ci.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (ci.value === "") {
        toast("La cedula de identidad es requerida", "info");
        ci.focus();
        return;
      }
      nombre.focus();
    }
  });
  nombre.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (nombre.value === "") {
        toast("El nombre es requerido", "info");
        nombre.focus();
        return;
      }
      nombre.value = capitalizarPalabras(nombre.value);
      apellido.focus();
    }
  });
  apellido.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (apellido.value === "") {
        toast("El apellido es requerido", "info");
        apellido.focus();
        return;
      }
      apellido.value = capitalizarPalabras(apellido.value);
      direccion.focus();
    }
  });
  direccion.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (direccion.value === "") {
        direccion.value = "SN";
      }
      direccion.value = capitalizarPalabras(direccion.value);
      telefono.focus();
    }
  });
  telefono.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (telefono.value === "") {
        toast("El telefono es requerido", "info");
        telefono.focus();
        return;
      }
      correo.focus();
    }
  });
  correo.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (correo.value === "") {
        toast("El correo electronico es requerido", "info");
        correo.focus();
        return;
      }
      if (!validar_correo(correo.value)) {
        toast("El correo electronico no es valido", "info");
        correo.focus();
        return;
      }
      registrar_instructor(e);
    }
  });
}

async function modificar_instructor(id_instructor) {
  document.getElementById("tituloInstructor").innerHTML =
    "<b>Modificar Instructor</b>";
  document.getElementById("formInstructor").reset();
  document.getElementById("id_instructor").value = id_instructor;
  const url = `${BASE_URL}instructorObtener/${id_instructor}`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;

    document.getElementById("id_instructor").value = datos.id_instructor;
    document.getElementById("ci").value = datos.ci;
    document.getElementById("nombre_instructor").value = datos.nombre;
    document.getElementById("apellido_instructor").value = datos.apellido;
    document.getElementById("direccion").value = datos.direccion;
    document.getElementById("telefono").value = datos.telefono;
    document.getElementById("correo").value = datos.correo;
    document.getElementById("imagen_anterior").value = datos.foto;

    const wrapper = document.getElementById("imagen");
    if (datos.foto !== "default.png") {
      const imageUrl = `${BASE_URL}public/assets/img/instructores/${datos.foto}`;
      wrapper.style.backgroundImage = `url(${imageUrl})`;
    } else {
      wrapper.style.backgroundImage = `url(${BASE_URL}public/assets/img/instructores/default.png)`;
    }

    document.getElementById("botonEliminar").hidden = false;
    $("#ModalInstructor").modal("show");
    $("#ModalInstructor").on("shown.bs.modal", () => {
      document.getElementById("ci").focus();
    });
  } catch (error) {
    console.error(error);
  }
}
async function listar_instructores() {
  const url = `${BASE_URL}instructoresListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    tbInstructor = $("#tbInstructor").DataTable({
      data: datos,
      language: LENGUAJE,
      destroy: true,
      responsive: true,
      order: [[1, "asc"]],
      info: true,
      lengthMenu: [DISPLAY_LENGTH, 10, 25, 50],
      autoWidth: true,
      paging: true,
      searching: true,
      ordering: true,

      columns: [
        {
          data: null,
          render: (data, type, row, meta) =>
            `<span class="badge badge-pill bg-gradient-success">${
              meta.row + 1
            }</span>`,
        },
        {
          data: "null",
          render: (data, type, row) =>
            `<a href="${BASE_URL}public/assets/img/instructores/${row.foto}" target="_blank"><img src="${BASE_URL}public/assets/img/instructores/${row.foto}" alt="Foto" style="width: 50px; height: 50px; border-radius: 40%;"></a>`,
        },
        { data: "ci" },
        { data: "nombre" },
        { data: "apellido" },
        { data: "direccion" },
        { data: "telefono" },
        {
          data: null,
          render: (data, type, row) =>
            `<a class="btn btn-icon-only text-info" data-id="${row.id_instructor}" onclick="modificar_instructor(\'${row.id_instructor}\')"><i class="fas fa-edit"></i></a> <a class="btn btn-icon-only text-primary" data-id="${row.id_instructor}" onclick="eliminar_instructor(\'${row.id_instructor}\')"><i class="fas fa-trash"></i></a>`,
        },
      ],
    });
  } catch (error) {
    console.log(error);
  }
}

async function eliminar_instructor(id_instructor) {
  const result = await Swal.fire({
    title: "NuweSoft",
    text: "¿Está seguro de eliminar el instructor?",
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
    const url = `${BASE_URL}instructorEliminar/${id_instructor}`;
    try {
      const response = await axios.get(url, config);
      const datos = response.data;
      if (datos.codigo === 200) {
        listar_instructores();
        toast("Instructor eliminado correctamente", "success");
        return;
      }
    } catch (error) {
      console.error(error);
    }
  }
}
