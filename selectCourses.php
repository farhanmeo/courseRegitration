<?php

session_start();

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$f_name = $_SESSION['fathername'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body  style = "background-color : orange;">

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
          <a class="navbar-brand" href="index.html">DSU COURSE REGISTRATION SYSTEM</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="studentIndex.html"><i class="fa fa-dashboard"></i> Student Panel</a></li>
            <li><a href="selectCourses.php"><i class="fa fa-bar-chart-o"></i> Select Course</a></li>
            <li><a href="studentInfo.php"><i class="fa fa-table"></i> View Personal Informtion</a></li>
            <li><a href="updateStudentInformation.php"><i class="fa fa-edit"></i> Update Information</a></li>
            <li><a href="clearedCourses.php"><i class="fa fa-desktop"></i> View Clered Courses</a></li>

          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Messages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="createMessage.php">Create Message</a></li>
                <li><a href="sentBox.php">SentBox</a></li>
                <li><a href="inbox.phps">InBox</a></li>
               
              </ul>
            </li>
			
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
         
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Message <span class="badge">3</span></a>
              
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php  echo $name; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h3><?php echo $id ?> SELECT COURSES</h3>
           
            
			<div class="row">
          <div class="col-lg-6">

<form class="form-horizontal">

<div class="form-group">
<font color= "red"><?php echo @$_GET['message']?></font>
<label for="inputEmail3" class="col-sm-2 control-label">Enter Semester</label>
<div class="col-sm-10">
<input type="number" class="form-control" id = "number" name = "number" placeholder="Current Semester in Which You Come Now ">
<br>
<button type="submit" name = "submit" id = "submit" class="btn btn-default">PRESS </button>	

</div>

</div>

</div>
  
</form>          

	<div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                    
						<tr>
                    <th>Serial Number</th>
                    <th>Course Name </th>
                    <th>Course Code </th>
                    <th>Credit Hours </th>
					<th>Course Teacher</th>
					<th>Select</th>
					</tr>
 
								
								<tbody>

	<?php 


$conn = @mysql_connect("localhost" , "root" , "");
$db = mysql_select_db('cs',$conn);

$que = "select *from courses ";
$run = mysql_query($que);


while($row=mysql_fetch_array($run))
{

	$id = $row[0];
	$course_code = $row[1];
	$course_name = $row[2];
	$credit_hour = $row[3];	
	$sem = $row[4];
	


?>
		
					<tr class="active">
                    <td><?php echo $id;  ?></td>
                    <td><?php echo $course_code;  ?></td>
					<td><?php echo $course_name;  ?></td>
                    <td><?php echo $credit_hour;  ?></td>
                    <td><?php echo $sem;  ?></td>
<td> 
	<a href = "select.php?id=<?php echo $id;?>"><button type="submit" class="btn btn-default">SELECT </button>
</td>
					</tr>
<?php					
					
	}            
?>
         </div>

          </div>
        </div><!-- /.row -->

        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>



