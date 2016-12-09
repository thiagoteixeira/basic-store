<?php
    include("cabecalho.php");
    
    session_destroy();

    header('location:index.php');
?>