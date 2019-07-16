<?php include("cabecalho.php"); ?>

<form action="/salva_produto.php" method="post">
  Nome: <input type="text" name="nome"/><br />
  Preço: <input type="number" name="preco"/><br />
  
  <input type="submit" value="Cadastrar" />
</form>

<?php include("rodape.php"); ?>
