<?php include("cabecalho.php"); ?>
<?php include("bd.PHP"); ?>
<?php include("produto_bd.PHP"); ?>
<table class ="table">
<?php
$produtos = ListaProdutos ($conexao);
foreach($produtos as $produto) {
?>
<tr>
  <td><?= $produto ['NOME']?></td>
  <td><?=$produto ['PRECO']?></td>
  <td><a href="remove_produto.php?id=<?=$produto['id'] ?>" class= "text-danger" >Remover</a> </td> 
 </tr>
<?php
}
?>
</table>
<?php include("rodape.php"); ?>
