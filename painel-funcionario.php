<?php
//session_start();
include('verificar.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampletes</title>
</head>
<style>
    body{
    background: rgb(85, 87, 85);
    
    
}
.menu {
    display: flex;
    margin-left: 30px;
    height: 400px;
    margin-top: 50px;
    background: rgb(159, 163, 159);
    margin-right: 30px;
}
img {
    width: 50px;
    border-radius: 50%;
}
.feito {
    width: 35%;
    height: 400px;
    margin-right: 22px;
    text-align: center;
    font-size: 25px;
    border: 1px solid rgb(8, 8, 8);
    background: white;
}
a{
    color: black;
    text-decoration: none;
    
}
.irmao{
    width: 60%;
    height: 150px;
    display: flex;
    font-weight: bold;
}
.div12{
    width: 100%;
    text-align: center;
    padding-top: 50px;
    background: white;
    margin-right: 5px;
}
button{
    border: none;
    padding: 10px;
    background: rgb(111, 116, 111);
    cursor: pointer;
    color: white;
}
button:hover{
    border: none;
    padding: 10px;
    background: rgb(19, 117, 19);
}
.frente {
    text-align: right;
    width: 90%;
    color: white;
}
.linket {
    font-size: 13px;
    margin-right: 2px;
}
.clicado {
    width: 70px;
    float: right;
    text-align: center;
    border: 1px solid blue;
    cursor: pointer;
}
.div123 {
    background: white;
    color: black;
}
.div123:hover {
    background: black;
    color: white;
}
.laranja {
    background: red
}

</style>
<body>
    <main class="frente">
    <h3><?php echo $_SESSION['nome_usuario']; ?> <button onclick="feito()" class="linket">...  </button><a href="logout.php">Sair</a></h3>
    <div id="clickes"> 
</div>
</main><br><br>

    <div class="menu">
        <div class="feito">
            <img src="img/Koala.jpg" alt=""><br>
        <a href="clientes.php">Clientes</a><br>
        <a href="#">sucesso</a><br>
        <a href="#">sucesso</a><br>
        <a href="#">sucesso</a><br>
        <a href="#">sucesso</a><br>
        <a href="#">sucesso</a><br>
        <a href="#">sucesso</a>
    </div>
    <div class="irmao">
        <div class="div12">Primeiro</div>
        <div class="div12">R$ 2. 2278, 58</div>
        <div class="div12">Bom</div>
        <div class="div12">10/12/2022</div>
    </div>

    </div>
    <script>
        function feito() {
            let clicles = document.getElementById('clickes');
            clicles.innerHTML = `<div class="clicado">
        <div class="div123">action</div>
    <div>action</div>
    <div class="div123">action</div>
    <div class="laranja" onclick="desfeito()">X</div>
</div>`;
        }
        function desfeito() {
            let back = document.getElementById('clickes');
            back.innerHTML = "";
        }
    </script>
</body>
</html>

Este é o painel do funcionario
Danilo de sousa nascimento barbosa
<h3> Usuario : <?php echo $_SESSION['nome_usuario']; ?></h3>
<h3> Cargo : <?php echo $_SESSION['cargo_usuario']; ?></h3>
<a href="logout.php">Sair</a>