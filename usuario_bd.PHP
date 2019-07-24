<?php

      function insereUsuario($conexao,$email,$senha){
        $query = "insert into USUARIO(EMAIL,SENHA) values ('{$NOME}','{$SENHA}')";
        $resultadoDoUsuario = mysqli_query($conexao,$query);
        return $resultadoDoUsuario;

      }
