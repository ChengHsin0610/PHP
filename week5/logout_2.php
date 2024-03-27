<?php
session_start();
session_destroy(); 
$_SESSION["check"]="no";
header("Location:login_2.php");
?>