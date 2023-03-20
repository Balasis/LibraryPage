  
  var langs = document.getElementsByClassName("lang");
  for (var i = 0; i < langs.length; i++) {
    
    langs[i].addEventListener('click', function(){langSent(this.innerHTML)
  }, false);
    
}


function langSent(get) {
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        var escaping=this.responseText;/*Did it through php but nvm let it be*/
        document.getElementById("ulsList").innerHTML = escaping;
      }
    };
    
  
    xmlhttp.open("GET", "listReq?q=" + get, true);
    xmlhttp.send();
  }


  
  
 
  setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg2.png)";},20000);
  setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg4.png)";},40000);
  setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg3.jpeg)";},60000);
  setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg.jpg)";},80000);

  
  setInterval(function(){
  
   
    setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg2.png)";},20000);
    setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg4.png)";},40000);
    setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg3.jpeg)";},60000);
    setTimeout(function(){document.getElementsByTagName('main')[0].style.backgroundImage="url(/img/bg.jpg)";},80000);
    
   
        

       
    
  },100000);
  