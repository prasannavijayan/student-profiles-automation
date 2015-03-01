function post()
{

if (document.forms['postblog']['title'].value=="")
{
   alert("Fill the Title");
   document.forms['postblog']['title'].focus();
   return false;
}

 var a=document.forms['postblog']['blog'].value;
if (a.length <160)
{
     alert("Type Atleast 160 characters Before clicking PostBlog");
     return false;
}
if (a.length > 1000)
{
   alert("You Have exceeded the blog Limit");
   return false;
}
}
