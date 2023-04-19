<?php
   
if(isset($_POST['submit'])){

    $modelo = $_POST['modelo'];
    include_once('conexaoBD.php');
    $resutado = mysqli_query($conexao, "INSERT INTO modelos (modelo) VALUES('$modelo')");

}

include_once('conexaoBD.php');
$sql = "SELECT * FROM modelos ORDER BY id DESC";
$resModelo = $conexao->query($sql);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><Label>
        <link rel="stylesheet" href="./CSS/index.css">
        <link rel="stylesheet" href="./CSS/cadastroModelo.css">
    </Label>
    <title>Document</title>
</head>
<body>
<div class="contentHead">

<div class ="navbar">
        <a href="./index.php">VOLTAR PARA PESQUISA</a>
        <a href="./cadastroPeças.php">CADASTRA PEÇAS</a>
</div>
<div style="width: 100%; display:flex; justify-content: center;margin-top: 5%;margin-bottom: 5%;">
<div class="contentForm">
    <h1>Cadastro de Modelos</h1>
<form action="./cadastroModelo.php" method="post">

        <input type="text" name="modelo" placeholder="Modelo" required>

        <input type="submit" name="submit" value="Cadastra Modelo">


</form>

</div>
</div>
<hr>

<div>

        <h1>Modelos cadastrados</h1>
<?php

while($modelo = mysqli_fetch_assoc($resModelo)){
                        echo"<option value=".$modelo['modelo'] .">".$modelo['modelo'] . "</option>";
                }

                ?>
</div>


