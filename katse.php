<?php
function vorm(){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
        <div>
            <label>Esimene arv</label>
            <input type="number" name="arv1">
        </div>
        <div>
            <label>Teine arv</label>
            <input type="number" name="arv2">
        </div>
        <div>
        <hr>
            <label>Vali tehe</label><br>
            <input type="radio" value="Liitmine" name="liida"> Liitmine<br>
            <input type="radio" value="Lahutamine" name="lahuta"> Lahutamine<br>
            <input type="radio" value="Korrutamine" name="korruta"> Korrutamine<br>
            <input type="radio" value="Jagamine" name="jaga"> Jagamine<br>
        </div>
        <hr>
        <input type="submit" value="Arvuta">
    </form>';
}
if(empty($_POST)){
    vorm();
} else {
    foreach ($_POST as $element){
        if(empty($element)){
            echo 'Sisesta numbrid<br>';
            echo '<a href="'.$_SERVER['PHP_SELF'].'">Proovi uuesti!</a>';
            exit;
        }
    }
}

?>