<?php
$Nome = $_POST['nome'];

$idprim = [1, 2, 3, 4, 5, 6, 7, 8];

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
        <label>
          <input type="text" name="nome" placeholder="Seu nome" maxlength="10" id="nome">
        </label>
        <input type="submit" value="Salvar" id="salvar" name="salvar">
    </form>
    </div>
    <table>
  <tr>
    <th>Nome dos ultimos perdedores</th>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>
  <tr>
    <td><?php echo $Nome;?></td>
  </tr>

  <div class="Total">
  <p>Total de perdedores: <b><?php echo 100;?></b></p>
  </div>
</table>
</body>

</html>