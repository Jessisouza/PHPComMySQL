<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("produto_bd.php"); ?>
<?php

$id = $_GET["id"];

if(apagaProduto($conexao, $id)){
  header("Location: cadastro_produto.php?removeu=true");
} else {
  header("Location: cadastro_produto.php?removeu=false");
}

?>
<?php include("rodape.php"); ?>
