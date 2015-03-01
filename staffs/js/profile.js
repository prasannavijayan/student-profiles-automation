
function profile()
{
  
if (document.forms['profile']['pname'].value=="")
     {
        alert("Enter Parent's/Guardinan Name");
        document.forms['profile']['pname'].focus();
        return false;
     }

 var reg=document.forms['profile']['regnumber'].value;
   if (reg=="")
     {
        alert("Enter Your register Number ");
        document.forms['profile']['regnumber'].focus();
        return false;
     } 
   if(reg.length<11)
   {
        alert("Enter Your Valid register Number ");
        document.forms['profile']['regnumber'].focus();
        return false;
     } 
   if (document.forms['profile']['raddress'].value=="")
     {
        alert("Enter Your Residential Address");
        document.forms['profile']['raddress'].focus();
        return false;
     }
if (document.forms['profile']['rpincode'].value=="")
     {
        alert("Enter Pincode ");
        document.forms['profile']['rpincode'].focus();
        return false;
     }
if (document.forms['profile']['rphoneno'].value=="")
     {
        alert("Enter Your Phone No ");
        document.forms['profile']['rphoneno'].focus();
        return false;
     }
 
  var x=document.forms['profile']['yemailid'].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 {  alert("Enter the Valid Email Address");
    document.forms['profile']['yemailid'].focus();
    return false;
 }

if (document.forms["profile"]["date"].value=="DD")
  {
   alert("Enter Birth date");
   document.forms["profile"]["date"].focus();
  return false;
  } 
if (document.forms["profile"]["month"].value=="MM")
  {
   alert("Enter Birth Month");
   document.forms["profile"]["month"].focus();
  return false;
  } 
if (document.forms["profile"]["year"].value=="YYYY")
  {
   alert("Enter Birth year");
   document.forms["profile"]["year"].focus();
  return false;
  } 
  if (document.forms["profile"]["sex"].value=="Sex")
  {
   alert("Enter Your Sex");
   document.forms["profile"]["sex"].focus();
  return false;
  }
 
if (document.forms["profile"]["ayear"].value=="YYYY")
  {
   alert("Enter your Admission year");
   document.forms["profile"]["ayear"].focus();
  return false;
  } 

if (document.forms["profile"]["lyear"].value=="YYYY")
  {
   alert("Enter your Admission year");
   document.forms["profile"]["lyear"].focus();
  return false;
  } 
if (document.forms["profile"]["high"].value=="")
  {
   alert("Enter your Height");
   document.forms["profile"]["high"].focus();
  return false;
  } 
if (document.forms["profile"]["weight"].value=="")
  {
   alert("Enter your Weight");
   document.forms["profile"]["weight"].focus();
  return false;
  } 

if (document.forms["profile"]["type"].value=="Blood Group")
  {
   alert("Enter your Blood Type ");
   document.forms["profile"]["type"].focus();
  return false;
  } 
if (document.forms["profile"]["mat"].value=="")
  {
   alert("Enter your Maths Marks ");
   document.forms["profile"]["mat"].focus();
  return false;
  } 
if (document.forms["profile"]["phy"].value=="")
  {
   alert("Enter your Physics marks");
   document.forms["profile"]["phy"].focus();
  return false;
  } 
if (document.forms["profile"]["che"].value=="")
  {
   alert("Enter your Chemistry Marks");
   document.forms["profile"]["che"].focus();
  return false;
  } 
if (document.forms["profile"]["tm"].value=="")
  {
   alert("Enter your Total Marks");
   document.forms["profile"]["tm"].focus();
   return false;
  }
if (document.forms["profile"]["idm"].value=="")
  {
   alert("Enter your Identification Marks");
   document.forms["profile"]["idm"].focus();
   return false;
  }
if (document.forms["profile"]["occu"].value=="")
  {
   alert("Enter your Father's/Guardian Occupation ");
   document.forms["profile"]["occu"].focus();
   return false;
  }
if (document.forms["profile"]["oadd"].value=="")
  {
   alert("Enter your Father's/Guardian Office Address");
   document.forms["profile"]["oadd"].focus();
   return false;
  }
if (document.forms["profile"]["opin"].value=="")
  {
   alert("Enter Office Pincode");
   document.forms["profile"]["opin"].focus();
   return false;
  }
if (document.forms["profile"]["ophone"].value=="")
  {
   alert("Enter office phone No");
   document.forms["profile"]["ophone"].focus();
   return false;
  }

if (document.forms["profile"]["eadd"].value=="")
  {
   alert("Enter emergency contact Address");
   document.forms["profile"]["eadd"].focus();
   return false;
  }
if (document.forms["profile"]["ephone"].value=="")
  {
   alert("Enter Emergency contact phone No");
   document.forms["profile"]["ephone"].focus();
   return false;
  }
if (document.forms["profile"]["std"].value=="")
  {
   alert("Enter Your Standard");
   document.forms["profile"]["std"].focus();
   return false;
  }
if (document.forms["profile"]["may"].value=="")
  {
   alert("Enter month and year of leaving");
   document.forms["profile"]["may"].focus();
   return false;
  }
if (document.forms["profile"]["nas"].value=="")
  {
   alert("Enter Name of the Institution");
   document.forms["profile"]["nas"].focus();
   return false;
  }
if (document.forms["profile"]["pm"].value=="")
  {
   alert("Enter percentage of marks");
   document.forms["profile"]["pm"].focus();
   return false;
  }


if (document.forms["profile"]["coun"].value=="Choose")
  {
   alert("Choose your Counseller");
   document.forms["profile"]["coun"].focus();
   return false;
  }
}
