<?php
session_start();
require_once '../CS/Cs.php';

if (!isset($_SESSION['CATEGORY']) || !isset($_SESSION['TAG']) ){
  
}else{


$category=$_SESSION['CATEGORY'];
$tag= $_SESSION['TAG'];


$ext = pathinfo($_FILES["imageHere"]["name"], PATHINFO_EXTENSION);



if ($_FILES["imageHere"]["name"]=$tag.".".$ext){ 


    

  
    $target_dir = "img/".$category."/";
    if (!is_dir($target_dir)) {
      mkdir($target_dir);
    }
    $file_name=$_FILES["imageHere"]["name"];
    $file_name=preg_replace('/[^a-zA-Z0-9_\-\.]/','',$file_name);
$target_file = $target_dir .($file_name);
    move_uploaded_file($_FILES["imageHere"]["tmp_name"], $target_file);


    
  

  
  $thePath=$target_dir.$file_name;
  $Daquer = " UPDATE $category SET pictureURL = ? WHERE tagName= '$tag' ";
    $params = array(&$thePath);
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $Daquerr=sqlsrv_prepare($conn,$Daquer,$params,$options);
    sqlsrv_execute($Daquerr);
 

            }



}

session_write_close();
?>