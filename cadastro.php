<!DOCTYPE html>
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
<form action="oficina2.php" method="POST">
<label>cliente</label><br>
<input type="text" name="cliente"/><br><br>
<label>vendedor</label><br>
<input type="text" name="vendedor"/><br><br>
<label>descricao</label><br>
<input type="text" name="descricao"/><br><br>
<label>valor</label><br>
<input type="text" name="valor"/><br><br>
<input type="submit" name="enviar"/>
</form>

</body>




</html>

