<?php
include_once('conexaoBD.php');
$sql = "SELECT * FROM pecas ORDER BY id DESC";
$resPecas = $conexao->query($sql);
?>


<!DOCTYPE html>
<?php
include_once('conexaoBD.php');
$sql = "SELECT * FROM pecas ORDER BY id DESC";
$resPecas = $conexao->query($sql);

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
    <title>Document</title>
</head>
<body>
        <div class="contentHead">

                <div class ="navbar">
                        
                </div>

        </div><br>

                <div class= pesquisa > 
                        <input type="text" id="pesquisar" onkeypress="digitar(event)" placeholder="Buscar">
                
        
        </select>
        <input type="hidden" id="modelo2">
                </div>
       





        <div class='contentTable'>

        <table>
            
                <tr class='headTr'> 
                        <td>Modelo</td>
                        <td >Painel</td>
                        <td >Preço</td>
                        <td >Leds</td>
                        <td >Preço</td>
                        <td >LGP</td>
                        <td >Preço</td>
                        
                </tr>
         </table style> 
         
         <table class="tabela" style="display: none;">
<?php
         while($pecas = mysqli_fetch_assoc($resPecas)){
                echo"<tr class='conteudo'>
                
                
                
                        <td >".$pecas['modelo']."</td>
                        <td>".$pecas['painel']."</td>
                        <td>$ ".$pecas['precoPainel']."</td>
                        <td>$".$pecas['leds']."</td>
                        <td>$ ".$pecas['precoLeds']."</td>
                        <td>".$pecas['lgp']."</td>
                        <td>$ ".$pecas['precoLgp']."</td>
                        
                        
                </tr>
                
              
                
                ";
                }

                ?>
                
                


         </table>
                
       

        </div>


</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript"></script>
<script src="./JS/index.js"></script>

</html>