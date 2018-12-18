<style>
    form{
        margin: 50px;
    }
    input {
        border-radius: 5px;
    }
    .vorm {
        width: 300px;
        border: solid 1px black;
        padding: 50px;
    }
</style>
<form method="post" action="vormitootlus.php">
    <div class="vorm">
        <div>
            <label>Kasutajanimi: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Parool: </label>
            <input type="password" name="passwd">
        </div>
        <div>
            <input type="submit" value="Logi sisse!">
        </div>
    </div>
</form>