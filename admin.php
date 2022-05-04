<?php
    session_start();
    if(isset($_SESSION["login"])){
        if($_SESSION["login"] =="Yes"){
            echo "<a href='logout.php'>登出系統</a>";
        }else{
            echo "非法進入系統";
            exit();
        }
    }else{
        echo "非法進入系統";
        exit(); 
    }
    
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>admin</title>
</head>

<body>
    <?php 
    echo "<body bgcolor='#FF96FF'>";
    ?>
    <div align="center">
    <h1>Welcome to</h1>
    <h2>Admin!</h2>
</div>

</body>
</html>