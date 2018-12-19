<?php
session_start(); //jätkame login.php faili sessiooni
if(empty($_POST)){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta sisselogimise andmed!';
}
else if (empty($_POST['username'])) {
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta kasutajanimi!';
}
else if (empty($_POST['pass'])) {
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta parool!';
} else {
    //kontrollin sessiooni IDd
    echo session_id();
    echo '<br>';
    // sessiooni töö pikkus on vaikimisi 30 minutit
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
}
