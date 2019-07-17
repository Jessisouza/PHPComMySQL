<?php include("cabecalho.php"); ?>
  <form action="/salva_categoria.php" method="post">
  <table class = "table">
      <tr>
        <td>Descricao: </td>
        <td><input type="text" name="nome"/><td/>
      </tr>
      <tr>
        <td>Nome: </td>
        <td><input type="number" name="descricao"/><td/>
      </tr>
      <tr>
    <td><input class="btn btn-primary"type="submit" value="Cadastrar" /></td>
  </tr>
  </table>
</form>
<?php include("rodape.php"); ?>
