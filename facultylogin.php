<?php


include 'id.php';


if(!empty($_POST['email']) && !empty($_POST['password'])):
    
    $records = $conn->prepare('SELECT id,email,password FROM adminlogin WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    $user = NULL;

  

 
    if(count($results) && ($_POST['password']== $results['password']) ){
            
        $_SESSION['user_id'] = $results['id'];
     //   
    $faculty = $conn->prepare('SELECT Faculty FROM count');
    $faculty->execute();
    $flty = $faculty->fetch(PDO::FETCH_ASSOC);
       $f=$flty['Faculty'];
        $count=intval($f+1);
        $one = 1;
        $up = $conn->prepare("UPDATE count  SET  Faculty = :fac WHERE id= :id ");
        $up->bindParam(':id', $one ,PDO::PARAM_INT);
        $up->bindParam(':fac', $count,PDO::PARAM_INT);
        $up->execute();
        //
        $message = 'Login Successfull!....';
        echo "<script> location.href='enter.php'; </script>";
    
    } else {
        $message = 'Incorrect Password!!!!!';
    }

endif;


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
  <div class="col-lg-8"></div>
  <div class="col-lg-4"style=" background: #e6e6e6; padding: 20px; border-radius: 10px;" >
    
      <h2 style="text-align:center ; ">Faculty Login</h2>
      

        <form  method="POST">
        <div class="form" >
          <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

    
<div class="form-group">
  <button type="submit" class="btn btn-primary" style="margin-bottom: 30px; margin-top: 2px;" onclick="window.location.href='enter.php'">Submit</button> 
  </div>
         </div>
       </form>
        </div>
  </div>
      
    </div>


  
</body>
</html>