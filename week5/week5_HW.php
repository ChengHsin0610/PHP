<html>
<head>
<meta charset="UTF-8">
</head>


<form action="appendix_2.php" method="post">
資管晚會報名表<br/>
姓名:<input type="text" name="sName" value="" placeholder="快讓我知道你是誰"><br/>
學號:<input type="password" name="sId" placeholder="第一個英文字母要小寫" required><br/>
系級:
<input type="checkbox" name="sGrade" value="113">113級 大四
<input type="checkbox" name="sGrade" value="114">114級 大三
<input type="checkbox" name="sGrade" value="115">115級 大二
<input type="checkbox" name="sGrade" value="116" checked>116級 大一<br/>
性別:
<input type="radio" name="sGender" value="male">男
<input type="radio" name="sGender" value="female" checked>女<br/>
衣服顏色:
<input type="color" name="sColor" value=""><br/>
參與日期:
<input type="date" name="sDate" value=""><br/>
預計抵達時間:
<input type="time" name="sTime" value=""><br/>
請輸入你的電子信箱:
<input type="email" name="sEmail"><br/>
附加檔案:
<input type="file" name="sFile"><br/>
參與人數:
<input type="number"><br/>
想參與團康遊戲的意願:
<input type="range"><br/>
選擇你的衣服尺寸:
<select name="sSize[]" multiple>
<option value="s">S
<option value="m" selected>M
<option value="l">L
<option value="xl">XL
</select><br/>
其他想說的話:
<textarea name="sComment" value="" rows="3" cols="30">

</textarea>
<br/>
<br/>
<input type="submit" value="送出送出">
<input type="reset" value="重寫重寫">
</form>

<?php
if(isset($_POST["sName"])){
    $sName=$_POST["sName"];
    echo $sName;
}else{
    echo "xxxxx";
}
?>

</html>