<?php
$uname=$_POST["uname"];
$utel=$_POST["utel"];
$uemail=$_POST["uemail"];
$ubirth=$_POST["ubirth"];
$ugender=$_POST["ugender"];
$food=$_POST["food"];
$foodsize=count($food);
$size=$_POST["size"];
$unumber=$_POST["unumber"];
$comment=$_POST["comment"];

$comment=strip_tags($comment);
$comment=nl2br($comment);

$file=$_FILES["uphoto"];
//$foods=implode(",",$food);

echo "<h1>墾丁三日遊報名資料</h1>";
echo "<b>你的姓名:</b>".$uname."先生/小姐<br/>";
echo "<b>你的TEL:</b>".$utel."<br/>";
echo "<b>你的Email:</b>".$uemail."<br/>";
echo "<b>你的生日:</b>".$ubirth."<br/>";
if($ugender=="1"){
    echo "<b>你的性別:</b>男<br/>";
}else if($ugender=="2"){
    echo "<b>你的性別:</b>女<br/>";
}else{
    echo "<b>你的性別:</b>N/A<br/>";
}
//echo "<b>你的飲食偏好:</b>".$foods."<br/>";
echo "<b>你的飲食偏好:</b>";
for($i=0;$i<$foodsize;$i++){
    if($i==0){
        echo $food[$i];
    }else{
        echo ",".$food[$i];
    }
}
echo "<br/><b>你的T-shirt Size:</b>".$size."<br/>";
echo "<b>購票數量:</b>".$unumber."<br/>";
echo "<b>你的意見:</b>".$comment."<br/>";

echo $_FILES["uphoto"]["name"]."<br/>";
if(copy($_FILES["uphoto"]["tmp_name"],"test.jpg")){
    echo "success";
}else{
    echo "failed";
}

?>
