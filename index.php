<?php
include("conexao.php");
$sql = "SELECT * FROM produtos ORDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang = "pt-br">
    <title> INGRIDISYS</title>
</head>
<body>
    <h1> CADASTRO DE PRODUTOS </h1>
    <form action="salvar.php" method = "post">
    <label> Nome </label>
    <input type="text" name= "nome" required>
    

</form>
</body>