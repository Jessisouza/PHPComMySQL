<?php include("cabecalho.php"); ?>

<?php


if(isset ($_GET ['removeu'])){
  $removeu = $_GET ['removeu'];


  if($removeu){
  echo "<p class='text-seccess'>Produto removido! </p>";
} else {
  echo "<p class='text-seccess'>Ocorreu um erro ao remover o produto! </p>";
  }
}
IF (isset($_GET['cadastrou'])){
$cadastrou = $_GET['cadastrou'];
$nomeCadastro =$_GET['nome'];
$precoCadastro =$_GET['preco'];

if($cadastrou){
echo "<p class='text-seccess'>O produto $nomeCadastro,no valor $precoCadastro foi cadastrado com sucesso! </p>";
} else {
echo "<p class='text-seccess'>Ocorreu um erro ao cadastrar o produto! </p>";
}
}
?>



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

<?php include("listar_categoria.php"); ?>
<?php include("rodape.php"); ?>
