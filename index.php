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
        <h4>Perdedores</h4>
        <p>Perdeu! Qual seu nome?</p>
        <form action="" method="POST">
            <label><input type="text" name="nome" placeholder="Seu nome" maxlength="10" id="nome"></label>
            <input type="submit" value="Salvar" id="salvar" name="salvar">
        </form>
    </div>
    <table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    
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