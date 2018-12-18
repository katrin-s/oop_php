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
    foreach ($massiiv as $alammassiivNimi => $alammassiivAndmed){
        echo '<h5>'.$alammassiivNimi.'</h5><br>';
        foreach ($alammassiivAndmed as $elemendiNimi => $elemendiVaartus){
            echo $elemendiNimi.' - '.$elemendiVaartus.'<br>';
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
);


// lehe sisu väljastamine
echo '<!doctype html><html><head><title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
valjastaInfo($perekondPeppa);
echo '<br>';
echo '</body></html>';
?>