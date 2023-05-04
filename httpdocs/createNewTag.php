<?php
session_start();
require_once "../CS/Cs.php";
$Categ=$_SESSION['CATEGORY'];
$NewCode=urldecode($_GET['q']);




 $whitelist=sqlsrv_query($conn,"SELECT name FROM sys.tables");
 $DaWhiteList=array();//This variable will hold all the names of the tables


 while($whitelistt=sqlsrv_fetch_array($whitelist,SQLSRV_FETCH_ASSOC)){
    array_push($DaWhiteList,$whitelistt['name']);//here you push the names to var to create Whitelist
 };//check if is in the list of the tables to avoid any kind of injection (extra text)
 if (in_array($Categ,$DaWhiteList)){

    $seFetchquer = "SELECT 'tagName' FROM $Categ WHERE tagName= ? ";
    $separams = array(&$NewCode);
    $seoptions =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $seDaquerr=sqlsrv_prepare($conn,$seFetchquer,$separams,$seoptions);
    sqlsrv_execute($seDaquerr);


    if ((sqlsrv_num_rows($seDaquerr))>0){
        echo 'The tag already exists';
    }else{

        $Daquer = " INSERT INTO $Categ (tagName) VALUES (?) ";
        $params = array(&$NewCode);
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $Daquerr=sqlsrv_prepare($conn,$Daquer,$params,$options);
        sqlsrv_execute($Daquerr);
        echo 'Created';

        

    }

 }
 session_write_close();

?>