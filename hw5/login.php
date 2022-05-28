<?php
    session_start();
    $link = @mysqli_connect(
        'localhost',
        'root',
        '',
        'php'
    );
?>

<?php
if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "歡迎".$cookieID."再度光臨";
}else{
    echo "恭喜您發現本網站!!!";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Login!</title>
</head>

<body>
    <br><a href="enroll.php">註冊</a><br>
    <?php 
    echo "<body bgcolor='#FF96FF'>";
    ?>
    <div align="center">
    <h1><font color="#7F7F7F">登入頁面</font></h1>
    <h2>Welcome!</h2>
    <hr/>
    <h3>登入</h3>

    <div align="center">
    <a href=https://gogoout.com/blog/kenting-summer#%E5%B0%8F%E5%B3%87%E9%87%8C%E5%B3%B6%E5%B2%A9_%E5%B0%8F%E5%B7%B4%E9%87%8C%E5%B3%B6%E5%B2%A9>
    <img src=https://i1.wp.com/gogoout.com/blog/wp-content/uploads/2018/07/20160806-IMG_5622-1.jpg?fit=640%2C427&ssl=1>
    </a>
    <br>
    <p>
    <form action="" method="post" enctype="multipart/form-data">
    請輸入您的帳號:<input type="text" name="account" placeholder="aXXXXXXX"required="required"><br/>   
    請輸入您的密碼:<input type="password" name="pwd" required="required"><br/>
    
    <br>
    <input type="submit" value="登入">
    </form>
    </p>

    </div>
    <?php
    //$aID="admin";
    //$aPWD="5201314";

    //echo time();
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-m-d",time());
    //header("Refresh:1");
    if(isset($_POST['account'])){
        if($_POST['account']!=null){
            $uid=$_POST["account"];
            $upassword=$_POST["pwd"];
            $SQL="SELECT * FROM user WHERE uname = '$uid' AND uPwd = '$upassword'";
            $result=mysqli_query($link,$SQL);
            if(mysqli_num_rows($result)==1){
                $_SESSION["login"]="Yes";
                setcookie("UID",$uid,time()+17280); 
                header("Location:kenting.php");
            }else{
                echo "帳號或密碼輸入錯誤";
                //setcookie("UID",$uid,time()-3600);
                //header("login.php");
            }
        }else{
            echo "您尚未輸入帳號密碼!";
        }
//        if($_POST['account']!=null){
//            $uid=$_POST["account"];
//            $upassword=$_POST["pwd"];
            //echo $uid."<br>";
            //echo $upassword."<br>";
//            if($aID==$uid && $aPWD==$upassword){
            //    echo "登入成功";
//                setcookie("UID",$uid,time()+17280);    
//                $_SESSION["login"]="Yes";
//                header("Location:kenting.php");
//            }else{
//                echo "帳號或密碼輸入錯誤";
                //header("Location:register.php");
//            }
//        }else{
//            echo "您尚未輸入帳號密碼!";
//        }       
    }else{
        echo "歡迎登入，請輸入帳號密碼!";
    }
    
    ?>    


</body>
</html>