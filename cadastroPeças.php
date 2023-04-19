<?php


if(isset($_POST['submit'])){

        $modelo = $_POST['modelo'];
        $painel = $_POST['painel'];
        $precoPainel = $_POST['precoPainel'];
        $leds = $_POST['leds'];
        $precoLeds = $_POST['precoLeds'];
        $lgp = $_POST['lgp'];
        $precoLgp = $_POST['precoLgp'];


        if($modelo ==""){
                echo"<script>alert('cadastre um modelo primeiro')
                window.location.href = 'cadastroModelo.php'
                </script>";
                
        }else{
                include_once('conexaoBD.php');
                $resutado = mysqli_query($conexao, "INSERT INTO pecas (modelo,painel,precoPainel,leds,precoLeds,lgp,precoLgp) VALUES('$modelo','$painel','$precoPainel','$leds','$precoLeds','$lgp','$precoLgp')");
            
        }
        
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/cadastroPecas.css">
    <title>Document</title>
</head>
<body>


<div class="contentHead">

<div class ="navbar">
        <a href="./index.php">VOLTAR PARA PESQUISA</a>
        <a href="./cadastroModelo.php">CADASTRA MODELO</a>
</div>

</div><br>

<div class="contentForm">
        <h1>Cadstro de Peças</h1>
<form action="./cadastroPeças.php" method="post">
        <select name="modelo" id="">
                <?php 
                while($modelo = mysqli_fetch_assoc($resModelo)){
                        echo"<option value=".$modelo['modelo'] .">".$modelo['modelo'] . "</option>";
                }
                ?>
        </select>
        <div style="display:flex;">
                        <input style="width: 350px;" type="text" name="painel" placeholder="Painel" required>
                        <input style="width: 80px;" type="text" name="precoPainel" placeholder="Preço" required>

        </div>
           
        <div style="display:flex;">
                         <input style="width: 350px;"type="text" name="leds" placeholder="Leds" required>
                        <input style="width: 80px;" type="text" name="precoLeds" placeholder="Preço" required>

        </div >
                        
                        
        <div style="display:flex;">
                         <input style="width: 350px;"type="text" name="lgp" placeholder="LGP" required>
                        <input style="width: 80px;" type="text" name="precoLgp" placeholder="Preço" required>

        </div>
      
                       
      
        
       

        <input type="submit" name="submit" value="Cadastra Peças">


</form>
</div>
    
</body>
</html>