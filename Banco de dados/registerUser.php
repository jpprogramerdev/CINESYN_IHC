<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinesyn";

// cria a conexão com o banco de dados
$conexao = mysqli_connect($servername, $username, $password, $dbname);

// verifica se houve algum erro de conexão
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Dados do formulário
    $userName = mysqli_real_escape_string($conexao, $_POST['userName']);
    $emailUser = mysqli_real_escape_string($conexao, $_POST['emailUser']);
    $password = mysqli_real_escape_string($conexao, $_POST['password']);
    $imagem = $_FILES["imagem"];

    if($imagem != NULL) {
        $nomeFinal = time().'.jpg';
        if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
            $tamanhoImg = filesize($nomeFinal);
    
            $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

            $query = "INSERT INTO user_cinesyn (nome_user, email_user, senha_user, imagem_user) VALUES ('$userName', '$emailUser', '$password', '$mysqlImg')";
            if (mysqli_query($conexao, $query)) {
                unlink($nomeFinal);
                header("location: ../Pagina Filmes/paginaFilmes.php");
            } else {
                die("O sistema não foi capaz de executar a query: " . mysqli_error($conexao));
            }
        }
    } else {
        echo "Você não realizou o upload de forma satisfatória.";
    }

    mysqli_close($conexao);
}
?>
