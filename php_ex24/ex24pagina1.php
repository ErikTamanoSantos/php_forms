<form method="POST" action="ex24pagina2.php">
    <span>Contrasenya1</span>
    <input type="password" name="pass1"><br>
    <span>Contrasenya2</span>
    <input type="password" name="pass2"><br>
    <input type="submit">
</form>

<?php 
session_start();
$_SESSION["pass1"] = $_POST["pass1"];
$_SESSION["pass2"] = $_POST["pass2"];


?>