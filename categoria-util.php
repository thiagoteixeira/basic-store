<?php
  function buscaCategorias($conexao){
      return mysqli_query($conexao, "select * from categorias");
  }
?>