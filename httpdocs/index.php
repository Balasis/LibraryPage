<?php 
session_start();


?>

<!DOCTYPE html>
<html>

<head>
    <style>	</style>
<title>My Code Library</title>
<link rel="stylesheet" href="simple.css" type="text/css"/>
<link rel="icon" href="img/github.png" type="image/icon type">
<meta name="author" content="John Balasis" />
<meta name="viewport" content="width=device-width , initial-scale=1"/>

<meta http-equiv="refresh" content="9000"/>
<meta charset="UTF-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>





<body>
    <main>
<div id="masterBox">
    <div id="light"></div>
    <div id="upperSearch"><?php       include_once "categories.php";     ?>   </div>        
    
    <div id="lowerSearch">
                 
    
                <div id="optionTab">
                        <div id="search">
                                     <input id='searching' type="text"  placeholder="Search" maxlength="14" onkeyup="searchThis(this.value);"/>
                         </div>
                        <div id="list">
                            <ul id="ulsList"></ul>
                        </div>
                 </div>

                     <div id="viewTab">



                            <div id="description">
                                <div id="TagLabel">General</div>
        <div id="arrowsHolder">

        <div id="addTagTools">                                    
        <div id="addTagChange" title="add a tag"><input id='newTag' type="text"></div>
        <div id="addTagConfirm"> &#10004;</div>
        <div id="addTagToolsArrow">&#8614;</div>   
     </div>



    <div id="descriptionTools">                                    
        <div id="descriptionChange">&#9997;</div>
        <div id="descriptionConfirm"> &#10004;</div>
        <div id="descriptionToolsArrow">&#8614;</div>   
     </div>

     <div id="deleteTools">                                    
        <div id="deleteChange">Delete tag</div>
        
        <div id="deleteToolsArrow">&#8614;</div>   
     </div>

</div>



    <textarea id="descriptionTextarea" readonly>                          Welcome to your Private Local Code Library :D</textarea>
                                </div>
                                <button id='hideOrShowPic'>Hide</button>
                            <div id="pictures">
        
       <label id='Dalabel' for="fileToUpload">&#9997;</label>                    
  <input type="file" id="fileToUpload" name="fileToUpload">

 


                            </div>
                    </div>

    </div>    


</div>




</main>
<script src="search.js"></script>
</body>



</html>
