<?php 
session_start();
for ($i = 1; $i <= $_SESSION["quant"]; $i++) {
    echo "<a href=\"ex22pagina3.php?comanda=".$i."\">Comanda ".$i."</a><br>";
}

?>