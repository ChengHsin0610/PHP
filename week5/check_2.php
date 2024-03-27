<?php 
session_start();
?>

<meta charset="UTF-8">

<?php
$sId="nuk";
$sPwd="123";

$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];

if($sId==$uId && $sPwd==$uPwd){
    $_SESSION["check"]="yes";
    header("Location:success_2.php");
}else{
    $_SESSION["check"]="no";
    header("Location:fail_2.php");
}

?>