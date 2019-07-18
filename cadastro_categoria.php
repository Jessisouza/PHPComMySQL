<?php include("cabecalho.php");
 ?>
 <?php


 if(isset ($_GET ['removeu'])){
   $removeu = $_GET ['removeu'];

if($removeu){
echo "<p class='text-seccess'>Categoria removida! </p>";
} else {
echo "<p class='text-seccess'>Ocorreu um erro ao remover a categoria! </p>";
}
}
if(isset($_GET['cadastrou'])){
$cadastrou = $_GET['cadastrou'];
$nomeCadastro =$_GET['nome'];


if($cadastrou){
echo "<p class='text-seccess'>a categoria $nomeCadastro, foi cadastrada com sucesso! </p>";
} else {
echo "<p class='text-seccess'>Ocorreu um erro ao cadastrar a categoria </p>";
}
}
?>

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
