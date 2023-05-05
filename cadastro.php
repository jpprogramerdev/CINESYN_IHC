<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>CINESYN - cadastro</title>
    <link rel="stylesheet" href="./Style/index.css">
    <link rel="shortcut icon" href="./IMG/logoCINESYN_SemLetras.png" type="image/x-icon">
</head>
<body>
    <section>
            <div class="painelLogin" id="painelLogin">
                <img src="./IMG/logoCINESYN_SemLetras.png" alt="imagem do usuario">
                <form id="formLogin" method="POST" action="./Banco de dados/verificationUser.php">
                    <label for="userName">Nome:</label>
                    <input type="text" name="userName" id="userName">
                    
                    <label for="user">E - mail:</label>
                    <input type="email" name="emailUser" id="emailUser">
                    
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password">

                    <label for="imgUser">Foto de perfil</label>
                    <input type="file" id="upImgUser" name="imagem">

                    <img src="img.jpg" alt="" class="imgUser" id="imgUser">
                </form>
                
                <div class="helpLinks">
                    <a href="cadastro.php">Cadastrar-se</a>
                    <a href="recoverPassword.html">Recuperar senha</a>
                </div>
            </div>
        
    </section>

    <script src="./Scripts/boxShadowPainel.js"></script>
    <script>
        const imagem = document.getElementById("imgUser");
  const input = document.getElementById("upImgUser");
  
  input.addEventListener("change", () => {
    imagem.src = URL.createObjectURL(input.files[0]);
  });
    </script>
</body>
</html>