<?php
//Página restrita
//Seção de início
 session_start();

//  Verifica se o usuário está logado 
if (!isset ($_SESSION['usuario'])){
    header("Location: 15d_login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
$cor= isset($_SESSION['cor']) ? $_SESSION['cor'] : 'white';
?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil restrito</title>
 </head>
 <body style="background-color: <?php echo $cor; ?>;">
    <h1>Seja bem-vindo,<?php echo $_SESSION['usuario']; ?> !</h1>
    <h2>Essa é uma página privada, sendo apenas acessada através de uma senha.</h2>

    <a href="15d_logout.php">Logout</a>
 </body>
 </html>