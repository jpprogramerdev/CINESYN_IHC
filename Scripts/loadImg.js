const imagem = document.getElementById("imgUser");
const input = document.querySelector("input[name='imagem']");

input.addEventListener("change", () => {
  imagem.src = URL.createObjectURL(input.files[0]);
});