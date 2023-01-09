<?php session_start();?>
<!DOCTYPE html>
<html>
    <title>PiCTF!</title>
    <head>
        
        <style>
            table{
                width: 100%;
            }
            caption{
                padding: 20px;
                background-color: azure;
            }
            th{
                
                height:40px;
                background-color: blue;
                color: whitesmoke;
                font-size: 20pt;
            }
            td{
                background-color: green;
                color: white;
                height:20px;
                
            }
            a{
                padding:10px;
                font-size: 18px;
                font-weight: bold;
                text-decoration: none;
            }
            .board:link, .board:visited{
                
                color:white;
                background-color:green;
            }
            .board:hover, .board:active{
               
                color:green;
                background-color:lightgreen;
            }
            .board_title{
                color: white;
                font-size: 26px;
                font-weight: bolder;
            }
            th, td{
                padding: 30px;
                text-align: center;
            }
            footer{
                text-align: center;
                padding:10px;
                color:grey;
                font-style: oblique;
            }
            .userinfo{
                text-align: right;
                
            }
        </style>
        <!--h4 align="right" padding="10px" margin="20px">Login | Register | Scores | Profile</h4--><!--Create these pages-->
        <?php echo $_SESSION['score'];?>
        <form action="validate.php" method="post"><input type="submit" name="reset" value="Reset Score"></form>

    </head>
    <body>
        <h1 align="center">Welcome to PiCTF!</h1>
        
        <table align="center">
            <caption>Jeapordy Table</caption>
            <!--Titles-->
            <tr>
                <th><a href="Table/Crypto-0Category.html" class="board_title">Crypto</a></th>
                <th><a href="Table/Forensics-0Category.html" class="board_title">Forensics</a></th>
                <th><a href="Table/Linux-0Category.html" class="board_title">Linux</a></th>
                <th><a href="Table/OSINT-0Category.html" class="board_title">OSINT</a></th>
                <th><a href="Table/Web-0Category.html" class="board_title">Web</a></th>
                <th><a href="Table/Misc-0Category.html" class="board_title">Misc</a></th>
            </tr>
            <!--100 Points-->
            <tr>
                <td>
                    <a href="Table/Crypto-100.html" target="_blank" class="board">100</a>
                    <br></br>
                    <div id="100-Crypto">

                <!--Separator-->
                    <?php if(!isset($_SESSION['hideC1'])){?>
                            <form action="validate.php" method="post">
                                <input type="text", name="Crypto-100-flag", title="flag-input" placeholder="PING{flag}">
                                <input type="submit" name="submit" value="Submit Flag">
                            </form>
                    <?php }?>

                        <?php if(isset($_SESSION['hideC1'])){ 
                                if($_SESSION['hideC1']==False){?>
                                    <form action="validate.php" method="post">
                                        <input type="text", name="Crypto-100-flag", title="flag-input" placeholder="PING{flag}">
                                        <input type="submit" name="submit" value="Submit Flag">
                                        <p>Try again</p>
                                    </form>
                                <?php }
                                else{
                                    echo "<p> Correct! 100 Points Gained!</p>";
                                }
                            }
                        ?>
                <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Forensics-100.html" target="_blank" class="board">100</a>
                    <br></br>
                    <div id="100-Forensics">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Forensics-100-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Linux-100.html" target="_blank" class="board">100</a>
                    <br></br>
                    <div id="100-Linux">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Linux-100-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/OSINT-100.html" target="_blank" class="board">100</a>
                    <br></br>
                    <div id="100-OSINT">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="OSINT-100-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Web-100.html" target="_blank" class="board">100</a>
                    <br></br>
                    <div id="100-Web">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Web-100-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Misc-100.html" target="_blank" class="board">100</a>
                    <br></br>
                    <div id="100-Misc">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Misc-100-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
            </tr>
            <!--200 Points-->
            <tr>
                <td>
                    <a href="Table/Crypto-200.html" target="_blank" class="board">200</a>
                    <br></br>
                    <div id="200-Crypto">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Crypto-200-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Forensics-200.html" target="_blank" class="board">200</a>
                    <br></br>
                    <div id="200-Forensics">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Forensics-200-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Linux-200.html" target="_blank" class="board">200</a>
                    <br></br>
                    <div id="200-Linux">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Linux-200-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/OSINT-200.html" target="_blank" class="board">200</a>
                    <br></br>
                    <div id="200-OSINT">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="OSINT-200-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Web-200.html" target="_blank" class="board">200</a>
                    <br></br>
                    <div id="200-Web">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Web-200-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Misc-200.html" target="_blank" class="board">200</a>
                    <br></br>
                    <div id="200-Misc">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Misc-200-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
            </tr>
            <!--300 Points-->
            <tr>
                <td>
                    <a href="Table/Crypto-300.html" target="_blank" class="board">300</a>
                    <br></br>
                    <div id="300-Crypto">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Crypto-300-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Forensics-300.html" target="_blank" class="board">300</a>
                    <br></br>
                    <div id="300-Forensics">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Forensics-300-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Linux-300.html" target="_blank" class="board">300</a>
                    <br></br>
                    <div id="300-Linux">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Linux-300-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/OSINT-300.html" target="_blank" class="board">300</a>
                    <br></br>
                    <div id="300-OSINT">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="OSINT-300-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Web-300.html" target="_blank" class="board">300</a>
                    <br></br>
                    <div id="300-Web">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Web-300-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Misc-300.html" target="_blank" class="board">300</a>
                    <br></br>
                    <div id="300-Misc">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Misc-300-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
            </tr>
            <!--400 Points-->
            <tr>
                <td>
                    <a href="Table/Crypto-400.html" target="_blank" class="board" class="board">400</a>
                    <br></br>
                    <div id="400-Crypto">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Crypto-400-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Forensics-400.html" target="_blank" class="board">400</a>
                    <br></br>
                    <div id="400-Forensics">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Forensics-400-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Linux-400.html" target="_blank" class="board">400</a>
                    <br></br>
                    <div id="400-Linux">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Linux-400-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/OSINT-400.html" target="_blank" class="board">400</a>
                    <br></br>
                    <div id="400-OSINT">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="OSINT-400-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Web-400.html" target="_blank" class="board">400</a>
                    <br></br>
                    <div id="400-Web">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Web-400-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Misc-400.html" target="_blank" class="board">400</a>
                    <br></br>
                    <div id="400-Misc">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Misc-400-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
            </tr>
            <!--500 Points-->
            <tr>
                <td>
                    <a href="Table/Crypto-500.html" target="_blank" class="board">500</a>
                    <br></br>
                    <div id="500-Crypto">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Crypto-500-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Forensics-500.html" target="_blank" class="board">500</a>
                    <br></br>
                    <div id="500-Forensics">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Forensics-500-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Linux-500.html" target="_blank" class="board">500</a>
                    <br></br>
                    <div id="500-Linux">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Linux-500-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/OSINT-500.html" target="_blank" class="board">500</a>
                    <br></br>
                    <div id="500-OSINT">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="OSINT-500-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Web-500.html" target="_blank" class="board">500</a>
                    <br></br>
                    <div id="500-Web">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Web-500-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
                <td>
                    <a href="Table/Misc-500.html" target="_blank" class="board">500</a>
                    <br></br>
                    <div id="500-Misc">
                        
                    <!--Separator-->

                        <form action="validate.php" method="post">
                            <input type="text", name="Misc-500-flag", title="flag-input" placeholder="PING{flag}">
                            <input type="submit" name="submit" value="Submit Flag">
                        </form>
                        
                    <!--Separator-->

                    </div>
                </td>
            </tr>
        </table>


    </body>
    <footer>
        <span>PiCTF, by eiHarun |   </span>
        <img src="resources/github.png" style="width:30ox;height:30px;" align=center>
        <a href="https://www.github.io/eiharun" target="_blank">github.io/eiharun |</a>
        <a href="https://www.eiharun.github.io" target="_blank">eiharun.github.io</a>
    </footer>
</html>