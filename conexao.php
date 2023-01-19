<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'sistema');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('nao conectou');

?>