<?php

$host="BALASIS";
$db="ANS";
$usename="Angelhollow";
$password="82468246a";

$connectionInfo=array("Database"=>$db,"UID"=>$usename,"PWD"=>$password);
$conn = sqlsrv_connect($host,$connectionInfo);


/*
$serverName = "BALASIS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"ANS", "UID"=>"Angelhollow", "PWD"=>"82468246a");
$conn = sqlsrv_connect( $serverName, $connectionInfo);*/

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>