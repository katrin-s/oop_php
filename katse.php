<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 06.12.2018
 * Time: 11:08
 */
// Tsüklid

// funktsioonid
// function
// parameetrid pole kohustuslikud
/*
function funktsiooniNimi([$parameeter1,$parameeter2,...,$parameeterN]) {
    kõik tegevused, mis peavad toimuma
}
 */
function htmlTabel($ridadeArv,$veergudeArv){
    echo '<table>';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
     echo '<tr>';
     for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
         echo '<td>';
         echo $veeruNumber;
         echo '</td>';
     }
     echo '</tr>';
    }
    echo '</table>';
}
// lehe sisu väljastamine
echo '<!doctype html><html><head><title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
// funktsiooni väljakutsumine
htmlTabel(4,4);
echo '<hr>';
htmlTabel(2,5);
echo '</body></html>';
?>