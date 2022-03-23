<html>
<head>
<meta charset="UTF-8" />
<title>member_info</title>
</head>

<body>
    <?php
    $uaccount=$_POST["account"];
    $upassword=$_POST["pwd"];
    $uemail=$_POST["email"];
    $utel=$_POST["tel"];

    echo "<h1>你的會員資料</h1>";
    echo "<b>你的帳號:</b>".$uaccount."<br/>";
    echo "<b>你的密碼:</b>".$upassword."<br/>";
    echo "<b>你的Email:</b>".$uemail."<br/>";
    echo "<b>你的TEL:</b>".$utel."<br/>";
    ?>
    <br>
    <a href="login.php">點此進入登入頁面 </a>
</body>
</html>