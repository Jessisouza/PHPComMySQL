<?php include("cabecalho.php"); ?>

<table class ="table">
  <?php
  $categorias = ListaCategoria($conexao);
  foreach($categorias as $categoria) {
?>
    <tr>
      <td><?= $categoria['NOME'];?></td>
      <td><?= $categoria['DESCRICAO']?></td>
      <td><a href="remove_categoria.php?id=<?= $categoria['ID'] ?>" class="text-danger">Remover</a></td>
      <td><a href="cadastro_categoria.php?id=<?= $categoria['ID'] ?>" class="text-success">Alterar</a></td>
    </tr>
  <?php
    }
  ?>
  </table>
  <?php include("rodape.php"); ?>
