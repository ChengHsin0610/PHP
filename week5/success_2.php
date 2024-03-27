<?php 
session_start();
?>

<html>
<meta charset="UTF-8">


<?php
if(isset($_SESSION["check"])){
   if($_SESSION["check"]=="yes"){
        echo "歡迎進入網頁<br/>"; 
        echo "3秒鐘之後到資管晚會報名表";
        header("Refresh:3;url=week5_HW.php");
    }else{
        echo "非法進入網頁<br/>";
        echo "3秒鐘之後回到登入畫面";
        header("Refresh:3;url=login_2.php"); 
    }
}else{
    echo "非法進入網頁<br/>";
    echo "3秒鐘之後回到登入畫面";
    header("Refresh:3;url=login_2.php"); 
}
?>

</html>