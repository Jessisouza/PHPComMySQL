<?php include("cabecalho.php"); ?>
<?php include("bd.PHP"); ?>
<?php include("categoria_bd.PHP"); ?>
  <table class ="table">
  <?php
  $categorias = ListaCategoria($conexao);
  foreach($categorias as $categoria) {
  ?>
  <tr>
    <td><?= $categoria['NOME']?></td>
    <td><?=$categoria['DESCRICAO']?></td>
   </tr>
  <?php
  }
  ?>
  </table>
  <?php include("rodape.php"); ?>
