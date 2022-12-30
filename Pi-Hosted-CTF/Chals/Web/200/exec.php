<html>
    <body>
        <?php
            $point = array("1" => "Secret.html",
            "2"=>"BlueLock.html",
            "3"=>"DragonBall.html",
            "4"=>"HunterxHunter.html",
            "5"=>"JujutsuKaisen.html",
            "6"=>"OnePiece.html");
            header("Location: /Chals/Web/200/library/".$point[$_GET["Page_ID"]]);
            
            
        ?>
    </body>   
</html>