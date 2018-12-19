<?php
if(empty($_POST)){
} else {
    foreach ($_POST as $element){
        if(empty($element)){
            echo 'Sisesta õiged andmed<br>';
            echo '<a href="login.php">Proovi uuesti</a>';
            exit;
        }
    }
    echo 'Tere tulemast, ' . $_POST['username'] . '!<br>';
    echo 'Sinu kasutajanimi on ' . $_POST['username'] . '<br>';
    echo 'Sinu parool on ' . $_POST['pass'] . '<br>';
}