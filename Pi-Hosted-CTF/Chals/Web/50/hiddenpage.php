<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:index.php");
        exit;
}
?>
<html>
    <header>
        <title>The Flag is PING{Y0U_F0uND_M3}</title>
    </header>
    <body>
        <p>Look A Little Closer</p>
    </body>
</html>