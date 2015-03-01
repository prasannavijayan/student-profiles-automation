/* Document written for the Javascript Registration */

function regischeck()
{
  if (document.forms['registration']['fname'].value=="")
  {
      alert("Fill out the Registration form");
      document.forms['registration']['fname'].focus();
      return false;
  }

  if (document.forms['registration']['rollno'].value=="")
  {
     alert("Fill the Roll no");
     document.forms['registration']['rollno'].focus();
     return false;
  }
	
  if (document.forms['registration']['rollno'].value.length < 6 || document.forms['registration']['rollno'].value.length > 7)
  {
 	alert("Enter the Valid Rollno");
	document.forms['registration']['rollno'].focus();
	return false;
  }

  if (document.forms['registration']['age'].value=="Select Age")
{
   alert("Fill the age ");
   document.forms['registration']['age'].focus();
return false;
}
 

if (document.forms['registration']['sex'].value=="Sex")
  {
     alert("Select the Sex");
     document.forms['registration']['sex'].focus();    
     return false;
  }

  var a = document.forms['registration']['passwd'].value;
  var b = document.forms['registration']['cpasswd'].value;
if (a.length<6)
{  
  alert("Type Atleast 6 Characters");
  document.forms['registration']['passwd'].focus();
  return false;
}

if (a!=b)
  {  alert("Password Mismatches");
     document.forms['registration']['passwd'].focus();
     return false;
  }
  

  var x=document.forms['registration']['email'].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {  alert("Enter the Valid Email Address");
    document.forms['registration']['email'].focus();
    return false;
 }

 
if(document.forms['registration']['counci'].value=="Choose")
{
  alert("Choose your Councillers");
  document.forms['registration']['counci'].focus();
  return false;
}} 
