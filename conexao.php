<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "produtos";

$conexao = mysqli_connect($servidor, $usuario,$senha,$banco);

if(!$conexao){
    die ("Erro de conexão:" mysqli_connect_error());
}
?>