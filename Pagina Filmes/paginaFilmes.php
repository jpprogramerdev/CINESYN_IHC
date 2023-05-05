<?php
    session_start();
    if(isset($_SESSION['nomeUsuario'])){
        $nomeUsuario = $_SESSION['nomeUsuario'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINESYN</title>
    <link rel="stylesheet" href="../Style/paginaFilmes.css">
    <link rel="stylesheet" href="../Style/carrosel.css">
</head>
<body>
    <header class="category">
        <img src="../IMG/logoCINESYN_SemLetras.png" alt="Logo">

        <form action="/search" method="get">
            <input type="text" name="q" placeholder="Digite sua busca aqui" class="barSreach">
        </form>

        <div class="user">
        <?php
                if(isset($nomeUsuario)){
                    echo "<p class='userCont'>$nomeUsuario</p>";
                }
        ?>
            <img src="../IMG/usuario.png" alt="Usuario">
            <p class="userCont">Minha<br>conta</p>
        </div>
    </header>

    <section>
        
        <div class="container">
            <p class="categoryTitle">Drama</p>
            <button class="arrow-left control" aria-label="Previous image">◀</button>
            <div class="gallery-wrapper">
              <div class="gallery">
                <img src="../IMG/FILMES/poderosoChefao" alt="Filme O poderoso chefão"  class="item current-item">
                <img src="../IMG/FILMES/ateOUltimoHomem.jpg" alt="filme"  class="item current-item">
                <img src="../IMG/FILMES/nomadland.jpg" alt="filme"  class="item current-item">
                <img src="../IMG/FILMES/oCuriosoCasoDeBenjaminButton.jpg" alt="filme"  class="item current-item">
                <img src="../IMG/FILMES/milagreNaCela7.jpg" alt="filme"  class="item current-item">
              </div>
            </div>
            <button class="arrow-right control" aria-label="Next Image">▶</button>
        </div>
    </section>

    <script src="../Scripts/carrosel.js"></script>
</body>
</html>