<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("produto_bd.php"); ?>
<?php include("categoria_bd.PHP"); ?>
<?php

$id = $_GET["id"];

if(apagarCategoria($conexao, $id)){
  header("Location: cadastro_categoria.php?removeu=true");
} else {
  header("Location: cadastro_categoria.php?removeu=false");
}

?>
<?php include("rodape.php"); ?>
