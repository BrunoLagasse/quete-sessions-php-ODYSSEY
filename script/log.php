<?php

if (isset($_POST["loginname"])) {
    $_SESSION["loginname"] = $_POST["loginname"];
}

if (isset($_SESSION["loginname"])) {
    header("Location: index.php");
    exit();
}