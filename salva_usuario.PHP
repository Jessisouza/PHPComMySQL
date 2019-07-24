<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("usuario_bd.php"); ?>
<?php
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  if(isset($_POST["id"])){
    $id = $_POST["id"];
    if(alteraUsuario($conexao, $email, MD5($senha))){
      header ("Location: cadastro_usuario.php?alterou=true&email={$email}&senha={$senha}");
    } else {
      echo mysqli_error($conexao);
      header ("Location: cadastro_usuario.php?alterou=false");
    }
  } else {
    if(insereUsuario($conexao, $email, $senha)){
      header ("Location: cadastro_usuario.php?cadastrou=true&email={$email}&senha={$senha}");
    } else {
      header ("Location: cadastro_usuario.php?cadastrou=false");
    }
  }
?>
<?php include("rodape.php"); ?>
