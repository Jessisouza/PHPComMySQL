<?php include("cabecalho.php"); ?>
  <form action="/salva_categoria.php" method="post">
    Nome: <input type="text" name="nome"/><br />
    Descrição: <input type="text" name="descricao"/><br />

    <input type="submit" value="Cadastrar" />
  </form>
<?php include("rodape.php"); ?>
