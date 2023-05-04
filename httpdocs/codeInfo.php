<?php
session_start();
require_once "../CS/Cs.php";
$Categ=$_SESSION['CATEGORY'];
$CodeName=urldecode($_GET['q']);
 $whitelist=sqlsrv_query($conn,"SELECT name FROM sys.tables");
 $DaWhiteList=array();//This variable will hold all the names of the tables
 while($whitelistt=sqlsrv_fetch_array($whitelist,SQLSRV_FETCH_ASSOC)){
    array_push($DaWhiteList,$whitelistt['name']);//here you push the names to var to create Whitelist
 };//check if is in the list of the tables to avoid any kind of injection (extra text)
 if (in_array($Categ,$DaWhiteList)){
    $Daquer = " SELECT basicUse FROM $Categ WHERE tagName= ? ";
    $params = array(&$CodeName);
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $Daquer=sqlsrv_prepare($conn,$Daquer,$params,$options);
    sqlsrv_execute($Daquer);

    if( sqlsrv_execute( $Daquer ) === false ) {
        die( print_r( sqlsrv_errors(), true));
  }else if (sqlsrv_num_rows($Daquer)==0){
        echo "nothing to show";
  }else{
    while($info=sqlsrv_fetch_array($Daquer,SQLSRV_FETCH_ASSOC)){
      $_SESSION['TAG']=$CodeName;
        echo $info['basicUse'];
    }
  }





 }
 session_write_close();

?>