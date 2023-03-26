<?php
session_start();
require_once "../CS/Cs.php";
$Categ=$_GET['q'];

 $whitelist=sqlsrv_query($conn,"SELECT name FROM sys.tables");

 $DaWhiteList=array();

 while($whitelistt=sqlsrv_fetch_array($whitelist,SQLSRV_FETCH_ASSOC)){
    array_push($DaWhiteList,$whitelistt['name']);
 };
 if (in_array($Categ,$DaWhiteList)){
    $Fetchquer = "SELECT tagName FROM $Categ";
    $Fetchque= sqlsrv_query($conn,$Fetchquer);
    
    
    echo "<li id='ChosenCat'>".$Categ."</li>";
    $_SESSION['CATEGORY']=$Categ;//category chosen
   $_SESSION['TAG']="" ;//tag chosen (if);
   


    while($Fetchquerr=sqlsrv_fetch_array($Fetchque,SQLSRV_FETCH_ASSOC)){
        echo "<li>";
        echo "<a class='listLi' id='";
        echo htmlspecialchars($Fetchquerr['tagName'],ENT_QUOTES);
        echo "'".'onclick="getCodeInfo(this.id),getCodePic(this.id)">'.htmlspecialchars($Fetchquerr['tagName'],ENT_QUOTES)."</a>";
        echo "</li>";
    }

 }else{

    echo "haha jokes on you injector";
 }

session_write_close();


?>