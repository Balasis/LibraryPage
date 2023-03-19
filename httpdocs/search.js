  
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

  