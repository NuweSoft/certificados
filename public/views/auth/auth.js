document.addEventListener("DOMContentLoaded", () => {
  const correo = document.getElementById("correo");
  const contra = document.getElementById("contra");
  correo.focus();
  correo.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
      event.preventDefault();
      document.getElementById("contra").focus();
    }
  });
  contra.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
      event.preventDefault();
      login(event);
    }
  });
});

function toast(mensaje, tipoMensaje) {
  toastr.options = {
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-center",
    preventDuplicates: true,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    toastClass: "toast-margin-top",
  };

  toastr[tipoMensaje](mensaje);
}

async function login(e) {
  e.preventDefault();
  const correo = document.getElementById("correo").value;
  const contra = document.getElementById("contra").value;
  if (!correo && !contra) {
    toast("Ingrese su usuario y contraseña", "info");
    document.getElementById("correo").focus();
    return;
  }
  if (!correo) {
    toast("Ingrese su correo electrónico ", "info");
    document.getElementById("correo").focus();
    return;
  }
  if (!contra) {
    toast("Ingrese su contraseña ", "info");
    document.getElementById("contra").focus();
    return;
  }
  const data = { correo, contra };
  const url = `${BASE_URL}login`;

  try {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      body: JSON.stringify(data),
    });

    const result = await response.json();
    console.log(result);
    if (result.estado === "ok") {
      toast(
        `Bienvenido ${result.data.nombre} ${result.data.apellido}`,
        "success"
      );
      setTimeout(() => {
        window.location.href = `${BASE_URL}home`;
      }, 2000);
    } else {
      toast(result.data, "error");
    }
  } catch (e) {
    console.log(e);
    toast("Error al iniciar sesión, inténtelo más tarde", "error");
  }
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
