<?php

$host="BALASIS";
$db="ANS";
$usename="Angelhollow";
$password="82468246a";

$connectionInfo=array("Database"=>$db,"UID"=>$usename,"PWD"=>$password);
$conn = sqlsrv_connect($host,$connectionInfo);




?>