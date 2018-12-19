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
}
