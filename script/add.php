<?php
if (isset($_GET["add_to_cart"])) {
    $_SESSION["add_to_cart"][] = $_GET["add_to_cart"];
}
?>