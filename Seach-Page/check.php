<!DOCTYPE html>
<head>
    <title>Search</title>
    
<body>
    
    <div align="center">
        <form action="check.php" method="post">
            <input type="text" name="check"> <input type="submit" value="Submit" ></form>    </div></body></head></html>
<?php
$check=$_POST['check'];
$a= substr($check,0,1);
$b= substr($check,1,5);
$c= substr($check,6,-13);
$d= substr($check,8,-9);
$e= substr($check,12,-6);
$f= substr($check,15);
$min=21;
   if(strlen($check)==$min)
{

if ($a != U){
    if ($a !=L){
    echo "<script>";
echo 'alert("Stock Market Error")';
echo "</script>";

    }
    else{
        if(strlen($b)!=5){
            echo 'Economic Activity Code Error';
        }
        else {
            if(strlen($d)!=4){
            echo 'Year Error';
            }
            else {
                if($e != PTC){
                    if($e !=PLC){
                        echo 'Check Type of Company Code';
                       
                    }
                    else {echo "<script>";
echo 'alert("I am an alert box!")';
echo "</script>";
                    }
                    
                }
                   
            }
        }
}
}
}
 else {
echo "<script>";
echo 'alert("Length Issue")';
echo "</script>";
   
}

?>