async function registrar_rol(e) {
  e.preventDefault();
  const nombre = document.getElementById("nombre_rol").value;
  const id_rol = document.getElementById("id_rol").value;

  if (!nombre) {
    toast("Ingrese el nombre del rol", "info");
    document.getElementById("nombre").focus();
    return;
  }
  const url = `${BASE_URL}rolRegistrar`;
  const data = {
    nombre: nombre,
    id_rol: id_rol,
  };

  try {
    const response = await axios.post(url, data, config);
    if (response.status === 201) {
      toast("Rol registrado exitosamente", "success");
      $("#ModalRol").modal("hide");
      listar_roles();
    }
  } catch (error) {
    if (error.response.status === 409) {
      toast("El rol ingresado ya existe", "info");
      document.getElementById("nombre_rol").value = "";
      document.getElementById("nombre_rol").focus();
      return;
    }
    if (error.response.status === 500) {
      toast("Error al registrar el rol, intente nuevamente", "info");
      return;
    }
  }
}
async function registrar_categoria(e) {
  e.preventDefault();
  const nombre = document.getElementById("nombre_categoria").value;
  const id_categoria = document.getElementById("id_categoria").value;

  if (!nombre) {
    toast("Ingrese el nombre del categoria", "info");
    document.getElementById("nombre").focus();
    return;
  }
  const url = `${BASE_URL}categoriaRegistrar`;
  const data = {
    nombre: nombre,
    id_categoria: id_categoria,
  };

  try {
    const response = await axios.post(url, data, config);
    if (response.status === 201) {
      toast("Categoria registrada exitosamente", "success");
      $("#ModalCategoria").modal("hide");
      listar_categorias();
    }
  } catch (error) {
    if (error.response.status === 409) {
      toast("La categoria ingresado ya existe", "info");
      document.getElementById("nombre_categoria").value = "";
      document.getElementById("nombre_categoria").focus();
      return;
    }
    if (error.response.status === 500) {
      toast("Error al registrar ela categoria, intente nuevamente", "info");
      return;
    }
  }
}
async function registrar_instructor(e) {
  e.preventDefault();
  const id_instructor = document.getElementById("id_instructor").value.trim();
  const ci = document.getElementById("ci").value.trim();
  const nombre = document.getElementById("nombre_instructor").value.trim();
  const apellido = document.getElementById("apellido_instructor").value.trim();
  const direccion = document.getElementById("direccion").value.trim();
  const telefono = document.getElementById("telefono").value.trim();
  const correo = document.getElementById("correo").value.trim();
  const fotoInput = document.getElementById("foto");
  const foto = fotoInput.files[0];
  const imagen_anterior = document.getElementById("imagen_anterior").value;
  if (id_instructor === "") {
    imagen_anterior.value = "";
  }
  if (!ci || !nombre || !apellido || !direccion || !telefono || !correo) {
    return toast(
      "Por favor, complete todos los campos obligatorios correctamente",
      "info"
    );
  }
  if (!validar_correo(correo)) {
    document.getElementById("correo").value = "";
    document.getElementById("correo").focus();
    toast("Correo electrónico inválido", "info");
    return;
  }
  const formData = new FormData();
  formData.append("id_instructor", id_instructor);
  formData.append("ci", ci);
  formData.append("nombre", nombre);
  formData.append("apellido", apellido);
  formData.append("direccion", direccion);
  formData.append("telefono", telefono);
  formData.append("correo", correo);
  formData.append("foto", foto);
  if (imagen_anterior !== "") {
    formData.append("imagen_anterior", imagen_anterior);
  }

  const url = `${BASE_URL}instructorRegistrar`;
  try {
    const res = await axios.post(url, formData, {
      headers: {
        "Content-Type": "multipart/form-data",
        Authorization: `Bearer ${TOKEN}`,
      },
    });
    const response = res;
    if (response.status === 201) {
      toast("Instructor registrado exitosamente", "success");
      $("#ModalInstructor").modal("hide");
      listar_instructores();
    }
  } catch (error) {
    if (error.response.status === 409) {
      toast("El instructor ingresado ya existe", "info");
      if (id_instructor !== "") {
        document.getElementById("ci").value = "";
        document.getElementById("ci").focus();
        return;
      }
      document.getElementById("ci").value = "";
      document.getElementById("nombre_instructor").value = "";
      document.getElementById("apellido_instructor").value = "";
      document.getElementById("direccion").value = "";
      document.getElementById("telefono").value = "";
      document.getElementById("correo").value = "";
      fotoInput.value = "";
      const wrapper = document.getElementById("imagen");
      wrapper.style.backgroundImage = "none";
      document.getElementById("botonEliminar").hidden = true;
      document.getElementById("ci").focus();
      return;
    }
    if (error.response.status === 500) {
      toast("Error al registrar el instructor, intente nuevamente", "info");
      return;
    }
  }
}
