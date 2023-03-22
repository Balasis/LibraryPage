<?php
require_once "../CS/Cs.php";
$Categ=$_GET['c'];
$CodeName=$_GET['q'];


$Daquer = " SELECT attributes,basicUse,extraInfo FROM $Categ WHERE tagName= '$CodeName' ";


$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );

$Daquery= sqlsrv_query($conn,$Daquer,$params,$options);



$rowCounter= sqlsrv_num_rows($Daquery);
if ($rowCounter === false)
   echo "Error in retrieveing row count.";
else
   echo $rowCounter;

if ($rowCounter >0){
    echo 'it has something';
}else{
    echo 'nothing here';
   $test=sqlsrv_fetch_array($Daquery,SQLSRV_FETCH_ASSOC);
   print_r($test);
}

/*if ($Daquery->sqlsrv_num_rows>0){
    echo 'it has something';
}else{
    echo 'nothing here';
}

if (sqlsrv_num_rows($Daquery)>=0){

while($YadaYada=sqlsrv_fetch_array($Daquery,SQLSRV_FETCH_ASSOC)){
echo $YadaYada['attributes']." ".$YadaYada['basicUse']." ".$YadaYada['extraInfo'];
}

}else{
    echo 'there are no rows you donut';
}*/

?>