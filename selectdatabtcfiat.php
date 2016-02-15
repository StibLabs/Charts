<?php
include 'config.php';
// Attempt select query execution
$sql = "SELECT * FROM btcfiat";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){


$usd2 = array();
$eur2 = array();
$gbp2 = array();
$cad2 = array();
$chf2 = array();
$cny2 = array();
$aud2 = array();
$sgd2 = array();
$jpy2 = array();
$nzd2 = array();
$rub2 = array();
$twd2 = array();
$sek2 = array();
$thb2 = array();
$pln2 = array();
$isk2 = array();


while($row = mysqli_fetch_array($result)){



$usd1 =  $row['btcusd'];
$eur1 =  $row['btceur'];
$gbp1 =  $row['btcgbp'];
$cad1 =  $row['btccad'];
$chf1 =  $row['btcchf'];
$cny1 =  $row['btccny'];
$aud1 =  $row['btcaud'];
$sgd1 =  $row['btcsgd'];
$jpy1 =  $row['btcjpy'];
$nzd1 =  $row['btcnzd'];
$rub1 =  $row['btcrub'];
$twd1 =  $row['btctwd'];
$sek1 =  $row['btcsek'];
$thb1 =  $row['btcthb'];
$pln1 =  $row['btcpln'];
$isk1 =  $row['btcisk'];


$usd2[] = $usd1;
$eur2[] = $eur1;
$gbp2[] = $gbp1;
$cad2[] = $cad1;
$chf2[] = $chf1;
$cny2[] = $cny1;
$aud2[] = $aud1;
$sgd2[] = $sgd1;
$jpy2[] = $jpy1;
$nzd2[] = $nzd1;
$rub2[] = $rub1;
$twd2[] = $twd1;
$sek2[] = $sek1;
$thb2[] = $thb1;
$pln2[] = $pln1;
$isk2[] = $isk1;






}


// Close result set
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);


$usd = end($usd2);
$eur = end($eur2);
$gbp = end($gbp2);
$cad = end($cad2);
$chf = end($chf2);
$cny = end($cny2);
$aud = end($aud2);
$sgd = end($sgd2);
$jpy = end($jpy2);
$nzd = end($nzd2);
$rub = end($rub2);
$twd = end($twd2);
$sek = end($sek2);
$thb = end($thb2);
$pln = end($pln2);
$isk = end($isk2);







$ln = str_repeat('&nbsp;', 5);
$ln2 = str_repeat('&nbsp;', 2);




echo "<span class=\"nob\" >USD</span>";
echo  "$ln2";
echo $usd;
echo  "$ln";

echo "<span class=\"nob\" >EUR</span>";
echo  "$ln2";
echo $eur;
echo  "$ln";

echo "<span class=\"nob\" >GBP</span>";
echo  "$ln2";
echo $gbp;
echo  "$ln";


echo "<span class=\"nob\" >CAD</span>";
echo  "$ln2";
echo $cad;
echo  "$ln";

echo "<span class=\"nob\" >CHF</span>";
echo  "$ln2";
echo $chf;
echo  "$ln";

echo "<span class=\"nob\" >CHF</span>";
echo  "$ln2";
echo $chf;
echo  "$ln";

echo "<span class=\"nob\" >CNY</span>";
echo  "$ln2";
echo $cny;
echo  "$ln";

echo "<span class=\"nob\" >AUD</span>";
echo  "$ln2";
echo $aud;
echo  "$ln";


echo "<span class=\"nob\" >SGD</span>";
echo  "$ln2";
echo $sgd;
echo  "$ln";


echo "<span class=\"nob\" >JPY</span>";
echo  "$ln2";
echo $jpy;
echo  "$ln";


echo "<span class=\"nob\" >NZD</span>";
echo  "$ln2";
echo $nzd;
echo  "$ln";

echo "<span class=\"nob\" >RUB</span>";
echo  "$ln2";
echo $rub;
echo  "$ln";

echo "<span class=\"nob\" >TWD</span>";
echo  "$ln2";
echo $twd;
echo  "$ln";


echo "<span class=\"nob\" >SEK</span>";
echo  "$ln2";
echo $sek;
echo  "$ln";


echo "<span class=\"nob\" >THB</span>";
echo  "$ln2";
echo $thb;
echo  "$ln";

echo "<span class=\"nob\" >PLN</span>";
echo  "$ln2";
echo $pln;
echo  "$ln";


echo "<span class=\"nob\" >ISK</span>";
echo  "$ln2";
echo $isk;

?>




