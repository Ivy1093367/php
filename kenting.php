<html>
<head>
<meta charset="UTF-8" />
<title>Go travel!</title>
</head>

<body>
    <?php 
    echo "<body bgcolor='#FF96FF'>";
    ?>
    <div align="center">
    <h1><font color="#FF5151">墾丁旅遊團即將出發</font></h1>
    <h2>Welcome!</h2>
    <hr/>
    <h3>墾丁三日遊報名表</h3>

    <div align="center">
    <p><b>行程內容:</p><br>
    <table frame="void" rules="none"><tr>
		<td><a href=https://gogoout.com/blog/kenting-summer#%E7%99%BD%E7%A0%82%E7%81%A3>
        <img src=https://i0.wp.com/gogoout.com/blog/wp-content/uploads/2018/07/Kenting_911_beach.jpg?fit=640%2C427&ssl=1 width="500">
        </a></td>
		<td><a href=https://gogoout.com/blog/kenting-summer#%E5%8D%97%E7%81%A3%E6%B5%B7%E7%81%98>
        <img src=https://i1.wp.com/gogoout.com/blog/wp-content/uploads/2018/07/4741803203_7afbdf83a3_z.jpg?fit=414%2C414&ssl=1 width="500">
        </a></td>
	</tr><tr>
		<td><f>白沙灣</f></td>
		<td><f>南灣海灘</f></td>
	</tr></table>

    <form action="hinfo.php" method="post" enctype="multipart/form-data">
    請輸入您的姓名:<input type="text" name="uname" placeholder="Name" required="required"><br/>   
    請輸入您的生日:<input type="date" name="ubirth" placeholder=""><br/>
    請輸入您的email:<input type="email" name="uemail" placeholder=""><br/>
    請輸入您的電話:<input type="text" name="utel" placeholder="TEL"><br/>
    請選擇您的性別:<input type="radio" name="ugender" value="1">Male<input type="radio" name="ugender" value="2">Female<input type="radio" name="ugender" value="3">N/A<br/>
    
    食物偏好:
    <input type="checkbox" name="food[]" value="便當" checked>便當
    <input type="checkbox" name="food[]" value="合菜">合菜
    <input type="checkbox" name="food[]" value="自助餐廳">自助餐廳
    <input type="checkbox" name="food[]" value="海鮮">海鮮
    <input type="checkbox" name="food[]" value="比薩">比薩
    <br/>

    T-shirt Size:
    <select name="size">
    <option value="XS">XS
    <option value="S">S
    <option value="M">M
    <option value="L">L
    <option value="XL">XL
    <option value="XXL">XXL
    </select><br/>
    T-shirt Color:<input type="color"><br/>
    購票數量:<input type="number" name="unumber"><br/>
    請選擇您有空的時間:<input type="time"><br/>
    建議<textarea name="comment"></textarea><br/>
    上傳檔案:<input type="file" name="uphoto"><br/>
    <input type="submit" value="提交表單"><input type="reset" value="重新填寫">
    </form>
    </p>
    參加者請於<font color="red">4/3 8:30a.m.</font>集合<br/>
    謝謝您的配合~預祝您旅途愉快!<br/><br/>
    <p>T-shirt Size對照表:
    <table border="2">
        <tr><td>尺碼</td><td>肩寬</td><td>胸圍</td><td>袖長</td><td>衣長</td></tr>
        <tr><td>S</td><td>55</td><td>110</td><td>52</td><td>68</td></tr>
        <tr><td>M</td><td>57</td><td>114</td><td>53</td><td>70</td></tr>
        <tr><td>L</td><td>59</td><td>118</td><td>54</td><td>72</td></tr>
        <tr><td>XL</td><td>61</td><td>122</td><td>55</td><td>74</td></tr>
    </table>
    </p>
    </div>    


</body>
</html>