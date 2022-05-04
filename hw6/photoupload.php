<?php
require("DBconnect.php");
//$phototmpname=$_FILE["photo"]["tmp_name"];
//echo $phototmpname;

//取得副檔名
$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension']; //副檔名

//產生新檔案名稱
$finalphoto="Photo_".time().".".$extname;
//$finalphoto="Photo_".time().$uName.".";
//echo $finalphoto;
//echo "<br>";
$now=time();
//照片路徑加入資料庫
$SQL="INSERT INTO photo (ppath,pdate) VALUES ('$finalphoto','$now')";

//上傳檔案
if(copy($_FILES['photo']['tmp_name'],$finalphoto)){
    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photolist.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳失敗')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
        
    }
//    echo 'success';
}else{
    echo "<script type='text/javascript'>";
    echo "alert('照片上傳失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
//    echo 'failed';
}
?>