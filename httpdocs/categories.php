<?php 
require_once "../CS/Cs.php";
$daFront="front";
$daBack="back";
$backArray=backArray[''];
$frontArray=frontArray[''];
$yadaYada= "SELECT languageName ,frontOrBack FROM webDevelopment ";
$ExeConn=sqlsrv_query( $conn, $yadaYada);
while ( $row = sqlsrv_fetch_array($ExeConn,SQLSRV_FETCH_ASSOC)){
    if ($row['frontOrBack']=='front'){
        array_push($frontArray[],$row['languageName']);
    }else{
        array_push($backArray[],$row['languageName']);
    }
}
echo var_dump($frontArray);
echo var_dump($backArray);
sqlsrv_free_stmt( $ExeConn);


?>