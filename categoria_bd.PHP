<?php
function ListaCategoria ($conexao){
  $categorias = array ();
  $query = "SELECT*FROM categoria";
  $resultado = mysqli_query ($conexao, $query);
  while($categoria =mysqli_fetch_assoc ($resultado)){
      array_push($categorias,$categoria);
 }
 return $categorias;

}

function insereCategoria($conexao, $nome, $descricao){
  $query = "insert into CATEGORIA (NOME, DESCRICAO) values ('{$nome}', '{$descricao}')";
  return mysqli_query($conexao, $query);
}

?>
