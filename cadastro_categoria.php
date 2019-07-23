<?php include("cabecalho.php"); ?>
<?php include("categoria_bd.php"); ?>
<?php include("bd.php"); ?>

<?php
if(isset($_GET['removeu'])){
  $removeu = $_GET['removeu'];

  if($removeu) {
    echo "<p class='text-success'> categoria removida!</p>";
  } else {
    echo "<p class='text-danger'>Ocorreu um problema ao remover a categoria</p>";
  }
}

if(isset($_GET['cadastrou'])){
  $cadastrou = $_GET['cadastrou'];
  $nomeCadastrado = $_GET['nome'];
  $categoriaCadastrado = $_GET['descricao'];

  if($cadastrou){
    echo "<p class='text-success'> A categoria $nomeCadastrado, no valor $descricaoCadastrado foi cadastrada!</p>";
  } else {
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar a categoria.</p>";
  }
}

if(isset($_GET['alterou'])){
  $cadastrou = $_GET['alterou'];
  $nomeCadastrado = $_GET['nome'];
  $descricaoCadastrada = $_GET['descricao'];

  if($cadastrou){
    echo "<p class='text-success'> A categoria $nomeCadastrado, no valor $descricaoCadastrada foi atualizada!</p>";
  } else {
    echo "<p class='alert-danger'> Ocorreu um problema ao atualizar a categoria.</p>";
  }
}

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $categoriaAlteracao = buscarCategoria($conexao, $id);
  ?>
  <form action="/salva_categoria.php" method="post">
    <table class="table">
      <input type="hidden" value="<?= $categoriaAlteracao['ID'] ?>" name="id"/>
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome" value="<?= $categoriaAlteracao['NOME']?>"/></td>
      </tr>
      <tr>
        <td>descricao:</td>
        <td><input type="text" name="descricao"  value="<?= $categoriaAlteracao['DESCRICAO']?>"/></td>
      </tr>
      <tr>
        <td><input class="btn btn-primary"type="submit" value="Alterar"/></td>
      </tr>
    </table>
  </form>
<?php
} else {
  ?>
  <form action="/salva_categoria.php" method="post">
    <table class="table">
      <tr>
        <td>Nome:</td>
        <td><input type="text" name="nome"/></td>
      </tr>
      <tr>
        <td>Descricao:</td>
        <td><input type="text" name="descricao"/></td>
      </tr>
      <tr>
        <td><input class="btn btn-primary"type="submit" value="Cadastrar"/></td>
      </tr>
    </table>
  </form>
  <?php } ?>
<?php include("listar_categoria.php"); ?>
<?php include("rodape.php"); ?>
