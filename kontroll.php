<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 11.12.2018
 * Time: 9:22
 */
// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/
$nimi = 'Katrin Sooäär';
$kursuseTahis = 'KD';
$kursuseNumber = 18;
$kooliEmail = 'katrinsooaar@khk.ee';

echo '
    <!doctype html>
    <html>
        <head>
            <title>Lahendused</title>
        </head>
        <body>
            <h1>Minu info</h1>
                <ul>
                <li>Nimi: '.$nimi.'</li>
                <li>Kursus: '.$kursuseTahis.''.$kursuseNumber.'</li>
                <li>Email: '.$kooliEmail.'</li>
                </ul>
        </body>
    
    </html>
';
?>