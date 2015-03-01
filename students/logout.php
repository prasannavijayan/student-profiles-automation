<?php
session_start(); // starts the current session
session_destroy();
header("location:http://localhost/profiles4/index.php");
?>
