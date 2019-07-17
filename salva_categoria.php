<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("categoria_bd.php"); ?>
<?php

  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];

  if(insereCategoria($conexao, $nome, $descricao)){
    echo "<p class='text-success'> A categoria $nome - $descricao, foi cadastrada</p>";
  }else{
    echo "<p class='text-danger'>Ocorreu um erro ao cadastrar categoria.</p>";
  }
?>
<?php include("rodape.php"); ?>
