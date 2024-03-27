<meta charset=utf8>

<?php

    $sName=$_POST["sName"];
    echo "您的姓名:".$sName."<br/>";
    $sId=$_POST["sId"];
    echo "您的學號:".$sId."<br/>";
    $sGrade=$_POST["sGrade"];
    echo "您的系級:".$sGrade."<br/>"; 
    $sGender=$_POST["sGender"];
    echo $sGender."<br/>";
    
   
    $sSize=$_POST["sSize"];
    $x=count($sSize);
    for($i=0;$i<$x;$i++){
        if($i<$x-1){
            echo $sSize[$i].", ";   
        }else{
            echo $sSize[$i];
        }
    }
?>