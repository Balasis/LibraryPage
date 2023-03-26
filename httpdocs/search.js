  
document.getElementById('descriptionChange').addEventListener('click',textareaEnable,false);

window.onload=function(){
  
  document.getElementById('fileToUpload').addEventListener('change',function(){

   var imageHere= document.getElementById('fileToUpload').files[0];
   console.log(imageHere);
    var formData = new FormData();
  formData.append("imageHere", imageHere);
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "pictureURL"); 
  xhr.onload = function() {
    if (xhr.status == 200) {
   
      document.getElementById('pictures').style.backgroundImage="url('"+this.responseText+"')";

    } else {
      alert("Error: " + xhr.status);
    }
  };

  
  xhr.send(formData);
  
})
}

var langs = document.getElementsByClassName("lang");
for (var i = 0; i < langs.length; i++) {
  
  langs[i].addEventListener('click', function(){langSent(this.innerHTML)
}, false);
  
}




function textareaEnable(){
  if (document.getElementById('descriptionTextarea').hasAttribute('readonly')){
    document.getElementById('descriptionTextarea').removeAttribute('readonly');
  }else{

    document.getElementById('descriptionTextarea').setAttribute('readonly','readonly');
  };
 
}








function langSent(get) {
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
    
        var escaping=this.responseText;/*Did it through php but nvm let it be*/
       
        document.getElementById("ulsList").innerHTML = escaping;
        document.getElementsByClassName('listLi')[0].parentNode.style.borderTop="none";
        
      }
    };
    
  
    xmlhttp.open("GET", "listReq?q=" + get, true);
    xmlhttp.send();
    
  }

  function searchThis(text){
      console.log(text);
      const CurLi=document.getElementsByClassName('listLi');
      for (let u=0; u < CurLi.length ;u++) {
     
       let research= CurLi[u].innerText.search(new RegExp(text, "i"));
      
      
       if (research=='-1'){CurLi[u].parentNode.style.display='none';}
       else {CurLi[u].parentNode.style.display='flex';};
      }
  };
  //damn I am so lazy to add comments right now since this is just for personal use
 
 
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
  

 


function getCodeInfo(get) {
    


  let category=document.getElementById('ChosenCat').innerText;



    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(get) {
    
      if (this.readyState == 4 && this.status == 200) {
      
        document.getElementById('descriptionTextarea').value=this.responseText;
      }
    };
    
    
    xmlhttp.open("GET", "codeInfo?q=" + get, true);
    xmlhttp.send();
    
  }
  
function getCodePic(get) {
      var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(get) {  
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('pictures').style.backgroundImage="url('"+this.responseText+"')";
    }
  };  
  xmlhttp.open("GET", "codePic?q=" + get, true);
  xmlhttp.send();
    
  }


  document.getElementById('descriptionConfirm').addEventListener('click',
    function(){basicInfo(document.getElementById('descriptionTextarea').value)},false);

  // AJAX for change/add the basicInfo of a tag
  function basicInfo(info){
    
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(info) {  
      if (this.readyState == 4 && this.status == 200) {
      
        document.getElementById('descriptionTextarea').value=this.responseText;
    };  
  }
    xmlhttp.open("GET", "basicInfo?q=" + info, true);
    xmlhttp.send();


  
}



