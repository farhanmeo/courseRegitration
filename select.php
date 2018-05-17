<?php 
$count=0;



session_start();

$studentId = $_SESSION['id'];
echo "The Id Id ",$studentId;
$name = $_SESSION['name'];
$f_name = $_SESSION['fathername'];


$conn = @mysql_connect("localhost" , "root" , "");
$db = mysql_select_db("cs" , $conn);

$id = $_GET['id'];



$que = "select *from courses where id = '$id' ";
$run = mysql_query($que);

while($row=mysql_fetch_array($run))
{

	$id = $row[0];
	$course_code = $row[1];
	$course_name = $row[2];
	$credit_hour = $row[3];	
	$sem = $row[4];
	$preReq = $row[5];
	$preReq1 = $row[6];
//	$preReq2 = $row[7];
//	$preReq3 = $row[8];
	
	
	
echo $course_code;echo "<br>";
echo $course_name;echo "<br>";
echo $credit_hour;echo "<br>";
echo $sem ;echo "<br>";
echo "The Pre Course Is", $preReq;	
	echo "<br>";
}


$que2 = "select *from cleared_courses where stud_id = '$studentId'";
$run1 = mysql_query($que2);
//$run2 = mysql_query($que2);




$i =0;
$sum =0;

if($preReq1==null){
echo "We are in 0 <br><br>";
while($row1=mysql_fetch_array($run1))
{

	$course = $row1[2];
echo $course;
echo "<br>";
	if($course==$preReq)
{
echo "course Added";
$i = 1;
}
	
}

}


else if($preReq1!=null)
{
$a = $b =0 ;


$array= array(50);
$row1;
	$j=0;
while($row1=mysql_fetch_array($run1))
{
	$array[$j] = $row1[2];
	echo "<br>array : ",$array[$j],"<br>";	
	$j++;
} 

for($var = 0 ; $var < sizeOf($array) ; ++$var)
{
if($preReq==$array[$var])
{
$a++;	
}
	
}

for($var = 0 ; $var < sizeOf($array) ; ++$var)
{
if($preReq1==$array[$var]){
$b++;	
}
	
}
$sum = $a+$b;
echo $sum;
}






if($i==1 || $sum==2 ){
		
	$que1 = "INSERT INTO curent_courses
		(course_code , course_title , credit_hour , stud_id)
		VALUES('$course_code','$course_name','$credit_hour','$studentId')";

$run = mysql_query($que1);

	
	
}
else {
	echo "<br>Kinldy Clear Privious Courses";
echo "<script>window.open('select.php?message=Record Has been Added','_self')
	</script>";
	}


?>

