<?php

include_once("conexao.php"); //inclusao no banco de dados, se já foi incluido não o fará novamente

$result = mysqli_query($conn, "SELECT * FROM cadastro"); // pega a variavel de conexao e seleciona todos do cadastro

while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $cliente = $row['cliente'];
    $vendedor = $row['vendedor'];
    $descricao = $row['descricao'];
    $valor = $row['valor'];
    $data = $row['datas'];
    //echo "Cliente: ".$cliente." Vendedor: ".$vendedor." Descrição: ".$descricao." Valor: ".$valor." Data: ".$data."<br>";
}
$busca = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$busca2 = filter_input(INPUT_POST, 'vendedor', FILTER_SANITIZE_STRING);
$busca3 = filter_input(INPUT_POST, 'datas', FILTER_SANITIZE_STRING);


$result = mysqli_query($conn, "SELECT * FROM cadastro WHERE cliente = '$busca' OR vendedor = '$busca2' OR datas = '$busca3'");

while($row = mysqli_fetch_assoc($result)){

    $id = $row['id'];
    $cliente = $row['cliente'];
    $vendedor = $row['vendedor'];
    $descricao = $row['descricao'];
    $valor = $row['valor'];
    $data = $row['datas'];
    echo "Cliente encontrado: ID: ".$id." Nome: ".$cliente." Vendedor: ".$vendedor." Descrição: ".$descricao." Valor: ".$valor." Data: ".$data."<br><form action='editar.php' method='POST'><input name='id' type='hidden' value=".$row['id']."><input type='submit'/></form>";
}
 
?>

<html>

<head>
<style>
form {
    padding: 15px;
    background-color: lightblue;
    font-family: arial;
    width: 300px;
    border-radius: 11px;
}
input[type="submit"] {
    background-color: white;
    border: 2px solid white;
    width: 150px;
    height: 35px;
    border-radius: 11px;
    color: lightblue;
    font-size: 17px;
}
input[type="submit"]:hover {
    background-color: lightblue;
    border: 2px solid white;
    width: 150px;
    height: 35px;
    border-radius: 11px;
    color: white;
    font-size: 17px;
}
</style>

</head>
<body>
<form action="" method="POST">
<label>Cliente</label>
<input type="text" name="cliente"/><br><br>
<label>Vendedor</label>
<input type="text" name="vendedor"/><br><br>
<label>Data</label>
<input type="date" name="datas"/><br><br>
<input type="submit" name="procurar"/>
</form>

</body>




</html>



