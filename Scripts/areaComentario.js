// Função para criar um novo comentário
function criarComentario() {
    const texto = document.getElementById('comentario-texto').value;

    if (texto.trim() !== '') {
        const comentario = document.createElement('div');
        comentario.classList.add('comentario');
        comentario.innerHTML = `<span class="answerUser">Usuário:</span><p class="textUser"> ${texto}</p>`;
        
        document.getElementById('lista-comentarios').appendChild(comentario);
        
        document.getElementById('comentario-texto').value = '';
    }
}

// Evento para criar um novo comentário ao clicar no botão de enviar
document.getElementById('comentario-btn').addEventListener('click', criarComentario);

// Evento para criar um novo comentário ao pressionar Enter no campo de texto
document.getElementById('comentario-texto').addEventListener('keydown', function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        criarComentario();
    }
});