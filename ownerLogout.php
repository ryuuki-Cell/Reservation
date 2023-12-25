<?php
    session_start();
    unset($_SESSION["loginStatus"]);
    unset($_SESSION["loginerr"]);
    header("location: ./ownerindex.php");
?>