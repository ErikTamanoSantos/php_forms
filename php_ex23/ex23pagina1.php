<form>
    <select name="skin" selected="">
        <option value=""></option>
        <option value="foc">foc</option>
        <option value="aigua">aigua</option>
        <option vlaue="terra">terra</option>
    </select>
    <input type="submit">
</form>

<?php
if (isset($_GET["skin"])) {
    if ($_GET["skin"] == "foc") {
        echo "<body style=\"background-color: red\">";
    } elseif ($_GET["skin"] == "aigua") {
        echo "<body style=\"background-color: blue\">";
    } elseif ($_GET["skin"] == "terra") {
        echo "<body style=\"background-color: brown\">";
    }
}
?>