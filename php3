<?php
$tablica=readline();
$a=explode (" ", $tablica);
$size_of = sizeof($a);
for($i=0; $i<=$size_of; $i++) {

    rsort($a);
}
echo $a[0];
?>

<?php
$c = readline();
    for ($i=0; $i<$c; $i++) 
    {
$tablica=readline();
$a=explode (" ", $tablica);
$size_of = sizeof($a);
    for($i=0; $i<=$size_of; $i++)
{

    rsort($a);

}
echo $a[0];
    }

?>


<?php
$c = readline();
for ($i=0; $i < $c; $i++) {
        $line = readline();
        echo " " . $line . "\n";
}

<?php
$c = readline();
   for ($i=0; $i<$c; $i++) {
       $tablica=readline();
       $a=explode (" ", $tablica);
       $size_of = sizeof($a);
       for($i=0; $i<=$size_of; $i++){
          rsort($a);
}
          echo $a[0] . "\n";
}

?>
