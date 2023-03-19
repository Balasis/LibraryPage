<?php 
require_once "../CS/Cs.php";

$backArr=array();/*an array to push the back ends after select*/ 
$frontArr=array();/*an array to push the back ends after select*/ 
$yadaYada= "SELECT languageName ,frontOrBack FROM webDevelopment ";
$ExeConn=sqlsrv_query( $conn, $yadaYada);
/*the connection above and while(working as for each )to
fetch and categorize them into 2 arrays of front ends and 
back ends*/ 
while ( $row = sqlsrv_fetch_array($ExeConn,SQLSRV_FETCH_ASSOC)){
    if ($row['frontOrBack']=='front'){
        array_push($frontArr,  $row['languageName'])   ;
    }else{
        array_push($backArr,$row['languageName']);
    }
}
/*create both*/ 
echo "<div id='allLang'>";
echo " <div>FRONT END</div>";
$i=0;
while ($i<count($frontArr)){
    echo "<div class='lang'>";
    echo  $frontArr[$i];
    echo "</div>";
    $i++;
};
/**/ 
echo " <div>BACK END</div>";
echo "<div class='lang'>";
$w=0;
while ($w<count($backArr)){
    echo $backArr[$w];
    echo "</div>";
    $w++;
};

/**/ 
sqlsrv_free_stmt( $ExeConn);


?>