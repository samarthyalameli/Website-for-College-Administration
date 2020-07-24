<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM studentdetails";
$result = $conn->query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">



    <link rel="stylesheet" href="indexinfo/index1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="indexinfo/events.js"></script>
  <link rel="stylesheet" href="indexinfo/index1.css">
  
    <link rel="stylesheet" href="indexinfo/events.css">

    <link rel="stylesheet" href="indexinfo/footer.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style type="text/css">
  body, html {
    background-color:#d1f0fc ;
  margin:0;
  padding: 0;
  height: 100%;
  
}

</style>

</head>
<body>


	<div class="container-fluid" style="background-color: #92defc ;">
		<div class="row" style="padding-top: 3px;">
			<div class="col-sm-2 " ><img src="education.jpg" class="rounded-circle"  style="margin: 5px;"width="90px" height="80px" alt="hanuman"  ></div>
  <div class="col-sm-10" style=" text-align: center; ">  <h1 style="margin-right: 120px;font-family:Arial, Helvetica, sans-serif; font-size: 60px;  "><b>Broda College</b></h1>
    </div>
</div></div>


<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style=" background-color:  #293d3d; ">
  <!-- Brand -->
  <a class="navbar-brand" href="#" style="color:#378ce8;  " ><b>Welcome</b><i class="fas fa-praying-hands"></i></a>

  <!-- Links -->
  <ul class="navbar-nav" style="color: white; ">
    <li class="nav-item">
      <a class="nav-link" href="faculty.php" >Faculty</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="studentlogin.php">Results</a>
    </li>
<li class="nav-item">
      <a class="nav-link" href="studentlogin.php" >Student/Parents Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="main.php" >Home</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#"  id="navbardrop" data-toggle="dropdown">
        Department
      </a>
      <div class="dropdown-menu ">
        <a class="dropdown-item" href="comp.php">Computer Science</a>
        <a class="dropdown-item" href="info.php">Information Science</a>
        <a class="dropdown-item" href="civil.php">Civil</a>
         <a class="dropdown-item" href="mech.php">Mechanical</a>
      </div>
    </li>

  </ul>
  <ul class="navbar-nav ml-auto">
<li class="nav-item" >
      <button type="button" class="btn btn-info" style="margin-right: 20px; " onclick="window.location.href='logut.php'">Logout</button>
    </li>
  </ul>
</nav>
<div class="container-fluid" style="width: 100%; height: 100%; min-height: 100%;">
  
  <div class="row" style=" height: 100%; ">
    <div class="col-sm-4 col-md-2" style="height:auto; background: #293d3d;  ">
 
<div style="  left: 0; right: 0; position:absolute;">
  <ul class="nav flex-column" style="text-align: left;   ">
  
  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link" href="#"><i class="fas fa-window-restore" style="color: brown;"></i><b style="color: #999999;"> Departments</b></a>
  </li>
  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link" href="#"><i class="fas fa-bookmark" style="color: brown;"></i><b style="color: #999999;">  Student Login</b></a>
  </li>
  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link " href="#"><i class="fas fa-check-circle" style="color: brown;"></i><b style="color: #999999;"> Faculty Login</b></a>
  </li>

  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link " href="#"><i class="fas fa-bus-alt" style="color: brown;"></i><b style="color: #999999;">  About</b></a>
  </li>
</ul>

</div>

</div>
<div class="col-sm-6 col-md-10" style="border: solid 1px;border-color: red;padding: 10px;  ">
  <h2 style="text-align: center;font-size:50px; "><b>Student Details</b></h2>
  
  <table class="table" style="border: solid 1px;">
    <thead class="thead-dark">
      <tr>
           <th>USN</th>
        <th>Subject</th>
        <th>Attendence</th>
        <th>Test1</th>
        <th>Test2</th>
        <th>Test3</th>
        <th>Average</th>
          <th>Quiz 1</th>
          <th>Quiz 2</th>
          <th>CIV</th>
      </tr>
    </thead>
    <tbody style="border: solid 1px;">
      
            <?php


if ($result->num_rows > 0) {
   
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["USN"]. "</td><td>". $row["subject"]. "</td><td>" . $row["Attendence"]. "</td><td>" . $row["test1"]. "</td><td>" 
        . $row["test2"]. "</td><td>" . $row["test3"]. "</td><td>". $row["average"]. "</td><td>"  . $row["quiz1"]. "</td><td>" . $row["quiz2"]. "</td><td>" . $row["civ"]. "</td></tr>";
    }
    
} else {
    echo "0 results";
}


?>
    </tbody>
  </table>


  </div>


</div>



  
  </div></div>



</body>
</html>