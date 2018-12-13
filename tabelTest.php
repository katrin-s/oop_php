<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 13.12.2018
 * Time: 10:44
 */
// võtsin sisse Tabel klassi
require_once './Tabel.php';
require_once './htmlTabel.php';
// loome tabeli
$lihtTabel = new Tabel();
// lisame read sisuga
$lihtTabel->lisaRida(array(1,2,3));
$lihtTabel->lisaRida(array(4,5,6));
$lihtTabel->lisaRida(array(7,8,9));
// trükin tabeli välja
$lihtTabel->naitaTabel();
echo '<hr>';
$htmltabel = new htmlTabel();
$htmltabel->lisaRida(array(1,2,3));
$htmltabel->lisaRida(array(4,5,6));
$htmltabel->lisaRida(array(7,8,9));
$htmltabel->naitaTabel();