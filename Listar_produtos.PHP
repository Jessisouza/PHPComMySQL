<?php include("cabecalho.php"); ?>
<table class="table">
<?php
  $produtos = listaProdutos($conexao);
  foreach($produtos as $produto){
?>
  <tr>
    <td><?= $produto['NOME'];?></td>
    <td><?= $produto['PRECO']?></td>
    <td><a href="remove_produto.php?id=<?= $produto['id'] ?>" class="text-danger">Remover</a></td>
    <td><a href="cadastro_produto.php?id=<?= $produto['id'] ?>" class="text-success">Alterar</a></td>
  </tr>
<?php
  }
?>
</table>
<?php include("rodape.php"); ?>
