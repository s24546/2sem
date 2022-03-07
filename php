<?php
fscanf(STDIN, "%d %d %d" , $a, $b, $c);
if($a+$b>$c && $a+$c>$b && $b+$c>$a)
{}
else
{
    echo "NIE";
}
?>
