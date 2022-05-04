<?php
require("DBconnect.php");
session_start();
//$pNo=$_POST["pNo"];

//取得副檔名
$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension']; //副檔名

//產生新檔案名稱
$finalphoto="Photo_".time().".".$extname;
//$finalphoto="Photo_".time().$uName.".";
echo $finalphoto."+".$_SESSION["pNo"];
echo "<br>";
$now=time();
$pNo=$_SESSION["pNo"];
//照片路徑加入資料庫
$SQL="UPDATE photo SET ppath='$finalphoto', pdate='$now' WHERE pNo='$pNo'";
//mysqli_query($link,$SQL);
//$SQL="UPDATE user SET uName='$uName', uPwd='$uPwd', uRole='$uRole' WHERE uNo='$uNo'";
if(mysqli_query($link,$SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photoupdate.php'>";
}
?>