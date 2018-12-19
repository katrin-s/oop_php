<!-- õpetaja lahendus -->
<style>
    .number, input[type = "text"]{
        width: 50px;
        float: left;
    }
    input[type="submit"]{
    }
    .paneel {
        width: 130px;
        height: 75px;
        padding: 20px;
        background: lightblue;
    }
    .operation {
        width: 30px;
        float: left;
    }
</style>
<?php
function vorm($tulemus = false){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
        <div class="paneel">
            <div class="number">
                <input type="text" name="number1">
            </div>
            <div class="operation">
                <select name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <div class="number">
                <input type="text" name="number2">
            </div>
            <div style="clear: both"></div>
            <br>
            <div>
                <label style="float: left"> Tulemus:</label> 
                <input type="text" value="'.$tulemus.'">    
            </div>
            <br>
            <input type="submit" value="Saada!">
        </div>
        
    </form>';
}
function calc($arv1, $arv2, $operation){
    if($operation == '+'){
        $tulemus =  $arv1 + $arv2;
    } else if ($operation == '-'){
        $tulemus = $arv1 - $arv2;
    } else if ($operation == '*'){
        $tulemus = $arv1 * $arv2;
    }else if ($operation == '/'){
        $tulemus = $arv1 / $arv2;
    } else {
        $tulemus = false;
    }
    return $tulemus;
}
if(empty($_POST)){
    vorm();
} else {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    if(empty($number1) or empty($number2)){
        echo 'Mõlemad arvud tuleb sisestada!<br>';
        echo '<a href="'.$_SERVER['PHP_SELF'].'">Proovi uuesti!</a>';
        exit;
    }
    $tulemus = calc($number1, $number2, $operation);
    vorm($tulemus);
}
?>
<br>
<br>
<!-- algus test -->
<?php
function form(){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
        <div>
            <label>Esimene arv: </label>
            <input type="number" name="arv1">
        </div>
        <div>
            <label>Teine arv: </label>
            <input type="number" name="arv2">
        </div>
        <div>
        <hr>
            <label>Vali tehe: </label><br>
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
    form();
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