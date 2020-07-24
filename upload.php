<?php

session_start();
error_reporting(0);



include 'test4.php';

$message = '';

if(!empty($_POST['usn']) && !empty($_POST['attendence']) && !empty($_POST['test1'])&& !empty($_POST['test2'])&& !empty($_POST['test3'])&& !empty($_POST['average'])):
  
  // Enter the new user in the database
  $sql = "INSERT INTO studentdetails (USN,Attendence,test1,test2,test3,average) VALUES (:USN,:Attendence,:test1, :test2,:test3,:average) ";
//$sql ="UPDATE studentdetails SET USN=:USN,Attendence=:Attendence,test1=:test1,test2=:test2,test3=:test3,average=:average WHERE USN=:USN;"
  $stmt = $conn->prepare($sql);
 $stmt->bindParam(':USN', $_POST['usn']);
  $stmt->bindParam(':Attendence', $_POST['attendence']);
  $stmt->bindParam(':test1', $_POST['test1']);
  $stmt->bindParam(':test2', $_POST['test2']);
  $stmt->bindParam(':test3', $_POST['test3']);
  $stmt->bindParam(':average', $_POST['average']);
  if( $stmt->execute() ):
    $message = 'Successfully Updated!!!';
  else:
    $message = 'Sorry Unsuccessfull';
  endif;

endif;

?>