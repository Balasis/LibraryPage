<?php
require_once "../CS/Cs.php";
$Categ=$_GET['q'];
$Fetchquer = "SELECT tagName FROM $Categ";
$Fetchque= sqlsrv_query($conn,$Fetchquer);



while($Fetchquerr=sqlsrv_fetch_array($Fetchque,SQLSRV_FETCH_ASSOC)){
    echo "<li>";
    echo "<a class='listLi' id='";
    echo htmlspecialchars($Fetchquerr['tagName'],ENT_QUOTES);
    echo "'>".htmlspecialchars($Fetchquerr['tagName'],ENT_QUOTES)."</a>";
    echo "</li>";
}


?>