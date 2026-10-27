<?php
// seção de início
session_start();
//seção de destroição
session_destroy();
//direciona pra página inicial de login
header("Location: 15d_login.php ");
exit();
?>