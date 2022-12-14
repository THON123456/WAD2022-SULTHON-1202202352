<?php 
 
session_start();
session_destroy();
 
header("Location: sulthon_beforelogin.php");
 
?>