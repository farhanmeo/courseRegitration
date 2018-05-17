

<html>
<head></head>

<body>
<font color= "red"><?php echo @$_GET['deleted']?></font>
<form method = 'post' action = 'student_course_pdf.php'>

<table width = '500' border = '3' align = "center">
<tr >
<td align = "right">VIEW PDF: </td>
<td><input type = "submit" name = "PDF">
</td>
</tr>
<tr align = "">
<th  bgcolor = "maroon" colspan = "7" >VIEW ALL RECORDS</th>
</tr>

<tr align = "center">

<th>Serial Number</th>
<th>COURSE CODE</th>
<th>COURSE NAME</th>


</tr>

<tr align = "center">
<?php 

$conn = @mysql_connect("localhost" , "root" , "");
$db = mysql_select_db('students',$conn);

$que = "select *from course ";
$run = mysql_query($que);
$i = 1;




while($row=mysql_fetch_array($run))
{

	$u_id = $row[0];
	$u_name = $row[1];
	$u_father = $row[2];
//	$u_roll = $row[4];	
	


?>

<td align = "center"><?php echo $i; $i++ ?></td>
<td align = "center"><?php echo $u_name; ?></td>
<td align = "center"><?php echo $u_father; ?></td>


</tr>
<?php } ?>
</table>
</form>

</body>
</html>
