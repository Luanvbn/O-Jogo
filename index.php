<?php
$Nome = $_POST['nome'];

$idprim = 2;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" media="screen">
    <title>O Jogo</title>

</head>

<body>
    <div class="wrapper">
        <h1>O Jogo</h1>
        <h2>The Game</h2>
        <p>Perdeu! Qual seu nome?</p>
    </div>

    <div class="formulario">
    <form action="" method="POST">
            <label><input type="text" name="nome" placeholder="Seu nome" maxlength="10" id="nome"></label>
            <input type="submit" value="Salvar" id="salvar" name="salvar">
        </form>
    </div>
    <table>
  <tr>
    <th>Nome dos ultimos perdedores</th>
    
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $idprim;?></td>
    <td><?php echo $Nome;?></td>
    
  </tr>
</table>
</body>

</html>
<?php

$nome = $_POST['nome'];
$con = mysqli_connect("localhost", "root", "", "banco_teste");
$query="INSERT INTO nome VALUES('','$nome')";

mysqli_query($con, $query);
mysqli_close($con);
?>