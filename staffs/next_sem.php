<?php

$sem = $_POST['semester'];

include('database/config.php');

$query = mysql_query("SELECT * FROM subb where semester='$sem'");

while($row = mysql_fetch_array($query))
{
 $form = <<<EOD
<input type=hidden value=$sem name=semester>
   <table><tr>
<th>sl.no</th><th>subject name</th><th>Enter Grade</th>

</tr>

<tr>

<td>1</td>
<td>{$row['subone']}</td>
<td><select id="sem1" name="sem1">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>


</tr>

<tr>

<td>2</td>
<td>{$row['subtwo']}</td>
<td><select id="sem2" name="sem2">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>

</tr>

<tr>

<td>3</td>
<td>{$row['subthree']}</td>
<td><select id="sem3" name="sem3">			<option>Grade</option>		<option>S</option><option>A</option>
                   		        <option>B</option>
					<option>C</option>
					<option>D</option> 
					<option>E</option>
					<option>RA</option></select> </td>


</tr>
EOD;
echo  $form;
if($row['subfour'] != NULL)
{
echo "<tr><td>4</td><td>{$row['subfour']}</td><td><select id='sem4' name='sem4'><option>Grade</option><option>S</option><option>A</option>		        <option>B</option><option>C</option><option>D</option><option>E</option><option>RA</option></select> </td></tr>";
}


if($row['subfive'] != NULL)
{
echo "<tr><td>5</td><td>{$row['subfive']}</td><td><select id='sem5' name='sem5'><option>Grade</option><option>S</option><option>A</option><option>B</option><option>C</option><option>D</option><option>E</option><option>RA</option></select> </td></tr>";
}

if($row['subsix'] != NULL)
{
echo "<tr><td>6</td><td>{$row['subsix']}</td><td><select id='sem6' name='sem6'><option>Grade</option><option>S</option><option>A</option>                         <option>B</option><option>C</option><option>D</option><option>E</option><option>RA</option></select> </td></tr>";
}

if($row['subseven'] != NULL)
{
echo "<tr><td>7</td><td>{$row['subseven']}</td><td><select id='sem7' name='sem7'><option>Grade</option><option>S</option><option>A</option>                   		        <option>B</option>					<option>C</option>					<option>D</option> 					<option>E</option>					<option>RA</option></select> </td></tr>";
}

if($row['subeight'] !=NULL)
{
echo "<tr><td>8</td><td>{$row['subeight']}</td><td><select id='sem8' name='sem8'><option>Grade</option><option>S</option><option>A</option>                   		        <option>B</option><option>C</option>	<option>D</option> 	<option>E</option>	<option>RA</option></select> </td></tr>";
}





if($row['subnine'] != NULL) {
echo "<tr><td>9</td><td>{$row['subnine']}</td><td><select name=sem9><option>Grade</option><option>S</option><option>A</option><option>B</option><option>C</option><option>D</option><option>E</option><option>RA</option></td></tr>"; 
echo "<tr><td></td><td></td><td><button onclick=update();>Update</button></td></tr></table>"; }
else
echo "<tr><td></td><td></td><td><button onclick=update(); class='btn btn-primary'>Update</button></td></tr></table>";

}
?>
