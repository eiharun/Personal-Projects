<?php session_start();
    
    if(isset($_POST['reset'])){
        session_destroy();
        session_start();
        $_SESSION['score'] = 0;
        header("Location:index.php");
    }
    $Crypto =       array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Forensics =    array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Linux =        array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $OSINT =        array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Web =          array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");
    $Misc =         array("100"=>"Flag1", "200"=>"Flag2","300"=>"Flag3","400"=>"Flag4","500"=>"Flag5");

    #Below from test.php
    if(isset($_POST['Crypto-100-flag'])){
        if($_POST['Crypto-100-flag']==$Crypto["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideC1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Forensics-100-flag'])){
        if($_POST['Forensics-100-flag']==$Forensics["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideF1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideF1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Linux-100-flag'])){
        if($_POST['Linux-100-flag']==$Linux["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideL1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['OSINT-100-flag'])){
        if($_POST['OSINT-100-flag']==$OSINT["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideO1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideO1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Web-100-flag'])){
        if($_POST['Web-100-flag']==$Web["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideW1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-100-flag'])){
        if($_POST['Misc-100-flag']==$Misc["100"]){
    
            $_SESSION['score'] = $_SESSION['score']+100;
            $_SESSION['hideM1'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM1'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-200-flag'])){
        if($_POST['Crypto-200-flag']==$Crypto["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideC2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Forensics-200-flag'])){
        if($_POST['Forensics-200-flag']==$Forensics["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideF2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideF2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Linux-200-flag'])){
        if($_POST['Linux-200-flag']==$Linux["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideL2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['OSINT-200-flag'])){
        if($_POST['OSINT-200-flag']==$OSINT["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideO2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideO2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Web-200-flag'])){
        if($_POST['Web-200-flag']==$Web["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideW2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-200-flag'])){
        if($_POST['Misc-200-flag']==$Misc["200"]){
    
            $_SESSION['score'] = $_SESSION['score']+200;
            $_SESSION['hideM2'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM2'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-300-flag'])){
        if($_POST['Crypto-300-flag']==$Crypto["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideC3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Forensics-300-flag'])){
        if($_POST['Forensics-300-flag']==$Forensics["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideF3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideF3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Linux-300-flag'])){
        if($_POST['Linux-300-flag']==$Linux["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideL3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['OSINT-300-flag'])){
        if($_POST['OSINT-300-flag']==$OSINT["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideO3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideO3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Web-300-flag'])){
        if($_POST['Web-300-flag']==$Web["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideW3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-300-flag'])){
        if($_POST['Misc-300-flag']==$Misc["300"]){
    
            $_SESSION['score'] = $_SESSION['score']+300;
            $_SESSION['hideM3'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM3'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-400-flag'])){
        if($_POST['Crypto-400-flag']==$Crypto["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideC4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Forensics-400-flag'])){
        if($_POST['Forensics-400-flag']==$Forensics["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideF4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideF4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Linux-400-flag'])){
        if($_POST['Linux-400-flag']==$Linux["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideL4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['OSINT-400-flag'])){
        if($_POST['OSINT-400-flag']==$OSINT["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideO4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideO4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Web-400-flag'])){
        if($_POST['Web-400-flag']==$Web["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideW4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-400-flag'])){
        if($_POST['Misc-400-flag']==$Misc["400"]){
    
            $_SESSION['score'] = $_SESSION['score']+400;
            $_SESSION['hideM4'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM4'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Crypto-500-flag'])){
        if($_POST['Crypto-500-flag']==$Crypto["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideC5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideC5'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Forensics-500-flag'])){
        if($_POST['Forensics-500-flag']==$Forensics["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideF5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideF5'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Linux-500-flag'])){
        if($_POST['Linux-500-flag']==$Linux["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideL5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideL5'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['OSINT-500-flag'])){
        if($_POST['OSINT-500-flag']==$OSINT["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideO5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideO5'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Web-500-flag'])){
        if($_POST['Web-500-flag']==$Web["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideW5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideW5'] = False;
            header("Location:index.php");
        }
    }
    
    if(isset($_POST['Misc-500-flag'])){
        if($_POST['Misc-500-flag']==$Misc["500"]){
    
            $_SESSION['score'] = $_SESSION['score']+500;
            $_SESSION['hideM5'] = True;
            header("Location:index.php");
        }
        else{
            $_SESSION['hideM5'] = False;
            header("Location:index.php");
        }
    }
    
    


?>