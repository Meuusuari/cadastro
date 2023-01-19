<?php
//session_start();
include('verificar.php');

?>
Este é o painel do tesouro
Danilo de sousa nascimento barbosa
<h3> Usuario : <?php echo $_SESSION['nome_usuario']; ?></h3>
<h3> Cargo : <?php echo $_SESSION['cargo_usuario']; ?></h3>
<a href="logout.php">Sair</a>