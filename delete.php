<?php 

$conn = @mysql_connect("localhost" , "root" , "");
$db = mysql_select_db("courseregistrationsystem" , $conn);

$delete_record = $_GET['edit'];

$query = "delete from student where student_id='$delete_record'";

if(mysql_query($query)){
	
	echo "<script>window.open('view.php?deleted=Record Has been Deleted','_self')
	</script>";
	exit();
}


?>