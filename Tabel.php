<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 13.12.2018
 * Time: 10:28
 */

class Tabel
{
    // klassi omadused
    var $tabel = array();
    // klassi meetodid
    /**
     * @param $rida - massiiv rea elementidega
     */
    function lisaRida($rida) {
        $this->tabel[] = $rida;
    }

    function naitaTabel() {
        foreach ($this->tabel as $rida) {
            foreach ($rida as $element) {
                echo $element.'&nbsp;';
            }
            echo '<br>';
        }
    }
}