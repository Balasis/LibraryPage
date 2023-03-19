<?php
require_once "../CS/Cs.php";
$Categ=$_GET['q'];
$Fetchquer = "SELECT tagName FROM $Categ";
$Fetchque= sqlsrv_query($conn,$Fetchquer);



while($Fetchquerr=sqlsrv_fetch_array($Fetchque,SQLSRV_FETCH_ASSOC)){
    echo "<li class='listLi id='";
    echo $Fetchquerr['tagName'];
    echo "'>".$Fetchquerr['tagName']."</li>";
}


?>