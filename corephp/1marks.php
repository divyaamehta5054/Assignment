<?php
$phy = 70;
$chem = 60;
$bio = 80;
$math = 60;
$comp = 50;
$total = $phy + $chem + $bio + $math + $comp ;
$percentage = ($total * 100)/500;
echo "your percentage is" . $percentage;
echo "<br>";
echo "total marks is". $total;
echo "<br>";

if($percentage >= 75)
{
    echo "your grade is A";
}
else if($percentage < 75 && $percentage >= 60)
{
    echo "your grade is b";
}
else if($percentage < 60 && $percentage >= 45)
{
    echo "your grade is c";
}
else if($percentage < 45 && $percentage >= 33)
{
    echo "your grade is d";
}
else 
{
    echo "your grade is e";
}
?>