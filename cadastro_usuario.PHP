<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("usuario_bd.php"); ?>

<?php
if(isset($_GET['removeu'])){
  $removeu = $_GET['removeu'];

  if($removeu) {
    echo "<p class='text-success'>Produto removido!</p>";
  } else {
    echo "<p class='text-danger'>Ocorreu um problema ao remover produto</p>";
  }
}

if(isset($_GET['cadastrou'])){
  $cadastrou = $_GET['cadastrou'];
  $emailCadastrado = $_GET['email'];
  $senhaCadastrada = $_GET['senha'];

  if($cadastrou){
    echo "<p class='text-success'> O usuario $emailCadastrado, no valor $emailCadastrado foi cadastrado!</p>";
  } else {
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o email.</p>";
  }
}

if(isset($_GET['alterou'])){
  $cadastrou = $_GET['alterou'];
  $emailCadastrado = $_GET['email'];
  $senhaCadastrada = $_GET['senha'];

  if($cadastrou){
    echo "<p class='text-success'> O produto $emailCadastrado, no valor $emailCadastrado foi atualizado!</p>";
  } else {
    echo "<p class='alert-danger'> Ocorreu um problema ao atualizar o email.</p>";
  }
}
?>
  <form action="/salva_usuario.PHP" method="post">
    <table class="table">
      <tr>
        <td>E-mail:</td>
        <td><input type="text" name="email"/></td>
      </tr>
      <tr>
        <td>Senha:</td>
        <td><input type="password" name="senha"/></td>
      </tr>
      <tr>
        <td><input class="btn btn-primary"type="submit" value="Cadastrar"/></td>
      </tr>
    </table>
  </form>
<?php include("rodape.php"); ?>
