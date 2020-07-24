<?php
require 'id.php';
require 'test4.php';

    
    $faculty = $conn->prepare('SELECT Faculty FROM count');
    $faculty->execute();
    $flty = $faculty->fetch(PDO::FETCH_ASSOC);
    $student = $conn->prepare('SELECT Student FROM count');
    $student->execute();
    $std = $student->fetch(PDO::FETCH_ASSOC);
    $message = '';
    $f=$flty['Faculty'];
    $s=$std['Student'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">



    <link rel="stylesheet" href="indexinfo/index1.css">
  <script src="js/jquery.js"></script>
  <script src="js/popper.js"></script>
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
      <a class="nav-link" href="faculty.php" >Facilities</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="studentlogin.php">Results</a>
    </li>
<li class="nav-item">
      <a class="nav-link" href="studentlogin.php" >Student/Parents Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="faculty.php" >About</a>
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
    <a class="nav-link" href="main.php"><i class="fas fa-window-restore" style="color: brown;"></i><b style="color: #999999;"> Departments</b></a>
  </li>
  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link" href="studentlogin.php"><i class="fas fa-bookmark" style="color: brown;"></i><b style="color: #999999;">  Student Login</b></a>
  </li>
  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link " href="facultylogin.php"><i class="fas fa-check-circle" style="color: brown;"></i><b style="color: #999999;"> Faculty Login</b></a>
  </li>

  <li class="nav-item" style="padding: 7px 10px;">
    <a class="nav-link " href="faculty.php"><i class="fas fa-bus-alt" style="color: brown;"></i><b style="color: #999999;">  About</b></a>
  </li>
</ul>

</div>

</div>
<div class="col-sm-6 col-md-10" style="border: solid 1px;border-color: red;padding: 10px;  ">
  <div class="slideshow-container" style="border: solid 1px;">

<div class="mySlides fade"  >
  <div class="numbertext">1 / 3</div>
  <img src="computer.jpg" style="width:100%;height: 400px;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="civil.jpg" style="width:100%;height: 400px;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="mechanical.jpg" style="width:100%;height: 400px;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "inline";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="row">
<div class="col-sm-8">
<div class="container-fluid" style=" border-radius: 15px; background-color: #bfbfbf; padding: 10px; margin-left: 5px; margin-top: 80px;">
<h3 style="text-align: center;">Computer Science</h3>
  <p>
Computer science is the study of processes that interact with data and that can be represented as data in the form of programs. It enables the use of algorithms to manipulate, store, and communicate digital information. A computer scientist studies the theory of computation and the practice of designing software systems.<br>

Its fields can be divided into theoretical and practical disciplines. Computational complexity theory is highly abstract, while computer graphics emphasizes real-world applications. Programming language theory considers approaches to the description of computational processes, while computer programming itself involves the use of programming languages and complex systems. Human–computer interaction considers the challenges in making computers useful, usable, and accessible.</p>
</div>
</div>
<div class="col-sm-3 " >
  <div class="container" style="border: solid 1px; padding: 0;margin-top:30px; margin-left: 60px; height: 100%;">
    
      <h5 style="background-color: #293d3d; width: 100%; padding: 5px; text-align: center; color: white;   "> Events </h5>
      <div class="microsoft container" style="background-color:#e1eaea; ">
    <ul class="marquee">
  <li>Genesy last date to register 5th afternoon register on <a href="www.genesys.git.edu">www.genesys.git.edu</a></li>
  <li>Congradulations Smart INdia Hacothon Winners</li>
  <li>Attendence compulsury on 5th march</li>
</ul>
</div>
<p class="vanity">
    <a href="https://twitter.com/jonathansampson">@Hanuman_University</a> <br> 
    <a href="https://twitter.com/appendTo">@Jai_Shri_Ram</a>
</p>
    
  </div>
</div>

</div>

<div class="row">
  <div class="col-sm-3 " ></div>
<div class="col-sm-8">
<div class="container-fluid" style=" border-radius: 15px; background-color: #bfbfbf; padding: 10px;  margin-top: 60px;">
<h3 style="background-color: #293d3d; width: 100%;padding: 4px; color:white;  text-align: center;border-radius: 15px;   "> Information Science </h3>
  <p>
Information science is a field primarily concerned with the analysis, collection, classification, manipulation, storage, retrieval, movement, dissemination, and protection of information. Practitioners within and outside the field study application and usage of knowledge in organizations along with the interaction between people, organizations, and any existing information systems with the aim of creating, replacing, improving, or understanding information systems. Historically, information science is associated with computer science, psychology, and technology.However, information science also incorporates aspects of diverse fields such as archival science, cognitive science, commerce, law, linguistics, museology, management, mathematics, philosophy, public policy, and social sciences.</div>
</div></div>

<div class="row">
<div class="col-sm-8">
<div class="container-fluid" style=" border-radius: 15px; background-color: #bfbfbf; padding: 10px; margin-left: 5px; margin-top: 60px;">
<h3 style="text-align: center;">Civil</h3>
  <p>
Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including public works such as roads, bridges, canals, dams, airports, sewerage systems, pipelines, structural components of buildings, and railways.[1][2] Civil engineering is traditionally broken into a number of sub-disciplines. It is considered the second-oldest engineering discipline after military engineering,[3] and it is defined to distinguish non-military engineering from military engineering.[4] Civil engineering takes place in the public sector from municipal through to national governments, and in the private sector from individual homeowners through to international companies.</div>
</div>
<div class="col-sm-3 " >
</div>
<div class="row">
  <div class="col-sm-3 " ></div>
<div class="col-sm-8">
<div class="container-fluid" style=" border-radius: 15px; background-color: #bfbfbf; padding: 10px;  margin-top: 60px;">
<h3 style="background-color: #293d3d; width: 100%;padding: 4px; color:white;  text-align: center;border-radius: 15px;   ">Electronics and Commnication</h3>
  <p>
Electronic engineering (also called electronics and communications engineering) is an electrical engineering discipline which utilizes nonlinear and active electrical components (such as semiconductor devices, especially transistors, diodes and integrated circuits) to design electronic circuits, devices, VLSI devices and their systems. The discipline typically also designs passive electrical components, usually based on printed circuit boards.<br>

Electronics is a subfield within the wider electrical engineering academic subject but denotes a broad engineering field that covers subfields such as analog electronics, digital electronics, consumer electronics, embedded systems and power electronics. Electronics engineering deals with implementation of applications, principles and algorithms developed within many related fields, for example solid-state physics, radio engineering, telecommunications, control systems, signal processing, systems engineering, computer engineering, instrumentation engineering, electric power control, robotics, and many others.</div>
</div></div>




</div>
<div>
    <label for="Faculty Login Counts :">Faculty Login Counts :</label><b><?php echo $f;?></b><br>
    <label for="Student Login Counts :">Student Login Counts :</label><b><?php echo $s;?></b>
    
    </div>

  </div>


</div>



  
  </div></div>



</body>
</html>