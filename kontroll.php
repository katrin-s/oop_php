<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 11.12.2018
 * Time: 9:22
 */

// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange
*/

$varv = 'red';

echo '
    <!doctype html>
    <html>
        <head>
            <title>Lahendused</title>
        </head>
        <body>';
if($varv == 'red') {
    echo '  <h4 style="color:red;">Värviline tekst</h4>';
} else if( $varv == 'blue'){
    echo '  <h4 style="color:blue;">Värviline tekst</h4>';
} else if( $varv == 'orange'){
    echo '  <h4 style="color:orange;">Värviline tekst</h4>';
} else {
    echo 'Värv ei ole määratud';
}
// html lehe lõpp
echo '
        </body>
    </html>
';


?>