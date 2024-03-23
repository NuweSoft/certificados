const LENGUAJE = {
  sProcessing: "Procesando...",
  sLengthMenu: "Listar _MENU_ registros",
  sZeroRecords: "No se encontraron resultados",
  sEmptyTable: "Ningún dato disponible en esta tabla",
  sInfo: "Listando _END_ de _TOTAL_",
  sInfoEmpty: "Listando 0 de 0 ",
  sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
  sInfoPostFix: "",
  sSearch: "Buscar:",
  sUrl: "",
  sInfoThousands: ",",
  sLoadingRecords: "Cargando...",
  oPaginate: {
    sFirst: "Primero",
    sLast: "Último",
    sNext: ">",
    sPrevious: "<",
  },
  oAria: {
    sSortAscending: ": Activar para ordenar la columna de manera ascendente",
    sSortDescending: ": Activar para ordenar la columna de manera descendente",
  },
};
const DISPLAY_LENGTH = 5;
const config = {
  headers: {
    Authorization: `Bearer ${TOKEN}`,
  },
};
const boton = document.getElementById("mod");
const modo_movil = document.querySelectorAll(".mobile-hide");
function ajustes() {
  if (boton) {
    if (window.innerWidth >= 900) {
      boton.style.display = "none";
    } else {
      boton.style.display = "block";
    }
  }
  for (let i = 0; i < modo_movil.length; i++) {
    if (window.innerWidth < 900) {
      modo_movil[i].style.display = "none";
    } else {
      modo_movil[i].style.display = "block";
    }
  }
}
ajustes();
window.addEventListener("resize", () => {
  ajustes();
});
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}
function capitalizarPalabras(texto) {
  return texto
    .split(" ")
    .map((word) => {
      return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    })
    .join(" ");
}
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
  };

  toastr[tipoMensaje](mensaje);
}

$(document).ready(() => {
  $("#sidenav-collapse-main .nav-item a").click(function () {
    $("#sidenav-collapse-main .nav-item a").removeClass(
      "active bg-gradient-primary"
    );
    $(this).addClass("active bg-gradient-primary");
    localStorage.setItem("activeNavItemIndex", $(this).parent().index());
  });
  const selectedColor = localStorage.getItem("selectedColor");
  if (selectedColor) {
    applySidebarColor(selectedColor);
    $(`.badge-colors .badge[data-color="${selectedColor}"]`).addClass("active");
  }

  const activeNavItemIndex = localStorage.getItem("activeNavItemIndex");
  if (activeNavItemIndex !== null) {
    const selectedNavItem = $(
      `#sidenav-collapse-main .nav-item:eq(${activeNavItemIndex}) a`
    );
    selectedNavItem.addClass(`active bg-gradient-${selectedColor}`);
  }
  const selectedColor2 =
    localStorage.getItem("selectedColorSidebar") || "bg-gradient-dark";
  applySidebarColor2(selectedColor2);
  if (selectedColor2 === "bg-white" || selectedColor2 === "bg-transparent") {
    const textElements = document.querySelectorAll(
      ".sidenav .text-white, .sidenav .text-dark"
    );
    for (let i = 0; i < textElements.length; i++) {
      textElements[i].classList.remove("text-white");
      textElements[i].classList.add("text-dark");
    }
  }
  adjustLogoColor(selectedColor2);
});
function applySidebarColor(color) {
  $(".navbar-sidebar")
    .removeClass(
      "bg-gradient-primary bg-gradient-dark bg-gradient-info bg-gradient-success bg-gradient-warning bg-gradient-danger"
    )
    .addClass(`bg-gradient-${color}`);
  localStorage.setItem("selectedColor", color);
}
function sidebarColor(a) {
  const parent = document.querySelector(".nav-link.active");
  const color = a.getAttribute("data-color");
  const bgClasses = [
    "bg-gradient-primary",
    "bg-gradient-dark",
    "bg-gradient-info",
    "bg-gradient-success",
    "bg-gradient-warning",
    "bg-gradient-danger",
  ];
  for (const bgClass of bgClasses) {
    if (parent.classList.contains(bgClass)) {
      parent.classList.remove(bgClass);
    }
  }
  parent.classList.add(`bg-gradient-${color}`);
  applySidebarColor(color);
}
function sidebarType(a) {
  changeSidebarBackgroundColor(a);
  changeTextColors(a);
  adjustLogoColor(a.getAttribute("data-class"));
  saveSelectedColor(a);
  applySidebarColor2(a.getAttribute("data-class"));
}
function changeSidebarBackgroundColor(a) {
  const parent = a.parentElement.children;
  const color2 = a.getAttribute("data-class");
  const sidebar = document.querySelector(".sidenav");

  for (const element of parent) {
    element.classList.remove("active");
  }

  const colors = Array.from(parent).map((element) =>
    element.getAttribute("data-class")
  );
  for (const color of colors) {
    sidebar.classList.remove(color);
  }
}
function changeTextColors(a) {
  const color2 = a.getAttribute("data-class");
  const bodyDark = document.body.classList.contains("dark-version");
  const textElements = document.querySelectorAll(
    ".sidenav .text-white, .sidenav .text-dark"
  );

  const textClass =
    color2 === "bg-transparent" || color2 === "bg-white"
      ? "text-dark"
      : "text-white";
  for (let i = 0; i < textElements.length; i++) {
    textElements[i].classList.remove("text-white", "text-dark");
    textElements[i].classList.add(textClass);
  }
  if (color2 === "bg-transparent" && bodyDark) {
    const navbarBrandTexts = document.querySelectorAll(
      ".navbar-brand .text-dark"
    );
    for (let i = 0; i < navbarBrandTexts.length; i++) {
      navbarBrandTexts[i].classList.add("text-white");
      navbarBrandTexts[i].classList.remove("text-dark");
    }
  }
}
function adjustLogoColor(color) {
  const body = document.body;
  const bodyWhite = !body.classList.contains("dark-version");
  const navbarBrand = document.querySelector(".navbar-brand-img");
  const navbarBrandImg = navbarBrand.src;

  if ((color === "bg-transparent" || color === "bg-white") && bodyWhite) {
    if (navbarBrandImg.includes("logo-ct.png")) {
      navbarBrand.src = navbarBrandImg.replace("logo-ct", "logo-ct-dark");
    }
  } else {
    if (navbarBrandImg.includes("logo-ct-dark.png")) {
      navbarBrand.src = navbarBrandImg.replace("logo-ct-dark", "logo-ct");
    }
  }
}
function saveSelectedColor(a) {
  localStorage.setItem("selectedColorSidebar", a.getAttribute("data-class"));
}
function applySidebarColor2(color2) {
  $("#sidenav-main")
    .removeClass("bg-gradient-dark bg-white bg-transparent")
    .addClass(color2);
  localStorage.setItem("selectedColorSidebar", color2);
}

// Light Mode / Dark Mode
/* function darkMode(el) {
  const body = document.getElementsByTagName("body")[0];
  const hr = document.querySelectorAll("div:not(.sidenav) > hr");
  const hr_card = document.querySelectorAll("div:not(.bg-gradient-dark) hr");
  const text_btn = document.querySelectorAll("button:not(.btn) > .text-dark");
  const text_span = document.querySelectorAll(
    "span.text-dark, .breadcrumb .text-dark"
  );
  const text_span_white = document.querySelectorAll(
    "span.text-white, .breadcrumb .text-white"
  );
  const text_strong = document.querySelectorAll("strong.text-dark");
  const text_strong_white = document.querySelectorAll("strong.text-white");
  const text_nav_link = document.querySelectorAll("a.nav-link.text-dark");
  const text_nav_link_white = document.querySelectorAll(
    "a.nav-link.text-white"
  );
  const secondary = document.querySelectorAll(".text-secondary");
  const bg_gray_100 = document.querySelectorAll(".bg-gray-100");
  const bg_gray_600 = document.querySelectorAll(".bg-gray-600");
  const btn_text_dark = document.querySelectorAll(
    ".btn.btn-link.text-dark, .material-icons.text-dark"
  );
  const btn_text_white = document.querySelectorAll(
    ".btn.btn-link.text-white, .material-icons.text-white"
  );
  const card_border = document.querySelectorAll(".card.border");
  const card_border_dark = document.querySelectorAll(
    ".card.border.border-dark"
  );

  const svg = document.querySelectorAll("g");

  // Verificar si el modo oscuro estaba activado antes de recargar la página
  const isDarkMode = localStorage.getItem("darkMode") === "true";

  if (isDarkMode) {
    body.classList.add("dark-version");
    el.setAttribute("checked", "true");
  }

  el.addEventListener("change", function () {
    if (this.checked) {
      body.classList.add("dark-version");
      localStorage.setItem("darkMode", "true");
    } else {
      body.classList.remove("dark-version");
      localStorage.setItem("darkMode", "false");
    }
  });

  if (!el.getAttribute("checked")) {
    body.classList.add("dark-version");
    for (let i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains("dark")) {
        hr[i].classList.remove("dark");
        hr[i].classList.add("light");
      }
    }

    for (let i = 0; i < hr_card.length; i++) {
      if (hr_card[i].classList.contains("dark")) {
        hr_card[i].classList.remove("dark");
        hr_card[i].classList.add("light");
      }
    }
    for (let i = 0; i < text_btn.length; i++) {
      if (text_btn[i].classList.contains("text-dark")) {
        text_btn[i].classList.remove("text-dark");
        text_btn[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < text_span.length; i++) {
      if (text_span[i].classList.contains("text-dark")) {
        text_span[i].classList.remove("text-dark");
        text_span[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < text_strong.length; i++) {
      if (text_strong[i].classList.contains("text-dark")) {
        text_strong[i].classList.remove("text-dark");
        text_strong[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < text_nav_link.length; i++) {
      if (text_nav_link[i].classList.contains("text-dark")) {
        text_nav_link[i].classList.remove("text-dark");
        text_nav_link[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < secondary.length; i++) {
      if (secondary[i].classList.contains("text-secondary")) {
        secondary[i].classList.remove("text-secondary");
        secondary[i].classList.add("text-white");
        secondary[i].classList.add("opacity-8");
      }
    }
    for (let i = 0; i < bg_gray_100.length; i++) {
      if (bg_gray_100[i].classList.contains("bg-gray-100")) {
        bg_gray_100[i].classList.remove("bg-gray-100");
        bg_gray_100[i].classList.add("bg-gray-600");
      }
    }
    for (let i = 0; i < btn_text_dark.length; i++) {
      btn_text_dark[i].classList.remove("text-dark");
      btn_text_dark[i].classList.add("text-white");
    }
    for (let i = 0; i < svg.length; i++) {
      if (svg[i].hasAttribute("fill")) {
        svg[i].setAttribute("fill", "#fff");
      }
    }
    for (let i = 0; i < card_border.length; i++) {
      card_border[i].classList.add("border-dark");
    }
    el.setAttribute("checked", "true");
  } else {
    body.classList.remove("dark-version");
    for (let i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains("light")) {
        hr[i].classList.add("dark");
        hr[i].classList.remove("light");
      }
    }
    for (let i = 0; i < hr_card.length; i++) {
      if (hr_card[i].classList.contains("light")) {
        hr_card[i].classList.add("dark");
        hr_card[i].classList.remove("light");
      }
    }
    for (let i = 0; i < text_btn.length; i++) {
      if (text_btn[i].classList.contains("text-white")) {
        text_btn[i].classList.remove("text-white");
        text_btn[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < text_span_white.length; i++) {
      if (
        text_span_white[i].classList.contains("text-white") &&
        !text_span_white[i].closest(".sidenav") &&
        !text_span_white[i].closest(".card.bg-gradient-dark")
      ) {
        text_span_white[i].classList.remove("text-white");
        text_span_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < text_strong_white.length; i++) {
      if (text_strong_white[i].classList.contains("text-white")) {
        text_strong_white[i].classList.remove("text-white");
        text_strong_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < text_nav_link_white.length; i++) {
      if (
        text_nav_link_white[i].classList.contains("text-white") &&
        !text_nav_link_white[i].closest(".sidenav")
      ) {
        text_nav_link_white[i].classList.remove("text-white");
        text_nav_link_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < secondary.length; i++) {
      if (secondary[i].classList.contains("text-white")) {
        secondary[i].classList.remove("text-white");
        secondary[i].classList.remove("opacity-8");
        secondary[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < bg_gray_600.length; i++) {
      if (bg_gray_600[i].classList.contains("bg-gray-600")) {
        bg_gray_600[i].classList.remove("bg-gray-600");
        bg_gray_600[i].classList.add("bg-gray-100");
      }
    }
    for (let i = 0; i < svg.length; i++) {
      if (svg[i].hasAttribute("fill")) {
        svg[i].setAttribute("fill", "#252f40");
      }
    }
    for (let i = 0; i < btn_text_white.length; i++) {
      if (!btn_text_white[i].closest(".card.bg-gradient-dark")) {
        btn_text_white[i].classList.remove("text-white");
        btn_text_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < card_border_dark.length; i++) {
      card_border_dark[i].classList.remove("border-dark");
    }
    el.removeAttribute("checked");
  }
} */

document.addEventListener("DOMContentLoaded", () => {
  const darkModeCheckbox = document.getElementById("dark-version");
  const isDarkMode = localStorage.getItem("darkMode") === "true";

  // Actualizar el estado del checkbox según el valor almacenado
  darkModeCheckbox.checked = isDarkMode;

  // Aplicar el modo oscuro si está activado al cargar la página
  if (isDarkMode) {
    applyDarkMode();
  }

  // Escuchar cambios en el checkbox y guardar el estado en el almacenamiento local
  darkModeCheckbox.addEventListener("change", function () {
    if (this.checked) {
      applyDarkMode();
      localStorage.setItem("darkMode", "true");
    } else {
      removeDarkMode();
      localStorage.setItem("darkMode", "false");
    }
  });

  function applyDarkMode() {
    const body = document.getElementsByTagName("body")[0];
    const hr = document.querySelectorAll("div:not(.sidenav) > hr");
    const hr_card = document.querySelectorAll("div:not(.bg-gradient-dark) hr");
    const text_btn = document.querySelectorAll("button:not(.btn) > .text-dark");
    const text_span = document.querySelectorAll(
      "span.text-dark, .breadcrumb .text-dark"
    );
    const text_span_white = document.querySelectorAll(
      "span.text-white, .breadcrumb .text-white"
    );
    const text_strong = document.querySelectorAll("strong.text-dark");
    const text_strong_white = document.querySelectorAll("strong.text-white");
    const text_nav_link = document.querySelectorAll("a.nav-link.text-dark");
    const text_nav_link_white = document.querySelectorAll(
      "a.nav-link.text-white"
    );
    const secondary = document.querySelectorAll(".text-secondary");
    const bg_gray_100 = document.querySelectorAll(".bg-gray-100");
    const bg_gray_600 = document.querySelectorAll(".bg-gray-600");
    const btn_text_dark = document.querySelectorAll(
      ".btn.btn-link.text-dark, .material-icons.text-dark"
    );
    const btn_text_white = document.querySelectorAll(
      ".btn.btn-link.text-white, .material-icons.text-white"
    );
    const card_border = document.querySelectorAll(".card.border");
    const card_border_dark = document.querySelectorAll(
      ".card.border.border-dark"
    );
    const svg = document.querySelectorAll("g");

    body.classList.add("dark-version");
    darkModeCheckbox.setAttribute("checked", "true");

    for (let i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains("dark")) {
        hr[i].classList.remove("dark");
        hr[i].classList.add("light");
      }
    }

    body.classList.add("dark-version");
    for (let i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains("dark")) {
        hr[i].classList.remove("dark");
        hr[i].classList.add("light");
      }
    }

    for (let i = 0; i < hr_card.length; i++) {
      if (hr_card[i].classList.contains("dark")) {
        hr_card[i].classList.remove("dark");
        hr_card[i].classList.add("light");
      }
    }
    for (let i = 0; i < text_btn.length; i++) {
      if (text_btn[i].classList.contains("text-dark")) {
        text_btn[i].classList.remove("text-dark");
        text_btn[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < text_span.length; i++) {
      if (text_span[i].classList.contains("text-dark")) {
        text_span[i].classList.remove("text-dark");
        text_span[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < text_strong.length; i++) {
      if (text_strong[i].classList.contains("text-dark")) {
        text_strong[i].classList.remove("text-dark");
        text_strong[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < text_nav_link.length; i++) {
      if (text_nav_link[i].classList.contains("text-dark")) {
        text_nav_link[i].classList.remove("text-dark");
        text_nav_link[i].classList.add("text-white");
      }
    }
    for (let i = 0; i < secondary.length; i++) {
      if (secondary[i].classList.contains("text-secondary")) {
        secondary[i].classList.remove("text-secondary");
        secondary[i].classList.add("text-white");
        secondary[i].classList.add("opacity-8");
      }
    }
    for (let i = 0; i < bg_gray_100.length; i++) {
      if (bg_gray_100[i].classList.contains("bg-gray-100")) {
        bg_gray_100[i].classList.remove("bg-gray-100");
        bg_gray_100[i].classList.add("bg-gray-600");
      }
    }
    for (let i = 0; i < btn_text_dark.length; i++) {
      btn_text_dark[i].classList.remove("text-dark");
      btn_text_dark[i].classList.add("text-white");
    }
    for (let i = 0; i < svg.length; i++) {
      if (svg[i].hasAttribute("fill")) {
        svg[i].setAttribute("fill", "#fff");
      }
    }
    for (let i = 0; i < card_border.length; i++) {
      card_border[i].classList.add("border-dark");
    }
  }

  function removeDarkMode() {
    const body = document.getElementsByTagName("body")[0];
    const hr = document.querySelectorAll("div:not(.sidenav) > hr");
    const hr_card = document.querySelectorAll("div:not(.bg-gradient-dark) hr");
    const text_btn = document.querySelectorAll("button:not(.btn) > .text-dark");
    const text_span = document.querySelectorAll(
      "span.text-dark, .breadcrumb .text-dark"
    );
    const text_span_white = document.querySelectorAll(
      "span.text-white, .breadcrumb .text-white"
    );
    const text_strong = document.querySelectorAll("strong.text-dark");
    const text_strong_white = document.querySelectorAll("strong.text-white");
    const text_nav_link = document.querySelectorAll("a.nav-link.text-dark");
    const text_nav_link_white = document.querySelectorAll(
      "a.nav-link.text-white"
    );
    const secondary = document.querySelectorAll(".text-secondary");
    const bg_gray_100 = document.querySelectorAll(".bg-gray-100");
    const bg_gray_600 = document.querySelectorAll(".bg-gray-600");
    const btn_text_dark = document.querySelectorAll(
      ".btn.btn-link.text-dark, .material-icons.text-dark"
    );
    const btn_text_white = document.querySelectorAll(
      ".btn.btn-link.text-white, .material-icons.text-white"
    );
    const card_border = document.querySelectorAll(".card.border");
    const card_border_dark = document.querySelectorAll(
      ".card.border.border-dark"
    );
    
    const svg = document.querySelectorAll("g");

    body.classList.remove("dark-version");
    darkModeCheckbox.removeAttribute("checked");

    for (let i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains("light")) {
        hr[i].classList.add("dark");
        hr[i].classList.remove("light");
      }
    }

    body.classList.remove("dark-version");
    for (let i = 0; i < hr.length; i++) {
      if (hr[i].classList.contains("light")) {
        hr[i].classList.add("dark");
        hr[i].classList.remove("light");
      }
    }
    for (let i = 0; i < hr_card.length; i++) {
      if (hr_card[i].classList.contains("light")) {
        hr_card[i].classList.add("dark");
        hr_card[i].classList.remove("light");
      }
    }
    for (let i = 0; i < text_btn.length; i++) {
      if (text_btn[i].classList.contains("text-white")) {
        text_btn[i].classList.remove("text-white");
        text_btn[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < text_span_white.length; i++) {
      if (
        text_span_white[i].classList.contains("text-white") &&
        !text_span_white[i].closest(".sidenav") &&
        !text_span_white[i].closest(".card.bg-gradient-dark")
      ) {
        text_span_white[i].classList.remove("text-white");
        text_span_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < text_strong_white.length; i++) {
      if (text_strong_white[i].classList.contains("text-white")) {
        text_strong_white[i].classList.remove("text-white");
        text_strong_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < text_nav_link_white.length; i++) {
      if (
        text_nav_link_white[i].classList.contains("text-white") &&
        !text_nav_link_white[i].closest(".sidenav")
      ) {
        text_nav_link_white[i].classList.remove("text-white");
        text_nav_link_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < secondary.length; i++) {
      if (secondary[i].classList.contains("text-white")) {
        secondary[i].classList.remove("text-white");
        secondary[i].classList.remove("opacity-8");
        secondary[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < bg_gray_600.length; i++) {
      if (bg_gray_600[i].classList.contains("bg-gray-600")) {
        bg_gray_600[i].classList.remove("bg-gray-600");
        bg_gray_600[i].classList.add("bg-gray-100");
      }
    }
    for (let i = 0; i < svg.length; i++) {
      if (svg[i].hasAttribute("fill")) {
        svg[i].setAttribute("fill", "#252f40");
      }
    }
    for (let i = 0; i < btn_text_white.length; i++) {
      if (!btn_text_white[i].closest(".card.bg-gradient-dark")) {
        btn_text_white[i].classList.remove("text-white");
        btn_text_white[i].classList.add("text-dark");
      }
    }
    for (let i = 0; i < card_border_dark.length; i++) {
      card_border_dark[i].classList.remove("border-dark");
    }
  }
});
