<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php
  function insereProduto($conexao, $nome, $preco){
    $query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";
    $resultadoDoInsere = mysqli_query($conexao, $query);
    return $resultadoDoInsere;
  }

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  if(insereProduto($conexao, $nome, $preco)){
    echo "<p class='text-success'> O produto $nome, no valor $preco foi cadastrado!</p>";
  } else {
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto.</p>";
  }
?>
<?php include("rodape.php"); ?>
