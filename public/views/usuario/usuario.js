let foto = "";
let tbUsuario;
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("tituloUsuario").innerHTML = "<b>Nuevo Usuario</b>";
  listar_usuarios();
  $("#rol_id").select2({
    placeholder: "Seleccionar Rol",
    dropdownParent: $("#ModalUsuario .modal-body"),
    theme: "bootstrap",
    width: "100%",
  });
  listar_roles();
  enterKey();
  const input = document.getElementById("foto");
  if (input) {
    input.addEventListener("change", preview);
  } else {
    console.error("No se encontró el elemento con ID 'foto'.");
  }
});
function enterKey() {
  const ci = document.getElementById("ci");
  const nombre = document.getElementById("nombre");
  const apellido = document.getElementById("apellido");
  const direccion = document.getElementById("direccion");
  const telefono = document.getElementById("telefono");
  const correo = document.getElementById("correo");
  const contra = document.getElementById("contra");
  const confirmar = document.getElementById("confirmar");
  const rol_id = document.getElementById("rol_id");
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
      contra.focus();
    }
  });
  contra.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (contra.value === "") {
        toast("La contraseña es requerida", "info");
        contra.focus();
        return;
      }
      confirmar.focus();
    }
  });
  confirmar.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      if (confirmar.value === "") {
        toast("Confirmar la contraseña", "info");
        confirmar.focus();
        return;
      }
      rol_id.focus();
    }
  });
  rol_id.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      registrar_usuario(e);
    }
  });
}
async function listar_roles() {
  const url = `${BASE_URL}rolesListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data.data;
    const select = document.getElementById("rol_id");
    for (let i = 0; i < datos.length; i++) {
      const rol = datos[i];
      const option = document.createElement("option");
      option.value = rol.id_rol;
      option.text = rol.nombre;
      select.appendChild(option);
    }
  } catch (error) {
    console.log(error);
  }
}
async function listar_usuarios() {
  const url = `${BASE_URL}usuariosListar`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    tbUsuario = $("#tbUsuario").DataTable({
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
            `<a href="${BASE_URL}public/assets/img/usuarios/${row.foto}" target="_blank"><img src="${BASE_URL}public/assets/img/usuarios/${row.foto}" alt="Foto" style="width: 50px; height: 50px; border-radius: 40%;"></a>`,
        },
        { data: "ci" },
        { data: "nombre" },
        { data: "apellido" },
        { data: "direccion" },
        { data: "telefono" },
        { data: "rol" },
        {
          data: null,
          render: (data, type, row) =>
            `<a class="btn btn-icon-only text-info" data-id="${row.id_usuario}" onclick="modificar_usuario(\'${row.id_usuario}\')"><i class="fas fa-edit"></i></a> <a class="btn btn-icon-only text-primary" data-id="${row.id_usuario}" onclick="eliminar_usuario(\'${row.id_usuario}\')"><i class="fas fa-trash"></i></a>`,
        },
      ],
    });
  } catch (error) {
    console.log(error);
  }
}
async function registrar_usuario(e) {
  e.preventDefault();
  const id_usuario = document.getElementById("id_usuario").value.trim();
  const ci = document.getElementById("ci").value.trim();
  const nombre = document.getElementById("nombre").value.trim();
  const apellido = document.getElementById("apellido").value.trim();
  const direccion = document.getElementById("direccion").value.trim();
  const telefono = document.getElementById("telefono").value.trim();
  const correo = document.getElementById("correo").value.trim();
  const contra = document.getElementById("contra").value.trim();
  const confirmar = document.getElementById("confirmar").value.trim();
  const rol_id = document.getElementById("rol_id").value;
  const fotoInput = document.getElementById("foto");
  const foto = fotoInput.files[0];
  if (
    !ci ||
    !nombre ||
    !apellido ||
    !direccion ||
    !telefono 
  ) {
    return toast(
      "Por favor, complete todos los campos obligatorios correctamente",
      "info"
    );
  }
  if(id_usuario==="" && !correo){
    document.getElementById("correo").focus();
    toast("Por favor, ingrese un correo", "info");
    return;
  }
  if(id_usuario==="" && !contra){
    document.getElementById("contra").focus();
    toast("Por favor, ingrese una contraseña", "info");
    return;
  }
   if(id_usuario==="" && !confirmar){
    document.getElementById("confirmar").focus();
    toast("Por favor, confirme la contraseña", "info");
    return;
  }

  if (!validar_correo(correo)) {
    document.getElementById("correo").value = "";
    document.getElementById("correo").focus();
    toast("Correo electrónico inválido", "info");
    return;
  }
  if (id_usuario === "" && contra !== confirmar) {
    document.getElementById("contra").value = "";
    document.getElementById("confirmar").value = "";
    document.getElementById("contra").focus();
    toast("Las contraseñas no coinciden", "info");
    return;
  }
  const formData = new FormData();
  formData.append("id_usuario", id_usuario);
  formData.append("ci", ci);
  formData.append("nombre", nombre);
  formData.append("apellido", apellido);
  formData.append("direccion", direccion);
  formData.append("telefono", telefono);
  formData.append("rol_id", rol_id);
  formData.append("correo", correo);
  formData.append("contra", contra);
  formData.append("foto", foto);

  
  console.log(formData.get("foto"));

  const url = `${BASE_URL}usuarioRegistrar`;
  try {
    const res = await axios.post(url, formData, {
      headers: {
        "Content-Type": "multipart/form-data",
        Authorization: `Bearer ${TOKEN}`,
      },
    });
    const response = res;
    if (response.status === 201) {
      toast("Usuario registrado exitosamente", "success");
      $("#ModalUsuario").modal("hide");
      listar_usuarios();
    }
  } catch (error) {
    if (error.response.status === 409) {
      toast("El usuario ingresado ya existe", "info");
      if(id_usuario !==""){
        document.getElementById("ci").value = "";
        document.getElementById("ci").focus();
        return
      }
      document.getElementById("ci").value = "";
      document.getElementById("nombre").value = "";
      document.getElementById("apellido").value = "";
      document.getElementById("direccion").value = "";
      document.getElementById("telefono").value = "";
      document.getElementById("correo").value = "";
      document.getElementById("contra").value = "";
      document.getElementById("confirmar").value = "";
      fotoInput.value = "";
      const wrapper = document.getElementById("imagen");
      wrapper.style.backgroundImage = "none";
      document.getElementById("botonEliminar").hidden = true;
      document.getElementById("ci").focus();

      return;
    }
    if (error.response.status === 500) {
      toast("Error al registrar el usuario, intente nuevamente", "info");
      return;
    }
  }
}
async function modificar_usuario(id_usuario) {
  document.getElementById("tituloUsuario").innerHTML =
    "<b>Modificar Usuario</b>";
  document.getElementById("formUsuario").reset();
  document.getElementById("id_usuario").value = id_usuario;
  document.getElementById("corre").hidden = true;
  document.getElementById("contraseñas").hidden = true;

  const url = `${BASE_URL}usuarioListarId/${id_usuario}`;
  try {
    const response = await axios.get(url, config);
    const datos = response.data;
    console.log(datos);
    document.getElementById("id_usuario").value = datos.id_usuario;
    document.getElementById("ci").value = datos.ci;
    document.getElementById("nombre").value = datos.nombre;
    document.getElementById("apellido").value = datos.apellido;
    document.getElementById("direccion").value = datos.direccion;
    document.getElementById("telefono").value = datos.telefono;
    document.getElementById("correo").value = datos.correo;
    document.getElementById("contra").value = datos.contra;
    document.getElementById("confirmar").value = datos.contra;
    $("#rol_id").val(datos.rol_id).trigger("change");
    const wrapper = document.getElementById("imagen");
    if (datos.foto !== "default.png") {
      const imageUrl = `${BASE_URL}public/assets/img/usuarios/${datos.foto}`;
      wrapper.style.backgroundImage = `url(${imageUrl})`;
    } else {
      wrapper.style.backgroundImage = `url(${BASE_URL}public/assets/img/usuarios/default.png)`;
    }
    document.getElementById("botonEliminar").hidden = false;
    $("#ModalUsuario").modal("show");
    $("#ModalUsuario").on("shown.bs.modal", () => {
      document.getElementById("ci").focus();
    });
  } catch (error) {}
}
async function eliminar_usuario(id_usuario) {
  const result = await Swal.fire({
    title: "NuweSoft",
    text: "¿Está seguro de eliminar el usuario?",
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
    const url = `${BASE_URL}usuarioEliminar/${id_usuario}`;
    try {
      const response = await axios.get(url, config);
      const datos = response.data;
      if (datos.codigo === 200) {
        listar_usuarios();
        toast("Usuario eliminado correctamente", "success");
        return;
      }
    } catch (error) {
      console.error(error);
    }
  }
}
function Musuario(e) {
  e.preventDefault();
  document.getElementById("tituloUsuario").innerHTML = "<b>Nuevo Usuario</b>";
  document.getElementById("formUsuario").reset();
  document.getElementById("id_usuario").value = "";
  const wrapper = document.getElementById("imagen");
  wrapper.style.backgroundImage = "none";
  document.getElementById("corre").hidden = false;
  document.getElementById("contraseñas").hidden = false;
  $("#rol_id").val(0).trigger("change");
  $("#ModalUsuario").modal("show");
  $("#ModalUsuario").on("shown.bs.modal", () => {
    document.getElementById("ci").focus();
  });
}
function validar_correo(correo) {
  const expresion = /\w+@\w+\.+[a-z]/;
  return expresion.test(correo);
}
function mostrarPassword(idInput, idIcono) {
  const tipoInput = document.getElementById(idInput).getAttribute("type");
  const icono = document.getElementById(idIcono);

  if (tipoInput === "password") {
    document.getElementById(idInput).setAttribute("type", "text");
    icono.classList.remove("fa-eye");
    icono.classList.add("fa-eye-slash");
  } else {
    document.getElementById(idInput).setAttribute("type", "password");
    icono.classList.remove("fa-eye-slash");
    icono.classList.add("fa-eye");
  }
}
function preview(event) {
  const input = event.target;
  if (!input.files || !input.files[0]) {
    console.error("No se ha seleccionado ningún archivo");
    return;
  }

  const wrapper = document.getElementById("imagen");
  if (!wrapper) {
    console.error("No se encontró el elemento con el ID 'imagen'");
    return;
  }

  const file = input.files[0];
  const reader = new FileReader();
  reader.onload = () => {
    document.getElementById("botonEliminar").hidden = false;
    wrapper.style.backgroundImage = `url(${reader.result})`;
    document.getElementById("botonEliminar").style.display = "block";
  };
  reader.readAsDataURL(file);
}
function deleteImg(button) {
  const input = button.closest(".fallback").querySelector('input[type="file"]');
  input.value = "";
  foto = "";
  const wrapper = document.getElementById("imagen");
  wrapper.style.backgroundImage = "none";
  button.parentNode.style.display = "none";
}
