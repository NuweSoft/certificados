document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("page_name").innerHTML = "Certificados";
    listar_cursos();
  });
  async function listar_cursos() {
    try {
      const url = `${BASE_URL}cursosListar`;
      const response = await axios.get(url, config);
      const data = response;
      console.log(data);
      const categoria = document.getElementById("curso_id");
      categoria.innerHTML = '<option value="0">Seleccionar curso</option>';
      for (const element of data.data) {
        const optionHtml = `<option class="text-center" value="${element.id_curso}">${element.curso}</option>`;
        categoria.insertAdjacentHTML("beforeend", optionHtml);
      }
    } catch (error) {
      console.error(error);
    }
  }