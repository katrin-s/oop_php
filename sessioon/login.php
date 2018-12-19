<?php
session_start(); //alustame anonüümse sessiooniga
// lisatud veateate väljastamise võimalus
echo '<div style="color: red">'.$_SESSION['viga'].'</div>'
?>
<form method="post" action="login_do.php">
    <div class="login">
        <div>
            <label>Kasutajanimi: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Parool: </label>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" value="Login sisse">
        </div>
    </div>
</form>
