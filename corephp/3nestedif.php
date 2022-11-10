<?php
$year=2013;
if($year % 4==0){
    if(0 != $year % 100){
        echo "the year is leap";
    }
}
else{
    echo "the year is not leap";
}
?>