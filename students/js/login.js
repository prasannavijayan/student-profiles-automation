/* Login Javascript */

function staffcheck()
{

if (document.forms['stafflogin']['staffname'].value=="")
   {
         alert("Invalid Staff Username or password");
         document.forms['stafflogin']['staffname'].focus();
         return false;
   }
if (document.forms['stafflogin']['staffpasswd'].value=="")
   { 
         alert("Invalid Staff Username or password");
         document.forms['stafflogin']['staffpasswd'].focus();
         return false;   
   }
}

function studentcheck()
{
if (document.forms['studentlogin']['roll_no'].value=="")
   {
         alert("Invalid student Username or password");
         document.forms['studentlogin']['roll_no'].focus();
         return false;
   }
if (document.forms['studentlogin']['stu_passwd'].value=="")
   { 
         alert("Invalid student Username or password");
         document.forms['studentlogin']['stu_passwd'].focus();
         return false;   
   }
}
  
