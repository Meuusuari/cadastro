<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header {
        width: 100%;
        display: flex;
        margin-top: 20px;
        margin-bottom: 60px;
    }
    .linkes{
        width: 50%;
    }
    .link{
        width: 50%;
        text-align: right;
    }
    .novo{
        background: green;
        margin-left: 150px;
        color: aliceblue;
    }
    .novo:hover{
        background: rgb(27, 9, 128);
    }
    .tabela{
        width: 80%;
        margin: auto;
        border: 1px solid blue;
        height: 160px;
    }
    .cliente{
        border: 1px solid blue;
        font-size: 40px;
        padding: 20px;
    }
    .div5{
        display: flex;
        
    }
    .divs{
        width: 100%;
        padding: 5px;
        color: blue;
        font-weight: bold;
    }
    form{
        border: 1px solid black;
        width: 50%;
        margin: auto;
        text-align: center;
        margin-bottom: 5px;
    }
    input{
        width: 90%;
    }
    .desfaz{
        width: 100%;
        text-align: right;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
    }
    .submit{
        display: flex;
        width: 40%
    }
    .inputad{
        background: green;
    }
    .inpu{
        background: red;
    }

</style>
<body>
    <header>
        <div class="linkes"><a href="#">Voltar</a></div>
        <div class="link"><input type="text" placeholder="Pesquisar"></div>
    </header>

    
    <div><button onclick="inserir()" class="novo">Inserir Novo</button></div>
    <div id="insere">
    <!-- <form action="">
        <h2>Nome</h2>
        <input type="text" name="nome">
        <h2>Telefone</h2>
        <input type="text" name="nome">
        <h2>Endeco</h2>
        <input type="text" name="nome">
        <h2>Email</h2>
        <input type="text" name="nome">
        <h2>CPF</h2>
        <input type="text" name="nome">
    </form> -->
    </div>
    <div class="tabela">
        <div class="cliente">Tabela de Clientes</div>
    <div class="div5">

<?php
$query = "select * from clientes order by nome asc";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

    if($row == ''){
        echo "<h3> Não exite dados no banco </h3>";      
    }else{
       
    ?> 
    <!-- $nome = $dado["nome"];
    $telefone = $dado["telefone"];
    $endereco = $dado["enderco"];
    $email = $dado["email"];
    $data = $dado["data"]; -->




      <table>
        <th>
            Nome
        </th>
        <th>
            Telefone
        </th>
        <th>
            Endereco
        </th>
        <th>
            Email
        </th>
        <th>
            CPF
        </th>
        <th>
            Data
        </th>
        <th>
            Acoes
        </th>
<?php

        while($res_1 = mysqli_fetch_array($result)){
            $nome = $res_1["nome"];
    $telefone = $res_1["telefone"];
    $endereco = $res_1["endereco"];
    $email = $res_1["email"];
    $cpf = $res_1["cpf"];
    $data = $res_1["data"];
?>
       <tr>
       <td><?php echo $nome; ?></td>
       <td><?php echo $telefone; ?></td>
       <td><?php echo $endereco; ?></td>
       <td><?php echo $email; ?></td>
       <td><?php echo $cpf; ?></td>
       <td><?php echo $data; ?></td>
       <td>acoes</td>
        </tr>

    <?php
        }
?>

      </table>
    </div>
    <?php
    }
    ?>
    <hr>
    </div>
    <script>
        function inserir() {
            let novo = document.getElementById('insere');
             novo.innerHTML = `<form method="POST">
                <div class="desfaz" onclick="desfaz()">X</div>
        <h2>Nome</h2>
        <input type="text" name="nome">
        <h2>Telefone</h2>
        <input type="text" name="telefone">
        <h2>Endeco</h2>
        <input type="text" name="endereco">
        <h2>Email</h2>
        <input type="text" name="email">
        <h2>CPF</h2>
        <input type="text" name="cpf">
        <div class="submit">
        <input class="inputad" type="Submit" name="button" value="Salvar">
        <input class="inpu" type="Submit" value="cancelar">
        </div>
    </form>`;
        }
        
        function desfaz() {
            let refaz = document.getElementById('insere');
             refaz.innerHTML = "";
        }
    </script>
</body>
</html>
<!-- cadastrar -->
<?php
if(isset($_POST['button'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

//verificar se cpf esta cadastrado
$query_verificar = "select * from clientes where cpf = '$cpf' ";

    $result_verificar = mysqli_query($conexao, $query_verificar);
   
    $row_verificar = mysqli_num_rows($result_verificar);

    if($row_verificar > 0){
        echo "<script language='javascript' >window.alert('CPF já cadastrado!!'); </script>";
        exit();
    }


    $query = "INSERT into clientes (nome, telefone, endereco, email, cpf, data) VALUES (
        '$nome', '$telefone', '$endereco', '$email', '$cpf' curDate() )";

    $result = mysqli_query($conexao, $query);
    $dado = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);
    
    if($result == ''){
        echo "<script language='javascript' >window.alert('Ocorreu um erro ao cadastrar'); </script>";
    }else{
        echo "<script language='javascript'> window.alert('Salvo com sucesso'); </script>";
    }
   
}
?>
