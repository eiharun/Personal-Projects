<html>
    <head>
    <title>This is my first ever web app ctf creation using PHP!</title>
    </head>
    
    <body>
        <?php
            echo "<p>Hello World!\n</p>";
            echo "<p>Login Here!</p>";
        ?>
            <!--Test Credentials= Username:Admin Password:a1d2m3i4n5-->
        <form action="" method="post" name="Login_Form">
            <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
                <?php if(isset($msg)){?>
                <tr>
                    <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
                </tr>
                <tr>
                    <td align="right" valign="top">Username</td>
                    <td><input name="Username" type="text" class="Input"></td>
                </tr>
                <tr>
                    <td align="right">Password</td>
                    <td><input name="Password" type="password" class="Input"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
                </tr>
            </table>
        </form>
    </body>
    <?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('Admin' => 'a1d2m3i4n5');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:hiddenpage.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
    ?>

</html>