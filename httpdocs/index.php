

<!DOCTYPE html>
<html>

<head>
    <style>	</style>
<title>My Code Library</title>
<link rel="stylesheet" href="simple.css" type="text/css"/>
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
                                     <input id='searching' type="text"  placeholder="Search" maxlength="10" onkeyup="searchThis(this.value)"/>
                         </div>
                        <div id="list">
                            <ul id="ulsList"></ul>
                        </div>
                 </div>

                     <div id="viewTab">
                            <div id="description"></div>
                            <div id="pictures"></div>
                    </div>

    </div>    


</div>




</main>
<script src="search.js"></script>
</body>
</html>
