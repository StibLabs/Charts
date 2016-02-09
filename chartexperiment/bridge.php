<?php
include 'selectdata.php';
//OPEN PRICE TEST


$op4 = $openprice3;
var_dump($op4);
$opval = array();
 foreach ($op4 as $key => $valueop) {
        if ($key % 2 == 0) {
        $opval[] = $valueop;

        }
    }
//OPEN PRICE TEST
var_dump($opval);





?>