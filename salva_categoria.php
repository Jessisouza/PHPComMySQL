<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php
  function insereCategoria($conexao, $nome, $descricao){
    $query = "insert into CATEGORIA (NOME, DESCRICAO) values ('{$nome}', '{$descricao}')";
    return mysqli_query($conexao, $query);
  }

  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];

  if(isset($_POST["id"])){
    $id = $_POST["id"];
    if(alteraCategoria($conexao, $nome, $descricao, $id)){
      header ("Location: cadastro_categoria.php?alterou=true&nome={$nome}&descricao={$descricao}");
    } else {
      echo mysqli_error($conexao);
      header ("Location: cadastro_categoria.php?alterou=false");




  if(insereCategoria($conexao, $nome, $descricao)){
    echo "<p class='text-success'> A categoria $nome - $descricao, foi cadastrada</p>";
  }else{
    echo "<p class='text-danger'>Ocorreu um erro ao cadastrar categoria.</p>";
  }
?>
<?php include("rodape.php"); ?>
}
