<?php include("cabecalho.php"); ?>

<form action="/salva_produto.php" method="post">
  <table class = "table">
    <tr>
      <td>Nome: </td>
      <td><input type="text" name="nome"/><td/>
    </tr>
    <tr>
      <td>Preço: </td>
      <td><input type="number" name="preco"/><td/>
    </tr>
    <tr>

  <td><input class="btn btn-primary"type="submit" value="Cadastrar" /></td>
</tr>
</table>

</form>



<?php include("rodape.php"); ?>
