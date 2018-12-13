<?php
/**
 * Created by PhpStorm.
 * User: katrin.sooaar
 * Date: 13.12.2018
 * Time: 11:03
 */
require_once './Tabel.php';
class HtmlTabel extends Tabel
{
    /**
     * HtmlTabel constructor.
     */
    public function __construct()
    {
        echo 'Html';
        parent::__construct();
    }
// väljastan html tabeli kujul
    function naitaTabel()
    {
        echo '<table border="1">';
        foreach ($this->tabel as $rida) {
            echo '<tr>';
            foreach ($rida as $element) {
                echo '<td>'.$element.'<td>';
            }
            echo '<tr>';
        }
        echo '</table>';
    }

}