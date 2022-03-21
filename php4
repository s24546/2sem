<?php
$tablica=readline();
$tablica2=explode (",",$tablica);
$size_of = sizeof($tablica2);
$srednia = array_sum($tablica2)/$size_of;
$z=round($srednia,2);
echo number_format($z,2) . "\n";
sort($tablica2);
$w=[];
$w[0] = $tablica2[0];
for ($i=1; $i<=$size_of-1; $i++){
    if($tablica2[$i] != $tablica2[$i-1]){
        $w[]=$tablica2[$i];
    }
}
for($i=0; $i<4; $i++)
{
echo $w[$i] . " ";
}
echo $w[4];
$size_of2=sizeof($w);
echo "\n";
for($i=$size_of2-1; $i>0; $i--){
    if ($tablica2[$i]!=$tablica2[$i-1]){
        $w[]=$tablica2[$i];
    }
}
for($i=$size_of2-5; $i<$size_of2-1; $i++)
{
echo $w[$i] . " ";
}
echo $w[$size_of2-1];
?>




