function ob()
{
  var xhro;
 if(window.XMLHttpRequest)
  {
     xhro = new XMLHttpRequest(); 
  }
  else
  {
     xhro = new ActiveXObject("Microsoft.XMLHTTP");
  }
}
var xmlhttp = ob();
var nocache = 0;
function login()
{
    document.getElementById("log_res").innerHTML = html("<img src=ajax-loader.gif> . Loading. ." );
  
   var rollno = encodeURI(document.getElementById("srollno").value);
   var passwd = encodeURI(document.getElementById("spasswd").value);

   nocache = Math.random();
 
  xmlhttp.open("get", 'login.php?rollno='+rollno+'&password='+passwd+'nocache='+nocache);
 
  xmlhttp.onreadystatechange = loginresult;
  xmlhttp.send(null);
 
}

function loginresult()
{
if(xmlhttp.readyState == 4 && xmlhttp.status == 200)

 var response = xmlhttp.responseText;

  if(response == 0)
 {          document.getElementById("log_res").innerHTML = html("<font color=red> Login Failed</font>");   }

}
    
 
