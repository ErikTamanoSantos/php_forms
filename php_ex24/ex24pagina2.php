<?php 
session_start();
$pass1 = $_SESSION["pass1"];
$pass2 = $_SESSION["pass2"];

if (!strcmp($pass1, $pass2)) {
    echo "<h1>ERROR: les contrasenyes han de coincidir</h1>";
} elseif (!preg_match('~[0-9]+~', $pass1)) {
    echo "<h1>ERROR: la contrasenya ha de tenir al menys un número</h1>";
} else {
    echo "<h1>CONTRASENYA CORRECTA</h1>";
}
?>