
<?php
session_start(); // alustame anonüümse sessiooniga
session_regenerate_id();
echo session_id();
echo '<br>';
echo '<div style="color: red">'.$_SESSION['viga'].'</div>';
// sessioon/login.php
?>
<form method="post" action="login_do.php">
    <div>
        <label>Kasutajanimi: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Parool: </label>
        <input type="password" name="passwd">
    </div>
    <div>
        <input type="submit" value="Logi sisse">
    </div>
</form>