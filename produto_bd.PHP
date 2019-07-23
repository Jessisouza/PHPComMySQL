<?php
  function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT * FROM PRODUTO";
    $resultado = mysqli_query($conexao, $query);
    while($produto = mysqli_fetch_assoc($resultado)){
      array_push($produtos, $produto);
    }
    return $produtos;
  }

  function insereProduto($conexao, $nome, $preco){
    $query = "INSERT INTO PRODUTO (NOME, PRECO) VALUES ('{$nome}', {$preco})";
    $resultadoDoInsere = mysqli_query($conexao, $query);
    return $resultadoDoInsere;
  }

  function apagaProduto($conexao, $id){
    $query = "DELETE FROM PRODUTO WHERE id = {$id}";
    return mysqli_query($conexao, $query);
  }

  function buscarProduto($conexao, $id){
    $query = "SELECT * FROM PRODUTO WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
  }

  function alteraProduto($conexao, $nome, $preco, $id){
    $query = "UPDATE PRODUTO SET NOME = '{$nome}', PRECO = {$preco} WHERE id = {$id}";
    return mysqli_query($conexao, $query);
  }
?>
