<?php
function ListaCategoria ($conexao){
  $categorias = array ();
  $query = "SELECT*FROM categoria";
  $resultado = mysqli_query ($conexao, $query);
  while($categoria =mysqli_fetch_assoc ($resultado)){
      array_push($categorias,$categoria);
 }
}
     function apagarCategoria($conexao,$id){
        $query ="DELETE FROM CATEGORIA WHERE ID= {$id}";
      return mysqli_query($conexao,$query);
     }


      function insereCategoria($conexao,$nome,$descricao){
        $query = "insert into CATEGORIA(NOME,DESCRICAO) values ('{$nome}','{$descricao}')";
        $resultadoDaCategoria = mysqli_query($conexao,$query);
        return $resultadoDaCategoria;
      }
?>
