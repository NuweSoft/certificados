document.addEventListener("DOMContentLoaded", () => {
  listar_cursos_nuevos();
  listar_cursos();
});
async function listar_cursos_nuevos() {
  try {
    const url = `${BASE_URL}cursosNuevos`;
    const response = await axios.get(url);
    const data = response.data;

    if (data.length > 0) {
      for (let i = 0; i < Math.min(data.length, 10); i++) {
        const cursoNombre = data[i].curso;
        const cursoId = data[i].id_curso;
        const imgUrl = `${BASE_URL}public/assets/img/cursos/${data[i].foto_curso}`;
        document.getElementById(`curso${i + 1}`).innerHTML = `
          <a href="${BASE_URL}curso/${cursoId}/${cursoNombre}">
            <img class="w-100 border-radius-xl grayscale-img" src="${imgUrl}" loading="lazy" alt="signupcover">
          </a>`;
      }
    } else {
      for (let i = 0; i < 10; i++) {
        document.getElementById(`curso${i + 1}`).innerHTML = `
          <img class="w-100 border-radius-xl grayscale-img" src="${BASE_URL}public/assets/img/cursos/default.png" loading="lazy" alt="signupcover">`;
      }
    }
  } catch (error) {
    console.error(error);
  }
}

async function listar_cursos() {
  try {
    const url = `${BASE_URL}cursosLista`;
    const response = await axios.get(url);
    const cursos = response.data;
    const contenedorCursos = document.querySelector(".contenedors");
    for (const curso of cursos) {
      const buttonElement = document.createElement("button");
      buttonElement.classList.add("tags");
      buttonElement.id = `curso_${curso.id_curso}`; 
      const imgElement = document.createElement("img");
      imgElement.classList.add("drake");
      imgElement.src = `${BASE_URL}public/assets/img/cursos/${curso.foto_curso}`;
      imgElement.alt = curso.curso;
      buttonElement.appendChild(imgElement);
      contenedorCursos.appendChild(buttonElement);
      buttonElement.addEventListener("click", () => {
        const cursoId = curso.id_curso;
        const cursoNombre = curso.curso;
        window.location.href = `${BASE_URL}curso/${cursoId}/${cursoNombre}`;
      });
    }
  } catch (error) {
    console.error(error);
  }
}

