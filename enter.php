<?php
require 'test4.php';

include 'upload1.php';
include 'id1.php';

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
  
    <link rel="stylesheet" href="indexinfo/events.css">

    <link rel="stylesheet" href="indexinfo/footer.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style type="text/css">
  body, html {
    background-color:#d1f0fc ;

  height: 100%;
  
}

</style>
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>

<?php if(!empty($message)): ?>
    <div class="modal" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
    
        
        <!-- Modal body -->
        <div class="modal-body" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal">&times;</button><br>
       <p><?= $message ?><br></p>
        </div>
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
        
    <?php endif; ?>

  <div class="container-fluid" style="background-color: #92defc ;">
    <div class="row">
      <div class="col-sm-2 " ><img src="education.jpg" class="rounded-circle"  style="margin: 5px;"width="80px" height="70px" alt="hanuman"  ></div>
  <div class="col-sm-10" style=" text-align: center; ">  <h1 style="margin-right: 120px;font-family:Arial, Helvetica, sans-serif; font-size: 60px;  "><b>Broda University</b></h1>
    </div>
</div></div>


<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="padding-top: 0; padding-bottom: 0; background-color:  #293d3d; ">
  <!-- Brand -->
  <a class="navbar-brand" href="#" style="color:#378ce8; font-size:20px; " >
      <b>Welcome</b><i class="fas fa-praying-hands"></i></a>

  <!-- Links -->
  <ul class="navbar-nav" style="font-size:20px;color: white; ">
    
    <li class="nav-item">
      <a class="nav-link" href="main.php" >Home</a>
    </li>
    <!-- Dropdown -->
    
  </ul>
  <ul class="navbar-nav ml-auto">

    <li class="nav-item" >
      <button type="button" class="btn btn-info" style="margin-right: 20px; " onclick="window.location.href='logut.php'">LogOut</button>
    </li>
  </ul>
</nav>
<br>
 <div class="container-fluid"  >
<div class="row" style=" width: 100%;" >
  <div class="col-lg-2"></div>
  <div class="col-lg-8"style=" background: #e6e6e6; padding: 20px; border-radius: 10px;" >
    
      <h2 style="text-align:center ; ">Enter Student Details</h2>
      

        <form action="enter.php" method="POST">
        <div class="form" >
          <div class="form-group">
    <label for="USN">Student USN</label>
    <input type="text" class="form-control" name="usn" placeholder="Enter USN">
  </div>
    <label for="USN">Enter Subject</label>
    <div class="col-auto my-1">
     <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="subject" >
        <option selected style="font-family: 'Lato', font-weight: 900;">Select Subject</option>
        <option value="OOMD">OOMD</option>
        <option value="Computer Graphics">Computer Graphics</option>
        <option value="Compiler Design">Compiler Design</option>
        <option value="Software Design Lab">Software Design Lab</option>
        <option value="Computer Graphics Lab">Computer Graphics Lab</option>
        </select>
    </div>
   
    
          <div class="form-group">
    <label for="attendence1">Enter Attendence</label>
    <input type="text" class="form-control" name="attendence" aria-describedby="emailHelp" placeholder="Enter Attendence in Percentage">
    <small id="emailHelp" class="form-text text-muted">Attendence till now</small>
  </div>
  <div class="form-group">
    <label for="test1">Test 1 Report</label>
    <input type="text" class="form-control" name="test1" placeholder="Test marks in numbers">
  </div>
  <div class="form-group">
    <label for="test2">Test 2 Report</label>
    <input type="text" class="form-control" name="test2" placeholder="Test marks in numbers">
  </div>
  <div class="form-group">
    <label for="test3">Test 3 Report</label>
    <input type="text" class="form-control" name="test3" placeholder="Test marks in numbers">
  </div>
  <div class="form-group">
    <label for="average">Quiz 1</label>
    <input type="text" class="form-control" name="Quiz1" placeholder="Quiz marks out of 5">
  </div>
<div class="form-group">
    <label for="average">Quiz 2</label>
    <input type="text" class="form-control" name="Quiz2" placeholder="Quiz marks out of 5">
  </div>
    
<div class="form-group">
  <button type="submit" class="btn btn-primary" style="margin-bottom: 30px; margin-top: 2px;" data-toggle="modal" data-target="#myModal">Submit</button> 
  <button type="button" class="btn btn-info" style="margin-bottom: 30px; margin-top: 2px;" onclick="window.location.href='facultydetails.php'">Student Details</button>
  </div>
         </div>
       </form>
        </div>
  </div>
      
    </div>


  
</body>
</html>