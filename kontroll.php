<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 11.12.2018
 * Time: 9:22
 */

echo '<html><head><title>Ülesanded</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';
// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/
echo '<h4>Ülesanne 1</h4>';
$nimi = 'Katrin Sooäär';
$kursuseTahis = 'KD';
$kursuseNumber = 18;
$kooliEmail = 'katrinsooaar@khk.ee';
echo 'Nimi: '.$nimi.'<br>';
echo 'Kursus: '.$kursuseTahis.''.$kursuseNumber.'<br>';
echo 'Email: '.$kooliEmail.'<br>';
echo '<hr>';
// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if-else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange - vastavalt tingimuslauses määra punane, sinine ja orange
*/
echo '<h4>Ülesanne 2</h4>';
$varv = 'orange';
echo '<p style="color: ';
if($varv == 'punane'){
    echo 'red';
} else if($varv == 'sinine'){
    echo 'blue';
} else if($varv == 'orange'){
    echo 'orange';
} else {
    echo 'black';
}
echo ';">Värviline tekst</p>';
echo '<hr>';
// Ülesanne 3
// loo tabelile gradient programmeerimise abil
echo '<h4>Ülesanne 3</h4>';
echo '<table>';
$ridadeArv = 8;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#'.$ridadeArv.$veeruNumber.$veergudeArv.$veeruNumber.$reaNumber.$veeruNumber;
        echo '<td style="background-color: '.$varv.'">';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<p>Alternatiivne lahendus</p>';
// Lisatud erinevad värvid, mis muutuvad uuendamisel
echo '<table>';
$ridadeArv = 6;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#';
        for ($i = 1; $i <= 6; $i++){
            $varv = $varv.dechex(rand(0, 16));
        }
        echo '<td style="background-color: '.$varv.'">';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';
// Ülesanne 4

echo '<h4>Ülesanne 4</h4>';
/* Muuda htmlTabel() funktsioon nii, et see võtaks parameetrina numbrite massiivi
ja väljastaks HTML tabelina
*/
function htmlTabel($massiiv){
    echo '<table>';
    foreach($massiiv as $rida){
        echo '<tr>';
        foreach($rida as $element) {
            echo '<td>';
            echo $element;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
htmlTabel($numbrid);
echo '<br>';

echo '</body></html>';