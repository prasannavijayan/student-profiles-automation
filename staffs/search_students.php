<?php include('hme.php'); ?>
<script type=text/javascript src=js/jquery.js ></script>
<script>
function show_res()
{ 
  department = $("#sdept").val();
  sex = $("#sg").val();
  year = $("#ayear").val();
  if(($.trim(department) == "Dept") || ($.trim(sex) == "Sex") || ($.trim(year) == "Year"))  {
           $(".show_error").html("Select the Fields to Sort the students");
            return false;
             }
          cred = {}
          cred['department'] = department;
          cred['sex'] = sex;
          cred['year'] = year;
            $('.show_info').html('<img src=images/ajax-loader.gif width=20 >');
          $.get("students_details_ret.php", cred, function(data) {
                 
                     $(".show_info").html(data);
                     $(".show_error").hide();
                 
  });
 

}


</script>
<div id=chome>Student Details <br>
<form action=" " method=post name="" onsubmit="return false">
Dept <select name=sdept id=sdept >
         <option>Dept</option>
         <option>IT</option>
         <option>CSE</option>
         <option>EIE</option>
         </select>
Sex <select name=sage  id=sg >
       <option>Sex</option>
       <option>Male</option>
       <option>Female</option>
        </select>
Year <select name=syear id=ayear>
         <option>Year</option>
         <?php 
          for($i=2000;$i<2050;$i++)
          echo "<option>" . $i . "</option>";
          ?>
          </select>  
<input type=submit value=Show onclick="return show_res();" class="btn btn-success" />
<div class=show_error > </div><div class=show_info> </div>
</form>

</div>

