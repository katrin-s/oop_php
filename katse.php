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

function suguVordlus($porsas1, $porsas2){
    if ($porsas1['sugu'] == $porsas2['sugu']) {
        return 0; }
    return ($porsas1['sugu'] < $porsas2['sugu']) ? -1 : 1;
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

    'Põrsas Isa' => array(
        'nimi' => 'Isa',
        'amet' => 'põrsasisa',
        'vanus' => 40,
        'sugu' => 'mees'),

    'Põrsas Ema' => array(
        'nimi' => 'Ema',
        'amet' => 'põrsasema',
        'vanus' => 35,
        'sugu' => 'naine'),

);

//massiivi sorteerimine
// tähestiku järjekorras ilma nimeta
// sort($perekondPeppa);
// tähestiku järjekorras nimega
// asort($perekondPeppa);
// võtmete tähestiku järjekorras
// ksort($perekondPeppa);
uasort($perekondPeppa, 'suguVordlus');



// lehe sisu väljastamine
echo '<!doctype html><html><head><title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
valjastaInfo($perekondPeppa);
echo '</body></html>';
?>