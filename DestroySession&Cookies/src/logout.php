<?php
session_start();
header('location:index.php');
session_unset();
session_destroy();
setcookie("user",time()-3600);
setcookie("pswd",time()-3600);
?>