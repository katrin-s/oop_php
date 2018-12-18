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

function suguVarv($sugu) {
    if ($sugu == 'naine') {
        echo '<div style="color: red">';
    } else {
        echo '<div style="color: blue">';
    }
}

function valjastaInfo($massiiv) {
    foreach ($massiiv as $alammassiivNimi => $alammassiivAndmed){
        suguVarv($alammassiivAndmed['sugu']);
        echo '<h4>'.$alammassiivNimi.'</h4>';
        foreach ($alammassiivAndmed as $elemendiNimi => $elemendiVaartus){
            suguVarv($alammassiivAndmed['sugu']);
            echo $elemendiNimi.' - '.$elemendiVaartus.'</div>';
        }
        echo '<hr>';
    }
}
$perekondPeppa = array(
    'Peppa' => array(
        'nimi' => 'Peppa',
        'amet' => 'põrsaslaps',
        'vanus' => 5,
        'sugu' => 'naine'),

    'George' => array(
        'nimi' => 'George',
        'amet' => 'põrsaslaps',
        'vanus' => 3,
        'sugu' => 'mees'),

    'Isapõrsas' => array(
        'nimi' => 'Isa',
        'amet' => 'isa',
        'vanus' => 40,
        'sugu' => 'mees'),

    'Emapõrsas' => array(
        'nimi' => 'Ema',
        'amet' => 'ema',
        'vanus' => 35,
        'sugu' => 'naine'),

);


// lehe sisu väljastamine
echo '<!doctype html><html><head><title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
valjastaInfo($perekondPeppa);
echo '<br>';
echo '</body></html>';
?>