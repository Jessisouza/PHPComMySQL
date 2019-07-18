<?php include("cabecalho.php"); ?>
<?php include("bd.php"); ?>
<?php include("categoria_bd.php"); ?>
<?php



     $nome = $_POST["nome"];
     $descricao = $_POST["descricao"];

     if(insereCategoria($conexao, $nome, $descricao)){
       header("Location: cadastro_categoria.php?cadastrou=true&nome={$nome}&descricao={$descricao}");
     } else {
       header("Location: cadastro_categoria.php?cadastrou=false");
     }

?>
<?php include("rodape.php"); ?>
