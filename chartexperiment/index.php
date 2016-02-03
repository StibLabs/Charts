<?php
//$page = $_SERVER['PHP_SELF'];
//$sec = "30";
//header("Refresh: $sec; url=$page");

//BTC-E
$jsonbtce    = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd1    = $decodedbtce->btc_usd->last;
$thetime     = $decodedbtce->btc_usd->updated;
$time        = date('G:i:s', $thetime);
$btc1        = round($btceusd1, 4);

$myFile = "btc.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "|" . $time . "|" . $btc1;
fwrite($fh, $stringData);
fclose($fh);
$array = explode("\n", file_get_contents('btc.txt'));



$array2 = explode("|", file_get_contents('btc.txt'));
$ary    = array_values(array_filter($array2));
//var_dump($ary);

// THE PRICE
function pricebtc($ary)
{
$data2 = array();


    foreach ($ary as $key => $value) {
        if ($key % 2 != 0) {
            //echo $value . "<br>";
           $data2[] = $value;
        }
    }

//var_dump($data2);
$pricebt = array_chunk($data2, 4);
//var_dump($pricebt);


foreach ($pricebt as $val) {
$val2 = implode(",", $val);
echo $val2."<br>";
}


}

// THE TIME
function timebtc($ary)
{

    $data = array();
    foreach ($ary as $key => $value) {
        if ($key % 2 == 0) {
            //echo $value;
            $data[] = $value;
            
        }
    }
    for ($i = 0; $i < count($data); ++$i) {
        
        $bv = $i * 4;
        if (array_key_exists($bv, $data)) {
            if (is_null($data[$bv])) {
                
            } else {
               echo $data[$bv]."<br>";
              
            }
        }
    }
    //var_dump($data);

}


echo pricebtc($ary);
echo timebtc($ary);


?>