<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php incluide("produto_bd.php") ?>
<?php
  

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  if(insereProduto($conexao, $nome, $preco)){
    echo "<p class='text-success'> O produto $nome, no valor $preco foi cadastrado!</p>";
  } else {
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto.</p>";
  }
?>
<?php include("rodape.php"); ?>
