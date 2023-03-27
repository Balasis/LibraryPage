<?php
session_start();
require_once '../CS/Cs.php';
//I am not going to secure it vs forge keys and shits..its for personal use anyway
    if (!isset($_SESSION['CATEGORY']) || !isset($_SESSION['TAG']) ){
        echo 'didntwork';
    }else{

   
$category=$_SESSION['CATEGORY'];
$tag= $_SESSION['TAG'];
$deleteConfirmation=$_GET['q'];

            if ($deleteConfirmation=="yes"){

                $getPicPath=sqlsrv_query($conn,"SELECT pictureURL FROM $category  WHERE tagName='$tag' ");
                while($getIt=sqlsrv_fetch_array($getPicPath,SQLSRV_FETCH_ASSOC)){

                    $pathToDelPic=$getIt['pictureUrl'];
                    unlink($pathToDelPic);


                }


                $Daquer = " DELETE FROM $category WHERE tagName= '$tag' ";
                $Go=sqlsrv_query($conn,$Daquer);
                

            }


 
}
session_write_close();
?>