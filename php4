$tablica=readline();
$tablica2=explode (" ", $tablica);
$size_of = count($tablica2);
$srednia = array_sum($tablica2)/$size_of;
$zaokrl = round($srednia,2);
echo number_format($zaokrl,2) . "\n";
sort($tablica2);
$wynik = [];
$wynik[0] = $tablica[0];
for ($i = 1; $i <= $size-1; i++){
    if($tablica2[$i] != $tablica2[$i -1]){
        $wynik[]=$tablica2[$i];
    }
}
for($i=0; $i<4; $i++)
{
echo $wynik[$i] . " ";
}
echo $wynik[4];
$size_of2=count($wynik);
echo"\n";
for($i=$size_of2-1; $i>0; $i--){
    if ($tablica2[$i]!=$tablica2[$i-1]){
        $wynik[]=$tablica2[$i];
    }
}
for($i=$size2-5; $i<$size_of2-1; $i++)
{
echo $wynik[$i] . " ";
}
echo $wynik[$size2-1];
?>
