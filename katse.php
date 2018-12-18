<?php
function vorm(){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
        <div>
            <label>kasutajanimi :</label>
            <input type="text" name="username">
        </div>
        <input type="submit" value="Saada!">
    </form>';
}
if(empty($_POST)){
    vorm();
} else {
    foreach ($_POST as $element){
        if(empty($element)){
            echo 'Andmed tuleb sisestada ka!<br>';
            echo '<a href="'.$_SERVER['PHP_SELF'].'">Proovi uuesti!</a>';
            exit;
        }
    }
    echo 'kasutajanimi = ' . $_POST['username'] . '<br>';
    echo 'Tere tulemast ' . $_POST['username'] . '!<br>';
}
?>