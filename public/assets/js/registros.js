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
