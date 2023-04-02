<?php
session_start();
require_once '../CS/Cs.php';
//I am not going to secure it vs forge keys and shits..its for personal use anyway
    if (!isset($_SESSION['CATEGORY']) || !isset($_SESSION['TAG']) ){
        echo 'didntwork';
    }else{

   
$category=$_SESSION['CATEGORY'];
$tag= $_SESSION['TAG'];
$basicInfo=urlDecode($_GET['q']);


    $Daquer = " UPDATE $category SET basicUse = ? WHERE tagName= '$tag' ";
    $params = array(&$basicInfo);
    
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $Daquerr=sqlsrv_prepare($conn,$Daquer,$params,$options);
    sqlsrv_execute($Daquerr);
    
    if( sqlsrv_execute( $Daquerr ) === false ) {
        die( print_r( sqlsrv_errors(), true));
  }




    $se = " SELECT basicUse FROM $category WHERE tagName = '$tag' ";
    $seQ= sqlsrv_query($conn,$se);

 while($seQQ=sqlsrv_fetch_array($seQ,SQLSRV_FETCH_ASSOC)){
    echo nl2br($seQQ['basicUse']);
    }
            
}
session_write_close();
?>