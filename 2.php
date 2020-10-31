<?php
$string=array('D','U','M','B','W','A','Y','S','I','D');
for($i=0;$i<count($string);$i++){
    for($j=0;$j<count($string);$j++){
        if($i==$j || $i+$j==count($string)-1){
            echo $string[$i];
        }else{
            echo " = ";
        }
    }
    echo"<br>";
}
?>