<?php

function insereProduto($conexao, $nome, $valor){
    $comando = "insert into produtos(nome, valor) values ('{$nome}', {$valor})";
    $resultado = mysqli_query($conexao, $comando);
    return $resultado;
}

function listaProdutos($conexao){
    return mysqli_query($conexao, "select * from produtos");
}

function buscaProduto($conexao, $id){
    $comando = "select * from produtos where id={$id}";
    $resultado = mysqli_query($conexao, $comando);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $valor){
    $comando = "update produtos set nome='{$nome}', valor={$valor} where id={$id}";
    $resultado = mysqli_query($conexao, $comando);
    return $resultado;
}

function removeProduto($conexao, $id){
    $comando = "delete from produtos where id={$id}";
    $resultado = mysqli_query($conexao, $comando);
    return $resultado;
}
?>