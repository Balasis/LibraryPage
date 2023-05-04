


document.getElementById('descriptionChange').addEventListener('click',textareaEnable,false);



/* =======================CREATE NEW ================================*/

document.getElementById('addTagConfirm').addEventListener('click',createNewTag,false);
function createNewTag(){
  var theText=document.getElementById('newTag').value;
var theTextt=encodeURIComponent(theText);
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {     
  
    langSent(document.getElementById('ChosenCat').innerText);
    
    const tmpDiv=document.createElement('div');
    tmpDiv.classList.add('labelOfMouse');
    console.log(tmpDiv);
    document.body.appendChild(tmpDiv);
    if (this.responseText=="Created"){ tmpDiv.style.color="green";}else if(this.responseText=="The tag already exists"){ tmpDiv.style.color="orange";}
   
    tmpDiv.style.visibility='visible';
    tmpDiv.style.opacity=1;
    tmpDiv.textContent=this.responseText;
    setTimeout(()=>{tmpDiv.style.visibility='hidden';tmpDiv.style.opacity=0},1000); 

   

    setTimeout(()=>{document.getElementById(theText).click();},200); 
   }
  }


  
xmlhttp.open("GET", "createNewTag?q=" + theTextt, true);
xmlhttp.send();

};


/* =================================================================*/


/* =======================DELETE ================================*/

document.getElementById('deleteChange').addEventListener('click',deleteTag,false);
function deleteTag(){
var daLabelNow=document.getElementById('TagLabel').innerText;
if (daLabelNow=="General"){
  alert('you need to choose a tag');
  return;
}else{
  

var confirmDel= confirm("Delete " +daLabelNow +" ?");
if (confirmDel == true){
  var theText=document.getElementById('TagLabel').innerText;
  console.log("parentNode:", document.getElementById(theText).parentNode);
  console.log("prevSibling:", document.getElementById(theText).parentNode.previousElementSibling);
  console.log("nextSibling:", document.getElementById(theText).parentNode.nextElementSibling);


  if ((document.getElementById(theText).parentNode.previousElementSibling) && (document.getElementById(theText).parentNode.previousElementSibling.id!=="ChosenCat")){
  
  var findUpperLi=document.getElementById(theText).parentNode.previousElementSibling.children[0].id;
}else if(document.getElementById(theText).parentNode.nextElementSibling){
 
  var findUpperLi=document.getElementById(theText).parentNode.nextElementSibling.children[0].id;
}else{

}
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {     
      langSent(document.getElementById('ChosenCat').innerText);
      if( document.getElementById(findUpperLi)){
      document.getElementById(findUpperLi).click();}
    }
  };  
  xmlhttp.open("GET", "deleteTag?q=yes", true);
  xmlhttp.send();
  
  
} else{
 
  return;
}
}

}


/* =================================================================*/


window.onload=function(){
  
  document.getElementById('newTag').addEventListener('focus',function(){
    document.getElementById('arrowsHolder').style.left="0em";
            document.getElementById('addTagTools').style.width="12em";
            document.getElementById('newTag').style.visibility="visible";
            document.getElementById('addTagChange').style.visibility="visible";
            document.getElementById('addTagChange').style.width="auto";
            document.getElementById('addTagToolsArrow').style.visibility="hidden";
            document.getElementById('addTagConfirm').style.visibility="visible";
            document.getElementById('addTagConfirm').style.width="auto";
    } 
  )
  
  document.getElementById('newTag').addEventListener('blur',function(){
  
    document.getElementById('arrowsHolder').style.left="";
    document.getElementById('addTagTools').style.width="";
    document.getElementById('newTag').style.visibility="";
    document.getElementById('addTagChange').style.visibility="";
    document.getElementById('addTagChange').style.width="";
    document.getElementById('addTagToolsArrow').style.visibility="";
    document.getElementById('addTagConfirm').style.visibility="";
    document.getElementById('addTagConfirm').style.width="";

    }
  )




  document.getElementById('fileToUpload').addEventListener('change',function(){

   var imageHere= document.getElementById('fileToUpload').files[0];
   
    var formData = new FormData();
  formData.append("imageHere", imageHere);
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "pictureURL"); 
  xhr.onload = function() {
    if (xhr.status == 200) {
        console.log(this.response);
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
        
        if (document.getElementsByClassName('listLi')[0]){
        document.getElementsByClassName('listLi')[0].parentNode.style.borderTop="none";
      }
      }
    };
    
  
    xmlhttp.open("GET", "listReq?q=" + get, true);
    xmlhttp.send();
    
  }

  function searchThis(text){
     
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

  document.getElementById('TagLabel').innerText=get;
  


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(get) {
    
      if (this.readyState == 4 && this.status == 200) {
        
        document.getElementById('descriptionTextarea').value=this.responseText;
        focusedTag();
      }
    };
    
    
    xmlhttp.open("GET", "codeInfo?q=" + encodeURIComponent(get), true);
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
    
    console.log("Entry Point: "+info);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(info) {  
      if (this.readyState == 4 && this.status == 200) {
      
        document.getElementById('descriptionTextarea').value=this.responseText;
    };  
  }
    encInfo=encodeURIComponent(info);
    console.log('enCodedInfo: '+encInfo);
    xmlhttp.open("GET", "basicInfo?q=" + encInfo, true);
    xmlhttp.send();


  
}



/* keeping the newTag input visible while focused */

function focusedTag(){
const findAllLi=document.getElementsByClassName('listLi');
for (i=0;i<findAllLi.length;i++){
  
   if (findAllLi[i].innerText==document.getElementById('TagLabel').innerText){
    findAllLi[i].parentNode.style.backgroundColor="green";
   }else{
    findAllLi[i].parentNode.style.backgroundColor="";
   }
}
}