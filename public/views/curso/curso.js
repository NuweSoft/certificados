document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("page_name").innerHTML = "Cursos";
  $("#categoria_id").select2({
    dropdownParent: $("#ModalCurso .modal-body"),
    width: "100%",
    theme: "bootstrap",
  });
  $("#instructor_id").select2({
    dropdownParent: $("#ModalCurso .modal-body"),
    width: "100%",
    placeholder: "Seleccione un instructor",
  });
  listar_cursos();
  listar_categorias();
  listar_instructores();

  const nombre = document.getElementById("nombre_curso");
  const fecha_ini = document.getElementById("fecha_ini");
  const fecha_fin = document.getElementById("fecha_fin");
  const descripcion = document.getElementById("descripcion");
  const categoria_id = document.getElementById("categoria_id");
  nombre.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (nombre.value === "") {
        toast("El nombre de la categoria es requerido", "info");
        nombre.focus();
        return;
      }
      nombre.value = capitalizarPalabras(nombre.value);
      fecha_ini.focus();
    }
  });
  fecha_ini.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (fecha_ini.value === "") {
        toast("La fecha de inicio es requerida", "info");
        fecha_ini.focus();
        return;
      }
      if (fecha_ini.value < moment().format("YYYY-MM-DD")) {
        toast(
          "La fecha de inicio no puede ser menor a la fecha actual",
          "info"
        );
        fecha_ini.focus();
        return;
      }
      fecha_fin.focus();
    }
  });
  fecha_fin.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (fecha_fin.value === "") {
        toast("La fecha de fin es requerida", "info");
        fecha_fin.focus();
        return;
      }
      if (fecha_fin.value < fecha_ini.value) {
        toast(
          "La fecha de fin no puede ser menor a la fecha de inicio",
          "info"
        );
        fecha_fin.focus();
        return;
      }
      descripcion.focus();
    }
  });
  descripcion.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (descripcion.value === "") {
        toast("La descripcion es requerida", "info");
        descripcion.focus();
        return;
      }
      descripcion.value = capitalizarPalabras(descripcion.value);
      categoria_id.focus();
    }
  });
  categoria_id.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (categoria_id.value === 0) {
        toast("La categoria es requerida", "info");
        categoria_id.focus();
        return;
      }
      registrar_curso(e);
    }
  });
});
async function registrar_curso(e) {
  e.preventDefault();
  const id_curso = document.getElementById("id_curso").value.trim();
  const nombre = document.getElementById("nombre_curso").value;
  const descripcion = document.getElementById("descripcion").value;
  const categoria_id = document.getElementById("categoria_id").value;
  const instructor_id = $("#instructor_id").val();
  const fecha_ini = document.getElementById("fecha_ini").value;
  const fecha_fin = document.getElementById("fecha_fin").value;
  const fotoInput = document.getElementById("foto");
  const foto = fotoInput.files[0];
  const imagen_anterior = document.getElementById("imagen_anterior").value;

  console.log(categoria_id);
  if (nombre === "") {
    toast("El nombre del curso es obligatorio", "info");
    document.getElementById("nombre_curso").focus();
    return;
  }

  if (descripcion === "") {
    toast("La descripcion del curso es obligatoria", "info");
    document.getElementById("descripcion").focus();
    return;
  }
  // biome-ignore lint/suspicious/noDoubleEquals: <explanation>
  if (categoria_id == 0) {
    toast("La categoria del curso es obligatoria", "info");
    return;
  }
  if (fecha_ini === "") {
    toast("La fecha de inicio del curso es obligatoria", "info");
    document.getElementById("fecha_ini").focus();
    return;
  }
  if (fecha_fin === "") {
    toast("La fecha de fin del curso es obligatoria", "info");
    document.getElementById("fecha_fin").focus();
    return;
  }
  if (fecha_ini < moment().format("YYYY-MM-DD")) {
    toast("La fecha de inicio no puede ser menor a la fecha actual", "info");
    document.getElementById("fecha_ini").focus();
    return;
  }
  if (fecha_fin < fecha_ini) {
    toast("La fecha de fin no puede ser menor a la fecha de inicio", "info");
    document.getElementById("fecha_fin").focus();
    return;
  }
  const formData = new FormData();
  formData.append("id_curso", id_curso);
  formData.append("nombre", nombre);
  formData.append("descripcion", descripcion);
  formData.append("categoria_id", categoria_id);
  formData.append("instructor_id", instructor_id);
  formData.append("fecha_ini", fecha_ini);
  formData.append("fecha_fin", fecha_fin);
  formData.append("foto", foto);
  if (imagen_anterior !== "") {
    formData.append("imagen_anterior", imagen_anterior);
  }
  const url = `${BASE_URL}cursoRegistrar`;
  try {
    const res = await axios.post(url, formData, {
      headers: {
        "Content-Type": "multipart/form-data",
        Authorization: `Bearer ${TOKEN}`,
      },
    });
    const response = res;
    if (response.status === 201) {
      toast("Curso registrado exitosamente", "success");
      $("#ModalCurso").modal("hide");
      listar_cursos();
    }
  } catch (error) {
    console.log(error);
  }
}
async function listar_cursos() {
  const url = `${BASE_URL}cursosListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    tbCurso = $("#tbCurso").DataTable({
      data: datos,
      language: LENGUAJE,
      destroy: true,
      responsive: true,
      order: [[0, "asc"]],
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
        { data: "categoria" },
        { data: "curso" },
        {
          data: null,
          render: (data, type, row, meta) => {
            const palabras = row.descripcion.split(" ").slice(0, 8).join(" ");
            return `${
              palabras + (row.descripcion.split(" ").length > 8 ? "..." : "")
            }<br>`;
          },
        },

        {
          data: null,
          render: (data, type, row) => {
            return moment(row.fecha_ini).format("DD/MM/YYYY");
          },
        },
        {
          data: null,
          render: (data, type, row) => {
            return moment(row.fecha_fin).format("DD/MM/YYYY");
          },
        },
        {
          data: null,
          render: (data, type, row) => {
            if (row.nombres_instructores === "Sin instructor") {
              return `<span class="badge badge-pill bg-gradient-danger">${row.nombres_instructores}</span>`;
            }
            const nombres = row.nombres_instructores.split(",");
            const apellidos = row.apellidos_instructores.split(",");
            let instructores = "";
            for (let i = 0; i < nombres.length; i++) {
              instructores += `${nombres[i]} ${apellidos[i]}<br>`;
            }
            return instructores;
          },
        },

        {
          data: null,
          render: (data, type, row) =>
            `<a class="btn btn-icon-only text-info" data-id="${row.id_curso}" onclick="ver_curso(\'${row.id_curso}\')"><i class="fas fa-eye"></i></a>
            <a class="btn btn-icon-only text-info" data-id="${row.id_curso}" onclick="modificar_curso(\'${row.id_curso}\')"><i class="fas fa-edit"></i></a>
             <a class="btn btn-icon-only text-primary" data-id="${row.id_curso}" onclick="eliminar_curso(\'${row.id_curso}\')"><i class="fas fa-trash"></i></a>`,
        },
      ],
    });
  } catch (error) {
    console.log(error);
  }
}
function Mcurso(e) {
  e.preventDefault();
  document.getElementById("tituloCurso").innerHTML = "<b>Nuevo Curso</b>";
  document.getElementById("formCurso").reset();
  document.getElementById("id_curso").value = "";
  const wrapper = document.getElementById("imagen");
  wrapper.style.backgroundImage = "none";
  $("#categoria_id").val(0).trigger("change");
  $("#instructor_id").val(0).trigger("change");
  $("#ModalCurso").modal("show");
  $("#ModalCurso").on("shown.bs.modal", () => {
    document.getElementById("nombre_curso").focus();
  });
}
async function listar_categorias() {
  try {
    const url = `${BASE_URL}categoriasListar`;
    const response = await axios.get(url, config);
    const data = response.data;
    const categoria = document.getElementById("categoria_id");
    categoria.innerHTML = '<option value="0">Seleccionar categoria</option>';
    for (const element of data.data) {
      const optionHtml = `<option value="${element.id_categoria}">${element.nombre}</option>`;
      categoria.insertAdjacentHTML("beforeend", optionHtml);
    }
  } catch (error) {
    console.error(error);
  }
}
async function listar_instructores() {
  const url = `${BASE_URL}instructoresListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    const select = document.getElementById("instructor_id");
    for (let i = 0; i < datos.length; i++) {
      const rol = datos[i];
      const option = document.createElement("option");
      option.value = rol.id_instructor;
      option.text = `${rol.nombre} ${rol.apellido}`;
      select.appendChild(option);
    }
  } catch (error) {
    console.log(error);
  }
}
async function eliminar_curso(id) {
  const result = await Swal.fire({
    title: "NuweSoft",
    text: "¿Está seguro de eliminar el curso?",
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
    const url = `${BASE_URL}cursoEliminar/${id}`;
    try {
      const response = await axios.get(url, config);
      const datos = response.data;
      if (datos.codigo === 200) {
        listar_cursos();
        toast("Curso eliminado correctamente", "success");
        return;
      }
    } catch (error) {
      console.error(error);
    }
  }
}
async function modificar_curso(id) {
  const url = `${BASE_URL}cursoObtener/${id}`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    document.getElementById("tituloCurso").innerHTML = "<b>Modificar Curso</b>";
    document.getElementById("nombre_curso").value = datos[0].nombre;
    document.getElementById("descripcion").value = datos[0].descripcion;
    document.getElementById("id_curso").value = datos[0].id_curso;
    document.getElementById("fecha_ini").value = moment(
      datos[0].fecha_ini
    ).format("YYYY-MM-DD");
    document.getElementById("fecha_fin").value = moment(
      datos[0].fecha_fin
    ).format("YYYY-MM-DD");
    $("#categoria_id").val(datos[0].categoria_id).trigger("change");

    const instructor_ids = datos.map((curso) => curso.instructor_id);
    $("#instructor_id").val(instructor_ids).trigger("change");

    const wrapper = document.getElementById("imagen");
    if (datos[0].foto !== "default.png") {
      const imageUrl = `${BASE_URL}public/assets/img/cursos/${datos[0].foto}`;
      wrapper.style.backgroundImage = `url(${imageUrl})`;
    } else {
      wrapper.style.backgroundImage = `url(${BASE_URL}public/assets/img/cursos/default.png)`;
    }
    $("#ModalCurso").modal("show");
    $("#ModalCurso").on("shown.bs.modal", () => {
      document.getElementById("nombre_curso").focus();
    });
  } catch (error) {
    console.error(error);
  }
}
async function ver_curso(id) {
  const url = `${BASE_URL}cursoObtener/${id}`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    console.log(datos);
    document.getElementById("curso").innerHTML = `<b>${datos[0].nombre}</b>`;
    document.getElementById(
      "categoria_nombre"
    ).innerHTML = `${datos[0].categoria}: ${datos[0].nombre}`;
    document.getElementById(
      "descripcion_curso"
    ).innerHTML = `${datos[0].descripcion}`;
    let instructoresHTML = "";
    for (const curso of datos) {
      instructoresHTML += `<li class="list-group-item justify-content-between align-items-center mb-2"><img src="${BASE_URL}public/assets/img/instructores/${curso.foto_instructor}" class="img-fluid img-thumbnail" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"/>  ${curso.nombre_intructor} ${curso.apellido}</li>`;
    }
    document.getElementById("instructor").innerHTML = instructoresHTML;
    document.getElementById(
      "inicio"
    ).innerHTML = `<i class="fas fa-calendar-alt"></i> Inicio: ${moment(
      datos[0].fecha_ini
    ).format("DD/MM/YYYY")}`;
    document.getElementById(
      "fin"
    ).innerHTML = `<i class="fas fa-calendar-alt"></i> Fin: ${moment(
      datos[0].fecha_fin
    ).format("DD/MM/YYYY")}`;
    document.getElementById(
      "imagen_curso"
    ).src = `${BASE_URL}public/assets/img/cursos/${datos[0].foto}`;
  } catch (error) {}
  $("#ModalVerCurso").modal("show");
}

