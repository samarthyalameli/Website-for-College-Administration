<?php

//session_start();
//error_reporting(0);



include 'test4.php';

$message = '';

if(!empty($_POST['usn']) && !empty($_POST['subject']) && !empty($_POST['attendence']) && !empty($_POST['test1'])&& !empty($_POST['test2'])&& !empty($_POST['test3'])&& !empty($_POST['Quiz1']) && !empty($_POST['Quiz2'])):
  
  $t1=$_POST['test1'];
  $t2=$_POST['test2'];
  $t3=$_POST['test3'];
  $q1=$_POST['Quiz1'];
  $q2=$_POST['Quiz2'];
  $at=$_POST['attendence'];
  $quz=round(($q1+$q2)/2);
  $att=round($at/10);
  $average=round(($t1+$t2+$t3)/3);
  $civ=round($att+$quz+$average);

  // Enter the new user in the database
  $sql = "UPDATE studentdetails  SET  Attendence = :Attendence, test1= :test1, test2=:test2, test3=:test3,average=:average, quiz1=:quiz1, quiz2=:quiz2, civ = :civ WHERE USN=:USN AND subject=:subject";

//$sql ="UPDATE studentdetails SET USN=:USN,Attendence=:Attendence,test1=:test1,test2=:test2,test3=:test3,average=:average WHERE USN=:USN;"
  $stmt = $conn->prepare($sql);
 $stmt->bindParam(':USN', $_POST['usn']);
 $stmt->bindParam(':subject', $_POST['subject']);
  $stmt->bindParam(':Attendence', $_POST['attendence']);
  $stmt->bindParam(':test1', $_POST['test1']);
  $stmt->bindParam(':test2', $_POST['test2']);
  $stmt->bindParam(':test3', $_POST['test3']);
  $stmt->bindParam(':average', $average, PDO::PARAM_INT);
  $stmt->bindParam(':quiz1', $_POST['Quiz1']);
  $stmt->bindParam(':quiz2', $_POST['Quiz2']);
  $stmt->bindParam(':civ', $civ, PDO::PARAM_INT);
  
  if( $stmt->execute() ):
  
    $message = 'Successfully Updated!!!';
  else:
    $message = 'Sorry Unsuccessfull';
  endif;

endif;


?>