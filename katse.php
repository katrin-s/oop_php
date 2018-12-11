<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 06.12.2018
 * Time: 11:08
 */
// muutujate defineerimine
// $muutujaNimi = väärtus;
$lehePealkiri = 'Katse leht';
$sisuPealkiri = 'Muutujate defineerimine';
// andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere PHP';
$toevaartusTrue = true;
$toevaartusFalse = false;
// väärtuse tüübi kontroll - gettype($muutujaNimi)
// väärtuse tüübi teisendus - settype($muutujaNimi, 'tüüp')
// väljastamine
// ühendamine 'tekst '.$muutujaNimi.' tekst'
// tingimuslaused
/*
 * if (tingimus == true) {
 *      siis toimub see osa
 * } else {
 *      muidu toimub see osa
 * }
 * */
$naitaSisu = false;
$naitaPeidetudInfo = false;
echo '
    <!doctype html>
    <html>
        <head>
            <title>'.$lehePealkiri.'</title>
        </head>
        <body>';
if($naitaSisu == true) {
    echo '  <h1>' . $sisuPealkiri . '</h1>';
} else if( $naitaSisu == 1){
    echo 'see on tavaline info';
} else if($naitaSisu == 0){
    echo 'see on tavaline peidetud info';
} else {
    echo 'kõik on saladus';
}
// html lehe lõpp
echo '
        </body>
    </html>
';

?>