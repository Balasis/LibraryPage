<?php
session_start();
require_once '../CS/Cs.php';

if (!isset($_SESSION['CATEGORY']) || !isset($_SESSION['TAG']) ){
    echo 'didntwork';
}else{


$category=$_SESSION['CATEGORY'];
$tag= $_SESSION['TAG'];
$formData = file_get_contents('php://input');

    
    parse_str($formData, $formFields);

$katarew=$formFields['imageHere'];


$ext = pathinfo($katarew["imageHere"]["name"], PATHINFO_EXTENSION);
if ($katarew["imageHere"]["name"]=$tag.$ext){ 


    

  
    $targetDir = "img/".$category."/";

$target_file = $target_dir .($katarew["imageHere"]["name"]);
    move_uploaded_file($katarew["imageHere"]["tmp_name"], $target_file);



  
  if (!is_dir($targetDir)) {
    mkdir($targetDir);
  }
  
  move_uploaded_file($tmp_name, $targetDir . $file_name);
  $thePath=$targetDir.$file_name;
  echo $thePath;
  $Daquer = " UPDATE $category SET pictureURL = ? WHERE tagName= '$tag' ";
    $params = array(&$thePath);
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $Daquerr=sqlsrv_prepare($conn,$Daquer,$params,$options);
    sqlsrv_execute($Daquerr);
 

            }



}

session_write_close();
?>