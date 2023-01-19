<?php
//session_start();
include('verificar.php');

if($_SESSION['cargo_usuario'] != 'administrador' && $_SESSION['cargo_usuario'] != 'gerente' && $_SESSION['cargo_usuario'] != 'tesoureiro'){
    header('Location: index.php');
    exit();
}


?>
Danilo de sousa nascimento barbosa
<h3> Usuario : <?php echo $_SESSION['nome_usuario']; ?></h3>
<h3> Cargo : <?php echo $_SESSION['cargo_usuario']; ?></h3>
<a href="logout.php">Sair</a>