
<form method="POST" action="ex22pagina2.php">
    <span>QUANTITAT: </span>
    <input type="number" name="quant"><br>
    <input type="submit">
</form>
<?php 
session_start();
if (isset($_POST["quant"])) {
    $_SESSION["quant"] = $_POST["quant"];
}
?>