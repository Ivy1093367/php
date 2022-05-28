<?php
session_start();
session_destroy();
setcookie("UID",$uid,time()-36); //刪除cookie，設成過期
header("Location:login.php");
?>