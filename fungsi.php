<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
   $a= $angka1;
   $b= $angka2;
   $hasil= $a*$b;
   return $hasil;
}
 
//pemanggilan fungsi
$hasil=perkalian(4,5);
echo "Perkalian 4 x 5 adalah $hasil";
echo "<br />";
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
echo "<br />";
echo "Perkalian 10 x 5 adalah ".perkalian(10,5);
echo "<br />";
echo "Perkalian 40 x 34 adalah ".perkalian(40,34);
?>