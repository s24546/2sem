<?php
$tablica=readline();
$a=explode (" ", $tablica);
$size_of = sizeof($a);
for($i=0; $i<=$size_of; $i++) {

    rsort($a);
}
echo $a[0];
?>

