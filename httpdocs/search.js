  
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
        document.getElementById("ulsList").innerHTML = this.responseText;
      }
    };
    
    console.log(get);
    xmlhttp.open("GET", "listReq?q=" + get, true);
    xmlhttp.send();
  }

  