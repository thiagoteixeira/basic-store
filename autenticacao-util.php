<?php
    function autenticacao($conexao, $usuario, $senha){
        $resultado = mysqli_query($conexao, "select * from usuarios where usuario = '{$usuario}' and senha = '{$senha}'");
        $existe = mysqli_num_rows($resultado) > 0;
        return $existe;
    }
?>