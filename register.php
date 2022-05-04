<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Register</title>
</head>

<body>
    <?php 
    echo "<body bgcolor='#FF96FF'>";
    ?>
    <div align="center">
    <h1><font color="#7F7F7F">註冊頁面</font></h1>
    <h2>Welcome!</h2>
    <hr/>
    <h3>註冊個人會員資料</h3>

    <div align="center">
    <a href=https://gogoout.com/blog/kenting-summer#%E5%B0%8F%E5%B3%87%E9%87%8C%E5%B3%B6%E5%B2%A9_%E5%B0%8F%E5%B7%B4%E9%87%8C%E5%B3%B6%E5%B2%A9>
    <img src=https://i1.wp.com/gogoout.com/blog/wp-content/uploads/2018/07/20160806-IMG_5622-1.jpg?fit=640%2C427&ssl=1>
    </a>
    <br>
    <p>
    <form action="member_info.php" method="post" enctype="multipart/form-data">
    請輸入您的帳號:<input type="text" name="account" required="required"><br/>   
    請輸入您的密碼:<input type="password" name="pwd" placeholder="pwd" required="required"><br/>
    請輸入您的email:<input type="email" name="email" placeholder=""><br/>
    請輸入您的電話:<input type="text" name="tel" placeholder="TEL"><br/>
    <br>
    <input type="submit" value="提交表單"><input type="reset" value="重新填寫">
    </form>
    </p>

    </div>    


</body>
</html>