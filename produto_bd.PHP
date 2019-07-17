<?php
function ListaProdutos ($conexao){
  $produtos = array ();
  $query = "SELECT*FROM PRODUTO";
  $resultado = mysqli_query ($conexao, $query);
  while($produto =mysqli_fetch_assoc ($resultado)){
      array_push($produtos,$produto);
 }
 return $produtos;

}

 function insereProduto($conexao, $nome, $preco){
   $query = "insert into PRODUTO (NOME, PRECO) values ('{$nome}', {$preco})";
   $resultadoDoInsere = mysqli_query($conexao, $query);
   return $resultadoDoInsere;
 }
?>
