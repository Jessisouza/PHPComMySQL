<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("produto_bd.php"); ?>
<?php
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  if(isset($_POST["id"])){
    $id = $_POST["id"];
    if(alteraProduto($conexao, $nome, $preco, $id)){
      header ("Location: cadastro_produto.php?alterou=true&nome={$nome}&preco={$preco}");
    } else {
      echo mysqli_error($conexao);
      header ("Location: cadastro_produto.php?alterou=false");
    }
  } else {
    if(insereProduto($conexao, $nome, $preco)){
      header ("Location: cadastro_produto.php?cadastrou=true&nome={$nome}&preco={$preco}");
    } else {
      header ("Location: cadastro_produto.php?cadastrou=false");
    }
  }
?>
<?php include("rodape.php"); ?>
