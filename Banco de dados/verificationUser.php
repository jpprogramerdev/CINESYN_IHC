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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailUser"];
    $senha = $_POST["password"];

    // faça a verificação no banco de dados para ver se o usuário existe
    $sql = "SELECT * FROM user_CINESYN WHERE email='$email' AND senha_user='$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $nome = $row['nome'];
        session_start();
        $_SESSION['nomeUsuario'] = $nome;
        header('Location: ../Pagina Filmes/paginaFilmes.php');
    }else {
        echo "Usuário não encontrado";
    }
}

// fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
