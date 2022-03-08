<?php
fscanf(STDIN, "%d %d %d" , $a, $b, $c);
if($a+$b>$c && $a+$c>$b && $b+$c>$a)
{}
else
{
    echo "NIE";
}
?>




<?php
fscanf(STDIN, "%d %d %d" , $a, $b, $c);
if($a+$b>$c && $a+$c>$b && $b+$c>$a)
{
    echo "TAK";
}
else if ($a!==$b && $b!==$c && $a!==$c)
{
    echo "BŁĄD";
}
else if($a+$b<$c) 
{
    echo "NIE";
}
else if($a+$c<$b) 
{
    echo "NIE";
}
else if($b+$c<$a) 
{
    echo "NIE";
}
?>
