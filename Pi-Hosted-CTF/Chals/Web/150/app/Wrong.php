<?php session_start();?>
<!DOCTYPE html>
<html>
<head><style>
    h1{
        text-align: center;
        text-shadow: 10px;
        color: teal;
        background-color: red;
    }

</style></head>

    <h1>Incorrect Password</h1>
    <body style="text-align:center">
    <?php 
        $secret = $_SESSION['secret'] ;
        $password_crypt = $_SESSION['password_crypt'];
        echo "$secret, $password_crypt <br>";
        
    ?>
        <?php echo "Look for a hint somewhere: ".$password_crypt;?>
    
    <script>
        let output = "<?php echo "$secret ------| != |------ ".$password_crypt;?>";
        console.log(output);
    </script>

    <br><br><br><br><br><br><br>

    

    
    </body>
</html>