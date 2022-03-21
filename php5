<?php
$tablica=readline();
$tablica2=explode (",",$tablica);
$size_of = sizeof($tablica2);
asort($tablica2);
$w=[];
$w[0] = $tablica2[0];
for ($i=1; $i<=$size_of-1; $i++){
    if($tablica2[$i] != $tablica2[$i-1]){
        $w[]=$tablica2[$i];
    }

}
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
   
}
uasort($array, 'cmp');
for($i=0; $i<$size_of-1; $i++)
{
echo $w[$i] . " ";
}

