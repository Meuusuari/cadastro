<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Localhost: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where usuario = '{$usuario}' and senha = '{$senha}' ";

$result = mysqli_query($conexao, $query);
$dado = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if($row > 0){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome_usuario'] = $dado["nome"];
    $_SESSION['cargo_usuario'] = $dado["cargo"];

    if($_SESSION['cargo_usuario'] == 'administrador' || $_SESSION['cargo_usuario'] == 'gerente') {
        header('Location: painel-danilo.php');
        exit();
    }
    if($_SESSION['cargo_usuario'] == 'tesoureiro') {
        header('Location: painel-tesouro.php');
        exit();
    }
    if($_SESSION['cargo_usuario'] == 'funcionario') {
        header('Location: painel-funcionario.php');
        exit();
    }

    header('Location: painel-danilo.php');
    exit();
}else{
    $_SESSION['nao autenticado'] = true;
    header('Location: index.php');
    exit();
}

?>