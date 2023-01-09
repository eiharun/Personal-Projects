<?php ob_start();session_start();?>
<!DOCTYPE html>
<html>
    <title>Enter the Super Secret Password</title>
    <style>
        body{
            text-align:center;
        }
        html{
            background-color:red;
        }
        h2{
            font-size:52px;
            background-color:Blue;
            color:white;
        }
        input{
            font-size:30px;
            width:100%;
            text-align:center;
        }

    </style>
    <body>
        <h2>Enter the Password</h2>
        <form method="POST">
            <input type="text" name="passwd"><br>
            <input type="submit" value="Submit" name='submit'>
        </form>

        <?php 
            if(!empty($_POST["passwd"])){
                $password = $_POST["passwd"];
                #S00p3r+2Ecr3t_P@Ssw0rD
                $cmd = "python3 atbash.py ".$password;
                $password_crypt = shell_exec($cmd);
                
                $cmd =  "python3 xor.py ".$password_crypt;
                
                $password_crypt = shell_exec($cmd);
                #echo "pwd".$password_crypt;
            }
            
        ?>
        <?php
            if(!empty($_POST["passwd"])){

            $secret = "I11j2h*3Wyh2f^JAIie1hV";
            #$password_crypt = ' test  ';
            $password_crypt = trim($password_crypt ?? '');
                if ($password_crypt == $secret){
                    header("Location:HereIsTheFl4g.txt");
                }
                else{
                    $_SESSION['secret'] = $secret;
                    $_SESSION['password_crypt'] = $password_crypt;
                    header("Location:Wrong.php");
                }
            }
        ?>
        <br><br><br><br><br>
        
        <img src="resources/mario-on-pc.png" >
       
    </body>
</html>