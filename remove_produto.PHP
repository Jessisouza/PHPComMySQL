<?php include("cabecalho.php"); ?>
<?php include("bd.PHP"); ?>
<?php include("produto_bd.PHP"); ?>
<?php
$id =$_GET["id"];


if (apagarProduto($conexao,$id)){
    header ("location: cadastro_produto.php?removeu=true");
}  else{
  header ("location: cadastro_produto.php?removeu=false");
  }
?>
<?php include("rodape.php"); ?>
