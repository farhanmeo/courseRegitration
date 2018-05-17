<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blank Page - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body style = "background-color : orange;">

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"> COURSE REGISTRATION SYSTEM</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
              </nav>

      <div id="page-wrapper">
  
            <h1  class="text-left" > COURSE REGISTRATION SYSTEM LOGIN</h1>
	 <br><br><br><br><br>
	 <div class="col-lg-8">

<form class="form-horizontal" method="post" >
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" 	name = "id" id="id" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3"  class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">



<button type="submit" name = "submit" class="btn btn-default">SIGN IN </button>
<a href="registration.html" class="btn btn-default" role="button">SIGN UP</a>
    </div>
  </div>
</form>          

		  </div>
          
     
     

      </div><!-- /#page-wrapper -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>

<?php
class paLogin
{
	private $pa_password;
	private $pa_id;
	private $s_name;
	
public 	function paLogin() 
	{

		echo "cosnstructor : ";
	}	
	
public function connection()
	{

	
	$conn = @mysql_connect("localhost" , "root" , "");
	$db = mysql_select_db('cs',$conn);

$que = "select *from persons";
$run = mysql_query($que);




if (isset ($_POST['submit'])) {

	$student_id = $_POST["id"];
	$student_password = $_POST["password"];
	

	if($student_id== ""){
	echo "<script>window.open('login.php?id=ID','_self')
	</script>";
	exit();
}
  
  if($student_password == ""){
	echo "<script>window.open('login.php?pass=Password','_self')
	</script>";
	exit();
}


while($row=mysql_fetch_array($run))
{

	$s_id = $row[0];
	$s_password = $row[1];
	$s_name = $row[2];
	$f_name = $row[3];
	$personType = $row[6];
	$fallSpring = $row[9];
		
	
	if ($s_id == $student_id && $s_password == $student_password)
	{
	echo $s_name," you are now LOGIN";

	if($personType==="student")
	{
	
		session_start();
		$_SESSION['name'] = $s_name;
		$_SESSION['id'] = $s_id;		
		$_SESSION['fathername'] = $f_name;
		header("Location: studentIndex.php"); 
		exit;
	
	}
	else if ($personType == "pa")
	{
	session_start();
	$_SESSION['name'] = $s_name;
	$_SESSION['id'] = $s_id;
	$_SESSION['fathername'] = $f_name;	
	
	header("Location: paIndex.php"); 
    exit;

	}
	else if ($personType == "advisor")
	{
	session_start();
	$_SESSION['name'] = $s_name;
	$_SESSION['id'] = $s_id;
	$_SESSION['fathername'] = $f_name;
	$_SESSION['fallSpring'] = $fallSpring;
	
	header("Location: advisorIndex.php"); 
    exit;

	
	
	}
	else {
	//echo	" NOTFIND<br>";
	}
	
}
	}	

}

	}
}

$herbie1 = new paLogin();
$herbie1->connection();

 
?>

