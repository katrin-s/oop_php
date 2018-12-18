<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 06.12.2018
 * Time: 11:08
 */
// massiivid
// array()
/*
$massiiv = array(); //tühi massiiv
$massiiv[] = väärtus;
 */
// massiivi loomine

function valjastaInfo($massiiv) {
    foreach ($massiiv as $elemendiNimi => $elemendiVaartus) {
        echo $elemendiNimi.' - '.$elemendiVaartus.'<br>';
    }
}

$porsasPeppa = array(
    'nimi' => 'Peppa',
    'amet' => 'põrsaslaps',
    'vanus' => 5,
    'sugu' => 'naine');


// lehe sisu väljastamine
echo '<!doctype html><html><head><title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
valjastaInfo($porsasPeppa);
echo '</body></html>';
?>