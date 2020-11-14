<?php
    if (isset($_SESSION["loginname"])) {
        echo $_SESSION["loginname"];
    } else {
        echo "Wilder";
    };