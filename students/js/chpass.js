function passcheck()
{

var x=document.forms['chpass']['oldpasswd'].value;


if (x=="")
{
   alert("Type the Old Password");
  document.forms['chpass']['oldpasswd'].focus();
  return false;
}
if(x.length<6)
{
  alert("Your Password Must be atleast 6 characters");
document.forms['chpass']['oldpasswd'].focus();
  return false;
}
var a=document.forms['chpass']['newpasswd'].value;
var b=document.forms['chpass']['rtnpasswd'].value;

if (a=="" )
{
   alert("Type The New password");
  document.forms['chpass']['newpasswd'].focus();
 return false;
}

if(b=="")
{
   alert("Re-type The New password");
  document.forms['chpass']['newpasswd'].focus();
 return false;
}
if(x==a)
{
 alert("Old password is same as new one");
 document.forms['chpass']['oldpasswd'].focus();
return false;


}
if(a.length<=5)
{
   alert("Contains less than 5 characters");
   document.forms['chpass']['newpasswd'].focus();
  return false;
}
if (a!=b)
{
   alert("Mismatch Password");
  document.forms['chpass']['newpasswd'].focus();
  return false;
}


}
