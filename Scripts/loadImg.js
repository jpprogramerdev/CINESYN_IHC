const imagem = document.getElementById("imgUser")
const input = document.getElementById("upImgUser")
  
input.addEventListener("change", () =>{
  imagem.src = URL.createObjectURL(input.files[0])
})