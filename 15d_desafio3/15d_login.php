<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<!-- Criando os campos do formulário -->
 <!-- Campo usuário -->
    <form method="post" action="">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" required><br><br>
<!-- Campo senha -->
         <label for="senha">Senha</label>
         <input type="password" name="senha" required><br><br>
         
         <!-- Campo seleção de cor de fundo -->
         <label for="cor">Cor de Fundo:</label> 
    <select id="cor" name="cor">
        <option value="pink">Rosa</option>
        <option value="blue">Azul</option>
        <option value="yellow">Amarelo </option>
        <option value="purple">Roxo</option>
        <option value="green">Verde</option>
        <option value="red">Vermelho</option>
        <option value="brown">Marrom</option>
</select> <br> <br>

<!-- Criando botão -->
        <button type="submit">Cadastrar</button>

    </form>
    

    <?php
    session_start();

    //Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Recebe os valores enviados pelo formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $cor = $_POST['cor'];

        //Conecta com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        //Verifica a conexão
        if ($conn->connect_error) {
            die("Falha de conexão: " . $conn->connect_error);
        }

        //Consulta o usuário do banco de dados
        $sql = "SELECT * FROM usuarios
                WHERE usuario= '$usuario' AND senha= '$senha'";

        $result = $conn->query($sql);

        //Verifica se encontrou o usuário

        if ($result->num_rows > 0) {

        //Se sim, salva o usuário e as cores em variáveis de sessão
            $_SESSION['usuario'] = $usuario;
            $_SESSION['cor']= $cor;

            // header que vai direcionar para a próxima página
            header("Location: 15d_perfil.php");
            exit();
            echo "<script>
                        window.location.href = '15d_perfil.php';
                  </script>";
        } else {
            echo "<p style='color: red, '> Usuário ou senha incorretos </p>";
        }

        //Fecha a conexão
        $conn->close();
    }



    
    ?>
</body>
</html>